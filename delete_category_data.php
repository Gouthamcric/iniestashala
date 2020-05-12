<?php

include("connection.php");

$query='delete from category where category_id='.$_REQUEST['id'];
$res=  mysqli_query($con, $query);
