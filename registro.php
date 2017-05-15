<?php
  include_once ("header.php");
  include_once ("funciones_usuarios.php");
  // echo "<PRE>";
  // var_dump ($arrayPreguntas1);
  // echo "</PRE>";
  $nombreUsuario = $apellidoUsuario = $emailUsuario = $telfijoUsuario = $celularUsuario = "";
  if (!empty($_POST)) {

    $nombreUsuario = $_POST["nombre"];
    $apellidoUsuario = $_POST["apellido"];
    $telfijoUsuario = $_POST["telfijo"];
    $celularUsuario = $_POST["celular"];
    $emailUsuario = $_POST["email"];
    $pregunta_1 = $_POST["pregunta_1"];
    $respuesta_1= $_POST["respuesta_1"];
    $pregunta_2 = $_POST["pregunta_2"];
    $respuesta_2= $_POST["respuesta_2"];

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
  if (!empty($_POST)) {

      $ext = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);

      $errores = $message = '';

      if (!esUnaImagen($ext) || !tienePesoValido($_FILES['archivo']['size'])) {
        $errores = 'La imagen es muy pesada o no tiene un formato valido';
      } else {

        $randomHash = md5(microtime().'foto');

        $archivo = dirname(__FILE__) .'/upload/' . $randomHash . '.' . $ext;
        $upload = move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo);

        if ($upload) {
          $message = "Subio OK!";
          $img = $archivo;
        } else {
          $errores = "no subio";
        }
      }
    }
?>
<body>
<?php if(!empty($errores) || empty($_POST)) { ?>
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

 <!--Imagen de perfil-->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
        <h2><?php if(!empty($errores)) { echo $errores;} ?></h2>
            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <a href="#"><img src="images/silueta_foto_perfil.jpg" alt="foto_perfil" class="img-responsive" style="border-radius:100px"></a>
                <input type="file" name="archivo">
                <div class="col-sm-3">
                </div>
              </div>
            </div>
<!--Subir archivo de Imagen de Perfil-->
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <h5 style="text-align:center; color:white">
                    <!--<input type="file" name="imgPerfil" value="imgPerfil"> -->
                  </h5>
                </div>
              </div>
            </div>


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
<!-- Preguntas de Seguridad -->

  <h4 style="text_aligne:lefth"><b>Selecciona las preguntas de Seguridad</b></h4>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pregunta_1">Pregunta 1</label>
    <div class="col-sm-10">
      <select class="form-control" name="pregunta_1">
        <?php
        // $pregunta_1= array('1'=>'¿Cual es mi postre favorito?','2'=>'Pais que deseo conocer','3'=>'Apellido Materno de mi Padre');
        foreach ($arrayPreguntas1 as $key => $value) {
          echo "<option value='". $key ."'";
          if (!empty($_POST["pregunta_1"])){
            if ($_POST["pregunta_1"] == $key) {
              echo "selected";
            }
          }
          echo ">" . $value ."</option>";
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Respuesta 1</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="respuesta_1" name= "respuesta_1" placeholder="Ingresar Respuesta" required>
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="pregunta_2">Pregunta 2</label>
    <div class="col-sm-10">
      <select class="form-control" name="pregunta_2">
        <?php
        foreach ($arrayPreguntas2 as $key => $value) {
          echo "<option value='". $key ."'";
          if (!empty($_POST["pregunta_2"])){
            if ($_POST["pregunta_2"] == $key) {
              echo "selected";
            }
          }
          echo ">" . $value ."</option>";
        }
        ?>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Respuesta_2">Respuesta 2</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="respuesta_2_2" name= "respuesta_2" placeholder="Ingresar Respuesta" required>
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
  <?php } else { ?>
      Se subio la imagen ok
    <?php } ?>
</body>
<?php include ("footer.php"); ?>
