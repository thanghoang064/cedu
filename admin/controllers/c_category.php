<?php

include ("models/m_category.php");
//include ("models/m_couse.php");
class C_category
{
    function show_category()
    {
// Models
        $m_category = new M_category();
        $categorys = $m_category->read_category();
        $view = 'views/category/v_category.php';
        include('templates/layout.php');
// View
    }
    function add_category()
    {
        // Models

        $m_category =new M_category();
        $categorys = $m_category->read_category();

        // <!--ma_loai, ten_loai, mo_ta, hinh-->
        if(isset($_POST["btnSave"]))
        {

            // $ma_loai = $_POST["ma_loai"];

            $ten_loai=preg_replace('!\s+!', ' ', $_POST["ten_loai"]);
            $m_category=new M_category();
            $kq=$m_category->return_category_by_name($ten_loai);
            // $mo_ta=$_POST["mo_ta"];
            //  $ma_loai_cha = $_POST["ma_loai_cha"];
            if ($kq->KQ>0)
            {
                $error = "Tên danh mục đã bị trùng!";

            }


            else {
                //  print_r($loai_san_phams);
                $kq = $m_category->add_category("", $ten_loai, "");
                if ($kq) {

                    echo "<script>window.location='category.php'</script>";

                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }

        }

        // View
        $view = 'views/category/v_addcategory.php';
        include('templates/layout.php');

    }
    function Edit_category()
    {
        // Models
        if(isset($_GET["ma_loai"]))
        {

            $ma_loai=$_GET["ma_loai"];
            $m_category=new M_category();
            $category =$m_category->Read_category_by_id($ma_loai);
            // Cập nhật


            if(isset($_POST["btnSave"]))
            {

                $ten_loai=$_POST["ten_loai"];



                $m_category=new M_category();

                $kq =  $m_category->Edit_Categoty($ma_loai,$ten_loai, "");
                if($kq)
                {
                    echo "<script>window.location='category.php'</script>";
                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công');</script>";
                }

            }
            // End Cập nhật



            // View
            $view = 'views/category/v_editcategory.php';
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