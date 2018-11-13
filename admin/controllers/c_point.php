<?php
include ("models/m_point.php");
require ("public/PHPExcel/Classes/PHPExcel.php");
class C_point{

    public function show_student()
    {


        $m_point = new M_point();

        if(isset($_GET['ma_lop']))
        {
            $ma_lop = $_GET['ma_lop'];
        }
        $kq = $m_point->return_kq($ma_lop);
        if($kq->KQ > 0) {
            $students = $m_point->Read_student_by_idclass_have_point($ma_lop);
        }
        else
        {
            $students = $m_point->Read_student_by_idclass($ma_lop);
        }
        $view = 'views/point/v_point.php';
        include 'templates/layout.php';
        // $view = 'view/products/'
    }

    public function export_student_excel()
    {
        $data = [
            ['Nguyễn Khánh Linh', 'Nữ', '500k'],
            ['Ngọc Trinh', 'Nữ', '700k'],
            ['Tùng Sơn', 'Không xác định', 'Miễn phí'],
            ['Kenny Sang', 'Không xác định', 'Miễn phí']
        ];
//Khởi tạo đối tượng
        $excel = new \PHPExcel();

//Chọn trang cần ghi (là số từ 0->n)
        $excel->setActiveSheetIndex(0);
//Tạo tiêu đề cho trang. (có thể không cần)
        $excel->getActiveSheet()->setTitle('demo ghi dữ liệu');

//Xét chiều rộng cho từng, nếu muốn set height thì dùng setRowHeight()
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);

//Xét in đậm cho khoảng cột
        $excel->getActiveSheet()->getStyle('A1:C1')->getFont()->setBold(true);
//Tạo tiêu đề cho từng cột
//Vị trí có dạng như sau:
        /**
         * |A1|B1|C1|..|n1|
         * |A2|B2|C2|..|n1|
         * |..|..|..|..|..|
         * |An|Bn|Cn|..|nn|
         */
        $excel->getActiveSheet()->setCellValue('A1', 'Tên');
        $excel->getActiveSheet()->setCellValue('B1', 'Giới Tính');
        $excel->getActiveSheet()->setCellValue('C1', 'Đơn giá(/shoot)');
// thực hiện thêm dữ liệu vào từng ô bằng vòng lặp
// dòng bắt đầu = 2
        $numRow = 2;
        foreach ($data as $row) {
            $excel->getActiveSheet()->setCellValue('A' . $numRow, $row[0]);
            $excel->getActiveSheet()->setCellValue('B' . $numRow, $row[1]);
            $excel->getActiveSheet()->setCellValue('C' . $numRow, $row[2]);
            $numRow++;
        }
// Khởi tạo đối tượng PHPExcel_IOFactory để thực hiện ghi file
// ở đây mình lưu file dưới dạng excel2007

//        PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');


        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $objWriter = \PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $objWriter->save("public/abc.xlsx");
        header('Content-type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
   header('Content-Disposition: attachment; filename="abc.xlsx"');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        header('Prama:no-cache');
    }
    public function ImportExcel()
    {
        if(isset($_POST['btnGui']))
        {
            if(isset($_POST['ma_lop']))
            {
                $ma_lop = $_POST['ma_lop'];
            }

            $m_point = new M_point();
            $file = $_FILES['file']['tmp_name'];
            $objReader = PHPExcel_IOFactory::createReaderForFile($file);
            $objReader->setLoadSheetsOnly($ma_lop);
            $objExcel = $objReader->load($file);
            $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
          //  print_r($sheetData);
            $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
            for($row = 2 ; $row<=$highestRow;$row++)
            {
                $ma_lop1 = $ma_lop;
                $ma_nguoi_dung = $sheetData[$row]['A'];
                $diem = $sheetData[$row]['C'];
                $m_point->Insert_point("",$ma_lop1,$diem,$ma_nguoi_dung);

            }
            header("location:http://localhost:8888/cedu/admin/point.php?ma_lop=".$ma_lop);
            echo "Thêm thành công";

        }
    }
    public function  Excel()
    {
        $objExcel = new PHPExcel;
        $objExcel->setActiveSheetIndex(0);
        if(isset($_POST['ma_lop']))
        {
            $ma_lop = $_POST['ma_lop'];
        }

        $sheet = $objExcel->getActiveSheet()->setTitle($ma_lop);
        $rowCount = 1;
        $sheet->setCellValue('A'.$rowCount,'Mã học viên');
        $sheet->setCellValue('B'.$rowCount,'Họ Tên');
        $sheet->setCellValue('C'.$rowCount,'Điểm');
        $m_point = new M_point();
        $kq = $m_point->return_kq($ma_lop);
        if($kq->KQ > 0) {
            $result = $m_point->Read_student_by_idclass_have_point($ma_lop);
        }
        else
        {
            $result = $m_point->Read_student_by_idclass($ma_lop);
        }
       // $result = $m_point->Read_student_by_idclass($ma_lop);
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
       foreach ($result as $rs)
       {
           $rowCount++;
           $sheet->setCellValue('A'.$rowCount,$rs->ma_nguoi_dung);
           $sheet->setCellValue('B'.$rowCount,$rs->ho_ten);
           $sheet->setCellValue('C'.$rowCount,$rs->diem);
       }
       $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
       $filename = 'public/export.xlsx';
       $objWriter->save($filename);
   //    header('Content-Disposition: attachment; filename="' . $filename .'"');
//       header('Content-type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
//        header('Content-Length: '.filesize($filename));
//        header('Content-Transfer-Encoding: binary');
//        //header('Cache-Control: must-revalidate');
      //  header("Cache-Control: max-age=0");
    // header('Pragma:no-cache');
        //header("location:http://localhost:8888/cedu/admin/public/export.xlsx");
        //header("location:http://localhost:8888/cedu/admin/");
       // readfile($filename);

        echo json_encode(array('status' => 'success', 'name' => $filename));
    }

    function Insert_couse()
    {
        $m_category  = new M_category();
        if(isset($_GET['ma_loai']))
        {
            $ma_loai = $_GET['ma_loai'];
        }
        $category =  $m_category->Read_category_by_id($ma_loai);

        $m_couse = new M_couse();
        if (isset($_POST["btnSave"])) {

            //$ma_loai =0;
            $ma_loai = $_POST['ma_loai'];
            $ma_khoa_hoc = NULL;
            $ten_khoa_hoc = $_POST["ten_khoa_hoc"];

            $thoi_gian = $_POST["thoi_gian"];
            $thong_tin_khoa_hoc = $_POST["thong_tin_khoa_hoc"];
            $ke_hoach_hoc_tap = $_POST["ke_hoach_hoc_tap"];
            $hinh = $_FILES["f_hinh"]["error"] == 0 ? $_FILES["f_hinh"]["name"] : "";
            $hoc_phi = $_POST["hoc_phi"];
            $trang_thai = 1;
            //  $ngay_tao = date('Y-m-d', time());
            // $ngay_tao = date_format($ngay, "Y-m-d");
            //echo $ngay;
            $kq = $m_couse->Insert_couse($ma_khoa_hoc, $ten_khoa_hoc, $ma_loai, $thoi_gian, $thong_tin_khoa_hoc, $ke_hoach_hoc_tap, $hinh, $hoc_phi, $trang_thai);

            if ($kq) {
                if ($hinh != "") {
                    move_uploaded_file($_FILES["f_hinh"]["tmp_name"], "../public/layout/imagescouse/$hinh");
                }
                echo "<script>window.location='couse.php?ma_loai=" . $ma_loai . "'</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        // View
        $view = 'views/couse/v_addcouse.php';
        include('templates/layout.php');

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