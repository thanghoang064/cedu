<?php
include_once 'checklogin.php';
include('controllers/c_coupon.php');
$c_coupon = new C_coupon();
$c_coupon->Edit_coupon();
?>