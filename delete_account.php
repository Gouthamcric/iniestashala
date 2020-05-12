<?php
session_start();
include("connection.php");
$query='delete from users where email="'.$_SESSION['id'].'"';
$res=  mysqli_query($con, $query);

header('location: login.php?msg=account deleted');
