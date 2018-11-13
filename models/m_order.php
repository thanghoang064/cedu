<?php
require_once('database.php');
class M_oder extends database {
    //`ma_dk`, `ngay_dk`, `gia_tien`, `ma_lop`, `ma_nguoi_dung`, `tinh_trang`
    function addOderCouse($ma_dk, $ngay_dk,$gia_tien,$ma_lop,$ma_nguoi_dung,$tinh_trang) {
        $query = "INSERT INTO dang_ki(ma_dk, ngay_dk,gia_tien,ma_lop,ma_nguoi_dung,tinh_trang) VALUES(?,?,?,?,?,?)";
        $this->setQuery($query);
        $this->execute(array($ma_dk, $ngay_dk,$gia_tien,$ma_lop,$ma_nguoi_dung,$tinh_trang));
    }
    /* `ho_ten`, `dia_chi`, `email`, `ghi_chu`, `so_dien_thoai`, `ma_khoa_hoc`*/
    public function read_couse_by_idcouse($ma_khoa_hoc)
    {
        $sql = "select*from khoa_hoc where ma_khoa_hoc  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_khoa_hoc));
    }

    public function read_couse_by_idclass($ma_lop)
    {
        $sql = "SELECT * FROM lop as l,khoa_hoc as kh WHERE l.ma_khoa_hoc = kh.ma_khoa_hoc AND l.ma_lop = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_lop));
    }
    public function return_oder($ma_lop,$ma_nguoi_dung)
    {
        $sql = "SELECT COUNT(*) as KQ FROM dang_ki WHERE ma_lop = ? and ma_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_lop,$ma_nguoi_dung));
    }

}
?>