<?php 
//session_start();
$_SESSION['$titulo'] = 'Home';
require_once('../Vistas/header.php');
$titulo = "Pagina Principal";
if (isset($_SESSION["usuario"])) {

	

?>

<h1>Hola!</h1><br/>

<?php echo '<h2>'.$_SESSION["usuario"].'</h2>'; ?>
<br/>


<a href="../Vistas/libros_vista.php" class="">Libros</a>
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