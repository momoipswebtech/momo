<?php 

$para = 'jeronimo.gonzalez@live.com.mx';

$asunto = 'Mensaje desde cgdeportes.com';

$mailheader = "From: ".$POST["email"]."\r\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("Error al enviar email");

header('Location: http://cgdeportes.com/momo')

?>