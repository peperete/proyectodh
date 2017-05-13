<?php
  include ("header.php");
  include_once ("funciones_usuarios.php");

?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 style="text-align:center"><strong>Recuperar Contraseña</strong></h3>
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
        <h3 style="text-align:center; font-size:30px">Olvide mi contraseña</h3>
      </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="text-align:right"><label class="control-label col-sm-12"for="bienvenida">¿No estas registrado? <a href="registro.php" target="_self">¡Registrate gratis!</a></label></h6>
        <br>
      </div>

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="form-horizontal" action="preguntasSegur.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email" value="<?= $emailUsuario ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <h5 style="text-align:center; color:white"><button type="submit" class="btn btn-prymary btn-lg" style="background-color:#FF7557" value="recuperar" id="recuperar" name="recuperar">Recuperar</button></h5>
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
