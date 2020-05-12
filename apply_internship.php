<?php
//$company_id=$_GET['company_id'];
//$company_id='2';
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
     //$con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry2='select * from application where applicant_id="'.$_SESSION['id'].'" and company_id="'.$_REQUEST['company_id'].'"';
        $res2= mysqli_query($con, $querry2)or die(mysqli_errno($con));
        $count=mysqli_num_rows($res2);
        if($count<1){
               
        $querry='insert into application(applicant_id,company_id,answers,date) values("'.$_SESSION['id'].'","'.$_REQUEST['company_id'].'","'.$_REQUEST['answers'].'",curdate())';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
echo "submitted";
        }
else {echo 'already applied';}
}}    
?>