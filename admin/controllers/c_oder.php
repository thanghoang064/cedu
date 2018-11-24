<?php
include ("models/m_oder.php");
include ("models/m_couse.php");
include ("models/m_category.php");
include ("models/m_class.php");
class C_oder{
    public function show_oder()
    {
        $idCourse = "";
        $m_oder = new M_oder();
        $oders = $m_oder->read_oderlist();
        if(isset($_POST["btnTimKiem"]))
        {
            $idCourse = $_POST['ma_khoa_hoc'];
            $oders = $m_oder->read_listoder_by_idcouse($_POST["ma_khoa_hoc"]);
            $view = 'views/oder/v_oder.php';
            include 'templates/layout.php';
            return;
        }
        $view = 'views/oder/v_oder.php';
        include 'templates/layout.php';
        //  $view = 'view/products/'
    }
    function Edit_oder()
    {
        // Models
        if(isset($_GET["ma_dk"]))
        {

            $ma_dk = $_GET["ma_dk"];

            $m_oder=new M_oder();
            $oder  =$m_oder->read_oder_by_idoder($ma_dk);

            if(isset($_GET["ma_lop"]))
            {
                $ma_lop = $_GET["ma_lop"];
            }
            $couse_class  =$m_oder->read_couse_by_idclass($ma_lop);

            // Cập nhật
            if(isset($_POST["btnSave"]))
            {
                $ma_lop1 = $_POST["ma_lop"];

                $m_class = new M_class();
                $class = $m_class->read_class_by_idclass($ma_lop1);
                $trang_thai = 1;

                if ($class->so_cho == 0) {
                    echo "<script>alert('Không thể nhận thêm học viên lớp đã đầy');window.location='oder.php'</script>";
                    return;
                }
                // $m_san_pham=new M_san_pham();
                $m_class->Edit_room($ma_lop1, $class->so_cho - 1);
                $kq = $m_oder->Edit_status($ma_dk, $trang_thai);

                if ($kq) {
                    echo "<script>alert('Cập nhật thành công');window.location='oder.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật
            // View
            $view = 'views/oder/v_odersinge.php';
            include 'templates/layout.php';

        }



    }

//
}
?>