<?php
  include("header.php");
?>
<div class="jumbotron text-center fondoayuda">
    <h1 class="textoayuda">
    PREGUNTAS<br>FRECUENTES
    </h1>
    <style>
    /* insertando color de fondo */
    .fondoayuda {
    background-image:url(images/carpinteria.jpg);
    background-position:center center;
    width:100%;
    height:auto;
  /*    background:#8DAFE9;*/
      opacity:0.7;
    }
    </style>
    <style>
       h1{
          font-family:cooper;  
          text-shadow:5px 5px 5px #fff;         
      }
    </style>


  <p><div class="container">
        <form>
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ingresa frase o palabra">
                      <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                      </div>
                  </div>
              </div> 
              <div class="col-sm-3"></div> 
            </div>
        </form>
  </div></p>
</div>
<!--yyyyyy-->
<div class="container">
      <ul class="nav nav-pills nav-justified">
        <li class="active"><a data-toggle="pill" href="#home">Lo más consultado</a></li>
        <li><a data-toggle="pill" href="#menu1">Págos</a></li>
        <li><a data-toggle="pill" href="#menu2">Servicios</a></li>
        <li><a data-toggle="pill" href="#menu3">Subscripción</a></li>
      </ul>
     
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<!--Inicio Preguntas Frecuentes-->
         <h3>
        <span class="glyphicon glyphicon-globe"><br><p>Más Consultados</p></span>
      </h3>
      <style>
       h3 {
        color:#979494;
        font-size:3em;
        text-align:center;
       }
       h3 span p{
        font-size:14px;
        font-weight: bold;
        color:#979494;
       }
      </style>
        <h2>
            Preguntas frecuentes (FAQ)
        </h2>
        <p><strong>Nota:</strong> Las <strong>respuestas</strong> de las siguientes preguntas lograrás visualizarlas al hacer <strong>Clik </strong>en los Items siguientes.</p>
        <div class="panel-group" id="accordion">
        <!--Pregunta 01-->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><strong>¿Cómo publico mi servicio?</strong></a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
          <!--Pregunta 02-->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><strong>¿Cómo solicitar un servicio?</strong></a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
          <!--Pregunta 03 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><strong>¿Qué medios de pago puedo utilizar?</strong></a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
          
          <!-- Fin Preguntas-->
        </div> 
      
<!--Fin Preguntas Frecuentes-->

  </div>
     
    <div id="menu1" class="tab-pane fade">
          <h3>
        <span class="glyphicon glyphicon-usd"><br><p>Págos</p></span>
          </h3>
          <style>
           h3 {
            color:#979494;
            font-size:3em;
            text-align:center;
           }
           h3 span p{
            font-size:14px;
            font-weight: bold;
            color:#979494;
           }
          </style>
          <!-- Pregunta 04-->
          <h2>Preguntas frecuentes (FAQ)</h2>
          <p><strong>Nota:</strong> Las <strong>respuestas</strong> de las siguientes preguntas lograrás visualizarlas al hacer <strong>Clik </strong>en los Items siguientes.</p>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><strong>¿Con qué tarjetas puedo realizar el págo?</strong></a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>    
      <!-- Pregunta 05-->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><strong>¿Qué sucede, si el pago con mi tarjeta es rechazada?</strong></a>
              </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
    </div>

    <div id="menu2" class="tab-pane fade">
          <!-- Pregunta 06-->
          <h3>
        <span class="glyphicon glyphicon-wrench"><br><p>Servicios</p></span>
      </h3>
      <style>
       h3 {
        color:#979494;
        font-size:3em;
        text-align:center;
       }
       h3 span p{
        font-size:14px;
        font-weight: bold;
        color:#979494;
       }
      </style>
          <h2>Preguntas frecuentes (FAQ)</h2>
          <p><strong>Nota:</strong> Las <strong>respuestas</strong> de las siguientes preguntas lograrás visualizarlas al hacer <strong>Clik </strong>en los Items siguientes.</p>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><strong>¿Cómo solicitar un Servicio?</strong></a>
              </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
     <!-- Pregunta 07-->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><strong>¿Por qué debo suscribirme?</strong></a>
              </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
          
          
          
    </div>
    <div id="menu3" class="tab-pane fade">
          <!-- Pregunta 08-->
          <h3>
        <span class="glyphicon glyphicon-book"><br><p>Suscripción</p></span>
      </h3>
      <style>
       h3 {
        color:#979494;
        font-size:3em;
        text-align:center;
       }
       h3 span p{
        font-size:14px;
        font-weight: bold;
        color:#979494;
       }
      </style>
          <h2>Preguntas frecuentes (FAQ)</h2>
          <p><strong>Nota:</strong> Las <strong>respuestas</strong> de las siguientes preguntas lograrás visualizarlas al hacer <strong>Clik </strong>en los Items siguientes.</p>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><strong>¿Qué requisitos necesito para suscribirme?</strong></a>
              </h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
          <!-- Pregunta 09-->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9"><strong>¿Cuáles son los requisitos para suscribirme como Profesional?</strong></a>
              </h4>
            </div>
            <div id="collapse9" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
       <!-- Pregunta 10-->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10"><strong>¿Cómo me registro para ofrecer mi servicio?</strong></a>
              </h4>
            </div>
            <div id="collapse10" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <hr>
              <strong>¿Estas conforme con la respuesta?</strong>
              <button type="button" class="btn btn-success">Sí</button>
              <button type="button" class="btn btn-danger">No</button>
              <hr>
              </div>
            </div>
          </div>
          <!-- Fin Preguntas-->
    </div>
  </div>
</div>
<!--ddddd-->
<?php
   include("footer.php");
?>