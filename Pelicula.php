<?php
	class pelicula{
		private $PeliculaID = 0;
		private $Titulo = '';
		private $Genero = '';
		private $Duracion = 0;
		private $Productora = '';
		private $Director = '';
		private $FechaLanzamiento = '';
		private $Protagonistas = '';
		private $Idioma = '';
		private $Pais = '';
		private $Resumen = '';
		private $Foto = '';

		function __get($property){
			if(isset($this->$property)){
				return $this->$property;
			}
		}

		function __set($property, $value){
			if(isset($this->$property)){
				$this->$property = $value;
			}
		}

		function insert(){
			$sql = "INSERT INTO Pelicula (Titulo, Genero, Duracion, Productora,
				Director, FechaLanzamiento, Protagonistas, Idioma, Pais, Resumen, Foto)
				VALUES ('{$this->Titulo}', '{$this->Genero}', '{$this->Duracion}',
					'{$this->Productora}', '{$this->Director}', '{$this->FechaLanzamiento}',
					'{$this->Protagonistas}', '{$this->Idioma}', '{$this->Pais}', '{$this->Resumen}', '{$this->Foto}')";
			
			$con = connection::getConnection();
			mysqli_query($con, $sql);
			$this->PeliculaID = mysqli_insert_id($con);
		}

		function update(){
			$sql = "UPDATE Pelicula SET Titulo = '{$this->Titulo}', Genero = '{$this->Genero}',
			Duracion = '{$this->Duracion}', Productora = '{$this->Productora}', Director = '{$this->Director}',
			FechaLanzamiento = '{$this->FechaLanzamiento}', Protagonistas = '{$this->Protagonistas}', Idioma = '{$this->Idioma}',
			Pais = '{$this->Pais}', Resumen = '{$this->Resumen}' WHERE PeliculaID = '{$this->PeliculaID}'";
			
			$con = connection::getConnection();
			mysqli_query($con, $sql);

		}

		function delete($id){
			$sql = "DELETE FROM Pelicula WHERE PeliculaID = '{$id}'";
			$con = connection::getConnection();
			mysqli_query($con, $sql);
		}

		static function show(){
			$sql = "SELECT * FROM Pelicula";
			$con = connection::getConnection();
			$rs = mysqli_query($con, $sql);

			$data = array();

			if(mysqli_num_rows($rs) > 0){
				while($row = mysqli_fetch_assoc($rs)){
					$data[] = $row;
				}
			}

			return $data;
		}

		static function findByID($id){
			$sql = "SELECT * FROM Pelicula WHERE PeliculaID = {$id}";
			$con = connection::getConnection();
			$rs = mysqli_query($con, $sql);

			$data = array();

			if(mysqli_num_rows($rs) > 0){
				while($row = mysqli_fetch_object($rs)){
					$data[] = $row;
				}
			}

			return $data; 
		}
	}
?>