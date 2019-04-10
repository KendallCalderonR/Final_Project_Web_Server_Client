<?php 
session_start();
require_once('../Vistas/header.php');
require_once('../Modelos/libro_modelo.php');
require_once('../Controladores/verificaPrestamo.php');
$GLOBALS['$titulo'] = 'Libros';

$objeto = new libro_modelo();

?>

<table width="400" align="center">

<tr>
<td valign="top" align="center" width="400" colspan="5">
<h3>Libros</h3>
</td>
</tr>

<tr class="encabezado">
	<td valign="top" align="center" width="150"> ID</td>
	<td valign="top" align="center" width="100">Autor</td>
	<td valign="top" align="center" width="100">Título</td>
	<td valign="top" align="center" width="25">Cantidad</td>
	<td valign="top" align="center" width="25">Reseña</td>
	<td valign="top" align="center" width="25">Imagen</td>
</tr>

<?php

	$libros = $objeto->VerLibros();

 foreach ($libros as $libro) {
 	$idLibro;
?>
	<tr class="registros">
		<td valign="top" align="center" width="150">
			<?php echo "<p class=\"id_libro\" >". $libro["id_libro"]."</p>";?>
		</td>
		<td valign="top" align="center" width="100">
			<?php echo "<p class=\"autor_libro\" >" .$libro["autor"]."</p>";?>
		</td>
		<td valign="top" align="center" width="100">
			<?php echo "<p class=\"titulo_libro\" >". $libro["titulo"]."</p>";?>
		</td>
		<td valign="top" align="center" width="100">
			<?php echo "<p class=\"cantidad_libro\" >". $libro["cantidad"]."</p>";?>
		</td>
		<td valign="top" align="center" width="250">
			<?php echo "<p class=\"resena_libro\" width=\"250\">".$libro["resena"]."</p>"; ?>
		</td>
		<td valign="top" align="center" width="100">
			<?php echo "<img src= ../Public/imagenes/". $libro["imagen"]." width=\"150\" height=\"170\" >";?>
		</td>
		<td>
			<?php echo "<input class=\"boton_libro\" id=\"".$libro["id_libro"]."\" type=\"button\" name\"prestamo\" value=\"Prestamo\" onclick = \"verificarPrestamo();\"/>";  ?>
		</td>
	</tr>
<?php
 $idLibro = $idLibro+1; }
?>
</table>


<?php 
require_once('../Vistas/Footer.php');
?>