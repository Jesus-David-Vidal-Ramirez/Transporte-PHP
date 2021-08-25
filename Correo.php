<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
$Asunto = $_POST["Asunto"];
$Mensaje = $_POST["Mensaje"];
$Correo = $_POST["Correo"];

try {
    //Server settings
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->Mailer = "smtp";
    $mail->Host = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "vidalramirezjesus63@gmail.com";                     //SMTP username
    $mail->Password   = "Ramirez1.";                               //SMTP password
    $mail->SMTPSecure = 'ldap_start_tls(link)';
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);
    //Recipients
    $mail->setFrom($Correo);
    $mail->addAddress('fernandodiaz.1904@gmail.com');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $Asunto;
    $mail->Body    = $Mensaje . " " . $Correo;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Envio de mensaje satisfactoriamente';
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    echo "<br>" , $mail->ErrorInfo;
}




// if(!$mail->send()){
// 	echo "ERRRROOR";
// }else{
// 	echo "ENVIOOO";
// }


// $correoreceptor= "From: vidalramirezjesus63@gmail.com";
// $Asunto = $_POST["Asunto"];
// $Mensaje = $_POST["Mensaje"];
// $Correo = $_POST["Correo"];


// $Nombres = "JESÚS DAVID ";
// $Apellidos = "VIDAL RAMIREZ";
// $Telefono = "3015";
// $Ciudad = "Sincelejo";

// // $Datos = "Nombres: " . $Nombres . "\nApellido: " . $Apellidos . "\nTelefono: " . $Telefono . "\nCorreo: " . $Correo . "\nLocalidad: " . $Ciudad;
// $Contenido = "Asunto " . $Asunto . "\nApellido " . $Apellidos . "\nCorreo " . $Correo . "\nMensaje " . $Mensaje . "\nNombres " . $Nombres ;
// if(mail($correoreceptor,$Asunto,$Mensaje,$Contenido)){
// 	echo "Envio";
// }else{
// 	echo "No envio";
// }

// echo '<script>alert("Correo Enviado Exitoso JESÚS")</script>';

// $sa = mail($correoreceptor,$Asunto,$Mensaje,$Contenido);
// echo "<br>Esta es la variable " . $Contenido;
// // if(mail($Correo,$Asunto,$Mensaje,$correoreceptor))
// // { echo '<script>alert("Correo Enviado Exitoso JESÚS")</script>'; }

// // else{ echo '<script>alert("Correo NOOOOOo Enviado Exitoso JESÚS")</script> ';}

?>