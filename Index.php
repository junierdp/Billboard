<?php
	include("Library/Library.php");

	$pelicula = new pelicula();

	if(isset($_GET['delete'])){
		$id = $_GET['delete'] + 0;

		$pelicula->delete($id);

		header("Location: Index.php");
	}
?>
<html>
	<head>
		<title>Billboard</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
			body{
				background-image: url("Images/background2.jpg");
			}
			.jbackground{
				background-image: url("Images/background3.jpg");
				background-size: 100%;
			}
			.hcolor{
				color: white;
			}
			.jumbotron{
				margin-top: 50px;
			}
			.navbar{
				background-color: #0A465E;
			}
			.colorbrand{
				color: white;
				font-size: 30px;
			}
			.colorli{
				color: white;
				font-size: 15px;
			}
			.ssize{
				font-size: 16px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="Index.php"><span class="colorbrand">Billboard</span></a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="RegistrarPelicula.php"><span class="colorli">Registrar Pelicula</span></a></li>
					<li><a href="Index.php"><span class="colorli">Ver Cartelera</span></a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron jbackground">
				<h1 class="text-center">Billboard</h1>
			</div>
		</div>

		<?php

			$pelicula = pelicula::show();

			$cartelera = new cuadrilla($pelicula);
			echo $cartelera;
		?>
	</body>
</html>