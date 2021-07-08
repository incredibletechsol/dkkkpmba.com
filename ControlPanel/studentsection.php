<?php
session_start();
$_SESSION['member_id'] = "2";
$_SESSION['flag'] = "N";
$_SESSION['username'] = "student";
header('location:generaldownloads.php');
?>