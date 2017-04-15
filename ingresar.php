<?php
  include ("header.php");
?>
  <body>
    <div class="container">

      </div>
    <form class="form-horizontal">
      <div class="form-group">
        <h3><label class="control-label col-sm-10"for="bienvenida">¡Bienvenido(a)!</label></h3>
        <h1><label class="control-label col-sm-10"for="bienvenida">ServiceAdvisor</label></h1>

        <h3><label class="control-label col-sm-10"for="bienvenida">Ingresa</label></h3>
      </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pwd" placeholder="Ingresar Contraseña">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="olvido">
                <label><a href="#">Olvide mi contraseña</a></label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Entrar</button>
            </div>
          </div>
        </form>
    </div>
  </body>
<?php include ("footer.php"); ?>
