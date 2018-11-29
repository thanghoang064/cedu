<?php
include_once 'checklogin.php';
include('controllers/c_categorynews.php');
$c_categorynews = new C_categorynews();
$c_categorynews->add_categorynews();
?>
