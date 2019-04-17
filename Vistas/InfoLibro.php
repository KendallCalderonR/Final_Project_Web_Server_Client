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
	<div class="container">
		<div class="row">
			<div id="Información" class="col-xs-12 col-sm-12 col-xl-6">
				<h1>Información del libro</h1>
				<div class="form-group row">
					<label for="id_libro" class="col-sm-3 col-form-label">ID Libro:</label>
					<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="id_libro" value="<?php echo $libro["id_libro"]?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="autor" class="col-sm-3 col-form-label">Autor:</label>
					<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="autor" value="<?php echo $libro["autor"]?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="titulo" class="col-sm-3 col-form-label">Título:</label>
					<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="titulo" value="<?php echo $libro["titulo"]?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="cantidad" class="col-sm-3 col-form-label">Cantidad disponible:</label>
					<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="cantidad" value="<?php echo $libro["cantidad"]?>">
					</div>
				</div>

				<div class="form-group">
					<label for="resena" class="col-sm-3 col-form-label">Reseña:</label>
				    <textarea class="form-control" id="resena" readonly="true" rows="10"><?php echo $libro["resena"]?></textarea>
					
				</div>

				<div class=" form-group  ">
					<div class="btn-block">
				    	<input class="btn btn-dark btn-lg btn-block"name="submit" type="submit" value="Prestamo"/>
				    </div>
				    <div class="btn-block">
				    	<a href="../Vistas/libros_vista.php" role="button" aria-pressed="true" class="btn btn-dark btn-lg btn-block">Volver</a>
				    </div>
				</div>

				<div class="form-group row">
					<div class="col-sm-12">
						<textarea class="form-control" id="Alerta" readonly="true" rows="2">Recuerde que una vez que oprima el boton de 'PRESTAMO' se realizara el prestamo del libro</textarea>


					</div>
				</div>

			</div>
		
		    <div id="Imagen" class="col-xs-12 col-sm-12 col-xl-6">
				<img src= <?php echo"../Public/imagenes/".$libro["imagen"]." width=\"100%\" height=\"100%\" ";?> >
	        </div>
	    </div>
	</div>

	<input type="hidden" name="id_libro" id="id_libro" value=<?php echo "\"".$id_libro."\""; ?>>
	<input type="hidden" name="fecha_prestamo" id="fecha_prestamo" value=<?php echo "\"".$fecha_prestamo."\""; ?>>
	<input type="hidden" name="fecha_entrega" id="fecha_entrega" value=<?php echo "\"".$fecha_entrega."\""; ?>>
	<input type="hidden" name="estado" id="estado" value=<?php echo "\"".$estado."\""; ?>>
	<input type="hidden" name="id_usuario" id="id_usuario" value=<?php echo "\"".$usuario_id."\""; ?>>
	<input type="hidden" name="nuevaCantidad" id="nuevaCantidad" value=<?php echo "\"".$nuevaCantidad."\""; ?>>
	<input type="hidden" name="enviar" value="si">
    
</form>

<?php } ?>

<?php 
require_once('../Vistas/Footer.php');
 ?>