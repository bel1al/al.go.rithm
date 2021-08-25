<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email_addr'];
$message= $_POST['old'];

$mailTo = "skywokerua@email.com";
$headers =  "From: ".$email;

mail($mailTo, $name, $message, $headers);
//redirect
header("Location:details.html");
?>