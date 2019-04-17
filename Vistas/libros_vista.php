<?php 

require_once('../Vistas/header.php');
require_once('../Modelos/libro_modelo.php');
require_once('../Controladores/verificaPrestamo.php');
$GLOBALS['$titulo'] = 'Libros';

$objeto = new libro_modelo();

?>

<h3>Libros</h3>


<?php

	$libros = $objeto->VerLibros();

	 foreach ($libros as $libro) {

	echo '<div class= "libro_articulo">';
	echo '<h4>'.$libro["titulo"].'</h4><br>';
	echo '<img src="../Public/imagenes/'.$libro['imagen'].'" width="150" height="170"><br>';
	echo '<a href="InfoLibro.php?id_libro='.$libro["id_libro"].' "title="Información"><img src="../Public/imagenes/info.png" width="30px" border="0"></a>';
	echo '</div>';

 }
 	
?>

<a href="../Vistas/Home_vista.php" class="">Menu Principal</a>
<?php 
require_once('../Vistas/Footer.php');
?>