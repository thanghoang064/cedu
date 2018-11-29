
<?php
include_once 'checklogin.php';
include('controllers/c_document.php');
$c_document = new C_document();
$c_document->show_document();
?>