<?php
//@session_start();
class C_couse{

    public function show_document()
    {
        include ("models/m_couse.php");


        $m_couse = new M_couse();

        $couses = $m_couse->read_couse_by_id_user(2);
        if(isset($_POST["btnTimKiem"]))
        {
            $documents = $m_couse->read_document_by_idcouse($_POST["ma_khoa_hoc"]);
            $view = 'views/document/v_document.php';
            include 'templates/layout.php';
            return;
        }
        $view = 'views/document/v_document.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }
    public  function show_singe_couse()
    {
        include ("models/m_couse.php");
        include ("models/m_order.php");
        $m_couse = new M_couse();
        $couses = $m_couse->read_couse();
        $ma_khoa_hoc = $couses[0]->ma_khoa_hoc;
        if(isset($_GET["ma_khoa_hoc"]))
        {
            $ma_khoa_hoc = $_GET["ma_khoa_hoc"];
        }
        $m_order = new M_oder();

        $couse = $m_couse ->read_couse_by_idcouse($ma_khoa_hoc);
        $classs = $m_couse->read_class_and_teacher_by_idcouse($ma_khoa_hoc);


        $view = 'view/singer/v_singer.php';
        include('templates/singer/layout.php');
    }
    public function Hien_thi_trang_chu()
    {
        include ("models/m_couse.php");
        include ("models/m_rate.php");
        $m_couse = new M_couse();
        $new_couses = $m_couse->Read_couse_new(0,6);
        $m_rate = new M_rate();
        $rate = $m_rate->read_rate();

        $view = 'view/home/v_home.php';
        include 'templates/layout.php';

    }
}
?>