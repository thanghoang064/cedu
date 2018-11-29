<?php
error_reporting(0);
include('controllers/c_teacher.php');
$c_teacher = new C_teacher();
$c_teacher->HienThiGiangVien();
?>