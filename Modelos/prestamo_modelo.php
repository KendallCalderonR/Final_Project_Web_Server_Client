<?php 

require_once("conectar.php");

class prestamo_modelo extends conectar{

public function VerPrestamosActivos($usuario_id_usuario){

$conectar = parent::conexion();

$sql= ' select libro.id_libro, libro.titulo, prestamos.id_prestamo , prestamos.fecha_prestamo, prestamos.fecha_entrega, prestamos.estado
FROM prestamos
INNER JOIN libro
ON prestamos.libro_id_libro = libro.id_libro where prestamos.usuario_id_usuario=? and prestamos.estado =1 or prestamos.estado = 2;';
$sql = $conectar->prepare($sql);
$sql -> bindValue(1,$usuario_id_usuario);
$sql->execute();
$resultado=$sql->fetchAll();

return $resultado;
}


}
