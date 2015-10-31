<?php 	
	require 'user.php';
	$CORREO = $_POST['CORREO'];
	$CONTRASENA = $_POST['CONTRASENA'];
		$oUser = new User;
		$oUser->create($CORREO, $CONTRASENA);
		
		
 ?>
