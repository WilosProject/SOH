<!DOCTYPE html>
<html lang="spanish">
<head>
  <title>Reporte Horas Voluntariado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Reporte de Horas Voluntariado</h2><br><br>
  <p></p>
  <form class="form-inline" action="/action_page.php">
   


   Fecha realizada: <input type="text"  size="10" class="form-control input-sm" id="fecha" placeholder="dd/mm/aaaa" name="fecha"><br><br><br>
  
    Hora inicial <input type="text" size="2" class="form-control input-sm" id="hini" placeholder="00:00" name="hini">
    Hora final <input type="text" size="2" class="form-control input-sm" id="hfin" placeholder="00:00" name="hfin">

    
    <hr><button type="submit" class="btn btn-success">Guardar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
    </div>

  </form>
</body>

<!-- SIEMPRE INCLUIR ESTE SCRIPT DE BOOTSTRAP:MIN:JS-->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');  ?>"></script> 
</html>