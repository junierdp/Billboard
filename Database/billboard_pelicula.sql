CREATE DATABASE  IF NOT EXISTS `billboard` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `billboard`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: billboard
-- ------------------------------------------------------
-- Server version	5.6.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelicula` (
  `PeliculaID` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) DEFAULT NULL,
  `Director` varchar(50) DEFAULT NULL,
  `Resumen` varchar(1000) DEFAULT NULL,
  `Idioma` varchar(50) DEFAULT NULL,
  `Genero` varchar(50) DEFAULT NULL,
  `FechaLanzamiento` date DEFAULT NULL,
  `Pais` varchar(50) DEFAULT NULL,
  `Duracion` time DEFAULT NULL,
  `Protagonistas` varchar(500) DEFAULT NULL,
  `Productora` varchar(50) DEFAULT NULL,
  `Foto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`PeliculaID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelicula`
--

LOCK TABLES `pelicula` WRITE;
/*!40000 ALTER TABLE `pelicula` DISABLE KEYS */;
INSERT INTO `pelicula` VALUES (1,'Capitan America: Civil War','Anthony Russo','“Captain America: Civil War” de Marvel empieza donde lo dejó “Los Vengadores: La Era de Ultrón” ya que Steve Rogers lidera el nuevo equipo de los Vengadores en su incesante tarea de proteger a la humanidad. Después de que otro incidente internacional en el que se ven envueltos los Vengadores produzca daños colaterales, la presión política obliga a poner en marcha un sistema para depurar responsabilidades y un organismo rector que determine cuándo hay que recurrir a los servicios del equipo. El nuevo statu quo divide a los Vengadores mientras intentan proteger al mundo de un nuevo malvado.','Ingles','Accion','2016-05-06','Estados Unidos','02:27:00','Chris Evans, Robert Downey Jr., Chadwick Boseman, Daniel Bruhl, Elizabeth Olsen','Marvel Studios','images/696684.jpg'),(3,'X-Men: Apocalypse','Bryan Singer','Desde los albores de la civilización, fue adorado como un dios. Apocalypse, el primer y más poderoso mutante del universo X-Men de Marvel, acumuló los poderes de muchos otros mutantes, convirtiéndose en inmortal e invencible. Pero al despertar tras miles de años, se encuentra desilusionado con el mundo en que se encuentra y decide reclutar un equipo de mutantes poderosos, entre ellos a un descorazonado Magneto (Michael Fassbender), con el fin de limpiar la humanidad y crear una nueva orden mundial, sobre la cual él reinará. A medida que el destino de la tierra está en juego, Raven (Jennifer Lawrence) con la ayuda del Profesor X (James McAvoy) se unirán junto a un equipo de jóvenes X-Men para detener a su mayor enemigo y salvar así a la humanidad de la destrucción total.','Ingles','Accion','2016-05-19','Estados Unidos','02:27:00','James McAvoy, Michael Fassbender, Jennifer Lawrence, Oscar Isaac, Nicholas Hoult','20th Century Fox Marvel Entertainment','images/Sabah Nur Apocalypse X-Men Apocalypse Movie Wallpaper.jpg'),(4,'The Jungle Book','Andy Serkis.','Nueva adaptación en imagen real del conocido cuento de Rudyard Kipling. Si bien el primer libro contiene varias historias, la más conocida a día de hoy es la protagonizada por Mowgli, un hiño humano criado por los animales en la selva.','Ingles','Aventura','2016-04-14','Estados Unidos','02:27:00','Andy Serkis, Benedict Cumberbatch, Cate Blanchett, Christian Bale, Eddie Marsan, Freida Pinto, Jack Reynor, Naomi Harris, Peter Mullan, Rohan Chand, Tom Hollander.','Walt Disney Studios Motion Pictures','images/the-jungle-book-movie-2016-4k.jpg');
/*!40000 ALTER TABLE `pelicula` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-10 10:46:32
