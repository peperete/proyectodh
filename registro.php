<?php
  include_once ("header.php");
  include_once ("funciones_usuarios.php");
  $nombreUsuario = $apellidoUsuario = $emailUsuario = $telfijoUsuario = $celularUsuario = "";
  if (!empty($_POST)) {
    $nombreUsuario = $_POST["nombre"];
    $apellidoUsuario = $_POST["apellido"];
    $telfijoUsuario = $_POST["telfijo"];
    $celularUsuario = $_POST["celular"];
    $emailUsuario = $_POST["email"];

    // Validar usuario
    $erroresRegistro = validarRegistroUsuario($_POST);

    if (empty($erroresRegistro)) {
      $usuario = crearUsuario($_POST);
			//Guardar al usuario en un JSON y Archivo
			guardarUsuario($usuario);
			// Ir a mensaje de Bienvenida
			header("location:bienvenido.php");exit;
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
        <h3 style="text-align:center"><strong>Completa el Formulario</strong></h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="text-align:right"><label class="control-label col-sm-12"for="bienvenida">¿Ya estas registrado? <a href="ingresar.php" target="_self">Entrar</a></label></h6>
        <br>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="registro.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label col-sm-2" for="nombre">Nombre:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Ingresar nombre" value="<?= $nombreUsuario ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="apellido">Apellido:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" name ="apellido"placeholder="Ingresar apellido" value="<?= $apellidoUsuario ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="telfijo">Telefono Fijo:</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="telfijo" name="telfijo" placeholder="Ingresar Telefono Fijo" value="<?= $telfijoUsuario ?>" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="celular">Celular:</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="celular" name="celular" placeholder="Ej. 1155443322" value="<?= $celularUsuario ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email" value="<?= $emailUsuario ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" name= "pwd" placeholder="Ingresar Contraseña" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="cpwd">Confirmar Contraseña:</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirmar" required>
              </div>
            </div>
            <?php
              if (!empty($erroresRegistro)) {
                foreach ($erroresRegistro as $error) {
                  echo '<div class="alert alert-danger" role="alert">' . $error .'</div>';
                }
              }
            ?>

            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <h5 style="text-align:center; color:white">
                    <button type="submit" class="btn btn-prymary btn-lg" style="background-color:#FF7557" value="enviar" id="enviar" name="submit">Registrarme</button>
                  </h5>
                </div>
              </div>
            </div>
        </form>
      </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row">
        <div class="col-sm-12">
          <h3 style="text-align:center"><strong>- ó Registrate con -</strong></h3>
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
