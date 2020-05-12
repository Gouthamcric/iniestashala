<?php

include("connection.php");

if(isset($_REQUEST['id'])){
$query='update users set approval_status="Approved" where id='.$_REQUEST['id'];
$res=  mysqli_query($con, $query);
echo "Approved";
}
else if(isset($_REQUEST['id_cross'])){
$query='update users set approval_status="Not Approved" where id='.$_REQUEST['id_cross'];
$res=  mysqli_query($con, $query);
echo "Not Approved";
}