<?php 
session_start();
require_once('../Vistas/header.php');
require_once('../Modelos/libro_modelo.php');
$titulo = "Libros";

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
?>
	<tr class="registros">
		<td valign="top" align="center" width="150">
		<?php echo $libro["id_libro"];?>
		</td>
		<td valign="top" align="center" width="100">
		<?php echo $libro["autor"];?>
		</td>
		<td valign="top" align="center" width="100">
		<?php echo $libro["titulo"];?>
		</td>
		<td valign="top" align="center" width="100">
		<?php echo $libro["cantidad"];?>
		</td>
		<td valign="top" align="center" width="250">
		<?php echo $libro["resena"]; ?>
		</td>
		<td valign="top" align="center" width="100">
		<?php echo $libro["imagen"];?>
		</td>
	</tr>
<?php
}
?>
</table>


<?php 
require_once('../Vistas/Footer.php');
?>