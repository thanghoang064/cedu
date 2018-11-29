<?php
include_once 'checklogin.php';
include('controllers/c_rate.php');
$c_news = new C_rate();
$c_news->Edit_status();
?>