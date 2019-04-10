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
}


public function PrestarLibro($fecha_prestamo,$fecha_entrega,$estado,$usuario_id_usuario,$libro_id_libro){

$conectar = parent::conexion();

$sql='insert into prestamos (fecha_prestamo,fecha_entrega,estado,usuario_id_usuario,libro_id_libro) 
							 values ?,?,?,?,?;';
$sql = $conectar->prepare($sql);
$sql->bindValue(1,$fecha_prestamo);
$sql->bindValue(2,$fecha_entrega);
$sql->bindValue(3,$estado);
$sql->bindValue(4,$usuario_id_usuario);
$sql->bindValue(5,$libro_id_libro);
$sql->execute();
$resultado=$sql->fetchAll();

return $resultado;
	}
}




 ?>