<?php

    $dbname = 'proyectodh';
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

    $sentenciaSQL="ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";

        try {
          $stmt = $db->prepare($sentenciaSQL);
          $stmt -> execute();
          echo  $sentenciaSQL . "<br>";
          // echo "<PRE>";
          // print_r($rows);
        } catch (PDOException $exception) {
          echo $exception->getMessage();
        }







?>
