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


	<!--<div class="container">
		<header class=" page-footer font-small unique-color-dark pt-4">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
					  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="Public/imagenes/libros1.jpg" alt="Libros-1">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="Public/imagenes/libros2.jpg" alt="Libros-2">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="Public/imagenes/libros3.jpg" alt="Libros-3">
						    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
			</div>
		
			<div id="botones" class="col-lg-12">
			<button type="button" class="btn btn-dark col-2" onclick="window.location='Vistas/Home_vista.php'">Inicio</button>
			<button type="button" class="btn btn-dark col-2">Libros</button>
			<button type="button" class="btn btn-dark col-2">Login</button>
			<button type="button" class="btn btn-dark col-2">Informacion</button>
			</div>
		</header>-->	