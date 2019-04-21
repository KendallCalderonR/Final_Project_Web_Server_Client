<?php 

require_once('../Modelos/prestamo_modelo.php');

$valorFiltro = $_POST['Select_filtro'];

$prestamo = new prestamo_modelo();

echo "<script type='text/javascript'>
		alert(\"filtro valor =".$valorFiltro.");
			</script>";





 ?>