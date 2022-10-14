<?php

	include 'conversor-ut8.php';

	$nombreCliente = $_POST["nombrecliente"];
	$correoCliente = $_POST["correocliente"];
	$mensaje = $_POST["mensaje"];

	$asunto = '¡PEDIDO! - ' . $nombreCliente;
	$destino = 'afranion7@gmail.com';

	if(strlen($mensaje) > 70)
	{
		$mensaje = wordwrap($mensaje, 70, '\n');
	}

	$mensaje .= '\n\n' . 'Usuario: ' . $nombreCliente. '\n' . 'Contacto: ' . $correoCliente;

	$headers = 'From: '.$destino."\r\n".
				'Reply-To:'.$correoCliente."\r\n".
				'X-Mailer: PHP/'.phpversion();

	//echo '<p>' . $mensaje . '</p>';

	if (mail($destino, $asunto, $mensaje, $headers))
	{
		echo "<br/><h2><p ALIGN=center style = 'color: blue;'>¡El mensaje ha sido enviado, espara nuestra pronta respuesta!</p></h2>";
	}
	else
	{
		echo "<br/><h2><p ALIGN=center style = 'color: red;'>Oops ... por alguna razon el mensaje no pudo ser enviado, intentalo de nuevo.</p></h2>";
	}
	
	echo '<p align="center"><a href="http://../index.php"><button>Regresar</button></a></p>';

?>