<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";
    
// Utiliser les variables d'environnement et BIEN METTRE CES 2 LIGNES SOUS LE REQUIRE
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();    

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['objet']) && isset($_POST['message'])){
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8"; 
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $_ENV['MAIL_HOST'];                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $_ENV['MAIL_USER'];                     //SMTP username
        $mail->Password   = $_ENV['MAIL_PASSWORD'];                 //SMTP password
        $mail->Port       = $_ENV['MAIL_PORT'];                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_POST['mail'], "$_POST[nom] $_POST[prenom]");          //Add a recipient
        $mail->addAddress($_ENV['MAIL_TO'], $_ENV['MAIL_NAME_TO']);
        $mail->addReplyTo($_POST['mail'], "$_POST[nom] $_POST[prenom]");
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = $_POST['objet'];
        $mail->Body    = $_POST['message'];
        $mail->AltBody = $_POST['message'];
    
        $mail->send();
        // echo "Message has been sent";
        $isValid = true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $isValid = false;
    }
}

header("Location: ./?isValid=$isValid");
exit();
?>