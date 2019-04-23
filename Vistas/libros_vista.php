<?php 

require_once('../Vistas/header.php');
require_once('../Modelos/libro_modelo.php');
require_once('../Controladores/verificaPrestamo.php');
$GLOBALS['$titulo'] = 'Libros';

$objeto = new libro_modelo();

?>
<h1 class="h1_libros">Libros</h1>
<?php

	$libros = $objeto->VerLibros();

    echo '<div class="container">';
    echo '<div class="row row justify-content-md-center">';
        //<div class="col-xs-12 col-sm-6 col-xl-4">
	 foreach ($libros as $libro) {

	echo '  
			<div class="card text-center " style="width: 15rem;">
  			<img src="../Public/imagenes/'.$libro['imagen'].'" width="235px" height="365px" class="card-img-top" alt="...">
  			<div class="card-body">
    		<h5 class="card-title">'.$libro["titulo"].'</h5>
   		    <a href="InfoLibro.php?id_libro='.$libro["id_libro"].'" class="btn btn-dark">Información</a>
  			</div>
			</div>';

 }

    echo '</div>';
    echo '</div>';
	
?>

<?php 
require_once('../Vistas/Footer_aftersesion.php');
?>