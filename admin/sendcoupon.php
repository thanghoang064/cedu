<?php
include('controllers/c_coupon.php');
$c_coupon =  new C_coupon();
$c_coupon->send_coupon();
?>