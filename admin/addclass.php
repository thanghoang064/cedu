
<?php
include_once 'checklogin.php';
include('controllers/c_class.php');
$c_class = new C_class();
$c_class->Insert_class();
?>