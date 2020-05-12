<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include("connection.php");
session_start();
if(!isset($_SESSION['id'])){
   
header('location: login.php?msg=kindly sign in first');
exit;
}

else
{ $now = time();
 if ($now > $_SESSION['expire']) {
    
            session_unset();
             session_destroy();
            echo "Your session has expired! <a href='registerStudent.php'>sign up here</a>";
}
        else {
 $query='select * from users where job_pre_1="'.$_POST['job'].'" or job_pre_2="'.$_POST['job'].'" or city_pre_1="'.$_POST['location'].'" or city_pre_2="'.$_POST['location'].'" or city_pre_3="'.$_POST['location'].'"'; 
 $res=  mysqli_query($con, $query);
 $count= mysqli_num_rows($res);$i=0;
 while($i!=$count){$out= mysqli_fetch_array($res);
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
 $mail->AddAddress($out["email"], $out["first_name"]);  
 $mail->WordWrap = 50;      
 $mail->IsHTML(true);              
 $mail->Subject = 'new internship available|Inieastashala';   
 $mail->Body = 'A new internship that matched your profile has been added few seconds ago ,please check iniestashala.';
$message="";
 if($mail->Send())        
 {
     
 
  $message = 'ok';
 
 }
 else{$message="";

 }

    $i++;         
 }
            
            
            
            
            
  // $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
       $querry='insert into data(job,work_home,partime,start_date,duration,internship_women,job_offer,company_name,location,stipend,posted_on,apply_by,category,openings,responsibility,perks,skills,questions,description,owner) values("'.$_POST['job'].'","'.$_POST['work_home'].'","'.$_POST['partime'].'","'.$_POST['start_date'].'","'.$_POST['duration'].'","'.$_POST['internship_women'].'","'.$_POST['job_offer'].'","'.$_POST['company_name'].'","'.$_POST['location'].'","'.$_POST['stipend'].'","'.$_POST['posted_on'].'","'.$_POST['apply_by'].'","'.$_POST['category'].'","'.$_POST['openings'].'","'.$_POST['res'].'","'.$_POST['perks'].'","'.$_POST['skills'].'","'.$_POST['questions'].'","'.$_POST['description'].'","'.$_SESSION['id'].'")';
  // $querry='insert into data values("dsadsadsa")'; 
    //   $querry2='insert into application values()';
   $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
    // $res2= mysqli_query($con, $querry2)or die(mysqli_errno($con));
   
   
   
   
   
   
   
   
        echo "posted successfully!";
}}
?>

