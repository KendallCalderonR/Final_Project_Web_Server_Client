<?php 
//session_start();

require_once("conectar.php");
//include('Modelos/conectar.php');

class Usuario extends conectar{

	public function AgregarUsuario($nombre,$apellido,$cedula,$email,$usuario,$contrasena){

	$conectar = parent::conexion();
	

	$sql='insert into usuario values (null,?,?,?,?,?,?)';
	$sql = $conectar->prepare($sql);
	$sql->bindValue(1,$_POST['nombre']);
	$sql->bindValue(2,$_POST['apellido']);
	$sql->bindValue(3,$_POST['cedula']);
	$sql->bindValue(4,$_POST['email']);
	$sql->bindValue(5,$_POST['usuario']);
	$sql->bindValue(6,$_POST['contrasena']);
	$sql->execute();

}

	public function EditarUsuario($nombre,$apellido,$cedula,$email,$usuario,$contrasena,$id_usuario){

	$conectar = parent::conexion();
	

	$sql='update usuario set nombre=?,
							 apellido=?,
							 cedula=?,
							 email=?,
							 usuario=?,
							 contrasena=?
						where id_usuario =?';
	$sql = $conectar->prepare($sql);
	$sql->bindValue(1,$_POST['nombre']);
	$sql->bindValue(2,$_POST['apellido']);
	$sql->bindValue(3,$_POST['cedula']);
	$sql->bindValue(4,$_POST['email']);
	$sql->bindValue(5,$_POST['usuario']);
	$sql->bindValue(6,$_POST['contrasena']);
	$sql->bindValue(7,$_POST['id_usuario']);
	$sql->execute();

}

	public function ObtenerUsuarioPorUsuario($usuario){

	$conectar = parent::conexion();
	$sql='select * from usuario where usuario = ?';
	$sql = $conectar->prepare($sql);
	$sql->bindValue(1,$usuario);
	$sql->execute();
	$resultado=$sql->fetchAll();

	return $resultado;
	}


}
 ?>