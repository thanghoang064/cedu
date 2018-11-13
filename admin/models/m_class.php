<?php
require_once ("database.php");
class M_class extends database{
    public function read_class()
    {
        $sql = "select * from lop";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }

    public function read_class_by_idcouse($ma_khoa_hoc)
    {
        $sql = "select * from lop where ma_khoa_hoc  = ".$ma_khoa_hoc;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function  Insert_class($ma_lop, $ten_lop, $ca_hoc, $thoi_gian_khai_giang, $dia_diem_hoc, $ma_khoa_hoc,$ma_gv,$trang_thai,$so_cho)
    {
        $sql ="insert into lop values(?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ten_lop, $ca_hoc, $thoi_gian_khai_giang,$dia_diem_hoc, $ma_khoa_hoc,$ma_gv,$trang_thai,$so_cho));
    }
    public function  Edit_class($ma_lop, $ten_lop, $ca_hoc, $thoi_gian_khai_giang,  $dia_diem_hoc,$ma_gv,$trang_thai,$so_cho)
    {
        $sql="update lop set ten_lop = ?,ca_hoc =?,thoi_gian_khai_giang=?,dia_diem_hoc=?,ma_gv=?,trang_thai=?,so_cho =?  Where ma_lop=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_lop, $ca_hoc, $thoi_gian_khai_giang, $dia_diem_hoc,$ma_gv,$trang_thai,$so_cho,$ma_lop));
    }
    public function  Edit_room($ma_lop,$so_cho)
    {
        $sql="update lop set so_cho =?  Where ma_lop=?";
        $this->setQuery($sql);
        return $this->execute(array($so_cho,$ma_lop));
    }
    public function read_class_by_idclass($ma_lop)
    {
        $sql = "select*from lop where ma_lop  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_lop));
    }
    public function Delete_class($ma_lop){

        $sql = "delete from lop where ma_lop = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_lop));
    }





}

?>