<?php
  // Conexión a la base de datos... luego vendrá por parámetro (?)
  include("conexion.php");

  // Consulta de cantidad de usuarios
  $sentencia = "SELECT count(*) FROM usuario";
  $stmt = $db->prepare($sentencia);
  $stmt -> execute();
  $cantidad = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
  $cantJson = json_encode(["cantidad" => $cantidad[0]]);
  echo $cantJson;

?>
