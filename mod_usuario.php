<?php 
	
	require('conexion.php');
	
	$id_producto   = $_POST['id_producto'];
	$producto      = $_POST['producto'];
	$descripcion   = $_POST['descripcion'];
	$existencias   = $_POST['existencias'];
	$precio_compra = $_POST['precio_compra'];
	$precio_venta  = $_POST['precio_venta'];
	
	$query="UPDATE productos SET producto='$producto', descripcion='$descripcion', existencias='$existencias', precio_compra='$precio_compra', precio_venta='$precio_venta' WHERE id_producto='$id_producto'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar producto</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body style="background-color:#E6E6FA;">
	<body>
	<div class="conteiner">
		<div class="table-responsive">
		<table class="table table-striped table-borde table-hover table-condensed">
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Producto Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Producto</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
				
				