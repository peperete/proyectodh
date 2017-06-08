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
      //elimino el último componente del array, que corresponde con el caracter de fin de archivo
      //array_pop($usuariosArray);
      foreach ($arraySQL as $key => $value) {
        $sentenciaSQL = json_decode($value, true);
        echo "<PRE>";
        var_dump($sentenciaSQL);
        $sentencia = "INSERT INTO usuario (";
        foreach ($sentenciaSQL as $campo => $valor) {
          $sentencia .= $campo . ",";
        }
        $sentencia .= ") VALUES (";
        foreach ($sentenciaSQL as $campo => $valor) {
          $sentencia .= $valor . ",";
        }
        $sentencia .= ")";


        // try {
        //   $stmt = $db->prepare($sentenciaSQL["sql"]);
        //   $stmt -> execute();
        //   echo  $sentenciaSQL["sql"] . "<br>";
        //   echo "<PRE>";
        //   // print_r($rows);
        // } catch (PDOException $exception) {
        //   echo $exception->getMessage();
        // }

      }
      echo $sentencia;
    }





?>
