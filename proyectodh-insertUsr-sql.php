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

    if (file_exists("usuarios.json")) {
      //cargo en un string el contenido del archivo de usuarios. Son lineas con json
      $archivoJson = file_get_contents("usuarios.json");
      //cargo un array de strings, separadas por caracter de fin de linea php
      $arraySQL = explode(PHP_EOL, $archivoJson);
      foreach ($arraySQL as $key => $value) {
        $sentenciaSQL = json_decode($value, true);
        $campos = $valores = "";
        if ($sentenciaSQL) {
          foreach ($sentenciaSQL as $campo => $valor) {
            $campos = $campos . $campo . ",";
            $valores = $valores . "'".$valor . "',";
          }
          $campos = substr($campos, 0, strlen($campos)-1);
          $valores = substr($valores, 0, strlen($valores)-1);
          $sentencia = "INSERT INTO usuario (" . $campos . ") VALUES (" . $valores. ")";
        }
        try {
          $stmt = $db->prepare($sentencia);
          $stmt -> execute();
          echo "Ejecuté la sentencia sql: <br>" . $sentencia . "<br>";
        } catch (PDOException $exception) {
          echo $exception->getMessage();
        }
      }

    }
?>
