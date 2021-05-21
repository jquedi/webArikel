<?php
	

	$nombre=$_POST['nombre'];
	$email=$_POST['correo'];
	$cuerpo=$_POST['cuerpo'];
	
	$to = "direccion@arikelk9.com";
	$subject = "Email recibido desde la web";
	$txt = "Nombre cliente: " .$nombre ."
	Email cliente: " .$email ."
	Consulta: " .$cuerpo;
	$headers = "From: " .$email;


	mail(utf8_encode($to),utf8_encode($subject),utf8_encode($txt),utf8_encode($headers));

	
?>