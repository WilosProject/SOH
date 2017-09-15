<html>
<head>
	<title>Licencia</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">

	<?php foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>

</head>
<body>


<?php 
$this->load->view('vistas_parciales/_nav');
echo $output;
?>
</body>

<!-- SIEMPRE INCLUIR ESTE SCRIPT DE BOOTSTRAP:MIN:JS-->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');  ?>"></script> 
</html>