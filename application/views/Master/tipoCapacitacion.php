<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Mantenimiento Tipo de Capacitacion</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Booststrap/css/bootstrap.min.css');  ?>">      <!--link tap--> <!--el base url es la direccion de la aplicacion/ direccion raiz -->

<?php foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>

</head>
<body>
	
	<?php 
	$this->load->view('Vistas_Parciales/_navbar');  //AGREGAR LA CARPETA Y EL EL NAV BAR
	echo $output;
	 ?>




</body>
</html>