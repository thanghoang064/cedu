<?php
include ("models/m_registration.php");
class C_registration{

    function add_user()
    {
        $m_registration = new M_registration();
        if (isset($_POST["btnSave"])) {

            //`ma_nguoi_dung`, `email`, `ho_ten`, `password`, `phone`, `hinh`, `trang_thai`, `ma_quyen`
            //$ma_loai =0;

            $ma_nguoi_dung = NULL;
            $email = $_POST["email"];
            $ho_ten = $_POST["ho_ten"];
            $password = md5($_POST["password"]);
            $confirm_password = $_POST["confirm_password"];

            $phone = $_POST["phone"];
            $hinh = "";
            $trang_thai = 1;
            $ma_quyen = 2;
            //  $ngay_tao = date('Y-m-d', time());
            // $ngay_tao = date_format($ngay, "Y-m-d");
            //echo $ngay;
            if($password!=$confirm_password)
            {
                $error = "Mật khẩu và xác nhận mật khẩu phải khớp với nhau";
            }
            else {
                $kq = $m_registration->add_user($ma_nguoi_dung, $email, $ho_ten, $password, $phone, $hinh, $trang_thai, $ma_quyen);

                if ($kq) {
                    echo "123123131231";
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