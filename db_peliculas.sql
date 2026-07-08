/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.3.16-MariaDB : Database - db_peliculas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_peliculas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_peliculas`;

/*Table structure for table `tbl_categoria` */

DROP TABLE IF EXISTS `tbl_categoria`;

CREATE TABLE `tbl_categoria` (
  `Cod_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`Cod_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_categoria` */

insert  into `tbl_categoria`(`Cod_Categoria`,`Tipo`) values 
(1,'Accion'),
(2,'Comedia'),
(3,'Terror'),
(4,'Fantasia'),
(5,'Infantil'),
(6,'Fantasiassss');

/*Table structure for table `tbl_pelicula` */

DROP TABLE IF EXISTS `tbl_pelicula`;

CREATE TABLE `tbl_pelicula` (
  `Cod_Pelicula` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) NOT NULL,
  `Descripcion` varchar(500) DEFAULT NULL,
  `Unidades` int(11) NOT NULL,
  `Publicacion` varchar(25) DEFAULT NULL,
  `Imagen` varchar(100) DEFAULT NULL,
  `FK_Categoria` int(11) NOT NULL,
  PRIMARY KEY (`Cod_Pelicula`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelicula` */

insert  into `tbl_pelicula`(`Cod_Pelicula`,`Titulo`,`Descripcion`,`Unidades`,`Publicacion`,`Imagen`,`FK_Categoria`) values 
(2,'Una esposa de mentira','Danny Maccabee es un cirujano plastico que siempre finge estar casado para no comprometerse con ninguna mujer. Pero un dia conoce a la despampanante Palmer, una joven con la que quiere algo mas serio. ',4,'2011','',2);

/*Table structure for table `tbl_registra` */

DROP TABLE IF EXISTS `tbl_registra`;

CREATE TABLE `tbl_registra` (
  `Cod_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Rentada` varchar(20) NOT NULL,
  `Fecha_Devolucion` varchar(20) NOT NULL,
  `FK_Pelicula` int(11) NOT NULL,
  `FK_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`Cod_Registro`),
  KEY `FK_Pelicula` (`FK_Pelicula`),
  KEY `FK_Usuario` (`FK_Usuario`),
  CONSTRAINT `FK_Pelicula` FOREIGN KEY (`FK_Pelicula`) REFERENCES `tbl_pelicula` (`Cod_Pelicula`),
  CONSTRAINT `FK_Usuario` FOREIGN KEY (`FK_Usuario`) REFERENCES `tbl_usuario` (`Cod_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_registra` */

insert  into `tbl_registra`(`Cod_Registro`,`Fecha_Rentada`,`Fecha_Devolucion`,`FK_Pelicula`,`FK_Usuario`) values 
(1,'22/11/2019','25/11/2019',2,1);

/*Table structure for table `tbl_usuario` */

DROP TABLE IF EXISTS `tbl_usuario`;

CREATE TABLE `tbl_usuario` (
  `Cod_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nickname` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Contra` varchar(15) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Email` varchar(40) NOT NULL,
  PRIMARY KEY (`Cod_Usuario`,`Nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_usuario` */

insert  into `tbl_usuario`(`Cod_Usuario`,`Nickname`,`Nombre`,`Apellido`,`Contra`,`Telefono`,`Direccion`,`Email`) values 
(1,'Jacqui','Jacqueline','Salas Villalobos','123','87214532','San Ramon','jacqui_salas@hotmail.com'),
(2,'Doug','Douglas','Arguedas','111','71110976','San Ramon','dd@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
