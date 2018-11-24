<?php
include ("models/m_news.php");
include ("models/m_categorynews.php");
class C_news{

    public function show_news()
    {


        $m_news = new M_news();

       // $news = $m_news->read_news();
      //  $ma_loai = $couses[0]->ma_loai;
        if(isset($_GET['ma_danh_muc']))
        {
            $ma_danh_muc = $_GET['ma_danh_muc'];
        }
      $news = $m_news->read_news_by_categorynews($ma_danh_muc);

//        $m_category  = new M_category();
//        $category =  $m_category->Read_category_by_id($ma_loai);
        $view = 'views/news/v_news.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }
    function Insert_news()
    {
    //    $m_category  = new M_category();
//        if(isset($_GET['ma_loai']))
//        {
//            $ma_loai = $_GET['ma_loai'];
//        }
      //  $category =  $m_category->Read_category_by_id($ma_loai);

        $m_news = new M_news();
        if (isset($_POST["btnSave"])) {
         //   `ma_tin_tuc`, `ten_tin_tuc`, `hinh`, `mo_ta_ngan`, `noi_dung`, `ma_danh_muc`, `trang_thai`, `ngay_tao`
            //$ma_loai =0;
            $ma_danh_muc = $_POST['ma_danh_muc'];
            $ma_tin_tuc = NULL;
            $hinh = $_FILES["f_hinh_tin_tuc"]["error"] == 0 ? $_FILES["f_hinh_tin_tuc"]["name"] : "";
            $ten_tin_tuc = $_POST["ten_tin_tuc"];
            $mo_ta_ngan = $_POST["mo_ta_ngan"];
            $noi_dung = $_POST["noi_dung"];
            $trang_thai = 1;
            $ngay_tao = date('Y-m-d', time());
            //echo $ngay;
            $kq = $m_news->Insert_news($ma_tin_tuc,$ten_tin_tuc,$hinh,$mo_ta_ngan,$noi_dung,$ma_danh_muc,$trang_thai,$ngay_tao);

            if ($kq) {
                if ($hinh != "") {
                    move_uploaded_file($_FILES["f_hinh_tin_tuc"]["tmp_name"], "../public/layout/imagesnews/$hinh");
                }
                echo "<script>window.location='news.php?ma_danh_muc=" . $ma_danh_muc . "'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        // View
        $view = 'views/news/v_addnews.php';
        include('templates/layout.php');

    }
    function Edit_news()
    {
       // $m_category  = new M_category();
        if(isset($_GET['ma_danh_muc']))
        {
            $ma_danh_muc = $_GET['ma_danh_muc'];
        }
     //   $category =  $m_category->Read_category_by_id($ma_loai);
        /*  `ma_khoa_hoc`, `ten_khoa_hoc`, `ma_loai`, `thoi_gian`, `thong_tin_khoa_hoc`, `ke_hoach_hoc_tap`, `hinh`, `hoc_phi`, `trang_thai`*/
        // Models
        if(isset($_GET["ma_tin_tuc"]))
        {

            $ma_tin_tuc=$_GET["ma_tin_tuc"];

            $m_news = new M_news();

        //    $couse  =$m_couse->read_couse_by_idcouse($ma_khoa_hoc);
            $new = $m_news->read_news_by_idnews($ma_tin_tuc);
            // Cập nhật
            if(isset($_POST["btnSave"]))
            {
                //$hinh = $_FILES["f_hinh_tin_tuc"]["error"] == 0 ? $_FILES["f_hinh_tin_tuc"]["name"] : "";
                $ten_tin_tuc = $_POST["ten_tin_tuc"];
                $mo_ta_ngan = $_POST["mo_ta_ngan"];
                $noi_dung = $_POST["noi_dung"];
                $hinh=$_FILES["f_hinh_tin_tuc"]["error"]==0?$_FILES["f_hinh_tin_tuc"]["name"]:$new->hinh;
                $trang_thai = $_POST["trang_thai"];


                $kq=$m_news->Edit_news($ma_tin_tuc,$ten_tin_tuc,$hinh,$mo_ta_ngan,$noi_dung,$trang_thai);

                if($kq)
                {
                    if($_FILES["f_hinh_tin_tuc"]["error"]==0)
                    {
                        move_uploaded_file($_FILES["f_hinh_tin_tuc"]["tmp_name"],"../public/layout/imagesnews/$hinh");
                    }

                    echo "<script>window.location='news.php?ma_danh_muc=" . $ma_danh_muc . "'</script>";

                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật



            // View
            $view = 'views/news/v_editnews.php';
            include('templates/layout.php');

        }



    }
    function  delete_couse()
    {
        if(isset($_GET["ma_khoa_hoc"])) {
            $ma_khoa_hoc = $_GET["ma_khoa_hoc"];

            $m_couse = new M_couse();
            $class = $m_couse->read_class_by_idcouse($ma_khoa_hoc);
//            foreach ($couses as $cs)
//            {
//                $m_couse->Delete_couse($cs->ma_khoa_hoc);
//            }

            if(isset($_GET["ma_loai"])) {
                $ma_loai = $_GET["ma_loai"];
            }
            //  echo count($couses);
            if (count($class) > 0) {
                echo "<script>alert('Xóa không thành công ! Trong khóa học đã tồn tại lớp');window.location='couse.php?ma_loai=" . $ma_loai . "'</script>";

            }
            else {
                $kq = $m_couse->Delete_couse($ma_khoa_hoc);
                echo "<script>alert('Xóa thành công');window.location='couse.php?ma_loai=" . $ma_loai . "'</script>";
            }

        }

    }

}
?><?php
/**
 * Created by PhpStorm.
 * User: hoangthang
 * Date: 11/18/18
 * Time: 4:44 PM
 */