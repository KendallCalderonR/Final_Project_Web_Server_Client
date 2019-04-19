<?php 

require_once("conectar.php");

class prestamo_modelo extends conectar{

public function VerPrestamosActivos($usuario_id_usuario){

$conectar = parent::conexion();

$sql=' select libro.titulo, prestamos.fecha_prestamo, prestamos.fecha_entrega, prestamos.estado
FROM prestamos
INNER JOIN libro
ON prestamos.libro_id_libro = libro.id_libro where prestamos.usuario_id_usuario=1 and prestamos.estado in (1,2);';
$sql = $conectar->prepare($sql);
$sql -> bindValue(1,$usuario_id_usuario);
$sql->execute();
$resultado=$sql->fetchAll();

return $resultado;
}


public function DevolverLibro($id_prestamo){

$conectar = parent::conexion();

$sql='update prestamo SET estado = 3 WHERE id_prestamo = ?;';
$sql = $conectar->prepare($sql);
$sql->bindValue(1,$_POST['id_prestamo']);
$sql->execute();
}

}

 ?>