<?php
include('SimpleImage.php');
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
                    move_uploaded_file($_FILES["f_hinh_tieu_de"]['tmp_name'], "../public/layout/imagesbanner/$hinh_tieu_de");

                    $image = new SimpleImage();
                    $dataImage['width'] = 1440;
                    $dataImage['height'] = 585;
                    $dataImage['path'] = "../public/layout/imagesbanner";
                    $dataImage['name'] = $hinh_tieu_de;

                    $image->load($dataImage['path'] . '/' . $dataImage['name']);
                    $image->resize($dataImage['width'], $dataImage['height']);
                    $image->save($dataImage['path'] . '/' . $dataImage['name']);
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
                        move_uploaded_file($_FILES['f_hinh_tieu_de']['tmp_name'],"../public/layout/imagesbanner/$hinh");

                        $image = new SimpleImage();
                        $dataImage['width'] = 1440;
                        $dataImage['height'] = 585;
                        $dataImage['path'] = "../public/layout/imagesbanner";
                        $dataImage['name'] = $hinh;

                        $image->load($dataImage['path'] . '/' . $dataImage['name']);
                        $image->resize($dataImage['width'], $dataImage['height']);
                        $image->save($dataImage['path'] . '/' . $dataImage['name']);
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

    function resizeImage($dataImage){
        $path = $dataImage['path'];
        $name = $dataImage['name'];
        $width = $dataImage['width'];
        $height = $dataImage['height'];
        $img = Image::make($path.'/'.$name)->resize($width,$height);
        $img->save($path.'/'.$name);
        return $img;
    }

    function resize_image_crop($image,$width,$height) {
        $w = @imagesx($image); //current width
        echo "<pre>";
        print_r($w);
        echo "</pre>";
        die();
        $h = @imagesy($image); //current height
        if ((!$w) || (!$h)) { $GLOBALS['errors'][] = 'Image couldn\'t be resized because it wasn\'t a valid image.'; return false; }
        if (($w == $width) && ($h == $height)) { return $image; } //no resizing needed

        //try max width first...
        $ratio = $width / $w;
        $new_w = $width;
        $new_h = $h * $ratio;

        //if that created an image smaller than what we wanted, try the other way
        if ($new_h < $height) {
            $ratio = $height / $h;
            $new_h = $height;
            $new_w = $w * $ratio;
        }

        $image2 = imagecreatetruecolor ($new_w, $new_h);
        imagecopyresampled($image2,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);

        //check to see if cropping needs to happen
        if (($new_h != $height) || ($new_w != $width)) {
            $image3 = imagecreatetruecolor ($width, $height);
            if ($new_h > $height) { //crop vertically
                $extra = $new_h - $height;
                $x = 0; //source x
                $y = round($extra / 2); //source y
                imagecopyresampled($image3,$image2, 0, 0, $x, $y, $width, $height, $width, $height);
            } else {
                $extra = $new_w - $width;
                $x = round($extra / 2); //source x
                $y = 0; //source y
                imagecopyresampled($image3,$image2, 0, 0, $x, $y, $width, $height, $width, $height);
            }
            imagedestroy($image2);
            echo "<pre>";
            print_r($image3);
            echo "</pre>";
            die();
            return $image3;
        } else {
            echo "<pre>";
            print_r($image2);
            echo "</pre>";
            die();
            return $image2;
        }
    }
}
?>