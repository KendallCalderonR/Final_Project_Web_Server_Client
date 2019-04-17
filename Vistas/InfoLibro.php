<?php 

$variable_prestamo = $_GET['id_libro'];


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

$cantidad=$libro["cantidad"];
$nuevaCantidad= $cantidad-1;
$id_libro = $libro["id_libro"];
$fecha_prestamo= date("y-m-d");
$fecha_entrega= date("y-m-d",strtotime('+7 day',strtotime($fecha_prestamo)));
$estado = 1;
$usuario_id = $usuario[0];

//-------------------------------------------------------------------------------------

?>
<form id="InfoLibro" method="post">
	
	<p class="id_libro" id="numerolibro" name="numerolibro"><?php echo $libro["id_libro"]?></p><br>
	<p class="autor_libro" id="autor_libro" name="autor_libro" ><?php echo $libro["autor"] ?></p><br>
	<p class="titulo_libro" id="titulo_libro" name="titulo_libro" ><?php echo $libro["titulo"] ?></p><br>
	<p class="cantidad_libro" id="cantidad_libro" name="cantidad_libro" ><?php echo $libro["cantidad"] ?></p><br>
	<p class="resena_libro" id="resena_libro" name="resena_libro" width="250"><?php echo $libro["resena"] ?></p><br>
	<img src= <?php echo"../Public/imagenes/".$libro["imagen"]." width=\"150\" height=\"170\" ";?> ><br>
	<input type="hidden" name="id_libro" id="id_libro" value=<?php echo "\"".$id_libro."\""; ?>>
	<input type="hidden" name="fecha_prestamo" id="fecha_prestamo" value=<?php echo "\"".$fecha_prestamo."\""; ?>>
	<input type="hidden" name="fecha_entrega" id="fecha_entrega" value=<?php echo "\"".$fecha_entrega."\""; ?>>
	<input type="hidden" name="estado" id="estado" value=<?php echo "\"".$estado."\""; ?>>
	<input type="hidden" name="id_usuario" id="id_usuario" value=<?php echo "\"".$usuario_id."\""; ?>>
	<input type="hidden" name="nuevaCantidad" id="nuevaCantidad" value=<?php echo "\"".$nuevaCantidad."\""; ?>>
	<input type="hidden" name="enviar" value="si">
    <input class="boton_libro" name="submit" type="submit" value="Prestamo"/>
</form>

<?php } ?>

<a href="../Vistas/libros_vista.php" class="">Libros</a>




<?php 
require_once('../Vistas/Footer.php');
 ?>