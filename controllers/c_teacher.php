<?php
@session_start();
class C_teacher{

//    public function HienThiGiangVien()
//    {
//        include ("models/m_teacher.php");
//        $m_teacher = new M_news();
//        $view = 'view/teacher/v_teacher.php';
//        include 'templates/teacher/layout.php';
//
//    }
    public function HienThiGiangVien()
    {
        $isPaging = true;
        include ("models/m_teacher.php");

        $m_teacher = new M_teacher();
        $teachers = $m_teacher->read_teacher();
        $count=count($teachers);
        // Phân trang 1
        include("libs/Pager.php");
        $p=new pager();
        $limit=6;
        $count=count($teachers);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $teachers = $m_teacher->read_teacher($vt,$limit);
       // $couses_full = $m_couse->read_couse_by_category_full($ma_loai);
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
        $view = 'view/teacher/v_teacher.php';
        include 'templates/teacher/layout.php';

        //  $view = 'view/products/'
    }
}
?>