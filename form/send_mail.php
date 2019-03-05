<?php

    if (isset($_POST['submit'])) {
      $name = $_POST['full_name'];
      $phone = $_POST['phone_info'];
      $mailfrom = $_POST['email_info'];
      $devicetype = $_POST['device_type'];
      $model_no = $_POST['model_no'];
      $message = $_POST['message'];

      $mailto = "wefixforless@asappcfix.com";
      $headers = "From: ".$mailfrom;
      $txt = "You have received a message from ".$name.".\n\n".$message;

      mail($txt, $phone, $devicetype, $model_no, );
      header("Location: index.php?mailsend");
    }






   

