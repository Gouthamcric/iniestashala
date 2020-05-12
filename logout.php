<?php

session_start();
session_destroy();
if($_SESSION['id']=="admin"){header("location:admin_login.php?msg=Successfully logged out");
}
else{
header("location:login.php?msg=Successfully logged out");
}
?>