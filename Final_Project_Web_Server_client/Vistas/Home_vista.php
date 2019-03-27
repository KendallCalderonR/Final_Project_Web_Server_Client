<?php 
session_start();
require_once('../Vistas/header.php');
if (isset($_SESSION["usuario"])) {

	

?>
<?php $titulo = "Pagina Principal"; ?>
<h1>Hola!</h1><br/>
<?php echo '<h2>'.$_SESSION["usuario"].'</h2>'; ?>
<br/>

<a href="../Modelos/logout_modelo.php" class="">Salir</a>


<?php 
}else{
	echo "<script type='text/javascript'>
		alert('Debe de ingresar al sistema para acceder a este sitio');
		window.location='../index.php';
		</script>";
}

require_once('../Vistas/Footer.php');
?>