<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <center>
  <form  class="contact_form" action="send_mail.php" method="post">
    
    <input type="text" id="fullname" name="fullname" placeholder="Your full name.."><br>

    <input type="text" id="phoneinfo" name="contact_info" placeholder="Your phone number.."><br>

    <input type="text" id="emailinfo" name="email_info" placeholder="Your E-mail.."><br>

    <input type="text" id="devicetype" name="device_type" placeholder="Device type - Cell-Phone/Tablet/Laptop etc.."><br>

    <input type="text" id="modelno" name="model_n0" placeholder="Device Model No.."><br>

    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select><br>
  
    <input type="submit" value="Submit">

  </form>
</center>
</div>

</body>
</html>
