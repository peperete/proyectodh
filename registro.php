<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">

    <form class="form-horizontal">
      <div class="form-group">
        <h3><label class="control-label col-sm-10"for="bienvenida">¡Bienvenido(a)!</label></h3>
        <h3><label class="control-label col-sm-10"for="bienvenida">Completa el Formulario</label></h3>
      </div>
      <div class="form-group">
        <h6><label class="control-label col-sm-10"for="bienvenida">¿Ya estas registrado?<a href="#">Entrar</a></label></h6>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="nombre">Nombre:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre">
        </div>
      </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="apellido">Apellido:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellido">
          </div>
        </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="telfijo">Telefono Fijo:</label>
            <div class="col-sm-8">
              <input type="integer" class="form-control" id="telfijo" placeholder="Ingresar Telefono Fijo">
            </div>
          </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="celular">Celular:</label>
              <div class="col-sm-8">
                <input type="integer" class="form-control" id="celular" placeholder="Ej. 1155443322">
              </div>
            </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" placeholder="Ingresar email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pwd" placeholder="Ingresar Contraseña">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Confirmar Contraseña:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pwd" placeholder="Confirmar">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox"> Recordarme</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Registrarme</button>
            </div>
          </div>
        </form>
    </div>
  </body>
</html>
