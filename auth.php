<?php
session_start();

if(!isset($_SESSION['ucode']) || (isset($_SESSION['ucode']) && empty($_SESSION['ucode']))){
    if(strstr($_SERVER['PHP_SELF'], 'login.php') === false)
    header('location:login.php');
}else{
    if(strstr($_SERVER['PHP_SELF'], 'admin.php') === false)
    header('location:admin.php');
}
