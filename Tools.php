<?php
	//Email Contacto
	if(isset($_POST['cont'])) {

		$email_to = "ingluisfelipe07@gmail.com";
		$email_subject = "Contacto desde StahlWerke";
		$email_from = "sthalwerke@stahlwerke.mx";
		
		if(!isset($_POST['nombre']) ||
		!isset($_POST['compañia']) ||
		!isset($_POST['ubicacion']) ||
		!isset($_POST['telefono']) ||
		!isset($_POST['email']) ||
		!isset($_POST['mensaje'])) {

		echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
		echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
		die();
		}

		$email_message = "Contacto desde StahlWerke\n\n";
		$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
		$email_message .= "Compañia: " . $_POST['compañia'] . "\n";
		$email_message .= "Ubicacion: " . $_POST['ubicacion'] . "\n";
		$email_message .= "Telefono: " . $_POST['telefono'] . "\n";
		$email_message .= "Email: " . $_POST['email'] . "\n";
		$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


		
		$headers = 'From: '.$email_from."\r\n" .
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		mail($email_to, $email_subject, $email_message, $headers);
		echo 'Mensaje enviado en breve nos pondremos en contacto contigo';
	}
	
?>