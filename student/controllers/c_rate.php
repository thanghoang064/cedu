<?php
@session_start();
class C_rate{

    public function show_rate()
    {
        include ("models/m_rate.php");


        $m_rate = new M_rate();
        if (isset($_SESSION["user"])) {
            $ma_nguoi_dung = $_SESSION["user"]->ma_nguoi_dung;
        }
        $couses = $m_rate->read_couse_by_id_user($ma_nguoi_dung);


        if(isset($_POST["btnDanhGia"]))
        {

            $rt = $m_rate->return_rate($_POST["ma_khoa_hoc"],$ma_nguoi_dung);
            if($rt->KQ!=0)
            {
                $error = "Khóa học này bạn đã đánh giá vui lòng đánh giá cái khác";
            }
            else {
                $ma_cam_nhan = NULL;
                $kq = $m_rate->Insert_rate($ma_cam_nhan, $_POST["danh_gia"], $_POST["ma_khoa_hoc"], $ma_nguoi_dung, 0);
                $sucess = "Gửi đánh giá thành công cảm ơn bạn đã dành thời gian đánh giá và góp ý";
            }
                $view = 'views/rate/v_rate.php';
                include 'templates/layout.php';

            return;
        }
        $view = 'views/rate/v_rate.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
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