<?php
@session_start();
require_once('vendor/autoload.php');
use Stripe\Charge;
$stripe = [
    "secret_key"      => "sk_test_YuH8iOLZlo6r314XALggpFV8",
    "publishable_key" => "pk_test_RktRYcffDgayxWK6b7Gho9Ol",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
include ("models/m_order.php");
include ("models/m_user.php");
include ("models/m_coupon.php");
class C_order{
    public function dang_ky()
    {
        if(isset($_POST['btnDangKi']))
        {
            /* `ho_ten`, `dia_chi`, `email`, `ghi_chu`, `so_dien_thoai`, `ma_khoa_hoc`*/

           // $ten_khach_hang= $_POST['ten_khach_hang'];
            $ma_dk = null;
          //  $typepayyent =  $_POST["type-payment"];
            $discount  = $_POST["txtDiscount"];

            if(isset($_SESSION['user']))
            {
                $ma_nguoi_dung = $_SESSION['user']->ma_nguoi_dung;
            }

            $ngay_dk = date('Y-m-d', time());
            if(isset($_GET["ma_lop"]))
            {
                $ma_lop = $_GET["ma_lop"];
            }
                $tinh_trang = 0;
            $m_oder = new M_oder();
            $m_user = new M_user();

            $user = $m_user->read_user_by_iduser($ma_nguoi_dung);
            $couse = $m_oder->read_couse_by_idclass($ma_lop);
            $kq = $m_oder->return_studentoder($ma_nguoi_dung,1);
            //if($kq->KQ>0&&)
            if(!empty($discount))
            {
                $gia_tien = $discount;
            }
            else {
                if($kq->KQ>0) {
                    $gia_tien = $couse->hoc_phi-(($couse->hoc_phi*10)/100);
                }
                else
                {
                    $gia_tien = $couse->hoc_phi;
                }
            }
            $m_oder->addOderCouse($ma_dk, $ngay_dk,$gia_tien,$ma_lop,$ma_nguoi_dung,$tinh_trang);
            $this->sendMail($ma_nguoi_dung,$ma_lop);
            $view = 'view/order/v_ordersuccess.php';
            include('templates/order/layout.php');
           // $couse = $m_oder->read_couse_by_idclass($ma_lop);

//
//                    $view="view/Oder/v_in_hoa_don.php";
//                    include 'templates/Oder/layout.php';
//            $view = 'view/Oder/v_odersucess.php';
////            include('templates/Oder/layout.php');

        }
        else
        {
            if(isset($_GET["ma_lop"]))
            {
                $ma_lop = $_GET["ma_lop"];
            }
            $m_oder = new M_oder();

            $couse = $m_oder->read_couse_by_idclass($ma_lop);
            $view = 'view/order/v_order.php';
            include('templates/order/layout.php');
        }

    }

    function sendMail($ma_nguoi_dung,$ma_lop)
    {
        require_once("libs/Helper.php");
        $m_oder = new M_oder();
        $m_user = new M_user();
        $user = $m_user->read_user_by_iduser($ma_nguoi_dung);
        $couse = $m_oder->read_couse_by_idclass($ma_lop);
        $status = $couse->tinh_trang == 0 ? 'Chưa thanh toán' : 'Đã thanh toán';
        $tieu_de = "Liên hệ";
        $xhtml = "<p><strong>Tên khóa học: ".$couse->ten_khoa_hoc."</strong></p>";
        $xhtml .= "<p><strong>Trạng thái: ".$status."</strong></p>";

        $xhtml .= '<table style="width: 100%;border-collapse: collapse"></table>';
        $xhtml .= '<tr style="background-color: #0f81bb">';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Tên học viên</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Số điện thoại</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Lớp</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Thời gian</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Ngày khai giảng</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Địa điểm học</th></tr>';

        $xhtml .= '<tr>';
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $user->ho_ten ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $user->phone ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->ten_lop ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->ca_hoc ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->thoi_gian_khai_giang ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $couse->dia_diem_hoc ."</td></tr></table>";
        $xhtml .= "<p style='text-align: right'><strong>Tổng tiền: ".$couse->don_gia."</strong></p>";
        $noi_dung_mail = "<b>Từ: </b>ABCD<p/><b>Email:</b>ABCD<p/>Đăng kí khóa học .$couse->ten_khoa_hoc.thành công!";

        $kq=Helper::Gui_mail_lien_he($tieu_de,$xhtml,$user->email);
    }
    function getCoupon()
    {
        if (isset($_POST["coupon"])) {
            //echo json_encode(array('data' => $_POST['coupon']));
            $ten_khuyen_mai = $_POST['coupon'];
        }
        if(isset($_SESSION['user']))
        {
            $ma_nguoi_dung = $_SESSION['user']->ma_nguoi_dung;
        }
        //$ten_khuyen_mai = "CONCAC1";
        $m_coupon = new M_coupon();
        $m_oder = new M_oder();
        $kq = $m_coupon->Return_coupon_by_namecoupon($ten_khuyen_mai);
        $kq1 = $m_coupon->Read_coupon_by_namecoupon($ten_khuyen_mai);
        $kqo = $m_oder->return_studentoder($ma_nguoi_dung,1);

        $now = date('Y-m-d');
        $startDate = date('Y-m-d', strtotime($kq1->ngay_bat_dau));
        $endDate = date('Y-m-d', strtotime($kq1->ngay_ket_thuc));
        if(($now >= $startDate) && ($now <= $endDate))
        {
            $flag = 1;
        }
        else
        {
            $flag = 2;
        }


        echo json_encode(array('data' => $kq->KQ,'giamgia' => $kq1->phan_tram_giam_gia,'date' => $flag,'rs'=>$kqo->KQ));

    }
    function charge() {
//        echo "<pre>";
//        print_r($_POST);
//        echo "</pre>";
//        die();
        if(isset($_SESSION['user']))
        {
            $ma_nguoi_dung = $_SESSION['user']->ma_nguoi_dung;
        }
        $m_oder = new M_oder();
        $ma_lop = $_POST["ma_lop"];
       $couse = $m_oder->read_couse_by_idclass($ma_lop);
       $kq = $m_oder->return_studentoder($ma_nguoi_dung,1);
        $token  = $_POST['stripeToken'];
        $email  = $_POST['stripeEmail'];
        $discount  = $_POST['txtDiscount'];
//        echo $discount;
//        die();

        $customer = \Stripe\Customer::create([
            'email' => $email,
            'source'  => $token,
        ]);

        if(!empty($discount))
        {
            $moneyVND = ($discount/20000)*100;
            $giatien = $discount;
        }
        else {
            if($kq->KQ>0) {
                $moneyVND = ($couse->hoc_phi/20000)*100-(((($couse->hoc_phi/20000)*100)*10)/100);
                $giatien = $couse->hoc_phi-(($couse->hoc_phi*10)/100);
            }
            else
            {
                $moneyVND = ($couse->hoc_phi/20000)*100;
                $giatien = $couse->hoc_phi;
            }

            //$giatien = $couse->hoc_phi;
        }
        $charge = \Stripe\Charge::create([
            'customer' => $customer->id,
            'amount'   => $moneyVND,
            'currency' => 'usd',
        ]);

        $ma_dk = null;

        $ngay_dk = date('Y-m-d', time());
        $m_oder->addOderCouse($ma_dk, $ngay_dk,$giatien,$ma_lop,$ma_nguoi_dung,1);
        $this->sendMail($ma_nguoi_dung,$ma_lop);
        $class = $m_oder->read_class_by_idclass($ma_lop);
        $m_oder->Edit_room($ma_lop, $class->so_cho - 1);
        $view = 'view/order/v_ordersuccess.php';
        include('templates/order/layout.php');
//        echo "<pre>";
//        print_r($charge);
//        echo "</pre>";
    }
}
?>