<?php
include_once 'checklogin.php';
include('controllers/c_point.php');
//$date = new DateTime(date('Y-m-d'));
//$timeStamp = $date->getTimestamp();
//$time = 1539907200 + (14 * 7 * 60 * 24 * 60);
//
//echo date('Y-m-d', $time);
//die();
$c_point = new C_point();
$c_point->show_student();
?>