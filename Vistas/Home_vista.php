<?php 

$_SESSION['$titulo'] = 'Home';
require_once('../Vistas/header.php');
$titulo = "Pagina Principal";
if (isset($_SESSION["usuario"])) {

require_once('../Modelos/Usuarios_modelo.php');	
$objeto = new Usuario();

$usuariodatos = $objeto->ObtenerUsuarioPorUsuario($_SESSION["usuario"]);

foreach ($usuariodatos as $usuario) {
	$nombreCompleto = $usuario['nombre']." ".$usuario['apellido'] ;
}


?>

<div class="container">
	
	<div class="jumbotron">
  	<h1 class="display-4">¡Hola!,<?php echo $nombreCompleto; ?></h1>
  	<p class="lead">Nos alegra tenerte de regreso, muchas gracias por utilizar nuestros servicios</p>
  	<hr class="my-4">
  	<p>No esperes mas y comienza a leer nuestros libros.</p>
    <a class="btn btn-dark btn-lg" href="../Vistas/libros_vista.php" role="button">Libros</a>
</div>

<?php 
}else{
	echo "<script type='text/javascript'>
		alert('Debe de ingresar al sistema para acceder a este sitio');
		window.location='../index.php';
		</script>";
}

require_once('../Vistas/Footer.php');
?>