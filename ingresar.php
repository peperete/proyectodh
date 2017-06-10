<?php
  include ("header.php");
  include_once ("funciones_usuarios.php");
  $emailUsuario  = $pwdUsuario = "";
  if (!empty($_POST)) {
    $objUsr = new Usuario($_POST);
    $emailUsuario = $_POST["email"];
    $pwdUsuario = $_POST["pwd"];
    $recordame = isset($_POST["recordame"]);

    // Validar usuario
    $erroresIngreso = $objUsr->validarIngresoUsuario($pwdUsuario, $modo);
    // Guardar los datos en SESSION
    if (empty($erroresIngreso)) {

      $datosUsr = $objUsr->datosUsuario($modo);
      $_SESSION["nombre"] = $datosUsr["nombre"];
      $_SESSION["apellido"] = $datosUsr["apellido"];
      $_SESSION["email"] = $datosUsr["email"];
      $_SESSION["pwd"] = $datosUsr["pwd"];
      // Si recordame, guardar los datos en cookies
      if ($recordame) {
        setcookie ("nombre", $datosUsr["nombre"], time()+31536000);
        setcookie ("apellido", $datosUsr["apellido"], time()+31536000);
        setcookie ("email", $datosUsr["email"], time()+31536000);
        setcookie ("pwd", $datosUsr["pwd"], time()+31536000);
      }
			// Ir al home ya logueado
			header("location:home.php");exit;
    }
  }
?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 style="text-align:center"><strong>¡Bienvenido(a)!</strong></h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive"  alt="logotipo" ></h6>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 style="text-align:center; font-size:30px">Ingresa</h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="ingresar.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email" value="<?= $emailUsuario ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Ingresar Contraseña">
            </div>
          </div>
          <?php
            if (!empty($erroresIngreso)) {
              foreach ($erroresIngreso as $error) {
                echo '<div class="alert alert-danger" role="alert">' . $error .'</div>';
              }
            }
          ?>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <div class="checkbox">
                  <h5 style="text-align:center"><input type="checkbox" id="recordame" name="recordame"> Recordarme</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <h5 style="text-align:center; color:white"><button type="submit" class="btn btn-prymary btn-lg" style="background-color:#FF7557" value="enviar" id="enviar" name="submit">Entrar</button></h5>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div>
          <h4 style="text-align:center"><strong><a href="olvido_contrasenia.php"> Olvide mi Contraseña</strong></a></h4>
        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-sm-12">
          <h3 style="text-align:center"><strong>- ó ingresa con -</strong></h3>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-sm-12">
            <h5 style="text-align:center"><a href="#"><img src="images/facebook_mini.png"></a></h5>
          </div>
        </div>
      </div>
  </div>
</body>
<?php include ("footer.php"); ?>
