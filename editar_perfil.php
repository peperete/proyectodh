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
        <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive"  alt="logotipo" ></h6>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 style="text-align:center"><strong>Editar Perfil</strong></h3>
      </div>
      <div class="col-sm-3"></div>
    </div>

      <div class="col-sm-3"></div>
    </div>

 <!--Imagen de perfil-->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <a href="#"><img src="images/silueta_foto_perfil.jpg" alt="foto_perfil" class="img-responsive" style="border-radius:100px"></a>
                <div class="col-sm-3">
                </div>
              </div>
            </div>
<!--Subir archivo de Imagen de Perfil-->
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <h5 style="text-align:center; color:white">
                    <a href= "#"value="buscarIMG" id="buscarImg" name="buscarImg">Cambiar Foto de Perfil</a>
                  </h5>
                </div>
              </div>
            </div>


        <form class="form-horizontal" action="registro.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label col-sm-2" for="nombre">Nombre:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name ="nombre" value="<?= $nombreUsuario ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="apellido">Apellido:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" name ="apellido" value="<?= $apellidoUsuario ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="telfijo">Telefono Fijo:</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="telfijo" name="telfijo" value="<?= $telfijoUsuario ?>" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="celular">Celular:</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="celular" name="celular" value="<?= $celularUsuario ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="<?= $emailUsuario ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-8" for="pwd">¿Desea Cambiar Contraseña?</label>
              <div class="col-sm-2">
                <input type="radio" name="contraseña_si" value="si">SI
                </div>
                <div class="col-sm-2">
                <input type="radio" name="contraseña_no" value="no">NO
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
                    <button type="submit" class="btn btn-prymary btn-lg" style="background-color:#FF7557" value="guardar" id="guardar" name="guardar">Guardar</button>
                  </h5>
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
