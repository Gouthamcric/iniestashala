<?php

include("connection.php");

$query='delete from users where id='.$_REQUEST['id'];
$res=  mysqli_query($con, $query);


