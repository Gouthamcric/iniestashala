<?php

include("connection.php");

$query='delete from application where id='.$_REQUEST['id'];
$res=  mysqli_query($con, $query);
