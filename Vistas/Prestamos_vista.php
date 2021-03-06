<?php

require_once('../Vistas/header.php');
require_once('../Modelos/prestamo_modelo.php');
require_once('../Modelos/Usuarios_modelo.php');
require_once('../Controladores/DevolverPrestamo.php');


$GLOBALS['$titulo'] = 'Libros';

$objeto = new prestamo_modelo();

$usu = new Usuario();

$dato = $_SESSION["usuario"];

$usuarios = $usu->ObtenerUsuarioPorUsuario($dato);

foreach ($usuarios as $usuario) {
   $usuario["id_usuario"];
}

?>

<h1 class="h1_libros">Prestamos</h1>


<?php

	$usuarioActual = $usuario[0];

	$prestamos = $objeto->VerPrestamosActivos($usuarioActual);
	


 ?>
    <div class="container">
    <table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Libro</th>
		      <th scope="col">Fecha de solicitud</th>
		      <th scope="col">Fecha de prestamo</th>
		      <th scope="col">Estado</th>
		    </tr>
		  </thead>
<?php 
		
	foreach ($prestamos as $prestamo) {

	echo '  <tbody>
					<tr>
				      <th scope="row">'.$prestamo['titulo'].'</th>
				      <td>'.$prestamo['fecha_prestamo'].'</td>
				      <td>'.$prestamo['fecha_entrega'].'</td>
				      <td>'.$prestamo['estado'].'</td>
				      <td><input class="btn btn-dark" type="button" id="devuelvePrestamo" onclick="Devolver(' . $prestamo['id_prestamo'] . ', ' . $prestamo['id_libro'] . ')" value="Devolver Prestamo"></input></td>
		    		</tr>';		
	 }
	 	echo '</tbody>';
	 	echo '</table>';
	    echo '</div>';

?>
<form name="form_devolver" method="post">
   <input type="hidden" name="id_libro">
   <input type="hidden" name="id_prestamo">
   <input type="hidden" name="enviar" value="si">
</form>

	

<?php
echo '<script type="text/javascript" src="../Public/js/devolver.js"></script>';
require_once('../Vistas/footer.php');
?>