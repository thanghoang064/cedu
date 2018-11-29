<?php
require_once ("database.php");
class M_couse extends database{
    public function read_couse()
    {
        $sql = "select * from khoa_hoc";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function count_teacher()
    {
        $sql = "select count(*) as CT from giang_vien ";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function count_couse()
    {
        $sql = "select count(*) as CC from khoa_hoc ";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function count_students()
    {
        $sql = "select count(*) as CS from nguoi_dung where ma_quyen = 2";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function read_couse_by_category($ma_loai, $vt = -1, $limit = -1)
    {
        $sql = "select * from khoa_hoc where ma_loai = ?";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai));
    }
    public function read_couse_by_category_full($ma_loai)
    {
        $sql = "select * from khoa_hoc where ma_loai = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai));
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
        $sql = "SELECT lop.*, khoa_hoc.ten_khoa_hoc FROM lop, khoa_hoc WHERE khoa_hoc.ma_khoa_hoc = lop.ma_khoa_hoc AND DATE(thoi_gian_khai_giang) > DATE(NOW()) and DATE(thoi_gian_khai_giang) <= DATE_ADD(NOW(), INTERVAL 1 MONTH) order by thoi_gian_khai_giang ";
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




}

?>