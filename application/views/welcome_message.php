<!DOCTYPE html>
<html lang="en">
<head>
  <title>SOH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/booststrap/bootstrap.darkly.min.css'); ?>"> --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>

<body>

<?php $this->load->view('Vistas_Parciales/_nav'); ?> <!-- llama la vista parcial del navbar-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="assets/imagenes/cr1.png" alt="Image-responsive">
        <div class="carousel-caption">
          <!--<h3>Sell $</h3>
          <p>Money Money.</p> -->
        </div>      
      </div>

      <div class="item">
        <img src="assets/imagenes/cr2.png" alt="Image-responsive">
        <div class="carousel-caption">
          <!--<h3>More Sell $</h3>
          <p>Lorem ipsum...</p>-->
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
  <h3>
  <b> <i>Cruz Roja, lider en la prevención de los desastres naturales, atención pre-hospitalaria y servicio 
  de ambulancia. </i></b> 
  </h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="assets/imagenes/p2_.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>En el marco de los principios y valores humanitarios que profesa, el servicio voluntario que brindan nuestros miembros a lo largo y ancho del país, es uno de nuestros activos más preciados. Somos una organización promotora del voluntariado, como un valor esencial para la vida.
      </p>
    </div>
    <div class="col-sm-4"> 
      <img src="assets/imagenes/p3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Formación de jóvenes en valores y principios humanitarios, con el fin de trabajar con las comunidades, en temas como promoción de la salud, medio ambiente, cultura de paz, liderazgo juvenil, prevención de desastres e inclusión de la juventud en la sociedad del conocimiento, entre otros.
      </p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Servicios neutrales, independientes e imparciales a todos los habitantes del territorio costarricense, movilizando el poder de la humanidad.
       </p>
      </div>
      <div class="well">
       <p>Acciones implementadas desde la Juventud de la Cruz Roja y el voluntariado social, para promover la solidaridad, la inclusión y la equidad contra los estigmas de la enfermedad, la discapacidad, la diversidad o la etnicidad, entre otros, así como contra el deterioro ambiental.
       </p>
      </div>
    </div>
  </div>
</div><br>

<?php $this->load->view('Vistas_Parciales/_footer'); ?>


</body>
</html>
