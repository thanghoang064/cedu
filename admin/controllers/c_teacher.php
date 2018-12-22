<?php
include ("models/m_teacher.php");
class C_teacher{

    public function show_teacher()
    {


        $m_teacher = new M_teacher();
        $teachers = $m_teacher->read_teacher();
        $view = 'views/teacher/v_teacher.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }
    function add_teacher()
    {

        //     $ma_danh_gia,$ten_hv,$anh_hv,$cam_nhan,$ma_khoa_hoc

        $m_teacher = new M_teacher();
        if (isset($_POST["btnSave"])) {

            //$ma_loai =0;
            $ma_gv = NULL;
            $ten_gv = $_POST["ten_gv"];
            $hinh_gv = $_FILES["f_hinh_gv"]["error"] == 0 ? $_FILES["f_hinh_gv"]["name"] : "";
            $thongtin_gv =  $_POST["thongtin_gv"];
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
            $kq_1 = $m_teacher->return_user_by_email($email);
            if($kq_1->KQ == 1)
            {
                $error_1[] = "Email đã tồn tại";
            }
            $trang_thai = 1;

            if(empty($error_1)) {
                $kq = $m_teacher->Insert_teacher($ma_gv,$ten_gv,$hinh_gv,$thongtin_gv,$email,$password,$trang_thai);
                if ($kq) {
                    if ($hinh_gv != "") {
                        move_uploaded_file($_FILES["f_hinh_gv"]["tmp_name"], "../public/layout/imagesteacher/$hinh_gv");
                    }
                    echo "<script>window.location='teacher.php'</script>";
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }
        }
        // View
        $view = 'views/teacher/v_addteacher.php';
        include('templates/layout.php');

    }
    function Edit_teacher()
    {
        // Models
        if(isset($_GET["ma_giang_vien"]))
        {

            $ma_gv = $_GET["ma_giang_vien"];

            $m_teacher=new M_teacher();
            $teacher  =$m_teacher->read_teacher_by_idteacher($ma_gv);


            // Cập nhật
            if(isset($_POST["btnSave"]))
            {

                //    $ma_khoa_hoc, $ten_khoa_hoc, $ten_gv, $thoi_gian_hoc,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$khoa_hoc_moi,$hinh,$don_gia,$ngay_tao
                $ten_gv = $_POST["ten_gv"];
                $hinh_gv = $_FILES["f_hinh_gv"]["error"] == 0 ? $_FILES["f_hinh_gv"]["name"] : $teacher->hinh_gv;
                $thongtin_gv =  $_POST["thongtin_gv"];
                $trang_thai = $_POST["trang_thai"];
                // $m_san_pham=new M_san_pham();
                $email = $_POST["email"];

                if(!empty($_POST["password"]))
                {
                    $password = md5($_POST["password"]);
                }
                else
                {
                    $password = $teacher->password;
                }

                $kq_1 = $m_teacher->return_user_by_email_edit($email, $teacher->ma_gv);

                if($kq_1->KQ == 1)
                {
                    $error_1[] = "Email đã tồn tại";
                }
                $trang_thai = 1;

                if(empty($error_1)) {
                    $kq = $m_teacher->Edit_teacher($ma_gv, $ten_gv, $hinh_gv, $thongtin_gv, $email, $password, $trang_thai);

                    if ($kq) {
                        if ($_FILES["f_hinh_gv"]["error"] == 0) {
                            move_uploaded_file($_FILES["f_hinh_gv"]["tmp_name"], "../public/layout/imagesteacher/$hinh_gv");
                        }

                        echo "<script>alert('Cập nhật thành công');window.location='teacher.php'</script>";

                    } else {
                        echo "<script>alert('Cập nhật không thành công')</script>";
                    }
                }

            }
            // End Cập nhật



            // View
            $view = 'views/teacher/v_editteacher.php';
            include 'templates/layout.php';

        }



    }
    function  delete_teacher()
    {
        if(isset($_GET["ma_giang_vien"])) {
            $ma_gv = $_GET["ma_giang_vien"];

            $m_teacher = new M_teacher();
            $kq = $m_teacher->Delete_teacher($ma_gv);

//            foreach ($couses as $cs)
//            {
//                $m_couse->Delete_couse($cs->ma_khoa_hoc);
//            }

            //  echo count($couses);
            if ($kq) {
                echo "<script>alert('Xóa thành công !');window.location='teacher.php'</script>";

            }
            else {

                echo "<script>alert('Xóa không thành công');window.location='teacher.php'</script>";
            }

        }

    }
//
}
?>