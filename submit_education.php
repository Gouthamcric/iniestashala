<?php
session_start();
if(isset($_POST['sn'])||isset($_POST['yc'])||isset($_POST['percentage'])){
    $sn="";
    $yc="";
    $percentage="";
if(isset($_POST['sn']))
{
    $sn=$_POST['sn'];
}
 if(isset($_POST['yc']))
{
    $yc=$_POST['yc'];
}
 if(isset($_POST['percentage']))
{
    $percentage=$_POST['percentage'];
}
    $edu=$sn.','.$yc.','.$percentage.'@';
include("connection.php");
    //  $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='update users set education=concat((select education from users where email="'.$_SESSION['id'].'"),"'.$edu.'") where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
   echo "ok";
}
else if(isset($_POST['company'])||isset($_POST['title'])||isset($_POST['internshipTime'])){
$compny="";
$title="";
$internshipTime="";
    if(isset($_POST['company']))
{
    $company=$_POST['company'];
}
 if(isset($_POST['title']))
{
    $title=$_POST['title'];
}
if(isset($_POST['internshipTime']))
{
    $internshipTime=$_POST['internshipTime'];
}
    $int=$company.','.$title.','.$internshipTime.'@';
include("connection.php"); 
//  $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='update users set internships=concat((select internships from users where email="'.$_SESSION['id'].'"),"'.$int.'") where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
   echo "ok";
}
else if(isset($_POST['course'])||isset($_POST['trainingTime'])){
$course="";
$traingTime="";
    if(isset($_POST['course']))
{
    $course=$_POST['course'];
}
 if(isset($_POST['trainingTime']))
{
    $trainingTime=$_POST['trainingTime'];
}

    $int=$course.','.$trainingTime.'@';
include("connection.php");
//   $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='update users set trainings=concat((select trainings from users where email="'.$_SESSION['id'].'"),"'.$int.'") where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
   echo "ok";
}
else if(isset($_POST['proj'])||isset($_POST['about'])){
$proj="";
$about="";
    if(isset($_POST['proj']))
{
    $proj=$_POST['proj'];
}
 if(isset($_POST['about']))
{
    $about=$_POST['about'];
}

    $int=$proj.'#'.$about.'@';
include("connection.php");  
// $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='update users set projects=concat((select projects from users where email="'.$_SESSION['id'].'"),"'.$int.'") where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
   echo "ok";
}
else if(isset($_POST['git'])||isset($_POST['other'])){
$git="";
$other="";
    if(isset($_POST['git']))
{
    $git=$_POST['git'];
}
 if(isset($_POST['other']))
{
    $other=$_POST['other'];
}

    $int=$git.','.$other.'^';
include("connection.php"); 
//  $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='update users set work_samples=concat((select work_samples from users where email="'.$_SESSION['id'].'"),"'.$int.'") where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
   echo "ok";
}
else if(isset($_POST['skill'])||isset($_POST['level'])){
$skill="";
$level="";
    if(isset($_POST['skill']))
{
    $skill=$_POST['skill'];
}
 if(isset($_POST['level']))
{
    $level=$_POST['level'];
}

    $int=$skill.','.$level.'@';
include("connection.php");   
//$con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='update users set skills=concat((select skills from users where email="'.$_SESSION['id'].'"),"'.$int.'") where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
   echo "ok";
}
else if(isset($_POST['add_det'])){
$add_det="";
    if(isset($_POST['add_det']))
{
    $add_det=$_POST['add_det'];
}

    $int=$add_det.'@';
include("connection.php");   
//$con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='update users set additional_details=concat((select additional_details from users where email="'.$_SESSION['id'].'"),"'.$int.'") where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry);
   echo "ok";
}
?>

