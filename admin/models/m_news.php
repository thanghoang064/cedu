<?php
require_once ("database.php");
class M_news extends database{
    public function read_news()
    {
        $sql = "select * from tin_tuc";

        $this->setQuery($sql);
        return $this->loadAllRows();

    }

    public function read_news_by_categorynews($ma_danh_muc)
    {
        $sql = "select * from tin_tuc where ma_danh_muc = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_danh_muc));
    }
    public function read_news_by_categorylatest($ma_tin_tuc)
    {
        $sql = "SELECT * FROM `tin_tuc` where ma_tin_tuc <> ? ORDER BY ngay_tao desc LIMIT 0, 4";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_tin_tuc));
    }
    public function read_news_by_idnews($ma_tin_tuc)
    {
        $sql = "select * from tin_tuc where ma_tin_tuc  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_tin_tuc));
    }
//    public function read_class_by_idcouse($ma_khoa_hoc)
//    {
//        $sql = "select * from lop where ma_khoa_hoc  = ".$ma_khoa_hoc;
//        $this->setQuery($sql);
//        return $this->loadAllRows();
//    }
//    public function Read_couse_new($vt = -1, $limit = -1)
//    {
//        $sql = "select*from khoa_hoc where khoa_hoc_moi=1 order by ma_khoa_hoc desc";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }
//        $this->setQuery($sql);
//        return $this->loadAllRows();
//    }
//`ma_tin_tuc`, `ten_tin_tuc`, `hinh`, `mo_ta_ngan`, `noi_dung`, `ma_danh_muc`, `trang_thai`, `ngay_tao`
    public function  Insert_news($ma_tin_tuc,$ten_tin_tuc, $hinh, $mo_ta_ngan,$noi_dung,$ma_danh_muc,$trang_thai,$ngay_tao)
    {
        $sql ="insert into tin_tuc values(?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ten_tin_tuc, $hinh, $mo_ta_ngan,$noi_dung,$ma_danh_muc,$trang_thai,$ngay_tao));
    }
//    public function Delete_couse($ma_khoa_hoc){
//
//        $sql = "delete from khoa_hoc where ma_khoa_hoc = ?";
//        $this->setQuery($sql);
//        return $this->execute(array($ma_khoa_hoc));
//    }
    public function  Edit_news($ma_tin_tuc,$ten_tin_tuc, $hinh, $mo_ta_ngan,$noi_dung,$trang_thai)
    {
        $sql="update tin_tuc set ten_tin_tuc = ?,hinh=?,mo_ta_ngan=?,noi_dung=?,trang_thai=?  Where ma_tin_tuc=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_tin_tuc, $hinh, $mo_ta_ngan,$noi_dung,$trang_thai,$ma_tin_tuc));
    }
    public function return_news_by_name($ten_tin_tuc)
    {
        $sql = "SELECT COUNT(*) as KQ FROM tin_tuc WHERE ten_tin_tuc = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_tin_tuc));
    }



}

?>