<?php

include("connection.php");

$query='delete from cities where city_id='.$_REQUEST['id'];
$res=  mysqli_query($con, $query);
