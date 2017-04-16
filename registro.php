<?php
  include ("header.php");
?>
  <body>
    <div class="container">
      <div class="container">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">

          <form class="form-horizontal">
            <div class="row">
              <div class="col-sm-12">
                <h3 style="text-align:center"><strong>¡Bienvenido(a)!</strong></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive"  alt="logotipo" ></h6>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <h3 style="text-align:center"><strong>Completa el Formulario</strong></h3>
              </div>


            </div>

            <!--<div class="form-group">
            <h3 style="text-align:center"><label class="control-label col-sm-10 col-lg-8" for="bienvenida">¡Bienvenido(a)!</label></h3>
            <h1 style="color: #FF7557"><label class="control-label col-sm-10 col-lg-10"for="bienvenida">ServiceAdvisor</label></h1>
            <h3><label class="control-label col-sm-10 col-lg-10"for="bienvenida">Completa el Formulario</label></h3>
          </div> -->
          <div class="form-group">
            <h6><label class="control-label col-sm-12"for="bienvenida">¿Ya estas registrado?<a href="ingresar.php" target="_self">Entrar</a></label></h6>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Nombre:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="apellido">Apellido:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellido">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="telfijo">Telefono Fijo:</label>
            <div class="col-sm-10">
              <input type="integer" class="form-control" id="telfijo" placeholder="Ingresar Telefono Fijo">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="celular">Celular:</label>
            <div class="col-sm-10">
              <input type="integer" class="form-control" id="celular" placeholder="Ej. 1155443322">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Ingresar email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" placeholder="Ingresar Contraseña">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Confirmar Contraseña:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pwd" placeholder="Confirmar">
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <div class="checkbox">
                  <h5 style="text-align:center"><input type="checkbox"> Recordarme</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <h5 style="text-align:center; color:white"><button type="submit" class="btn btn-prymary btn-lg" style="background-color:#FF7557">Registrarme</button></h5>
              </div>
              </div>
            </div>
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
        </form>
      </div>
      <div class="col-sm-3">

      </div>
    </div>
  </div>
</body>
<?php include ("footer.php"); ?>
