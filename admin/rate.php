<?php
include_once 'checklogin.php';
include('controllers/c_rate.php');
$c_rate = new C_rate();
$c_rate->show_rate();
?>