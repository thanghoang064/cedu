<?php
include_once 'checklogin.php';
include('controllers/c_news.php');
$c_news = new C_news();
$c_news->Edit_news();
?>