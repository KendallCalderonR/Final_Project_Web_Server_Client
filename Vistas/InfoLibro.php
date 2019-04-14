<?php 

$variable_prestamo = $_POST['prestamo'] ;

require_once('../Vistas/header.php');
require_once('../Modelos/libro_modelo.php');
require_once('../Controladores/IngresarPrestamo.php');
require_once('../Modelos/Usuarios_modelo.php');
require_once('../Controladores/verificaPrestamo.php');
$GLOBALS['$titulo'] = 'Libros';

$objeto = new libro_modelo();
$usu = new Usuario();

$dato = $_SESSION["usuario"];

$usuarios = $usu->ObtenerUsuarioPorUsuario($dato);

 foreach ($usuarios as $usuario) {
 	$usuario["id_usuario"];
 }


?>

<h1>Información</h1>


<?php

 $libros = $objeto->CargarLibro($variable_prestamo);

 foreach ($libros as $libro) {

 	//Variables del libro para prestamo
$_SESSION["cantidad"]=$libro["cantidad"];
$_SESSION["nuevaCantidad"]= $_SESSION["cantidad"]-1;
$_SESSION["id_libro"] = $libro["id_libro"];
$_SESSION["fecha_prestamo"]= date("y-m-d");
$_SESSION["fecha_entrega"]= date("y-m-d",strtotime('+7 day',strtotime($_SESSION["fecha_prestamo"])));
$_SESSION["estado"] = 1;
$_SESSION["usuario_id"] = $usuario[0];

//-------------------------------------------------------------------------------------
 	
echo "<p class=\"id_libro\" >". $libro["id_libro"]."</p>";
echo '<br>';
echo "<p class=\"autor_libro\" >" .$libro["autor"]."</p>";
echo '<br>';
echo "<p class=\"titulo_libro\" >". $libro["titulo"]."</p>";
echo '<br>';
echo "<p class=\"cantidad_libro\" >". $libro["cantidad"]."</p>";
echo '<br>';
echo "<p class=\"resena_libro\" width=\"250\">".$libro["resena"]."</p>";
echo '<br>';
echo "<img src= ../Public/imagenes/". $libro["imagen"]." width=\"150\" height=\"170\" >";
echo '<br>';
echo "<input class=\"boton_libro\" name=\"prestamo\" type=\"button\" value=\"Prestamo\" onclick=\"CargarPrestamo();\" />";
echo "<span id='php_code'></span>";
 }
echo '<br>';


?>
<a href="../Vistas/libros_vista.php" class="">Libros</a>

<?php 
require_once('../Vistas/Footer.php');
 ?>