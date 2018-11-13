<?php
error_reporting(0);
include('controllers/c_registration.php');
$c_registration = new C_registration();
$c_registration->add_user();
?>