<?php 
	
	require('conexion.php');
	
	$id_producto=$_GET['id_producto'];
	
	$query="DELETE FROM productos WHERE id_producto='$id_producto'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar producto</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	
	<div class="conteiner">
		<div class="table-responsive">
		<table class="table table-striped table-borde table-hover table-condensed">
		<title>Eliminar producto</title>
		<body style="background-color:#E6E6FA;">
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Producto Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Producto</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>