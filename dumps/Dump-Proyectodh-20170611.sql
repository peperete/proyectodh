-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: proyectodh
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `telfijo` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `pregunta_1` varchar(255) DEFAULT NULL,
  `respuesta_1` varchar(255) DEFAULT NULL,
  `pregunta_2` varchar(255) DEFAULT NULL,
  `respuesta_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (3,'jorgelina','ramirez','234234234','244441','jorgelinaramdirezass@gmail.com','$2y$10$rr5NrqlJcbo3qpKk4Pt6Ve7dRsE0mvm6.NgJNL4rEWUBr3zj88xW.',NULL,NULL,'1','Helado','1','Frutilla'),(4,'Sebastian','Perez','01147863641','1147863641','perez.sebastian@gmail.com','$2y$10$oQzUVFlWv9Lj9DrTBZXme.bYfOLuP6ZJ2hkNyZd23ZzNV4Jzj86Oe',NULL,NULL,'1','Helado','1','Frutilla'),(5,'Carla','Ravinovich','2423424','987987897','carla@gmail.com','$2y$10$AR2.dmaPigBGo.6vcpQlbu8D95lnUsIdA1ojInsYZi4/dglf7qcP2',NULL,NULL,'1','Helado','1','Frutilla'),(6,'Rodolfo','Gonzalez','090980980','09887788900','rgonzalez@gmail.com','$2y$10$NTUNSp843RMe5RVXfrUNQOTmix42sNjX3D0v5IY.TeoLQbyPzE0Ca',NULL,NULL,'1','Helado','1','Frutilla'),(7,'Roberto','Galan','098098098','0076555677','rgalan@gmail.com','$2y$10$n8uUP9nOEyMlbobhGwffuun6y5nW/zRB3Iuwd6QBg74LK4s19o8Ga',NULL,NULL,'1','Helado','1','Frutilla'),(8,'Lucas','Perez','23234','123123123','lucas@gmail.com','$2y$10$x/OzsQ4ou54oPBR1qa2chOp1ciKz3TpzJ05V1wcHTudBWEJjGaOKG',NULL,NULL,'1','Helado','1','Frutilla'),(9,'pedro','rodriguez','3452345','3452345','pedro@gmail.com','$2y$10$lRdHul4OsCenUF0WelffKu6uDWpINTUCvB72B79U8yd8SXeMxSkJu',NULL,NULL,'1','Helado','1','Frutilla'),(10,'Juan','Gonzalez','345345','98789789','jgonzalez@gmail.com','$2y$10$p9jl0jlIQYxg2OjKcr.oHe7oEjA8E2wotwVdNy2KE60JAXe3Lg7d6',NULL,NULL,'1','Helado','1','Frutilla'),(11,'Ramiro','Flores','243480','1545660823','rflores@gmail.com','$2y$10$L.Q/6CL5yWGdsZMEKqQ9OuFE4dB.DyxZ9mb.Nu6YXtjJb8DN165OS',NULL,NULL,'1','Helado','1','Frutilla'),(12,'Carlos','Sanchez','345345345','1567775445','csanchez@gmail.com','$2y$10$WTdfrevaoK4EpOz3TrH1Y.ZA40NBy0PuKZfeZ0zM47ICzlQfrrwqm',NULL,NULL,'1','Helado','1','Frutilla'),(13,'Rolo','Villar','7777-7777','11123234','rvillar@gmail.com','$2y$10$c4cvUbrJSa2CqQ/me/sYiO1ZmijecnXZCBTTs.OXKGLuE/77DXW9G',NULL,'La imagen es muy pesada o no tiene un formato valido','2','Tanzania','1','Pera'),(14,'Jorge','Veltran','345345','11345345345','jveltran@gmail.com','$2y$10$q4vXdvo3p7uMzbAlwbJ7HeTch1spQ1W3l719JtLCgGOHMDX2Y8QQy',NULL,NULL,'3','Perez','1','Manzana'),(15,'Jorge','Oviedo','32453245','23452345','joviedo@gmail.com','$2y$10$JxU07d7pYh/qqAFY2N68g.o/Uf1NQcAo8oMAiUstB2E1IgJ8W10NK',NULL,NULL,'1','Torta','1','Frutilla'),(16,'Federico','Mercuri','293874987','113984895','fmercuri@gmail.com','$2y$10$y674RZt9K4PfTo9lyNFnBOOctUBbV8OFLepRDudybTCeozh/xGUKi',NULL,NULL,'2','Inglaterra','1','Frutilla'),(17,'Alberto','Ramirez','25234','456456','aramirez@gmail.com','$2y$10$psecM8Aoik.u9EN7s1JOTewEjH7NCr7qlimXqRfUubzWSXcd11bry',NULL,'La imagen no subió','1','Helado','1','Frutilla'),(18,'Jorge','Valdano','0980987','98787689','jvaldano@gmail.com','$2y$10$9nsoUBXkUK2X9ZqYaGDbnuB9aZ1Qcib9YXvKygwPTIyuZ0SS6MOLG',NULL,'La imagen no subió','1','Helado','1','Frutilla'),(19,'Marcelo','Gallardo','0987678','09679898098','mgallardo@gmail.com','$2y$10$mkzgybwaDeqNOTHkvKiP0.XYTXh5tmABsuLV4GgOkU7Gi/4ia7fOi',NULL,'La imagen no subió','1','Helado','1','Frutilla'),(20,'Piti','Martinez','2345345','23452345','pmartinez@gmail.com','$2y$10$LM3gALhludTz454vE6QikeHwTAQdYMM80dd.MqGb/LCwA4S2QAZr2',NULL,'upload/b335d837c3d202621906cf44d5eb0636.jpg','1','Helado','1','Frutilla'),(21,'Jonathan','Maidana','09789','87987','jmaidana@gmail.com','$2y$10$KMZOxzOBZ6lMD2s.4t96XOEPq/qg6i5XGU6VGail.2v7/sbcbih4y',NULL,'La imagen es muy pesada o no tiene un formato valido','1','Helado','1','Frutilla'),(22,'Ramon','Dias','0987987','987987','rdias@gmail.com','$2y$10$0PSePQ.XQQKcaEAmBhN/w.QXLuAZHx8sGHgDY31/s/qsuy65J/iwy',NULL,'upload/8e215837bae040e9fcc2939ea963fc5d.png','1','Helado','1','Frutilla'),(24,'Francisco','Perez','234234','344234234','fperez@gmail.com','$2y$10$ZATTlPgHLQW2H.mIzhBiCug37KRlEfwqtHhnlQxqT1IVuTXDnVfAq',NULL,'upload/2202554f5649f89952e486f09c3f1c9d.jpg','1','Helado','1','Frutilla'),(26,'Maxi','Antonietti','098098','098098098','mantonietti@gmail.com','$2y$10$Db91K0K/0pd./8j/qB7tCOoXXRWCW3wG6qOKxwbjHTg15oZLrE0tu',NULL,'upload/44007761983477c3b5e588b9cbfc00f1.png','1','Helado','1','Frutilla'),(27,'Alvaro','Herrero','098098','098097980','aherrero@gmail.com','$2y$10$hcMuX0RdUEyasosZB2qPQOwQVRqEirhUj2ibgLq3zk6fkXKwFP5o2',NULL,'La imagen es muy pesada o no tiene un formato valido','1','Helado','1','Frutilla'),(28,'Sebastian','Garcia','09809','09809','sgarcia@gmail.com','$2y$10$PyOXhp0K14GcmowHHchsceROSe0nV3.T.HbkpsjRkBqPTKaHyXaOq',NULL,'upload/9260d4629f1aad03102c063acfe5d450.jpg','1','Helado','1','Frutilla'),(29,'Pancho','Villa','908798789','1109809809','pvilla@gmail.com','$2y$10$ktKivYYBu9AbOEiUzRYLEuIsLAUvlmq9ROWexnjLjYkcJd0j52c8S',NULL,'La imagen es muy pesada o no tiene un formato valido','1','Helado','1','Frutilla'),(30,'Rafa','Nadal','89798797','11090789','rnadal@gmail.com','$2y$10$KBc0216aldxQ4fUirkjHZOZh0foqV0OQ1auesS65LUvxaRqqMso3G',NULL,'upload/797fea9e6fdc1060dab18eba00073b38.jpg','1','Helado','1','Frutilla'),(31,'Messi','Messi','987687','119878767','lmessi@gmail.com','$2y$10$6kE1yOKoGxmRThMsbfWqhuMMxEKTYqPwcC7LqOAjW8W.oHVSBqAA6',NULL,NULL,'1','Helado','1','Frutilla'),(32,'Sebastian','Saja','456545645','1109098098','ssaja@gmail.com','$2y$10$y0OABn8jAxdK5fMotXRLEOcru7xtgw/7RwsnLRbmhiFgn0ZP7Wcw6',NULL,'upload/e9256a0a84ec1b4320e2cf77e9d27fd7.jpg','1','Helado','1','Frutilla'),(33,'Paulo','Dybala','46456','1145645646','pdybala@gmail.com','$2y$10$W9zO9JXxDMn.6T.ilfYBY.REgoynl5iFpOSSAP2YH2kjvdnxjycAK',NULL,'upload/65cd56033333e186d7fd334601e72cda.jpg','1','Helado','1','Frutilla'),(34,'Carlos','Perez','345345','11345345','cperez@gmail.com','sdjhh',NULL,NULL,'1','Helado','1','Frutilla'),(35,'Mauricio','Macri','987987989','11090980980','mmacri@gmail.com','$2y$10$1zKDuFm1PviW5rsoX4.0Y.QcXZLSsnfnDBUHcpkr79aCUhWUqwhaK',NULL,'La imagen es muy pesada o no tiene un formato valido','1','Helado','1','Frutilla'),(37,':nombre',':apellido',':telfijo',':celular',':email',':pwd',NULL,':img',':pregunta_1',':respuesta_1',':pregunta_2',':respuesta_2'),(38,'Franco','Sanchez','345345345','98797987','fsanchez@gmail.com','$2y$10$D0vyd4dmLHcWHwNcYgnjI.tOfjLWvWfitUTlfedxJXuhrrA3SEWc.',NULL,'upload/18a748501d3625ca1edac2a36d3ca89e.jpg','1','Helado','1','Frutilla');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-11 21:58:44
