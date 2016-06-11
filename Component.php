<?php
	class cuadrilla{
		private $arr_data = null;
		private $fields = array();

		function __construct($arr_data){
			$this->arr_data = $arr_data;

			if(count($arr_data) > 0){
				$row = $arr_data[0];
				foreach ($row as $field => $value) {
					$this->fields[] = $field;
				}
			}
		}

		function __toString(){
			$html = "<div class=\"container\">";
			foreach ($this->arr_data as $row) {
				$html .= "<div class=\"col-md-6\">";
				$html .= "<img class=\"img-responsive img-thumbnail\" src=\"";
				$foto = $row['Foto'];
				$html .= "{$foto}\">";
				$titulo = $row['Titulo'];
				$html .= "<h4 class=\"hcolor text-center\">{$titulo}</h4>";
				$protagonistas = $row['Protagonistas'];
				$html .= "<p class=\"hcolor\"><span class=\"ssize\">Protagonistas: </span>{$protagonistas}.</p>";
				$resumen = $row['Resumen'];
				$html .= "<p class=\"hcolor\"><span class=\"ssize\">Resumen: </span>{$resumen}</p>";
				$fecha = $row['FechaLanzamiento'];
				$idioma = $row['Idioma'];
				$genero = $row['Genero'];
				$pais = $row['Pais'];
				$duracion = $row['Duracion'];
				$productora = $row['Productora'];
				$director = $row['Director'];
				$html .= "<p class=\"hcolor\"><span class=\"ssize\">Fecha de lanzamiento: </span>{$fecha}. 
				<span class=\"ssize\">Idioma: </span>{$idioma}. ";
				$html .= "<span class=\"ssize\">Pais: </span>{$pais}. </p>";
				$html .= "<p class=\"hcolor\"><span class=\"ssize\">Genero: </span>{$genero}. 
				<span class=\"ssize\">Duración: </span>{$duracion}.</p>";
				$html .= "<p class=\"hcolor\"><span class=\"ssize\">Director: </span>{$director}. 
				<span class=\"ssize\">Productora: </span>{$productora}.</p>";
				$html .= "<a href=\"ModificarPelicula.php?update={$row['PeliculaID']}\"><span class=\"label label-default\">Modificar</span></a>    ";
				$html .= "<a onclick=\"return confirm('Esta seguro que desea eliminar esta pelicula?');\" href=\"Index.php?delete={$row['PeliculaID']}\"><span class=\"label label-danger\">Eliminar</span></a>";
				$html .= "</div>";
			}
			$html .= "</div>";
			return $html;
		}

		function show(){
			echo __toString();
		}
	}
?>