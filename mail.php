<?php


$email = $_POST['email'];
$message = $_POST['message'];
$to = "mywebdevo@gmail.com";
$subject = "Mail From Website";


$headers = "From".$email. "\r\n" .
"CC: essiencharles29@gmail.com";

$txt = "You have received an e-mail from ".$name ."\r\nEmail: " .$email ."\r\n
        Message: ". $message;

 
        
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

header('Location:thankyou.html');













?>