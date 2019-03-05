<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contactinfo = $_POST['contact_info'];
    $email_info = $_POST['email_info']
    $devicetype = $_POST['device_type']
    $modelno = $_POST['model_no']


   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer(true);
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.ionos.com";
   $mail ->Port = 587; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "wefixforless@asappcfix.com";
   $mail ->Password = "gimmedat123123A!";
   $mail ->SetFrom("Form@info.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   

