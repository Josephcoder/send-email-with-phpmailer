<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function send_email($name,$subject,$email,$phone,$message){
    $msg = $message .  '<br>'. ' From ' . '<strong>e-mail:</strong> ' . $email . ', <strong>phone:</strong> ' . $phone;
// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eniyomugabo2019@gmail.com';                     // SMTP username
    $mail->Password   = '0780334387';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('eniyomugabo2019@gmail.com', 'RPC info');
    $mail->addAddress('eniyomugabo2019@gmail.com', 'RPC info');     // Add a recipient
    $mail->addAddress('shyirambere2016@gmail.com');               // Name is optional
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;

    $mail->send();
    if($mail){
    echo 'Message has been sent';
    }else{
        echo 'Message has not been sent'; 
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}}
?>