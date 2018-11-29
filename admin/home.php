<?php
include_once 'checklogin.php';
include("controllers/c_home.php");
$c_home = new C_home();
$c_home->show_chart();
?>