<?php

include("connection.php");
$query='insert into cities(city_name,city_state) values("'.$_REQUEST['city_name'].'","'.$_REQUEST['state_name'].'")';
$res=  mysqli_query($con, $query);
$query='select * from cities where city_name="'.$_REQUEST['city_name'].'" and city_state="'.$_REQUEST['state_name'].'"';
$res=  mysqli_query($con, $query);
$out=  mysqli_fetch_array($res);
echo $out['city_id'];