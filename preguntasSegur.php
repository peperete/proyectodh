<?php
  include ("header.php");
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
        <form class="form-horizontal" action="acceso_seguro.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="control-label col-sm-6" for="preugnta_1">¿Cual es tu Postre o Fruta Favorita?</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="pregunta_1" name="pregunta_1" placeholder="Ingresar respuesta" value="<?= $pregunta_1 ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-6" for="pregunta_2">Nombre de mi primer colegio</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="pregunta_2" name="pregunta_2" placeholder="Ingresar respuesta">
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

  </div>
</body>
<?php include ("footer.php"); ?>
