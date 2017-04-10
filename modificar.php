<?php
	
	require('conexion.php');
	
	$id_producto=$_GET['id_producto'];
	
	$query="SELECT producto, descripcion, existencias, precio_compra, precio_venta FROM productos WHERE id_producto='$id_producto'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Productos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body style="background-color:#E6E6FA;">
	<body>
		
		<center><h1>Modificar Producto</h1></center>
		
		<form name="modificar_producto" method="POST" action="mod_usuario.php">
			<div class="conteiner">
			<div class="table-responsive">
			<table class="table table-striped table-borde table-hover table-condensed">	
				<tr>
					<input type="hidden" name="id" value="<?php echo $id_producto; ?>">
					<td width="20"><b>Producto</b></td>
					<td width="30"><input type="text" name="producto" size="25" value="<?php echo $row['producto']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Descripcion</b></td>
					<td><input type="text" name="descripcion" size="25" value="<?php echo $row['descripcion']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Existencias</b></td>
					<td><input type="text" name="existencias" size="25" value="<?php echo $row['existencias']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Precio Compra</b></td>
					<td><input type="text" name="precio_compra" size="25" value="<?php echo $row['precio_compra']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Precio Venta</b></td>
					<td><input type="text" name="precio_venta" size="25" value="<?php echo $row['precio_venta']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>	
