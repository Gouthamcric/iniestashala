<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
session_start();

include("connection.php");
$query='insert into subscription(email) values ("'.$_POST["email"].'")';
$res=  mysqli_query($con, $query);
 $mail = new PHPMailer;
 $mail->IsSMTP();       
 $mail->Host = 'tls://smtp.gmail.com:587';   
 $mail->Port = 587;       
 $mail->SMTPAuth = true;      
 $mail->Username = 'goutham.n@vitap.ac.in';    
 $mail->Password = 'gnq316gnq316';     
 $mail->SMTPSecure = 'tls';      
 $mail->From = 'gouthamnatarajancric@gmail.com';   
 $mail->FromName = 'Goutham Natarajan';   
 $mail->AddAddress($_POST["email"], 'Goutham');  
 $mail->WordWrap = 50;      
 $mail->IsHTML(true);              
 $mail->Subject = 'Subscription confirmation|Inieastashala';   
 $mail->Body = 'Your subscription is confirmed with iniestashala,you will receive alerts for best opportunities in your inbox and to download Iniestashala Resume Guide.';
$message="";
 if($mail->Send())        
 {
     
 
  $message = 'ok';
 
 }
 else{$message="";
 }

