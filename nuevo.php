<html>
	<head>
		<title>Productos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body style="background-color:#E6E6FA;">
	<body>
		
		<center><h1>Nuevo Producto</h1></center>
		
		<form name="nuevo_producto" method="POST" action="guarda_usuario.php">
			<div class="conteiner">
			<div class="table-responsive">
			<table class="table table-striped table-borde table-hover table-condensed">
				<tr>
					<td width="20"><b>Producto</b></td>
					<td width="30"><input type="text" name="producto" size="25" /></td>
				</tr>
				<tr>
					<td><b>Descripcion</b></td>
					<td><input type="text" name="descripcion" size="25" /></td>
				</tr>
				<tr>

					<td><b>Existencias</b></td>
					<td><input type="text" name="existencias" size="25" /></td>
				</tr>
				<tr>
					<td><b>Precio Compra</b></td>
					<td><input type="text" name="precio_compra" size="25" /></td>
				</tr>
				<tr>
					<td><b>Precio Venta</b></td>
					<td><input type="text" name="precio_venta" size="25" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>						