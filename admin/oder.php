<?php
include_once 'checklogin.php';
include('controllers/c_oder.php');
$c_oder = new C_oder();
$c_oder->show_oder();
?>