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



 ?>