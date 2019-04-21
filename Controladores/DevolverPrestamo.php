<?php

require_once('../Modelos/libro_modelo.php');
$libro = new libro_modelo();

/*valido que se haya enviado el formulario para crear el objeto y llamar el metodo DevolverLibro() para actualizar el registro*/
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {

   /*declaro las variable*/
   $id_prestamo = $_POST["id_prestamo"];
   $id_libro = $_POST["id_libro"];


   $libro->DevolverLibro($id_prestamo, $id_libro);

   echo "<script type='text/javascript'>
		alert('Libro devuelto exitosamente');
			</script>";
} //cierre del if de validacion de envio de formulario

