create database Billboard;
use Billboard;

create table Pelicula(
	PeliculaID int not null auto_increment,
    Titulo varchar (50),
    Director varchar (50),
    Resumen varchar (1000),
    Idioma varchar (50),
    Genero varchar (50),
    FechaLanzamiento date,
    Pais varchar (50),
    Duracion time,
    Protagonistas varchar (500),
    Productora varchar (50),
    Foto varchar (500),
    
    constraint pk_id_pelicula primary key (PeliculaID)
);