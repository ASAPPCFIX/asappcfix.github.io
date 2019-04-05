<?php

    if (isset($_POST['submit'])){



    }



// get variables from the form

$name = $_POST['name'];

$phone = $_POST['phone'];

$email = $_POST['email'];

$device = $_POST['device'];

$model = $_POST['model'];

$message = $_POST['message'];





//Load Composer's autoloader

        require 'PHPMailerAutoload.php';

        require 'class.phpmailer.php'; // path to the PHPMailer class

        require 'class.smtp.php';



$mail = new PHPMailer();                              // Passing `true` enables exceptions

try {

    //Server settings

    $mail->SMTPDebug = 0;                                // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->Host = 'smtp.1and1.com';  // Specify main and backup SMTP servers

    $mail->SMTPAuth = true;                               // Enable SMTP authentication

    $mail->Username = 'wefixforless@asappcfix.com';                 // SMTP username

    $mail->Password = 'gimmedat123123A!';                           // SMTP password

    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

    $mail->Port = 587;                                    // TCP port to connect to



    // Sender

    $mail->setFrom('Contactform@asappcfix.com', 'ASAP PC FIX');



    // Recipients

    $mail->addAddress('wefixforless@asappcfix.com', 'ASAP PC FIX');     // Add a recipient





    //Body content

    $body = "<b>Message From:</b>". $name."<br><b>Phone:</b>".$phone."<br><b>Email:</b>". $email."<br><b>Device-Type:</b>" . $device."<br><b>Model#:</b>" . $model."<br><br><b>Message:</b>" . $message;

    

   



    //Content

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'This Person Needs A Repair:'. $name;



    $mail->Body    = $body;

    $mail->AltBody = strip_tags($body);



    $mail->send();

    header("location:https://asappcfix.com");

} catch (Exception $e) {

    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

}