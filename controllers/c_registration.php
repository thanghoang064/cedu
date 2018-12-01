<?php
include ("models/m_registration.php");
class C_registration{

    function add_user()
    {
        $error_1 = [];
        $m_registration = new M_registration();
        if (isset($_POST["btnSave"])) {
            //`ma_nguoi_dung`, `email`, `ho_ten`, `password`, `phone`, `hinh`, `trang_thai`, `ma_quyen`
            //$ma_loai =0;
            $ma_nguoi_dung = NULL;
            $email = $_POST["email"];
            $ho_ten = $_POST["ho_ten"];
            $password = md5($_POST["password"]);
            $confirm_password = md5($_POST["confirm_password"]);
            $phone = $_POST["phone"];
            $hinh = "";
            $trang_thai = 1;
            $ma_quyen = 2;
            $kq_1 = $m_registration->return_user_by_email($email);
            if($kq_1->KQ == 1)
            {
                $error_1[] = "Email đã tồn tại";
            }


            if($password!=$confirm_password)
            {
                $error_1[] = "Mật khẩu và xác nhận mật khẩu phải khớp với nhau";
            }


            if(empty($error_1)) {
                $kq = $m_registration->add_user($ma_nguoi_dung, $email, $ho_ten, $password, $phone, $hinh, $trang_thai, $ma_quyen);

                if ($kq) {
                    $success[] = "Đăng kí tài khoản thành công";
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }
        }
        // View
        $view = 'view/registration/v_registration.php';
        include('templates/registration/layout.php');

    }



}
?>