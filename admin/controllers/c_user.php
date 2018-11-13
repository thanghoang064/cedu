<?php
//session_start();
include ("models/m_user.php");
class C_user
{

    function show_user()
    {
// Models
        $m_user = new M_user();
        $users = $m_user->read_user();
        $view = 'views/user/v_user.php';
        include('templates/layout.php');
// View
    }
    function add_user()
    {

        //     $ma_danh_gia,$ten_hv,$anh_hv,$cam_nhan,$ma_khoa_hoc

        $m_user = new M_user();
        if (isset($_POST["btnSave"])) {
            $users = $m_user->read_user();
            $ma_nd = NULL;
            $ho_ten = $_POST["ho_ten"];
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $mat_khau = md5($_POST["mat_khau"]);
            $email =$_POST["email"];
            $ngay_dang_ki = date('Y-m-d', time());
            //$ma_loai =0;
        $loai_nd = NULL;
        $active = NULL;
            foreach ( $users as $us)
            {

                if($ten_dang_nhap == $us->ten_dang_nhap)
                {
                    echo "<script>alert('Tên đăng nhập bị trùng thêm không thành công');window.location='adduser.php'</script>";
                    return;
                }
            }


            $kq = $m_user->Insert_user($ma_nd,$loai_nd,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ki,$active);

            if ($kq) {
                echo "<script>window.location='user.php'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        // View
        $view = 'views/user/v_adduser.php';
        include('templates/layout.php');

    }
    function Edit_user()
    {
        // Models
        if(isset($_GET["ma_nguoi_dung"]))
        {

            $ma_nd = $_GET["ma_nguoi_dung"];

            $m_user=new M_user();
           $user = $m_user->read_user_by_iduser($ma_nd);


            // Cập nhật
            if(isset($_POST["btnSave"]))
            {

                //    $ma_khoa_hoc, $ten_khoa_hoc, $ten_gv, $thoi_gian_hoc,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$khoa_hoc_moi,$hinh,$don_gia,$ngay_tao
                $ho_ten = $_POST["ho_ten"];
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $mat_khau = md5($_POST["mat_khau"]);
                $email =$_POST["email"];
                $active = $_POST["active"];
                $users = $m_user->read_user();
//                foreach ( $users as $us)
//                {
//
//                    if($ten_dang_nhap == $us->ten_dang_nhap)
//                    {
//                        echo "<script>alert('Tên đăng nhập bị trùng sửa không thành công');window.location='edituser.php?ma_nguoi_dung=".$ma_nd."'</script>";
//                        return;
//                    }
//                }
                $kq=$m_user->Edit_user($ma_nd,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$active);

                if($kq)
                {


                    echo "<script>alert('Cập nhật thành công');window.location='user.php'</script>";

                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // End Cập nhật



            // View
            $view = 'views/user/v_edituser.php';
            include 'templates/layout.php';

        }



    }

    function Hien_thi_dang_nhap()
    {
       // include('templates/layout.php');
      //  $a =0;
        $flag= false;
        if(isset($_POST["login"]))
        {
            $ten=$_POST["ten_dang_nhap"];
            $m_user=new M_user();
           // $users = $m_user->read_user_by_nameuser($ten);
            //die();
            $mk=$_POST["mat_khau"];

            $this->luu_dang_nhap($ten,$mk);
            $users = $m_user->read_user_by_email($ten);


        }
        if(isset($_SESSION["ma_quyen"]) )
        {
            if($_SESSION["ma_quyen"]==1) {
                include('templates/layout.php');
            }

            else
            {
                //session_destroy();
                $flag = true;
                header("location:login.php");
                unset($_SESSION["ma_quyen"]);
                unset($_SESSION["fullname"]);

             //   echo "123";
            }

        }

        else
        {
            if ($flag == true)
            {
                $_SESSION['error_role']="Bạn không có quyền ";
                header("location:login.php");
            }
            else {
                $_SESSION['error'] = "Thông tin đăng nhập không hợp lệ ";
            }
            header("location:login.php");
        }




    }
    function thoat_dang_nhap()
    {
        session_destroy();
        header("location:login.php");
    }
    function luu_dang_nhap($ten,$mk)
    {

        $m_user=new M_user();

        $user = $m_user->read_user_by_id_pass($ten,$mk);

            $_SESSION['fullname'] = $user->ho_ten;

            $_SESSION['ma_quyen'] = $user->ma_quyen;
        $_SESSION['ma_nd'] = $user->ma_nguoi_dung;
    }

}
?>