<?php
include ("models/m_coupon.php");
include ("models/m_user.php");
class C_coupon {

    public function send_coupon()
    {
       // echo 12334;
     //   die();

        $m_user = new M_user();


        $user = $m_user->read_user_by_idrole();

        require_once("lib/Helper.php");

//        $m_oder = new M_oder();
//        $m_user = new M_user();
//        $user = $m_user->read_user_by_iduser($ma_nguoi_dung);
//        $couse = $m_oder->read_couse_by_idclass($ma_lop);
//        $status = $couse->trang_thai == 0 ? 'Chưa thanh toán' : 'Đã thanh toán';
        $tieu_de = "Liên hệ";
        if(isset($_POST['id']))
        {
            $ma_khuyen_mai = $_POST['id'];
        }

//        $xhtml = "<p><strong>Tên khóa học: ".$couse->ten_khoa_hoc."</strong></p>";
//        $xhtml .= "<p><strong>Trạng thái: ".$status."</strong></p>";
//
//        $xhtml .= '<table style="width: 100%;border-collapse: collapse"></table>';
//        $xhtml .= '<tr style="background-color: #0f81bb">';
//        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Tên học viên</th>';
//        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Số điện thoại</th>';
//        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Lớp</th>';
//        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Thời gian</th>';
//        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Ngày khai giảng</th>';
//        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Địa điểm học</th></tr>';
//
//        $xhtml .= '<tr>';
//        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $user->ho_ten ."</td>";
//        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $user->phone ."</td>";
//        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->ten_lop ."</td>";
//        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->ca_hoc ."</td>";
//        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->thoi_gian_khai_giang ."</td>";
//        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->dia_diem_hoc ."</td></tr></table>";
//        $xhtml .= "<p style='text-align: right'><strong>Tổng tiền: ".$couse->don_gia."</strong></p>";


       // $noi_dung_mail = "<b>Từ: </b>ABCD<p/><b>Email:</b>ABCD<p/>Đăng kí khóa học .$couse->ten_khoa_hoc.thành công!";
        //echo "<script>alert('Gửi coupon thành công')</script>";
        $m_coupon = new M_coupon();
        $coupon = $m_coupon->Read_coupon_by_id($ma_khuyen_mai);
        $noi_dung_mail = "<b>Từ: </b>ABCD<p/><b>Email:</b>ABCD<p/>Mã Khuyến mại $coupon->ten_khuyen_mai được giảm $coupon->phan_tram_giam_gia % có giá trị từ $coupon->ngay_bat_dau Đến $coupon->ngay_ket_thuc !";
        foreach ($user as $us) {
            $kq = Helper::Gui_mail_lien_he($tieu_de, $noi_dung_mail, $us->email);
        }
        echo json_encode(array("status" => 1));
    }
    public function show_coupon()
    {


        $m_coupon = new M_coupon();
        $coupons = $m_coupon->Read_coupon();
        //$ma_khoa_hoc = $classs[0]->ma_khoa_hoc;
        $view = 'views/coupon/v_coupon.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }
    function Insert_coupon()
    {
        $error = [];
        $m_coupon = new M_coupon();
        if (isset($_POST["btnSave"])) {

            $ma_khuyen_mai = NULL;
            $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
            $phan_tram_giam_gia =$_POST['phan_tram_giam_gia'];
            $ngay_bd = date_create($_POST["ngay_bat_dau"]);
            $ngay_bat_dau = date_format($ngay_bd, "Y-m-d");

            $ngay_kt = date_create($_POST["ngay_ket_thuc"]);
            $ngay_ket_thuc = date_format($ngay_bd, "Y-m-d");

            $trang_thai = 1;
          //  $so_cho = $_POST['so_cho'];

            // $ngay_tao = date_format($ngay, "Y-m-d");
            //echo $ngay;
//            echo strtotime($_POST["ngay_ket_thuc"]) . "</br >";
//            echo strtotime($_POST["ngay_bat_dau"]);
//            die();
            if(strtotime($_POST["ngay_ket_thuc"]) < strtotime($_POST["ngay_bat_dau"]))
            {
                $error[] = "Ngày kết thúc phải lớn hơn ngày bắt đầu";
            }

            if ($phan_tram_giam_gia>100 || $phan_tram_giam_gia < 0)
            {
                $error[] = "Phần trăm giảm giá phải nhỏ hơn 100 và lớn hơn 0";
            }

            if(empty($error)) {
                $kq = $m_coupon->add_coupon($ma_khuyen_mai, $ten_khuyen_mai, $phan_tram_giam_gia, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai);
                if ($kq) {

                    echo "<script>window.location='coupon.php'</script>";
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }
        }
        // View
        $view = 'views/coupon/v_addcoupon.php';
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