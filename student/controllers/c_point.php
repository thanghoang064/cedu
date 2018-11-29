<?php
@session_start();
class C_point{

    public function show_point()
    {
        $notu = "";
        include ("models/m_point.php");


        $m_point = new M_point();
        if (isset($_SESSION["user"])) {
            $ma_nguoi_dung = $_SESSION["user"]->ma_nguoi_dung;
        }
        $class = $m_point->read_class_by_id_user($ma_nguoi_dung);

        if(isset($_POST["btnTimKiem"]))
        {
            $point = $m_point->read_point_by_iduser_and_idclass($ma_nguoi_dung,$_POST["ma_lop"]);
            //$point
            if(empty($point))
            {
                $notu =  "Dữ liệu điểm thi của lớp này chưa được cập nhật";
            }
            $view = 'views/point/v_point.php';
            include 'templates/layout.php';
            return;
        }
        $view = 'views/point/v_point.php';
        include 'templates/layout.php';
    }
    public function show_couseoder()
    {
        include ("models/m_couse.php");


        $m_couse = new M_couse();
        if (isset($_SESSION["user"])) {
            $ma_nguoi_dung = $_SESSION["user"]->ma_nguoi_dung;
        }
        $couses_o = $m_couse->read_couseoder($ma_nguoi_dung);
//        if(isset($_POST["btnTimKiem"]))
//        {
//            $documents = $m_couse->read_document_by_idcouse($_POST["ma_khoa_hoc"]);
//            $view = 'views/document/v_document.php';
//            include 'templates/layout.php';
//            return;
//        }
        $view = 'views/couseoder/v_couseoder.php';
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