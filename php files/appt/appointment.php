<?php

    if(isset($_POST['test']) && !empty($_POST['test'])) {
    die();

}

// get variables from the form
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST ['email'];
$device = $_POST['device'];
$time= $_POST['time'];
$date = $_POST['date'];
$message = $_POST['message'];



//Load Composer's autoloader
        require 'PHPMailerAutoload.php';
        require 'class.phpmailer.php'; // path to the PHPMailer class
        require 'class.smtp.php';
        require 'saywhat.php';

$mail = new PHPMailer();                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = AK47;                 // SMTP username
    $mail->Password = COMBO;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    // Sender
    $mail->setFrom($email);

    // Recipients
    $mail->addAddress('asappcfix@gmail.com', 'ASAP PC FIX');     // Add a recipient


    //Body content
    $body = "<b>Message From:</b>". $name."<br><b>Phone:</b>".$phone."<br><b>E-mail:</b><br>".$email."<br><b>Device-Type:</b>".$device."<br><b>Time:</b>".$time."<br><b>Date:</b>". $date."<br><br><b>Message:</b>". $message;
    
   

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Appointment:'. $name;

    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    header("location:https://asappcfix.github.io/appt_confirm.html");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}