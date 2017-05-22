<?php
  include_once ("header.php");
  include_once ("funciones_usuarios.php");
  $nombreUsuario = $apellidoUsuario = $emailUsuario = $telfijoUsuario = $celularUsuario = $img = "";

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
    $idUsuario = $_POST["id"];
    $pwdUsuario = $_POST["pwd"];

    // Validar usuario
    $erroresRegistro = validarRegistroUsuario($_POST, true);

    //print_r($erroresRegistro);
    if (empty($erroresRegistro)) {
      $usuario = modificarUsuario($_POST);

      //Proceso para subir imagen a la carpeta upload
      if (!empty($_FILES)) {
        $guardar = guardarImagen($_FILES);
        if ($guardar["status"] = "Guardada") {
          $img = $guardar["detalle"];
          $usuario["img"] = $img;
    			//Guardar al usuario en un JSON y Archivo
    			reescribirUsuario($usuario);

          //Mensaje datos guardados satisfactoriamente
      		header("location:perfilCambiado.php");exit;
        } else {
          $erroresRegistro[] = "no se pudo guardar la imagen";
        }
      }
    }
  }else{
    //Carga los datos del usuario de la sesión

    //print_r($_SESSION);
    $datosUsuario = datosUsuario($_SESSION['email']);
    //print_r($datosUsuario);
    //print_r($arrayPreguntas1);

    $nombreUsuario = $datosUsuario["nombre"];
    $apellidoUsuario = $datosUsuario["apellido"];
    $telfijoUsuario = $datosUsuario["telfijo"];
    $celularUsuario = $datosUsuario["celular"];
    $emailUsuario = $datosUsuario["email"];
    $pregunta_1 = $datosUsuario["pregunta_1"];
    $respuesta_1= $datosUsuario["respuesta_1"];
    $pregunta_2 = $datosUsuario["pregunta_2"];
    $respuesta_2= $datosUsuario["respuesta_2"];
    $idUsuario = $datosUsuario["id"];
    $pwdUsuario = $datosUsuario["pwd"];
    $img = $datosUsuario["img"];

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
    <!--Imagen de perfil-->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="editar_perfil.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="pwd" readonly="true" value="<?= $pwdUsuario ?>">
          <input type="hidden" name="id" readonly="true" value="<?= $idUsuario ?>">

          <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
              <img src="<?=(($img=="")?"images/silueta_foto_perfil.jpg" : $img); ?>"   alt="foto_perfil" class="img-responsive" style="border-radius:100px" width="150px">
              <input id="file-input" type="file" name="archivo">
            </div>
            <div class="col-sm-3">
            </div>
          </div>

          <!--Formulario Modificar -->
          <h3 style="text-align:left">Ingrese sus datos</h3>
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
              <input type="email" class="form-control" id="email" name="email" value="<?= $emailUsuario ?>" readonly="true">
            </div>
          </div>

          <!-- Preguntas de Seguridad -->
          <h3 style="text-align:left">Selecciona las preguntas de Seguridad</h3>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pregunta_1">Pregunta 1:</label>
            <div class="col-sm-10">
              <select class="form-control" name="pregunta_1">
                <?php
                foreach ($arrayPreguntas1 as $key => $value) {
                  echo "<option value='". $key ."'";
                  if ($pregunta_1 == $key) {
                      echo "selected";
                  }
                  echo ">" . $value ."</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Respuesta 1:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="respuesta_1" name= "respuesta_1" value="<?=$respuesta_1?>" placeholder="Ingresar Respuesta" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pregunta_2">Pregunta 2:</label>
            <div class="col-sm-10">
              <select class="form-control" name="pregunta_2">
                <?php
                  foreach ($arrayPreguntas2 as $key => $value) {
                    echo "<option value='". $key ."'";
                    if ($pregunta_2 == $key) {
                        echo "selected";
                      }
                    echo ">" . $value ."</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="Respuesta_2">Respuesta 2:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="respuesta_2" name= "respuesta_2" value="<?=$respuesta_2?>"placeholder="Ingresar Respuesta" required>
            </div>
          </div>
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
