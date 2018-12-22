<?php
require_once ("database.php");
class M_couse extends database{
    public function read_couse_by_id_user($ma_nguoi_dung)
    {
        $sql = "SELECT kh.ma_khoa_hoc,kh.ten_khoa_hoc FROM lop as l,dang_ki as dk,khoa_hoc as kh WHERE dk.ma_lop = l.ma_lop and l.ma_khoa_hoc = kh.ma_khoa_hoc and dk.tinh_trang=1 and dk.ma_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_nguoi_dung));
    }
    public function read_couseoder($ma_nguoi_dung)
    {
        $sql = "SELECT * FROM `dang_ki` as dk,lop as l,khoa_hoc as kh WHERE dk.ma_lop = l.ma_lop and l.ma_khoa_hoc = kh.ma_khoa_hoc and  dk.ma_nguoi_dung =? ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_nguoi_dung));
    }
    public function read_couse_by_idcouse($ma_khoa_hoc)
    {
        $sql = "select*from khoa_hoc where ma_khoa_hoc  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_khoa_hoc));
    }
    public function read_class_by_idcouse($ma_khoa_hoc)
    {
        $sql = "select * from lop where ma_khoa_hoc  = ".$ma_khoa_hoc;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Read_couse_new($vt = -1, $limit = -1)
    {
        //$vt = -1, $limit = -1
        $sql = "SELECT * FROM lop WHERE DATE(thoi_gian_khai_giang) > DATE(NOW()) and DATE(thoi_gian_khai_giang) <= DATE_ADD(NOW(), INTERVAL 1 MONTH) order by thoi_gian_khai_giang ";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

//SELECT * FROM lop,giang_vien WHERE lop.ma_gv = giang_vien.ma_gv AND lop.ma_khoa_hoc = 25
    public function read_class_and_teacher_by_idcouse($ma_khoa_hoc)
    {
        $sql = "SELECT * FROM lop,giang_vien WHERE lop.ma_gv = giang_vien.ma_gv AND lop.ma_khoa_hoc = ".$ma_khoa_hoc;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_document_by_idcouse($ma_khoa_hoc)
    {
        $sql = "select * from tai_lieu where ma_khoa_hoc  = ".$ma_khoa_hoc;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }



}

?>