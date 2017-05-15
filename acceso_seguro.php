<?php
  include_once ("header.php");
  include_once("funciones_usuarios.php");
  $errores = [];

  if (!empty($_POST["pwd1"]) && !empty($_POST["pwd2"])) {
    $errores = validarCambioPwd($_POST["pwd1"], $_POST["pwd2"]);
    if (empty($errores)) {
      // cambiar las passw del usuario en su registro
      $datosUsuario["id"] = $_SESSION["id"];
      // utilizo otra variable distinta de nombre para que no lo tome como logueado el header
      $datosUsuario["nombre"] = $_SESSION["nombre_usr"];
      $datosUsuario["apellido"] = $_SESSION["apellido"];
      $datosUsuario["telfijo"] = $_SESSION["telfijo"];
      $datosUsuario["celular"] = $_SESSION["celular"];
      $datosUsuario["email"] = $_SESSION["email"];
      $datosUsuario["pregunta_1"] = $_SESSION["pregunta_1"];
      $datosUsuario["respuesta_1"] = $_SESSION["respuesta_1"];
      $datosUsuario["pregunta_2"] = $_SESSION["pregunta_2"];
      $datosUsuario["respuesta_2"] = $_SESSION["respuesta_2"];
      $datosUsuario["pwd"] = password_hash($_POST["pwd1"], PASSWORD_DEFAULT);
      reescribirUsuario($datosUsuario);
      // cambio el dato pwd de la sesion a la nueva pwd
      $_SESSION["pwd"] = $datosUsuario["pwd"];

      // Ir a página de Login
      header("location:ingresar.php"); exit;

    }
  }



 ?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 style="text-align:center"><strong>Validacion</strong></h3>
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
        <h3 style="text-align:center; font-size:30px">Has respondido correctamente, puedes cambiar la contraseña</h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">


          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Ingresa Nueva Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" name="pwd1" placeholder="Ingresar Contraseña">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="cpwd">Confirmar Contraseña:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="cpwd" name="pwd2" placeholder="Confirmar" required>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <h5 style="text-align:center; color:white"><button type="submit" class="btn btn-prymary btn-lg" style="background-color:#FF7557" value="enviar" id="confirmar" name="submit">Confirmar</button></h5>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-3"></div>
    </div>
  </div>
</body>
<?php include ("footer.php"); ?>
