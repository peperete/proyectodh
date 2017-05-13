<?php
  include ("header.php");
  include_once("funciones_usuarios.php");
  $error = "";
  if (!empty ($_POST["respuesta_1"]) && !empty ($_POST["respuesta_2"])) {
    // Ir a validar las respuestas de seguridad en el registro del usuario
    if ($_SESSION["respuesta_1"]==$_POST["respuesta_1"] && $_SESSION["respuesta_2"]==$_POST["respuesta_2"]) {
      header("location:acceso_seguro.php"); exit;
    } else {
      $error = "Respuestas inválidas";
    }

  }


?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 style="text-align:center"><strong>Preguntas de Seguridad</strong></h3>
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
        <h3 style="text-align:center; font-size:30px">Responda las siguientes preguntas de seguridad</h3>
      </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="control-label col-sm-6" for="respuesta_1"><?=$arrayPreguntas1[$_SESSION["pregunta_1"]]?></label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="respuesta_1" name="respuesta_1" placeholder="Ingresar respuesta" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-6" for="respuesta_2"><?=$arrayPreguntas2[$_SESSION["pregunta_2"]]?></label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="respuesta_2" name="respuesta_2" placeholder="Ingresar respuesta" required>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <h5 style="text-align:center; color:white"><button type="submit" class="btn btn-prymary btn-lg" style="background-color:#FF7557" value="validar" id="validar" name="submit">Validar</button></h5>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <?php
      if ($error!="") {
        echo '<div class="alert alert-danger" role="alert">' . $error .'</div>';
      }
    ?>

  </div>
</body>
<?php include ("footer.php"); ?>
