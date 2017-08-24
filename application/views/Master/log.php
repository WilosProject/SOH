<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }

.rojo{ background-color: #b71c1c; 
        border-color: #b71c1c;
}

.bg-1 { 
      background-color: #cfd8dc; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .navbar-inverse .nav li a{
    color: white;
  }
  .navbar-inverse .navbar-brand {
    color: white;
}
  
  </style>





</head>
<body style="background-color: #cfd8dc;"> 
<nav class="navbar navbar-inverse rojo">
  <div class="container-fluid ">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> <b>SOH </b></a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <!--<li class="active"><a href="#">Home</a></li> -->
        <li><a href="#" id="btnLogin">Login</a></li>
        <li><a href="#" id="btnRegistrar">Registrarte</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-1 text-center">
  <h2> <b>Bienvenido </b></h2>
  <img src="<?php echo base_url('assets/Imagenes/CruzRoja.png?1.0');  ?>" class="img-circle" > 


  <h2> <b>Cruz Roja Costarricense </b></h2>
</div>

<div class="container-fluid bg-2 text-center">
  <h3>Quienes somos?</h3>
  <p>Somos una organización sin fines de lucro, con voluntariado especializado, equipamiento adecuado y experiencia para proveer servicios de calidad con calidez humana.</p>
</div>

<div class="container-fluid bg-3 text-center">
  <h5><i>Comité Auxiliar de Nicoya </i></h5>
  <p><i>Fundada el 05 de junio de 1976, con el fin de mejorar la calidad de vida de las personas vulnerables, en la comunidad. </i></p>
</div>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-credit-card"></span> Número de Identificación</label>
              <input type="text" class="form-control" id="usrname" placeholder="Digite su número de identificación">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="password" class="form-control" id="psw" placeholder="Digite su contraseña">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 


<!-- boton registrarse-->

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-pencil"></span> Registrate</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-credit-card"></span> Número identificación</label>
              <input type="text" class="form-control" id="usrname" placeholder="Digite su número de cédula"  required="required" autofocus>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="password" class="form-control" id="psw" placeholder="Digite su contraseña"  required="required" autofocus> 
            </div>
            

<div class="radio">
<p>Digite el cargo que desempeña</p>
  <label>
    <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked> Administrador
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="opcion_2">COR
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_3" value="opcion_3">COL
  </label>
</div>


     <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Crear cuenta</button>


    <div class="container">
  
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         
        </div>
      </div>
      
    </div>
  </div> 

              
</div>
 
<script>
$(document).ready(function(){
    $("#btnLogin").click(function(){
        $("#myModal").modal();
    });
});
</script>



<script>
$(document).ready(function(){
    $("#btnRegistrar").click(function(){
        $("#myModal1").modal();
    });
});
</script>

<?php $this->load->view('Vistas_Parciales/_footer'); ?> <!-- llama la vista parcial del footer-->

</body>
</html>
