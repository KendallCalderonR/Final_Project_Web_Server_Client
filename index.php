<?php
//session_start();
require_once("Modelos/conectar.php");

require_once('Vistas/header.php');  

?>

<?php $_SESSION['$titulo'] = 'Ingreso al sistema'; ?>

<div class="col-xl-12">
	<form name="log" action="Modelos/login_modelo.php" method="post">
		
		<div class="form-group">
			<h1>Iniciar sesion</h1>
		</div>

		<div class="form-group">
			<label for="usuario"> Usuario:</label>
			<input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingrese su usuario">
		</div>

		<div class="form-group">
			<label for="contrasena"> Contraseña:</label>
			<input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Ingrese su contraseña">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-dark">Ingresar</button>
		</div>
	</form>
</div>

<?php
require_once('Vistas/Footer.php');
 
?>