<?php
  session_start();
  session_destroy();
  session_commit();
  setcookie ("nombre", "", time()-3600);
  setcookie ("apellido", "", time()-3600);
  setcookie ("email", "", time()-3600);
  setcookie ("pwd", "", time()-3600);
  header("location:home.php");exit;
?>
