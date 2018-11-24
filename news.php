<?php
error_reporting(0);
include('controllers/c_news.php');
$c_news = new C_news();
$c_news->HienThiTinTuc();
?>
