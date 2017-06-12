<?php

    $dbname = 'mysql';
    $host = 'localhost';
    $port = '3306';
    $dsn = 'mysql:host=' . $host . ';dbname='. $dbname . ';charset=utf8mb4;port:' . $port;
    $usrName = 'root';
    $passw = '';
    try {
      $db = new PDO ($dsn, $usrName, $passw);
    } catch (PDOException $exception) {
      echo $exception->getMessage();
    }
    $sentenciaSQL0 = "create database if not EXISTS proyectodh; use proyectodh;";
    $sentenciaSQL="
CREATE TABLE if not exists `usuario` (
  `id` int(11) NOT NULL,
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
  `respuesta_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$sentenciaSQL2="ALTER TABLE `usuario`
ADD PRIMARY KEY if not exists (`id`),  ADD UNIQUE KEY if not exists `email_UNIQUE` (`email`);";

        try {
          $stmt = $db->prepare($sentenciaSQL0);
          $stmt -> execute();
          echo  $sentenciaSQL0 . "<br>";
          $stmt = $db->prepare($sentenciaSQL);
          $stmt -> execute();
          echo  $sentenciaSQL . "<br>";
          $stmt = $db->prepare($sentenciaSQL2);
          $stmt -> execute();
          echo  $sentenciaSQL2 . "<br>";
          // echo "<PRE>";
          // print_r($rows);
        } catch (PDOException $exception) {
          echo $exception->getMessage();
        }







?>
