<?php 
	session_start() ;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<link href="../Public/css/mdb.min.css" rel="stylesheet">
	<link href="../Public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../Public/css/MyStyles.css">

	<link href="Public/css/mdb.min.css" rel="stylesheet">
	<link href="Public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Public/css/MyStyles.css">
	
	<title><?php echo $_SESSION['titulo']='Ingreso al sistema';?></title>
</head>

<body>
	
	<header>

			  <nav class="navbar navbar-expand-lg navbar-dark black">
			    <div class="container">
			      <a class="navbar-brand" href="../Vistas/Home_vista.php"><strong>AWSCO</strong></a>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			      </button>
			      <div class="collapse navbar-collapse" id="navbarSupportedContent">
			        <ul class="navbar-nav mr-auto">
			          <li class="nav-item active">
			            <a class="nav-link" href="../Vistas/Home_vista.php">Inicio <span class="sr-only">(current)</span></a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="../Vistas/libros_vista.php">Libros</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="../Vistas/Prestamos_vista.php">Prestamos</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="../Modelos/logout_modelo.php">Salir</a>
			          </li>
			        </ul>
			      </div>
			    </div>
			  </nav>

			  <div class="view intro-2">
			    <div class="full-bg-img">
			      <div class="mask rgba-black-strong flex-center">
			        <div class="container">
			          <div class="white-text text-center wow fadeInUp">
			            <h2>Bienvenido a AWSCO</h2>
			            <h5>Inicia sesion y comienza a disfrutar nuestros beneficios</h5>
			            <br>
			            
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>

	</header>