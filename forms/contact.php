<?php
$msg = '';
if (isset($_POST['submit'])) {

  $name = $_POST['name'];

  $email = $_POST['email'];

  $phone = $_POST['phone'];

  $message = $_POST['message'];

  $subject = $_POST['subject'];

  $to = "bibhanshuofficial@gmail.com";

  $message = "<b>Name :  $name</b><br /> <b>Email :  $email</b><br /> <b>Phone :  $phone</b><br /> <b>Message :  $message</b><br />";



  $header .= 'From: help@ontechglobal.in' . "\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail($to, $subject, $message, $header);

  if ($retval == true) {
    // echo "<script>window.location.href='http://ontechglobal.in/thankyou.php';</script>";
    echo "<script>alert ($message);</script>";
  } else {
    $msg = "Sorry ....Message could not be sent...!!";
  }
}      

  
?>