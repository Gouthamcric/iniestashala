<?php

include("connection.php");
$query='insert into category(category) values("'.$_REQUEST['category'].'")';
$res=  mysqli_query($con, $query);
$query='select * from category where category="'.$_REQUEST['category'].'"';
$res=  mysqli_query($con, $query);
$out=  mysqli_fetch_array($res);
echo $out['category_id'];