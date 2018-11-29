<?php
include_once 'checklogin.php';
include('controllers/c_teacher.php');
$c_teacher = new C_teacher();
$c_teacher->Edit_teacher();
?>