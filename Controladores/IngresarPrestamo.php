<?php 

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

      $libro->RestaCantidad($id_libro);
        
        echo "<script type='text/javascript'>
		alert('Prestamo exitoso');
			</script>";
      
    }//cierre del if de validacion de envio de formulario

 ?>



