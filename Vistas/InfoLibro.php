<?php 

$variable_prestamo = $_POST['prestamo'] ;

require_once('../Vistas/header.php');
require_once('../Modelos/libro_modelo.php');
require_once('../Controladores/verificaPrestamo.php');
$GLOBALS['$titulo'] = 'Libros';

$objeto = new libro_modelo();
?>

<h1>Información</h1>


<?php

	$libros = $objeto->CargarLibro($variable_prestamo);

 foreach ($libros as $libro) {

 	//Variables del libro para prestamo
echo 	$cantidad=$libro["cantidad"];echo '<br>';
echo	$nuevaCantidad=$cantidad-1;echo '<br>';
echo    $id_libro = $libro["id_libro"];echo '<br>';
echo 	$fecha_prestamo= date("y-m-d");echo '<br>';
echo 	$fecha_entrega= date("y-m-d",strtotime('+7 day',strtotime($fecha_prestamo)));echo '<br>';
echo 	$estado = 1;echo '<br>';
echo 	$usuario_id = $_SESSION["id_usuario"];echo '<br>';
 	
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
echo "<input class=\"boton_libro\" name=\"prestamo\" type=\"button\" value=\"".$libro["id_libro"]."\"/>";
 }
echo '<br>';




?>
<a href="../Vistas/libros_vista.php" class="">Libros</a>

<?php 
require_once('../Vistas/Footer.php');
 ?>