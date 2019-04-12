	<?php  
	//require_once("conectar.php");

		 echo "<script type='text/javascript'>
		 	function verificarPrestamo(){
		 		var confirmacion = confirm('Deseas solicitar')
		 		if(confirmacion){
		 			var variable = document.getElementsByTagName('input')[0].id;
		 			alert(variable);

		 		} else {
		 			alert('Has pulsado cancelar');
		 		}
		 	
		 	}
			</script>";



function ventanaLibro(){

	echo "<script type=\"text/javascript\">
			window.open(\"../Vistas/ejemplo.php\");
		  </script>";
}
			



	?>