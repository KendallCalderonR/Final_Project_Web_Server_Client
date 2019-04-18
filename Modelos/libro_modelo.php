<?php 
require_once("conectar.php");

class libro_modelo extends conectar{

public function VerLibros(){

$conectar = parent::conexion();

$sql='select * from libro';
$sql = $conectar->prepare($sql);
$sql->execute();
$resultado=$sql->fetchAll();

return $resultado;
	}


public function CargarLibro($id_libro){

$conectar = parent::conexion();

$sql='select * from libro where id_libro = ?;';
$sql = $conectar->prepare($sql);
$sql->bindValue(1,$id_libro);
$sql->execute();
$resultado=$sql->fetchAll();

return $resultado;
	}


public function RestaCantidad($id_libro){

$conectar = parent::conexion();

$sql='update libro SET cantidad = cantidad-1 WHERE id_libro = ?;';
$sql = $conectar->prepare($sql);
$sql->bindValue(1,$_POST['id_libro']);
$sql->execute();

}

public function PrestarLibro($fecha_prestamo,$fecha_entrega,$estado,$id_usuario,$id_libro){

$conectar = parent::conexion();

$sql='insert into prestamos (id_prestamo,fecha_prestamo,fecha_entrega,estado,usuario_id_usuario,libro_id_libro) values (null,?,?,?,?,?)';
$sql = $conectar->prepare($sql);

$sql->bindValue(1,$_POST['fecha_prestamo']);
$sql->bindValue(2,$_POST['fecha_entrega']);
$sql->bindValue(3,$_POST['estado']);
$sql->bindValue(4,$_POST['id_usuario']);
$sql->bindValue(5,$_POST['id_libro']);
$sql->execute();

	}
}


 ?>