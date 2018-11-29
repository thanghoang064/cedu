<?php
require_once ("database.php");
class M_news extends database{
    public function read_news()
    {
        $sql = "select * from tin_tuc";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_news_by_categorynews($ma_danh_muc, $vt = -1, $limit = -1)
    {
        $sql = "select * from tin_tuc where trang_thai=1 and ma_danh_muc = ?";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_danh_muc));
    }
    public function read_couse_by_category_full($ma_loai)
    {
        $sql = "select * from khoa_hoc where ma_loai = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai));
    }
    public function read_news_by_idnews($ma_tin_tuc)
    {
        $sql = "select * from tin_tuc where ma_tin_tuc = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_tin_tuc));
    }
    public function read_news_by_categorylatest($ma_tin_tuc)
    {
        $sql = "SELECT * FROM `tin_tuc` where ma_tin_tuc <> ? ORDER BY ngay_tao desc LIMIT 0, 4";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_tin_tuc));
    }
    public function read_news_by_latesthome()
    {
        $sql = "SELECT * FROM `tin_tuc`  ORDER BY ngay_tao desc LIMIT 0, 4";
        $this->setQuery($sql);
        return $this->loadAllRows();
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
        $sql = "select*from khoa_hoc where khoa_hoc_moi=1 order by ma_khoa_hoc desc";
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