<?php
/* 
require_once("../Modelos/conectar.php");
require_once('../Modelos/libro_modelo.php');
//$id_prestamo,
function InsertarPrestamo( $fecha_prestamo, $fecha_entrega, $estado, $usuario_id, $id_libro){
//$id_prestamo,
	$objeto = new libro_modelo();
	$objeto->PrestarLibro($fecha_prestamo,$fecha_entrega,$estado,$usuario_id,$id_libro);
}

//$datos = $prestamo;
/*function EjecutaInsertar(){
	//jalamos las variables del libro que son SESSION	
	///meterlo asi

	//$p_id_prestamo=100;
	$_SESSION["cantidad"];
	$_SESSION["nuevaCantidad"];
	$p_id_libro = $_SESSION["id_libro"];
	$p_fecha_prestamo = $_SESSION["fecha_prestamo"];
	$p_fecha_entrega = $_SESSION["fecha_entrega"];
	$p_estado = $_SESSION["estado"];
	$p_usuario_id = $_SESSION["usuario_id"];
	//$p_id_prestamo, 
	InsertarPrestamo($p_fecha_prestamo, $p_fecha_entrega, $p_estado,$p_usuario_id,$p_id_libro);

	echo "Prestamo Ingresado";
}
*/
/*
function EjecutaInsertar(){

	$_SESSION["cantidad"];
	$_SESSION["nuevaCantidad"];
	$p_id_libro = $_SESSION["id_libro"];
	$p_fecha_prestamo = $_SESSION["fecha_prestamo"];
	$p_fecha_entrega = $_SESSION["fecha_entrega"];
	$p_estado = $_SESSION["estado"];
	$p_usuario_id = $_SESSION["usuario_id"];
	//$p_id_prestamo, 
	InsertarPrestamo($p_fecha_prestamo, $p_fecha_entrega, $p_estado,$p_usuario_id,$p_id_libro);

	echo "Prestamo Ingresado";
}

/*function LimpiarVariables(){

		$_SESSION["cantidad"] = "";
		$_SESSION["nuevaCantidad"]= "";
		$_SESSION["id_libro"]= "";
		$_SESSION["fecha_prestamo"]= "";
		$_SESSION["fecha_entrega"]= "";
		$_SESSION["estado"]= "";
	}*/

 ?>

<?php 
/*<script type="text/javascript">
	function CargarPrestamo(){
		//var mensaje = '<?php;?>';
		//alert(mensaje);
		//var mensaje="<?php// EjecutaInsertar();?>";// ASI SE LLAMA A LA FUNCION
		//alert(mensaje);

		<?php EjecutaInsertar(); ?>
		alert("Prestamo procesado");
		//<?php //LimpiarVariables(); ?>

	}
</script>*/
 ?>



<?php 
//Nuevo php 14/04/19 17:53pm



require_once('../Modelos/libro_modelo.php');
$libro = new libro_modelo();

   /*valido que se haya enviado el formulario para crear el objeto y llamar el metodo PrestarLibro() para insertar el registro*/
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
 
        /*declaro las variable*/    
        $fecha_prestamo=$_POST["fecha_prestamo"];
        $fecha_entrega=$_POST["fecha_entrega"];
        $estado=$_POST["estado"];
        $id_usuario=$_POST["id_usuario"];
        $id_libro=$_POST["id_libro"];

        
      $libro->PrestarLibro($fecha_prestamo,$fecha_entrega,$estado,$id_usuario,$id_libro);
        
        echo "<script type='text/javascript'>
		alert('Prestamo exitoso');
			</script>";
      
    }//cierre del if de validacion de envio de formulario


    


 ?>



