<?php
include ("models/m_couse.php");
include ("models/m_category.php");
class C_couse{

    public function show_couse()
    {


        $m_couse = new M_couse();

        $couses = $m_couse->read_couse();
        $ma_loai = $couses[0]->ma_loai;
        if(isset($_GET['ma_loai']))
        {
            $ma_loai = $_GET['ma_loai'];
        }
        $couses = $m_couse->read_couse_by_category($ma_loai);
        $m_category  = new M_category();
        $category =  $m_category->Read_category_by_id($ma_loai);
        $view = 'views/couse/v_couse.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }
    function Insert_couse()
    {
        $m_category  = new M_category();
        if(isset($_GET['ma_loai']))
        {
            $ma_loai = $_GET['ma_loai'];
        }
        $category =  $m_category->Read_category_by_id($ma_loai);

        $m_couse = new M_couse();
        if (isset($_POST["btnSave"])) {

            //$ma_loai =0;
            $ma_loai = $_POST['ma_loai'];
            $ma_khoa_hoc = NULL;
            $ten_khoa_hoc = $_POST["ten_khoa_hoc"];

            $thoi_gian = $_POST["thoi_gian"];
            $thong_tin_khoa_hoc = $_POST["thong_tin_khoa_hoc"];
            $ke_hoach_hoc_tap = $_POST["ke_hoach_hoc_tap"];
            $hinh = $_FILES["f_hinh"]["error"] == 0 ? $_FILES["f_hinh"]["name"] : "";
            $hoc_phi = $_POST["hoc_phi"];
            $trang_thai = 1;
          //  $ngay_tao = date('Y-m-d', time());
            // $ngay_tao = date_format($ngay, "Y-m-d");
            //echo $ngay;
           $kq = $m_couse->Insert_couse($ma_khoa_hoc, $ten_khoa_hoc, $ma_loai, $thoi_gian, $thong_tin_khoa_hoc, $ke_hoach_hoc_tap, $hinh, $hoc_phi, $trang_thai);

            if ($kq) {
                if ($hinh != "") {
                    move_uploaded_file($_FILES["f_hinh"]["tmp_name"], "../public/layout/imagescouse/$hinh");
                }
                echo "<script>window.location='couse.php?ma_loai=" . $ma_loai . "'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        // View
        $view = 'views/couse/v_addcouse.php';
        include('templates/layout.php');

    }
    function Edit_couse()
    {
        $m_category  = new M_category();
        if(isset($_GET['ma_loai']))
        {
            $ma_loai = $_GET['ma_loai'];
        }
        $category =  $m_category->Read_category_by_id($ma_loai);
        /*  `ma_khoa_hoc`, `ten_khoa_hoc`, `ma_loai`, `thoi_gian`, `thong_tin_khoa_hoc`, `ke_hoach_hoc_tap`, `hinh`, `hoc_phi`, `trang_thai`*/
        // Models
        if(isset($_GET["ma_khoa_hoc"]))
        {

            $ma_khoa_hoc=$_GET["ma_khoa_hoc"];

            $m_couse=new M_couse();

           $couse  =$m_couse->read_couse_by_idcouse($ma_khoa_hoc);
            // Cập nhật
            if(isset($_POST["btnSave"]))
            {

                $ten_khoa_hoc = $_POST["ten_khoa_hoc"];
              //  $ma_loai = $_POST["ma_loai"];
                $thoi_gian = $_POST["thoi_gian"];
                $thong_tin_khoa_hoc = $_POST["thong_tin_khoa_hoc"];
                $ke_hoach_hoc_tap = $_POST["ke_hoach_hoc_tap"];
                $hoc_phi = $_POST["hoc_phi"];
                $hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:$couse->hinh;
                $trang_thai = $_POST["trang_thai"];
               // $khoa_hoc_moi=$_POST["khoa_hoc_moi"];
               // $ngay_tao = date('Y-m-d', time());

                // $m_san_pham=new M_san_pham();


                $kq=$m_couse->Edit_couse( $ma_khoa_hoc, $ten_khoa_hoc, $thoi_gian,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$hinh,$hoc_phi,$trang_thai);

                if($kq)
                {
                    if($_FILES["f_hinh"]["error"]==0)
                    {
                        move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/layout/imagescouse/$hinh");
                    }

                    echo "<script>alert('Cập nhật thành công');window.location='couse.php?ma_loai=" . $ma_loai . "'</script>";

                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật



            // View
            $view = 'views/couse/v_editcouse.php';
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
?>