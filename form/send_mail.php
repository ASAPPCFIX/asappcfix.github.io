<?php
    $msg = "";

    if (isset($_POST['submit'])) {
        require 'phpmailer/PHPMailerAutoload.php';

        function sendemail($to, $from, $fromName, $body) {
          $mail = new PHPMailer();
          $mail ->setfrom($from, $fromName);
          $mail ->addAddress($to);
          $mail ->Subject = 'Customer Device Form';
          $mail ->Body = $body;
          $mail ->isHTML(false);

          return $mail->send();
        }

        $name = $_POST['full_name'];
        $phone = $_POST['phone_info'];
        $email = $_POST['email_info'];
        $device_type = $_POST['device_type,'];
        $model = $_POST['model_no'];
        $message = $_POST['message'];

        if (sendemail('wefixforless@asappcfix.com', $name, $phone, $email, $device_type, $model, $message ))
          $msg ='Message Sent!';
          else 
              $msg = 'Message Failed!'
    }


