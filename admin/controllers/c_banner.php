<?php
include ("models/m_banner.php");
class C_banner
{

    public function show_banner()
    {


        $m_banner = new M_banner();
        $banners = $m_banner->read_banner();


        $view = 'views/banner/v_banner.php';
        include 'templates/layout.php';

        //  $view = 'view/products/'
    }

    function Insert_banner()
    {

        //     $ma_danh_gia,$ten_hv,$anh_hv,$cam_nhan,$ma_khoa_hoc

        $m_banner = new M_banner();
        if (isset($_POST["btnSave"])) {

            //$ma_loai =0;
            $ma_tieu_de = NULL;
            $ten_tieu_de = $_POST["ten_tieu_de"];
            $hinh_tieu_de = $_FILES["f_hinh_tieu_de"]["error"] == 0 ? $_FILES["f_hinh_tieu_de"]["name"] : "";


            $kq = $m_banner->Insert_banner($ma_tieu_de,$ten_tieu_de, $hinh_tieu_de,1);

            if ($kq) {
                if ($hinh_tieu_de != "") {
                    move_uploaded_file($_FILES["f_hinh_tieu_de"]["tmp_name"], "../public/layout/imagesbanner/$hinh_tieu_de");
                }
                echo "<script>window.location='banner.php'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        // View
        $view = 'views/banner/v_addbanner.php';
        include('templates/layout.php');

    }


    function Edit_banner()
    {
        $m_banner = new M_banner();
        if(isset($_GET["ma_tieu_de"]))
        {

            $ma_tieu_de=$_GET["ma_tieu_de"];



            $banner  =$m_banner->read_banner_by_idbanner($ma_tieu_de);
            // Cập nhật
            if(isset($_POST["btnSave"]))
            {

                $ten_tieu_de = $_POST["ten_tieu_de"];
               // $hinh_tieu_de = $_FILES["f_hinh_tieu_de"]["error"] == 0 ? $_FILES["f_hinh_tieu_de"]["name"] : "";
                $hinh=$_FILES["f_hinh_tieu_de"]["error"]==0?$_FILES["f_hinh_tieu_de"]["name"]:$banner->hinh;
                $trang_thai = $_POST["trang_thai"];


                $kq=$m_banner->Edit_banner($ma_tieu_de,$ten_tieu_de,$hinh,$trang_thai);

                if($kq)
                {
                    if($_FILES["f_hinh_tieu_de"]["error"]==0)
                    {
                        move_uploaded_file($_FILES["f_hinh_tieu_de"]["tmp_name"],"../public/layout/imagesbanner/$hinh");
                    }

                    echo "<script>window.location='banner.php'</script>";

                }
                else
                {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
            // View
            $view = 'views/banner/v_editbanner.php';
            include('templates/layout.php');
        }



    }

    function  delete_banner()
    {
        if(isset($_GET["ma_tieu_de"])) {
            $ma_tieu_de = $_GET["ma_tieu_de"];

            $m_banner = new M_banner();
            $kq = $m_banner->Delete_banner($ma_tieu_de);

//            foreach ($couses as $cs)
//            {
//                $m_couse->Delete_couse($cs->ma_khoa_hoc);
//            }

            //  echo count($couses);
            if ($kq) {
                echo "<script>alert('Xóa thành công !');window.location='banner.php'</script>";

            }
            else {

                echo "<script>alert('Xóa không thành công');window.location='banner.php'</script>";
            }

        }

    }
//
}
?>