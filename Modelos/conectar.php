<?php 

	class conectar{
			//Creacion de clase conexion
		public static function conexion(){

			 		try {

			 			$connect = new PDO("mysql:local=localhost;dbname=proyectoawcs","root","");
					    //para evitar problemas con caracteres.
	                    $connect->query("SET NAMES 'utf8'");
	                                      
					     return $connect;
			 			
			 		} catch (Exception $e) {

			 			print "¡Error!: " . $e->getMessage() . "<br/>";
			            die();  
			 			
			 		}
			 

			 }
	}//Cierre clase conexion

?>