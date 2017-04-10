<?php
	
	
	$mysqli=new mysqli("am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","dvi7zcu1f6adzi1m","a9ptyiqgiblmwt89","a7svm16t1snoavyo"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>