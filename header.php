<?php
  session_start();
  include("conexion.php");
  $nombre_usuario = "";
  // modo indica el mecanismo para persistir los datos, los valores podrán ser "json" o "db"

  if (isset($_COOKIE["nombre"])) {
    $nombre_usuario = $_COOKIE["nombre"];
    // echo "hay nombre en cookie";
  }

  if (!empty($_SESSION["nombre"])) {
    $nombre_usuario = $_SESSION["nombre"];
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Para que el zoom funcione correctamente en móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Opcionanl al anaterior, para deshabilitar la posibilidad de zoom en las páginas -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->

    <!-- Los 3 meta tags anteriores deben ir primeros en el head; cualquier otro contenido del head debe venir a continuación de estos tags -->
    <title>Service Advisor</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/advisoricono.png">
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos propios del proyecto que sobrescriben los de bootstrap -->
    <link rel="stylesheet" href="css/estilosProyecto.css" id="temacss">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php" target="_self"><img src="images/logoadvisor02.png" style="height:36px" class="img-responsive" alt="Image"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Contratar Servicios</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?=($nombre_usuario != ""?$nombre_usuario:"Ingresar") ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                  if ($nombre_usuario != "") {
                ?>
                    <li><a href="#">Mi cuenta</a></li>
                    <li><a href="editar_perfil.php">Editar Perfil</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="salir.php">Salir</a></li>
                <?php
                } else {
                ?>
                  <li><a href="ingresar.php" target="_self">Iniciar sesión</a></li>
                  <li><a href="registro.php" target="_self">Registrarme</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Profesionales</a></li>
                <?php
                }
                ?>
              </ul>
            </li>
            <li><a href="ayuda.php" target="_self"><span class="glyphicon glyphicon-question-sign"></span> Ayuda</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </body>
</html>
