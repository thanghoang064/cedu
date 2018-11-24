<?php
@session_start();
class C_news{

    public function HienThiTinTuc()
    {
        $isPaging = true;
        include ("models/m_news.php");
        include ("models/m_categorynews.php");

        $m_news = new M_news();

//        $couses = $m_couse->read_couse();
//        $ma_loai = $couses[0]->ma_loai;
        if(isset($_GET['ma_danh_muc']))
        {
            $ma_danh_muc = $_GET['ma_danh_muc'];
        }
        $newss = $m_news->read_news_by_categorynews($ma_danh_muc);
        $count=count($newss);
        // Phân trang 1
        include("libs/Pager.php");
        $p=new pager();
        $limit=6;
        $count=count($newss);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $newss = $m_news->read_news_by_categorynews($ma_danh_muc,$vt,$limit);
//        $couses_full = $m_couse->read_couse_by_category_full($ma_loai);
//        if (isset($_POST["btnTimKhoaHoc"]))
//        {
//            $isPaging = false;
//            $ten_khoa_hoc = $_POST["ten_khoa_hoc"];
//            $couses= array($m_couse->read_couse_by_idcouse($ten_khoa_hoc));
//            $couses_full = $m_couse->read_couse_by_category_full($ma_loai);
//            $view = 'view/couse/v_couse.php';
//            include 'templates/couse/layout.php';
//            return;
//        }
        $view = 'view/news/v_news.php';
        include 'templates/news/layout.php';

        //  $view = 'view/products/'
    }
    public  function show_singe_news()
    {
        include ("models/m_news.php");
        $m_news = new M_news();
      //  include ("models/m_order.php");
        if(isset($_GET["ma_tin_tuc"]))
        {
            $ma_tin_tuc = $_GET["ma_tin_tuc"];
        }
       // $m_order = new M_oder();
        $new = $m_news->read_news_by_idnews($ma_tin_tuc);
        $news_l = $m_news->read_news_by_categorylatest($ma_tin_tuc);
        $view = 'view/singernews/v_singernews.php';
        include('templates/singernews/layout.php');
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