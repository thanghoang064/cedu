
<?php
include('controllers/c_order.php');
$order = new C_order();
$order->charge();
?>