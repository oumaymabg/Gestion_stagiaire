<?php
session_start();
$_SESSION['login'] ='vide';
session_destroy();
header('location:login.php');
?>