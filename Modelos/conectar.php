<?php 

//session_start();

class conectar{

	//protected $connect;
	//protected $db;

	public static function conexion(){


		 		try {

		 			$connect = new PDO("mysql:local=localhost;dbname=proyectoawcs","root","");
				    
                    $connect->query("SET NAMES 'utf8'");
                    
                    
				     return $connect;
		 			
		 		} catch (Exception $e) {

		 			print "¡Error!: " . $e->getMessage() . "<br/>";
		            die();  
		 			
		 		}
		 

		 }
}

?>