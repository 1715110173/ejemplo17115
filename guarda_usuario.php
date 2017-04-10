<?php 
	
	require('conexion.php');
	
	$producto=$_POST['producto'];
	$descripcion=$_POST['descripcion'];
	$existencias=$_POST['existencias'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	
	$query="INSERT INTO productos (producto, descripcion, existencias, precio_compra, precio_venta) VALUES ('$producto','$descripcion','$existencias','$precio_compra','$precio_venta')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar producto</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<div class="conteiner">
		<div class="table-responsive">
		<table class="table table-striped table-borde table-hover table-condensed">
		<body style="background-color:#E6E6FA;">
	<body>

		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>PRODUCTO GUARDADO</h1>
				<?php }else{ ?>
				<h1>ERROR AL GUARDAR PRODUCTO</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>	