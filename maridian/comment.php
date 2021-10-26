<?php
// define variables and set to empty values
$name = $email = $subject = $message = "";

if ($_POST) {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);
  
  $to = "decordovaja@gmail.com";
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";
  if(mail($to,$subject,$message,$headers)){
	echo "Sent";  
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
