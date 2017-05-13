<?php
include ("header.php");

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
        <form class="form-horizontal" action="ingresar.php" method="post" enctype="multipart/form-data">


          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Ingresa Nueva Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Ingresar Contraseña">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="cpwd">Confirmar Contraseña:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirmar" required>
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
