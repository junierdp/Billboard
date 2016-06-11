<?php
	include("Library/Library.php");

	$pelicula = new pelicula();
	$id = $pelicula->PeliculaID;

	if($_POST){
		$pelicula->PeliculaID = $_POST['iPeliculaID'];
		$pelicula->Titulo = $_POST['iTitulo'];
		$pelicula->Genero = $_POST['iGenero'];
		$pelicula->Duracion = $_POST['iDuracion'];
		$pelicula->Productora = $_POST['iProductora'];
		$pelicula->Director = $_POST['iDirector'];
		$pelicula->FechaLanzamiento = $_POST['iFecha'];
		$pelicula->Protagonistas = $_POST['iProtagonistas'];
		$pelicula->Idioma = $_POST['iIdioma'];
		$pelicula->Pais = $_POST['iPais'];
		$pelicula->Resumen = $_POST['iResumen'];

		$pelicula->update();
		header("Location: Index.php");
	}

	if(isset($_GET['update'])){
		$id = $_GET['update'] + 0;

		$data = pelicula::findByID($id);
		$data = $data['0'];

		$pelicula->PeliculaID = $data->PeliculaID;
		$pelicula->Titulo = $data->Titulo;
		$pelicula->Genero = $data->Genero;
		$pelicula->Duracion = $data->Duracion;
		$pelicula->Productora = $data->Productora;
		$pelicula->Director = $data->Director;
		$pelicula->FechaLanzamiento = $data->FechaLanzamiento;
		$pelicula->Protagonistas = $data->Protagonistas;
		$pelicula->Idioma = $data->Idioma;
		$pelicula->Pais = $data->Pais;
		$pelicula->Resumen = $data->Resumen;
		$pelicula->Foto = $data->Foto;
	}

?>

<html>
	<head>
		<title>Registrar Pelicula</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
			body{
				background-image: url("Images/background2.jpg");
			}
			.jbackground{
				background-image: url("Images/civilwar.jpg");
				background-size: 100%;
			}
			.hcolor{
				color: white;
			}
			.jumbotron{
				margin-top: 50px;
				padding-bottom: 30%;
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
				<h1 class="text-center"></h1>
			</div>
		</div>

		<div class="container">
			<form role="form" method="post" action="ModificarPelicula.php" enctype="multipart/form-data" autocomplete="off" required>
				<div class="col-md-4">
					<div class="form-group">
						<label for="iTitulo" class="control-label"><h4 class="hcolor">Titulo:</h4></label>
						<input type="text" class="form-control" name="iTitulo" id="iTitulo" value="<?php echo $pelicula->Titulo;?>">
					</div>
					<div class="form-group">
						<label for="iGenero" class="control-label"><h4 class="hcolor">Genero:</h4></label>
						<select class="form-control" id="iGenero" name="iGenero">
							<option value="<?php echo $pelicula->Genero;?>"><?php echo $pelicula->Genero;?></option>
							<option value="Accion">Acción</option>
							<option value="Animacion">Animación</option>
							<option value="Aventura">Aventura</option>
							<option value="Comedia">Comedia</option>
							<option value="Ficcion">Ficción</option>
							<option value="Romantica">Romantica</option>
							<option value="Infantil">Infantil</option>
							<option value="Drama">Drama</option>
							<option value="Musical">Musical</option>
							<option value="Terror">Terror</option>
							<option value="Fantacia">Fantacia</option>
						</select>
					</div>
					<div class="form-group">
						<label for="iDuracion" class="control-label"><h4 class="hcolor">Duración:</h4></label>
						<input type="text" class="form-control" name="iDuracion" id="iDuracion" value="<?php echo $pelicula->Duracion;?>">
					</div>
					<div class="form-group">
						<label for="iProductora" class="control-label"><h4 class="hcolor">Productora:</h4></label>
						<input type="text" class="form-control" name="iProductora" id="iProductora" value="<?php echo $pelicula->Productora;?>">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="iDirector" class="control-label"><h4 class="hcolor">Director:</h4></label>
						<input type="text" class="form-control" name="iDirector" id="iDirector" value="<?php echo $pelicula->Director;?>">
					</div>
					<div class="form-group">
						<label for="iFecha" class="control-label"><h4 class="hcolor">Fecha de Lanzamiento:</h4></label>
						<input type="date" class="form-control" name="iFecha" id="iFecha" value="<?php echo $pelicula->FechaLanzamiento;?>">
					</div>
					<div class="form-group">
						<label for="iProtagonistas" class="control-label"><h4 class="hcolor">Protagonistas:</h4></label>
						<textarea class="form-control" name="iProtagonistas" id="iProtagonistas" rows="3"><?php echo $pelicula->Protagonistas;?></textarea>
					</div>
					<div class="form-group">
						<input type="text" style="visibility:hidden" class="form-control" name="iPeliculaID" id="iPeliculaID" value="<?php echo $pelicula->PeliculaID;?>">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="iIdioma" class="control-label"><h4 class="hcolor">Idioma:</h4></label>
						<select class="form-control" id="iIdioma" name="iIdioma">
							<option value="<?php echo $pelicula->Idioma;?>"><?php echo $pelicula->Idioma;?></option>
							<option value="Español">Español</option>
							<option value="Ingles">Ingles</option>
							<option value="Frances">Frances</option>
						</select>
					</div>
					<div class="form-group">
						<label for="iPais" class="control-label"><h4 class="hcolor">Pais:</h4></label>
						<select class="form-control" id="iPais" name="iPais">
							<option value="<?php echo $pelicula->Pais;?>"><?php echo $pelicula->Pais;?></option>
							<option></option>
							<option value="Estados Unidos">Estados Unidos</option>
							<option value="República Dominicana">República Dominicana</option>
							<option value="España">España</option>
							<option value="Francia">Francia</option>
						</select>
					</div>
					<div class="form-group">
						<label for="iResumen" class="control-label"><h4 class="hcolor">Resumen:</h4></label>
						<textarea class="form-control" name="iResumen" id="iResumen" rows="3"><?php echo $pelicula->Resumen;?></textarea>
					</div>
					<div class="form-group">
						<button type="reset" class="btn btn-danger col-md-offset-6" onclick = "location='Index.php'">Cancelar</button>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>