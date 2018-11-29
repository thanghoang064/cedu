<?php

include ("models/m_rate.php");
//include ("models/m_couse.php");
class C_rate
{
    function show_rate()
    {
        $m_rate = new M_rate();
        $rates = $m_rate->Read_rate();

        $view = 'views/rate/v_rate.php';
        include('templates/layout.php');
    }

    function Edit_status()
    {
        // Models
            $trang_thai = $_GET['trang_thai'];
            $ma_cam_nhan = $_GET['ma_cam_nhan'];

            $update_trang_thai = $trang_thai == 1 ? 0 : 1;

            $m_rate = new M_rate();
            $rates = $m_rate->Edit_status($ma_cam_nhan, $update_trang_thai);
            header("Location: http://localhost:8888/cedu/admin/rate.php");
    }


}
?>