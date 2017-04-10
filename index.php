<?php
	require('conexion.php');
	
	$query="SELECT id_producto, producto, descripcion, existencias, precio_compra, precio_venta FROM productos";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
	<title>Tienda Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body style="background-color:#E6E6FA;">
	<body>
		
		<center><h1>Productos</h1></center>
		
		<a href="nuevo.php">Nuevo Producto</a>
		<p></p>
		<h1 >Tienda de productos </h1>
		<div class="conteiner">
		<div class="table-responsive">
		<table class="table table-striped table-borde table-hover table-condensed">
		
			<thead>
				<tr>
					<td><b>Producto</b></td>
					<td><b>Descripcion</b></td>
					<td><b>Existencias</b></td>
					<td><b>Precio Compra</b></td>
					<td><b>Precio Venta</b></td>
					<td></td>
					<td></td>
					
					
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>

							<td> 
								<?php echo $row['producto'];?>
							</td>

							<td>
								<?php echo $row['descripcion'];?>
							</td>

							<td>
								<?php echo $row['existencias'];?>
							</td>

							<td>
								<?php echo $row['precio_compra'];?>
							</td>

							<td>
								<?php echo $row['precio_venta'];?>
							</td>

							<td>

								<a href="modificar.php?id_producto=<?php echo $row['id_producto'];?>">Editar</a>
							</td>

							<td>
								<a href="eliminar.php?id_producto=<?php echo $row['id_producto'];?>">Eliminar</a>
							</td>

						</tr>
					<?php } ?>
				</tbody>
			
			</table>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</body>
	</html>	
	
