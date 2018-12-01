<?php
include ("models/m_class.php");
include ("models/m_couse.php");
include ("models/m_teacher.php");
class C_class{

    public function show_class()
    {


        $m_class = new M_class();
        $classs = $m_class->read_class();
        $ma_khoa_hoc = $classs[0]->ma_khoa_hoc;
        if(isset($_GET['ma_khoa_hoc']))
        {
            $ma_khoa_hoc = $_GET['ma_khoa_hoc'];
        }
        $classs = $m_class->read_class_by_idcouse($ma_khoa_hoc);
        $m_couse = new M_couse();
        $couse = $m_couse->read_couse_by_idcouse($ma_khoa_hoc);
        $view = 'views/class/v_class.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }
    function Insert_class()
    {
        $m_class = new M_class();
        $m_teacher = new M_teacher();
        $teachers = $m_teacher->read_teacher_active();
        if (isset($_POST["btnSave"])) {
            $ma_lop = NULL;
            $ten_lop = $_POST['ten_lop'];
            $ca_hoc =$_POST['ca_hoc'];
            $ngay_bd = date_create($_POST["ngay_khai_giang"]);
            $ngay_khai_giang= date_format($ngay_bd, "Y-m-d");
            $dia_diem_hoc = $_POST['dia_diem_hoc'];
            $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
            $ma_gv = $_POST['ten_gv'];
            $trang_thai = 1;
            $so_cho = $_POST['so_cho'];
            $kq1 = $m_class->return_class_by_name($ten_lop);
            if ($kq1->KQ>0)
            {
                $error = "Tên lớp đã bị trùng!";

            }
            else{
            // $ngay_tao = date_format($ngay, "Y-m-d");
            //echo $ngay;
            $kq = $m_class->Insert_class($ma_lop, $ten_lop, $ca_hoc, $ngay_khai_giang, $dia_diem_hoc, $ma_khoa_hoc,$ma_gv,$trang_thai,$so_cho);
            if ($kq) {

                echo "<script>window.location='class.php?ma_khoa_hoc=" . $ma_khoa_hoc . "'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
            }
        }
        // View
        $view = 'views/class/v_addclass.php';
        include('templates/layout.php');

    }
    function Edit_class()
    {

        // Models
        if(isset($_GET["ma_lop"]))
        {

            $ma_lop=$_GET["ma_lop"];

            $m_class=new M_class();

            $class  =$m_class->read_class_by_idclass($ma_lop);
            $m_teacher = new M_teacher();
            $teachers = $m_teacher->read_teacher_active();
            // Cập nhật
            if(isset($_POST["btnSave"]))
            {


                //    $ma_khoa_hoc, $ten_khoa_hoc, $ten_gv, $thoi_gian_hoc,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$khoa_hoc_moi,$hinh,$don_gia,$ngay_tao

                $ten_lop = $_POST['ten_lop'];
                $ca_hoc =$_POST['ca_hoc'];
                $ngay_bd = date_create($_POST["ngay_khai_giang"]);
                $thoi_gian_khai_giang = date_format($ngay_bd, "Y-m-d");
                $dia_diem_hoc = $_POST['dia_diem_hoc'];
                $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
                $ma_gv = $_POST['ten_gv'];
                $trang_thai = $_POST['trang_thai'];
                $so_cho = $_POST['so_cho'];

                // $m_san_pham=new M_san_pham();
                $kq=$m_class->Edit_class($ma_lop, $ten_lop, $ca_hoc,$thoi_gian_khai_giang,$dia_diem_hoc,$ma_gv,$trang_thai,$so_cho);

                if($kq)
                {

                    echo "<script>window.location='class.php?ma_khoa_hoc=" . $ma_khoa_hoc . "'</script>";
                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật
            // View
            $view = 'views/class/v_editclass.php';
            include('templates/layout.php');

        }



    }
    function  delete_class()
    {
        if(isset($_GET["ma_lop"])) {
            $ma_lop = $_GET["ma_lop"];

            $m_class = new M_class();
            $kq = $m_class->Delete_class($ma_lop);

//            foreach ($couses as $cs)
//            {
//                $m_couse->Delete_couse($cs->ma_khoa_hoc);
//            }

            if(isset($_GET["ma_khoa_hoc"])) {
                $ma_khoa_hoc = $_GET["ma_khoa_hoc"];
            }
            //  echo count($couses);
            if ($kq) {
                echo "<script>alert('Xóa thành công !');window.location='class.php?ma_khoa_hoc=" . $ma_khoa_hoc . "'</script>";

            }
            else {

                echo "<script>alert('Xóa không thành công');wwindow.location='class.php?ma_khoa_hoc=" . $ma_khoa_hoc . "'</script>";
            }

        }

    }






}
?>