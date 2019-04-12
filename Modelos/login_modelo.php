<?php 
session_start();

require_once("conectar.php");
//include('Modelos/conectar.php');

$conectar = new conectar();
$conn = $conectar->conexion();

$sql='select usuario from usuario where usuario=?';

$sql = $conn->prepare($sql);
$sql->bindValue(1,$_POST['usuario']);
$sql->execute();
$resultado=$sql->fetchAll();

if (is_array($resultado)==true and count($resultado)==0) {
	
	echo "<script type='text/javascript'>
	alert('El usuario ".$_POST["usuario"]." no existe en la base de datos');
	window.location= \"index.php\";
	</script>";
}else{

	$sql='select * from usuario where usuario=? and contrasena=?';

	$sql = $conn->prepare($sql);
	$sql->bindValue(1,$_POST['usuario']);
	$sql->bindValue(2,$_POST['contrasena']);
	$sql->execute();
	$resultado=$sql->fetchAll();
	$varId_Usuario = $resultado['id_usuario'];

	if (is_array($resultado)==true and count($resultado)==0) {
		
		echo "<script type='text/javascript'>
		alert('El usuario y la contraseña ingresados están incorrectos');
		window.location='index.php';
		</script>";
	} else{
		$_SESSION["usuario"] = $_POST["usuario"];
		$_SESSION["id_usuario"] = $varId_Usuario;
		header('Location:../Vistas/Home_vista.php');
	}
}

 ?>

