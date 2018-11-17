<?php

include ("models/m_categorynews.php");
//include ("models/m_couse.php");
class C_categorynews
{
    function show_categorynews()
    {
        $m_categorynews = new M_categorynews();
        $categorynews = $m_categorynews->Read_categorynews();
        $view = 'views/categorynews/v_categorynews.php';
        include('templates/layout.php');
    }
    function add_categorynews()
    {
        // Models

        $m_categorynews =new M_categorynews();
   //     $categorys = $m_category->read_category();

        // <!--ma_loai, ten_loai, mo_ta, hinh-->
        if(isset($_POST["btnSave"]))
        {
            $ten_danh_muc= preg_replace('!\s+!', ' ', $_POST["ten_danh_muc"]);
            $kq=$m_categorynews->return_categorynews_by_name($ten_danh_muc);
             $trang_thai=$_POST["trang_thai"];
            if ($kq->KQ>0)
            {
                $error = "Tên danh mục đã bị trùng!";
            }
            else {
                //  print_r($loai_san_phams);
                $kq = $m_categorynews->add_categorynews("", $ten_danh_muc, 1);
                if ($kq) {

                    echo "<script>window.location='categorynews.php'</script>";

                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }

        }

        // View
        $view = 'views/categorynews/v_addcategorynews.php';
        include('templates/layout.php');

    }
    function Edit_categorynews()
    {
        // Models
        if(isset($_GET["ma_danh_muc"]))
        {

            $ma_danh_muc=$_GET["ma_danh_muc"];
            $m_categorynews=new M_categorynews();
            $categorynews =$m_categorynews->Read_categorynews_by_id($ma_danh_muc);
            if(isset($_POST["btnSave"]))
            {

                $ten_danh_muc=$_POST["ten_danh_muc"];
                $trang_thai = $_POST["trang_thai"];
                $kq =  $m_categorynews->Edit_Categotynews($ma_danh_muc,$ten_danh_muc,$trang_thai);
                if($kq)
                {
                    echo "<script>window.location='categorynews.php'</script>";
                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công');</script>";
                }

            }
            // End Cập nhật



            // View
            $view = 'views/categorynews/v_editcategorynews.php';
            include('templates/layout.php');

        }


    }
    function  delete_category()
    {
        if(isset($_GET["ma_loai"])) {
            $ma_loai = $_GET["ma_loai"];
            $m_category = new M_category();
            $m_couse = new M_couse();
            $couses = $m_couse->read_couse_by_category($ma_loai);
//            foreach ($couses as $cs)
//            {
//                $m_couse->Delete_couse($cs->ma_khoa_hoc);
//            }

            //  echo count($couses);
            if (count($couses) > 0) {
                echo "<script>alert('Xóa không thành công ! Trong danh mục đã tồn tại khóa học');window.location='category.php'</script>";
            }
            else {
                $kq = $m_category->Delete_category($ma_loai);
                echo "<script>alert('Xóa thành công');window.location='category.php'</script>";
            }

        }

    }

}
?>