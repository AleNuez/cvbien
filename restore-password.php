<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$receiveremail = $_SESSION['email-to-restore'];
try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
   // $mail->Host       = 'smtp.example.com';
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'alejandro.emmanuel.n@gmail.com';                     //SMTP username
    $mail->Password   = 'gxqhqmygijhywugd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('alejandro.emmanuel.n@gmail.com', 'La Musica de Gogo Support');
    $mail->addAddress($receiveremail);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    $action = "http://{$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']}/change-password.php";
    $body = "Se ha enviado un correo para recuperar su contraseña. Por favor haga click en el siguiente enlace para
    restablecer su contraseña. -> <form action=\"{$action}\" method=\"post\"> 
    <input type=\"hidden\" name=\"recieved\"  value=\"true\"></input>
    <input type=\"submit\" value=\"Restablecer\"></input></form>";
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperar Acceso';
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<script type="text/javascript">
window.location.href = 'email-sent.php';
</script>