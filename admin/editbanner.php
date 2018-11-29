<?php
include_once 'checklogin.php';
include('controllers/c_banner.php');
$c_banner = new C_banner();
$c_banner->Edit_banner();
?>