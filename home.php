<?php
  include ("header.php");
?>
</body>
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/electricidad3.png" class="img-responsive" alt="Electricidad">
        <div class="carousel-caption">
          <h2>Electric Friday!!!!</h2>
          <h3>Hasta 50% dto. en servicios seleccionados</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/gas-2.jpg" alt="Gasista">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container text-center">
    <h3>CATEGORÍAS DE SERVICIOS PROFESIONALES Y EMPRESAS</h3><br>
    <div class="row">
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/electricidad3-chico.png" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Electricista Matriculado</h4>
      </div>
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/gas-2-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Gasista</h4>
      </div>
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/pintura-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Pintura</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/albanileria-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Albañilería</h4>
      </div>
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/carpinteria-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Carpintería</h4>
      </div>
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/plomeria-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Plomería</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/alfombras-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Alfombras y Tapizados</h4>
      </div>
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/pisos-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Pisos y revestimientos</h4>
      </div>
      <div class="col-sm-4 aviso">
        <a href="#">
          <img src="images/lineaBlanca-chico.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <h4>Línea Blanca</h4>
      </div>
    </div>
  </div><br>


</div>
</body>
<?php include ("footer.php"); ?>
