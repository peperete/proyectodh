<?php
  $modo = "db";

  if ($modo == "db") {
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
  } else {
    $db = "";
  }

?>
