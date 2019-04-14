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



public function PrestarLibro($id_prestamo,$fecha_prestamo,$fecha_entrega,$estado,$usuario_id_usuario,$libro_id_libro){

$conectar = parent::conexion();

$sql='insert into prestamos (id_prestamo,fecha_prestamo,fecha_entrega,estado,usuario_id_usuario,libro_id_libro) values (?,?,?,?,?,?);';
$sql = $conectar->prepare($sql);
$sql->bindValue(1,$id_prestamo);
$sql->bindValue(2,$fecha_prestamo);
$sql->bindValue(3,$fecha_entrega);
$sql->bindValue(4,$estado);
$sql->bindValue(5,$usuario_id_usuario);
$sql->bindValue(6,$libro_id_libro);
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


public function ActualizarExistencia($id_libro, $cantidad){

$conectar = parent::conexion();

$sql='update libro set "cantidad" = ? where id_libro = ?;';
$sql = $conectar->prepare($sql);
$sql->bindValue(1,$cantidad);
$sql->bindValue(2,$id_libro);
$sql->execute();
$resultado=$sql->fetchAll();

return $resultado;
	}
}




 ?>