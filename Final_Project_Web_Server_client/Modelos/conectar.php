<?php 

//session_start();

class conectar{

	protected $connect;
	protected $db;

	public static function conexion(){


		 		try {

		 			$this->$connect = new PDO("mysql:local=localhost;dbname=pruebas","root","");
				    
                    $this->$connect->query("SET NAMES 'utf8'");
                    print 'Conexion exitosa';
                    
				     return $connect;
		 			
		 		} catch (Exception $e) {

		 			print "¡Error!: " . $e->getMessage() . "<br/>";
		            die();  
		 			
		 		}
		 

		 }
}

?>