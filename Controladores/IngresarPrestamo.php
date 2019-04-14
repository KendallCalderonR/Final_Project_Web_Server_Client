<?php 
require_once("../Modelos/conectar.php");
require_once('../Modelos/libro_modelo.php');

function InsertarPrestamo($id_prestamo, $fecha_prestamo, $fecha_entrega, $estado, $usuario_id, $id_libro){

	$objeto = new libro_modelo();
	$objeto->PrestarLibro($id_prestamo,$fecha_prestamo,$fecha_entrega,$estado,$usuario_id,$id_libro);
}

//$datos = $prestamo;
function EjecutaInsertar(){
	//jalamos las variables del libro que son SESSION	
	///meterlo asi

	$p_id_prestamo=100;
	$_SESSION["cantidad"];
	$_SESSION["nuevaCantidad"];
	$p_id_libro = $_SESSION["id_libro"];
	$p_fecha_prestamo = $_SESSION["fecha_prestamo"];
	$p_fecha_entrega = $_SESSION["fecha_entrega"];
	$p_estado = $_SESSION["estado"];
	$p_usuario_id = $_SESSION["usuario_id"];

	InsertarPrestamo($p_id_prestamo, $p_fecha_prestamo, $p_fecha_entrega, $p_estado,$p_usuario_id,$p_id_libro);

	echo "Prestamo Ingresado";
}

/*function EjecutaInsertar(){
	$mensaje=$_SESSION["cantidad"];
	echo "$mensaje";
}*/

 ?>


<script type="text/javascript">
	function CargarPrestamo(){
		//var mensaje = '<?php;?>';
		//alert(mensaje);
		var mensaje="<?php EjecutaInsertar();?>";// ASI SE LLAMA A LA FUNCION
		alert(mensaje);
	}
</script>



