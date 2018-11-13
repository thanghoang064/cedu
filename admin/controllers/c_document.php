<?php
include ("models/m_category.php");
include ("models/m_couse.php");
include ("models/m_document.php");
class C_document{

    public function show_document()
    {


        if(isset($_POST["btnSave"]))
        {
            $m_document = new M_document();
            $ma_tai_lieu = null;
            $ma_khoa_hoc = $_POST["ma_khoa_hoc"];
            $mo_ta_tai_lieu = $_POST["mo_ta_tai_lieu"];
            $file = $_FILES["file"];
            $kq = $m_document->Insert_document($ma_tai_lieu,$ma_khoa_hoc,$file["name"],$mo_ta_tai_lieu);
            if ($kq) {
                    move_uploaded_file($file["tmp_name"], "../public/layout/document/".$file["name"]);
                echo "<script>window.location='document.php'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }



        }
        $view = 'views/document/v_adddocument.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }
    public function add_document()
    {

        $m_document = new M_document();
        $documents = $m_document->read_document();
        if(isset($_POST["btnTimKiem"]))
        {
            $documents = $m_document->read_document_by_idcouse($_POST["ma_khoa_hoc"]);
            $view = 'views/document/v_document.php';
            include 'templates/layout.php';
            return;
        }
        $view = 'views/document/v_document.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }

    function Edit_document()
    {
        $m_document  = new M_document();
        if(isset($_GET['ma_tai_lieu']))
        {
            $ma_tai_lieu = $_GET['ma_tai_lieu'];
        }
        $documents = $m_document->read_document_by_id($ma_tai_lieu);


        if (isset($_POST["btnSave"])) {
            $ma_khoa_hoc = $_POST["ma_khoa_hoc"];
            $mo_ta_tai_lieu = $_POST["mo_ta_tai_lieu"];
            $file = $_FILES["file"]["error"]==0?$_FILES["file"]["name"]:$documents->ten_tai_lieu;

            $kq = $m_document->Edit_document($ma_tai_lieu,$ma_khoa_hoc,$file,$mo_ta_tai_lieu);
            if ($kq) {
                move_uploaded_file($_FILES["file"]["tmp_name"], "../public/layout/document/$file");
                echo "<script>window.location='document.php'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }
        // View
        $view = 'views/document/v_editdocument.php';
        include 'templates/layout.php';

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