<?php
@session_start();
class C_couse{

    public function HienThi()
    {
        $isPaging = true;
        include ("models/m_couse.php");
        include ("models/m_category.php");

        $m_couse = new M_couse();

        $couses = $m_couse->read_couse();
        $ma_loai = $couses[0]->ma_loai;
        if(isset($_GET['ma_loai']))
        {
            $ma_loai = $_GET['ma_loai'];
        }
        $couses = $m_couse->read_couse_by_category($ma_loai);
        $count=count($couses);
        // Phân trang 1
        include("libs/Pager.php");
        $p=new pager();
        $limit=6;
        $count=count($couses);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $couses=$m_couse->read_couse_by_category($ma_loai,$vt,$limit);
        $couses_full = $m_couse->read_couse_by_category_full($ma_loai);
        if (isset($_POST["btnTimKhoaHoc"]))
        {
            $isPaging = false;
            $ten_khoa_hoc = $_POST["ten_khoa_hoc"];
            $couses= array($m_couse->read_couse_by_idcouse($ten_khoa_hoc));
            $couses_full = $m_couse->read_couse_by_category_full($ma_loai);
            $view = 'view/couse/v_couse.php';
            include 'templates/couse/layout.php';
            return;
        }
        $view = 'view/couse/v_couse.php';
        include 'templates/couse/layout.php';

        //  $view = 'view/products/'
    }
    public  function show_singe_couse()
    {
        include ("models/m_couse.php");
        include ("models/m_order.php");
        include ("models/m_rate.php");
        $m_couse = new M_couse();
        $m_rate = new M_rate();
        $couses = $m_couse->read_couse();
        $ma_khoa_hoc = $couses[0]->ma_khoa_hoc;
        if(isset($_GET["ma_khoa_hoc"]))
        {
            $ma_khoa_hoc = $_GET["ma_khoa_hoc"];
        }
        $m_order = new M_oder();

        $couse = $m_couse ->read_couse_by_idcouse($ma_khoa_hoc);
        $classs = $m_couse->read_class_and_teacher_by_idcouse($ma_khoa_hoc);
        $rates = $m_rate->Read_rate_home_by_idcouse($ma_khoa_hoc);
        $view = 'view/singer/v_singer.php';
        include('templates/singer/layout.php');
    }
    public function Hien_thi_trang_chu()
    {
        include ("models/m_couse.php");
        include ("models/m_news.php");
    //    include ("models/m_rate.php");
        include ("models/m_rate.php");
        // include ("models/m_news.php");
        //    include ("models/m_rate.php");
        $m_rate = new M_rate();
        $m_couse = new M_couse();
        $m_news = new M_news();
        $rates = $m_rate->Read_rate_home();
        $new_couses = $m_couse->Read_couse_new(0,3);
        $cc = $m_couse->count_couse();
        $ct1 = $m_couse->count_teacher();

        $cs = $m_couse->count_students();
        $news = $m_news->read_news_by_latesthome();
        $view = 'view/home/v_home.php';
        include 'templates/layout.php';

    }
}
?>