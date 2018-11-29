<?php
include_once 'checklogin.php';
include('controllers/c_category.php');
$c_category = new C_category();
$c_category->Edit_category();
?>
