<?php
include("connection.php");

$query='delete from data where id='.$_REQUEST['id'];
$res=  mysqli_query($con, $query);
