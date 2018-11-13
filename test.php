<?php
/**
 * Created by PhpStorm.
 * User: hoangthang
 * Date: 11/7/18
 * Time: 11:17 PM
 */


include ("models/m_order.php");
$m_order = new M_oder();
$abc = $m_order->return_oder(2,3);
echo $abc->KQ;
?>