<?php
  include_once ("header.php");
  include_once ("funciones_usuarios.php");
  $usuario_inex = false;
  if (!empty($_POST["email"])) {
    $usuario = new Usuario($_POST);
    // validar si existe el usuario
    if ($usuario->existeElUsuario($modo, $db)) {
      // Traer los datos del usuario
      //  $datosUsr = datosUsuario($_POST["email"]);
      // Setear datos de usuario en sesion
      $usuario->guardarUsrSession ($modo, $db);
      // Elimino el nombre de la sesión para que no lo identifique como logueado y guardo el nombre en otra variable
      $_SESSION["nombre_usr"] = $_SESSION["nombre"];
      $_SESSION["nombre"] = "";

      // ir a preguntasSegur.php
      header("location:preguntasSegur.php");
      exit;
    } else {
      $usuario_inex = true;
      echo "no existe usuario";
    }
  }


?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="categorias" style="text-align:center"><strong>Recuperar Contraseña</strong></h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive logoregister"  alt="logotipo" ></h6>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="categorias"style="text-align:center; font-size:30px">Olvide mi contraseña</h3>
      </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="text-align:right"><label class="control-label col-sm-12 servicios"for="bienvenida">¿No estas registrado? <a href="registro.php" target="_self">¡Registrate gratis!</a></label></h6>
        <br>
      </div>

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email" required>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <h5 style="text-align:center; color:white"><button type="submit" class="btn btn-prymary btn-lg btn btn-prymary2" value="recuperar" id="recuperar" name="recuperar">Recuperar</button></h5>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <?php
      if ($usuario_inex) {
        echo '<div class="alert alert-danger" role="alert"> Usuario inexistente </div>';
      }
    ?>

  </div>
</body>
<?php include ("footer.php"); ?>
