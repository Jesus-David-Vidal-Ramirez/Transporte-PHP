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
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->Mailer = "smtp";
    $mail->Host = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "vidalramirezjesus@gmail.com";                     //SMTP username
    $mail->Password   = "12345";                               //SMTP password
    $mail->SMTPSecure = 'ldap_start_tls(link)';
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    ;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);
    
$cuerpo="

<table width='650' border='1'>
  <tr  bgcolor='#0066FF'>
    <td colspan='2' ><div align='center'><font size='+1' face='Verdana, Arial, Helvetica, sans-serif' color='#FFFFFF'><b>Correo de la Pagina Web:Transportes RIKLINSUS</b></font></div></td>
  </tr>
  <tr >
    <td width='150' bgcolor='#0066FF'><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#FFFFFF'><b>Nombres y Apellidos</b></font></td>
    <td width='500'  ><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#000000'>$Asunto</font></td>
  </tr>
 
  <tr>
    <td bgcolor='#0066FF'><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#FFFFFF'><b>Telefono</b></font></td>
    <td ><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#000000'>Telefono</font></td>
  </tr>
 
  <tr>
    <td bgcolor='#0066FF'><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#FFFFFF'><b>Correo Electr�nico</b></font></td>
    <td ><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#000000'>$Correo</font></td>
  </tr>
   <tr bgcolor='#0066FF'>
    <td colspan='2' ><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#FFFFFF'><b>Mensaje:</b></font></td>
  </tr>
  <tr>
    <td colspan='2'  ><font size='-1' face='Verdana, Arial, Helvetica, sans-serif' color='#000000'>$Mensaje</font></td>
  </tr>
  
</table>


";
    $mail->setFrom($Correo);
    $mail->addAddress('vidalramirezjesus@gmail.com');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $Asunto;
    $mail->Body    = $cuerpo;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Envio de mensaje satisfactoriamente';
  

    echo "<script> alert('Envio de mensaje satisfactoriamente!'); window.location.href='./AccesoUser.php'; </script>" ;
} catch (Exception $e) {
    // echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    // echo "<br>" , $mail->ErrorInfo;
    // echo "<br> $Asunto  $Mensaje  $Correo";
    // echo print_r($mail);
     echo "<script> alert('ERROR EN EL ENVIO!'); window.location.href='./AccesoUser.php'; </script>" ;
}


?>