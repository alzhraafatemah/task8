<?php

//session_start();

//$_SESSION=array();
//session_unset();
//step1:
//unset($_SESSION['user_email']);
//unset($_SESSION['pw']);
//step2:
//session_destroy();
$expire_date = time() - (86400*30);
setcookie('user_data', $_COOKIE['user_data'], $expire_date, '/');

echo"You'r logged out";

header("refresh:3; URL=./login.php");