<?php
//get data from form  
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email= $_POST['email_addr'];
$message= $_POST['old'];

$mailTo = "skywokeruarad@gmail.com";
$headers =  "From: ".$email;

mail($mailTo, $name, $message, $headers);
//redirect
header("Location:details.html");
}
?>