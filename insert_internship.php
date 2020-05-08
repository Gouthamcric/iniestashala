<?php
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
   $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
       $querry='insert into data(job,work_home,partime,start_date,duration,internship_women,job_offer,company_name,location,stipend,posted_on,apply_by,category,openings,responsibility,perks,skills,questions,description,owner) values("'.$_POST['job'].'","'.$_POST['work_home'].'","'.$_POST['partime'].'","'.$_POST['start_date'].'","'.$_POST['duration'].'","'.$_POST['internship_women'].'","'.$_POST['job_offer'].'","'.$_POST['company_name'].'","'.$_POST['location'].'","'.$_POST['stipend'].'","'.$_POST['posted_on'].'","'.$_POST['apply_by'].'","'.$_POST['category'].'","'.$_POST['openings'].'","'.$_POST['res'].'","'.$_POST['perks'].'","'.$_POST['skills'].'","'.$_POST['questions'].'","'.$_POST['description'].'","'.$_SESSION['id'].'")';
  // $querry='insert into data values("dsadsadsa")'; 
    //   $querry2='insert into application values()';
   $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
    // $res2= mysqli_query($con, $querry2)or die(mysqli_errno($con));
        echo "posted successfully!";
}}
?>

