<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php  include_once ("header.php");  include_once ("funciones_usuarios.php");  $nombreUsuario = $apellidoUsuario = $emailUsuario = $telfijoUsuario = $celularUsuario = $img = $respuesta_1 = $respuesta_2 = "";  if (!empty($_POST)) {    $usuario = new Usuario($_POST);    $nombreUsuario = $_POST["nombre"];    $apellidoUsuario = $_POST["apellido"];    $telfijoUsuario = $_POST["telfijo"];    $celularUsuario = $_POST["celular"];    $emailUsuario = $_POST["email"];    $pregunta_1 = $_POST["pregunta_1"];    $respuesta_1= $_POST["respuesta_1"];    $pregunta_2 = $_POST["pregunta_2"];    $respuesta_2= $_POST["respuesta_2"];    // Validar usuario    $cpwd = $_POST["cpwd"];    $erroresRegistro = $usuario->validarRegistroUsuario($cpwd, $modo, $db);    if (empty($erroresRegistro)) {        //Proceso para subir imagen a la carpeta upload        if (!empty($_FILES)) {          $guardar = guardarImagen($_FILES);          if ($guardar["status"] = "Guardada") {            $img = $guardar["detalle"];          } else {            $erroresRegistro[] = "no se pudo guardar la imagen";          }        }        //Asignamos la imagen al usuario        $usuario->setImg($img);  			// guardarUsuario($usuario);        $usuario->guardarUsuario($modo, $db);  			// Ir a mensaje de Bienvenida  			header("location:bienvenido.php");exit;      }  }?><body>  <div class="container">    <div class="row">      <div class="col-sm-6 col-sm-offset-3">        <h3 class="categorias"style="text-align:center"><strong>¡Bienvenido(a)!</strong></h3>      </div>      <div class="col-sm-3"></div>    </div>    <div class="row">      <div class="col-sm-6 col-sm-offset-3">        <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive logoregister" alt="logotipo" ></h6>      </div>      <div class="col-sm-3"></div>    </div>    <div class="row">      <div class="col-sm-6 col-sm-offset-3">        <h3 class="categorias" style="text-align:center"><strong>Completa el Formulario</strong></h3>      </div>      <div class="col-sm-3"></div>    </div>    <div class="row">      <div class="col-sm-6 col-sm-offset-3">        <h6 style="text-align:right"><label class="control-label col-sm-12 servicios"for="bienvenida">¿Ya estas registrado? <a href="ingresar.php" target="_self">Entrar</a></label></h6>        <br>      </div>      <div class="col-sm-3"></div>    </div>    <!--Imagen de perfil-->    <div class="row">      <div class="col-sm-6 col-sm-offset-3">        <form class="form-horizontal" action="registro.php" method="post" enctype="multipart/form-data">          <div class="form-group">            <div class="col-sm-6 col-sm-offset-3">              <img src="<?=(($img=="")?"images/silueta_foto_perfil.jpg" : $img); ?>"   alt="foto_perfil" class="img-responsive" style="border-radius:100px" width="150px">              <input id="file-input" type="file" name="archivo">            </div>            <div class="col-sm-3">            </div>          </div>          <!-- Formulario datos de perfil-->          <h4 class="categorias" style="text-align:center">Ingrese sus datos</h4>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="nombre">Nombre:</label>            <div class="col-sm-10">              <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Ingresar nombre" value="<?= $nombreUsuario ?>" required>            </div>          </div>          <div class="form-group">            <label class="col-sm-2 control-label servicios" for="apellido">Apellido:</label>            <div class="col-sm-10">              <input type="text" class="form-control" id="apellido" name ="apellido"placeholder="Ingresar apellido" value="<?= $apellidoUsuario ?>" required>            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="telfijo">Telefono Fijo:</label>            <div class="col-sm-10">              <input type="tel" class="form-control" id="telfijo" name="telfijo" placeholder="Ingresar Telefono Fijo" value="<?= $telfijoUsuario ?>" >            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="celular">Celular:</label>            <div class="col-sm-10">              <input type="tel" class="form-control" id="celular" name="celular" placeholder="Ej. 1155443322" value="<?= $celularUsuario ?>">            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="email">Email:</label>            <div class="col-sm-10">              <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email" value="<?= $emailUsuario ?>">            </div>          </div>          <!-- Preguntas de Seguridad -->          <h4 class="servicios"style="text-align:left">Selecciona las preguntas de Seguridad</h4>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="pregunta_1">Pregunta 1:</label>            <div class="col-sm-10">              <select class="form-control" name="pregunta_1">                <?php                // $pregunta_1= array('1'=>'¿Cual es mi postre favorito?','2'=>'Pais que deseo conocer','3'=>'Apellido Materno de mi Padre');                foreach ($arrayPreguntas1 as $key => $value) {                  echo "<option value='". $key ."'";                  if (!empty($_POST["pregunta_1"])){                    if ($_POST["pregunta_1"] == $key) {                      echo "selected";                    }                  }                  echo ">" . $value ."</option>";                }                ?>              </select>            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="pwd">Respuesta 1:</label>            <div class="col-sm-10">              <input type="text" class="form-control" id="respuesta_1" name= "respuesta_1" placeholder="Ingresar Respuesta" value="<?= $respuesta_1 ?>" required>            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="pregunta_2">Pregunta 2:</label>            <div class="col-sm-10">              <select class="form-control" name="pregunta_2">                <?php                foreach ($arrayPreguntas2 as $key => $value) {                  echo "<option value='". $key ."'";                  if (!empty($_POST["pregunta_2"])){                    if ($_POST["pregunta_2"] == $key) {                      echo "selected";                    }                  }                  echo ">" . $value ."</option>";                }                ?>              </select>            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="Respuesta_2">Respuesta 2:</label>            <div class="col-sm-10">              <input type="text" class="form-control" id="respuesta_2_2" name= "respuesta_2" placeholder="Ingresar Respuesta" value="<?= $respuesta_2 ?>" required>            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="pwd">Contraseña:</label>            <div class="col-sm-10">              <input type="password" class="form-control" id="pwd" name= "pwd" placeholder="Ingresar Contraseña" required>            </div>          </div>          <div class="form-group">            <label class="control-label col-sm-2 servicios" for="cpwd">Confirmar Contraseña:</label>            <div class="col-sm-10">              <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirmar" required>            </div>          </div>          <?php            if (!empty($erroresRegistro)) {              foreach ($erroresRegistro as $error) {                echo '<div class="alert alert-danger" role="alert">' . $error .'</div>';              }            }          ?>          <div class="form-group">            <div class="row">              <div class="col-sm-12">                <h5 style="text-align:center; color:white">                  <button type="submit" class="btn btn-prymary btn-lg btn btn-prymary2" value="enviar" id="enviar" name="submit">Registrarme</button>                </h5>              </div>            </div>          </div>        </form>      </div>      <div class="col-sm-3"></div>    </div>    <div class="row">      <div class="col-sm-12">        <h3 class="servicios" style="text-align:center"><strong>- ó Registrate con -</strong></h3>      </div>    </div>    <div class="form-group">      <div class="row">        <div class="col-sm-12">          <h5 style="text-align:center"><a href="#"><img src="images/facebook_mini.png"></a></h5>        </div>      </div>    </div>  </div></body><?php include ("footer.php"); ?>
=======
<?php

  include_once ("header.php");
  include_once ("funciones_usuarios.php");
  $nombreUsuario = $apellidoUsuario = $emailUsuario = $telfijoUsuario = $celularUsuario = $img = $respuesta_1 = $respuesta_2 = "";
  if (!empty($_POST)) {
    $usuario = new Usuario($_POST);
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
    $cpwd = $_POST["cpwd"];
    $erroresRegistro = $usuario->validarRegistroUsuario($cpwd, $modo, $db);
    if (empty($erroresRegistro)) {

        //Proceso para subir imagen a la carpeta upload
        if (!empty($_FILES)) {
          $guardar = guardarImagen($_FILES);
          if ($guardar["status"] = "Guardada") {
            $img = $guardar["detalle"];
          } else {
            $erroresRegistro[] = "no se pudo guardar la imagen";
          }
        }
        //Asignamos la imagen al usuario
        $usuario->setImg($img);
  			// guardarUsuario($usuario);
        $usuario->guardarUsuario($modo, $db);
  			// Ir a mensaje de Bienvenida
  			header("location:bienvenido.php");exit;
      }
  }
?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="categorias"style="text-align:center"><strong>¡Bienvenido(a)!</strong></h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive logoregister" alt="logotipo" ></h6>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="categorias" style="text-align:center"><strong>Completa el Formulario</strong></h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="text-align:right"><label class="control-label col-sm-12 servicios"for="bienvenida">¿Ya estas registrado? <a href="ingresar.php" target="_self">Entrar</a></label></h6>
        <br>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <!--Imagen de perfil-->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="registro.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
              <img src="<?=(($img=="")?"images/silueta_foto_perfil.jpg" : $img); ?>"   alt="foto_perfil" class="img-responsive" style="border-radius:100px" width="150px">
              <input id="file-input" type="file" name="archivo">
            </div>
            <div class="col-sm-3">
            </div>
          </div>

          <!-- Formulario datos de perfil-->
          <h4 class="categorias" style="text-align:center">Ingrese sus datos</h4>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="nombre">Nombre:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Ingresar nombre" value="<?= $nombreUsuario ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label servicios" for="apellido">Apellido:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="apellido" name ="apellido"placeholder="Ingresar apellido" value="<?= $apellidoUsuario ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="telfijo">Telefono Fijo:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="telfijo" name="telfijo" placeholder="Ingresar Telefono Fijo" value="<?= $telfijoUsuario ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="celular">Celular:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="celular" name="celular" placeholder="Ej. 1155443322" value="<?= $celularUsuario ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email" value="<?= $emailUsuario ?>">
            </div>
          </div>
          <!-- Preguntas de Seguridad -->
          <h4 class="servicios"style="text-align:left">Selecciona las preguntas de Seguridad</h4>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="pregunta_1">Pregunta 1:</label>
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
            <label class="control-label col-sm-2 servicios" for="pwd">Respuesta 1:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="respuesta_1" name= "respuesta_1" placeholder="Ingresar Respuesta" value="<?= $respuesta_1 ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="pregunta_2">Pregunta 2:</label>
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
            <label class="control-label col-sm-2 servicios" for="Respuesta_2">Respuesta 2:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="respuesta_2_2" name= "respuesta_2" placeholder="Ingresar Respuesta" value="<?= $respuesta_2 ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="pwd">Contraseña:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" name= "pwd" placeholder="Ingresar Contraseña" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2 servicios" for="cpwd">Confirmar Contraseña:</label>
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
                  <button type="submit" class="btn btn-prymary btn-lg btn btn-prymary2" value="enviar" id="enviar" name="submit">Registrarme</button>
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
        <h3 class="servicios" style="text-align:center"><strong>- ó Registrate con -</strong></h3>
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
>>>>>>> Stashed changes
