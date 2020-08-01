<?php 
	//Capturamos los campos
if(isset($_POST['nombre'])){

	$nombre = $_POST['nombre'];
	$email = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	//Enviar por correo
	//$from = "test@hostinger-tutorials.com";
    $to = "informespaul@gmail.com";
    //$subject = "Checking PHP mail";
    //$message = "PHP mail works just fine";
    $headers = "From:" . $email;
    mail($to,$asunto,$mensaje, $headers);
    echo "Su mensaje fue enviado de manera satisfactoria.";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contáctenos</title>
</head>
<body>

	<h1>Formulario de contacto</h1>
	<form name="frmcontacto" method="post" action="contacto.php">
		<label>Nombre</label>
		<input type="text" name="nombre">
		<br>
		<label>Correo</label>
		<input type="email" name="correo">
		<br>
		<label>Asunto</label>
		<input type="text" name="asunto">
		<br>
		<label>Mensaje</label>
		 <textarea name="mensaje"></textarea>
		 <br>
		 <button type="submit">Enviar Correo</button>
	</form>
</body>
</html>