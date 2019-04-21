<?php

require_once('../Vistas/header.php');
require_once('../Modelos/prestamo_modelo.php');
require_once('../Controladores/verificaPrestamo.php');
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

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="card text-center " style="width: 15rem;">Libro</div>
    <div class="card text-center " style="width: 15rem;">Fecha de Solicitud</div>
    <div class="card text-center " style="width: 15rem;">Fecha de Entrega</div>
    <div class="card text-center " style="width: 15rem;">Estado</div>
    ';
//<div class="col-xs-12 col-sm-6 col-xl-4">
foreach ($prestamos as $prestamos) {

   /*echo '
      <form id="Prestamos_vista" method="post">  
			<div class="card text-center " style="width: 15rem;">
			' . $prestamos['titulo'] . '</div>
			<div class="card text-center " style="width: 15rem;">
			' . $prestamos['fecha_prestamo'] . '</div>
			<div class="card text-center " style="width: 15rem;">
			' . $prestamos['fecha_entrega'] . '</div>
			<div class="card text-center " style="width: 15rem;">
         ' . $prestamos['estado'] . '</div>
         <button type="hidden" name="enviar" value="si">
         <input type="submit" id="devuelvePrestamo" value="Devolver Prestamo"></input>
         </form>
         ';*/
   echo ' 
			<div class="card text-center " style="width: 15rem;">
			' . $prestamos['titulo'] . '</div>
			<div class="card text-center " style="width: 15rem;">
			' . $prestamos['fecha_prestamo'] . '</div>
			<div class="card text-center " style="width: 15rem;">
			' . $prestamos['id_prestamo'] . '</div>
			<div class="card text-center " style="width: 15rem;">
         ' . $prestamos['estado'] . '</div>
         <button id="devuelvePrestamo"
         onclick="Devolver(' . $prestamos['id_prestamo'] . ', ' . $prestamos['id_libro'] . ')">
         Devolver Prestamo</button>
';

   echo "<br><br>";
}

echo '</div>';
echo '</div>';

?>

<form name="form_devolver" method="post">
   <input type="hidden" name="id_libro">
   <input type="hidden" name="id_prestamo">
   <input type="hidden" name="enviar" value="si">
</form>

<!--<a href="../Vistas/Home_vista.php" class="">Menu Principal</a>-->

<?php
echo '<script type="text/javascript" src="../Public/js/devolver.js"></script>';
require_once('../Vistas/footer.php');
?>