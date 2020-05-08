<?php
$con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
$querry='update application set app_status="'.$_REQUEST['status'].'" where applicant_id="'.$_REQUEST['applicant_id'].'" and company_id="'.$_REQUEST['company_id'].'"';
$res= mysqli_query($con, $querry)or die(mysqli_errno($con));
?>

