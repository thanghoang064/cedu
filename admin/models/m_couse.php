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

    public function read_couse_by_category($ma_loai)
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
        $sql = "select*from khoa_hoc where khoa_hoc_moi=1 order by ma_khoa_hoc desc";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function  Insert_couse($ma_khoa_hoc, $ten_khoa_hoc, $ma_loai, $thoi_gian,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$hinh,$hoc_phi,$trang_thai)
    {
        $sql ="insert into khoa_hoc values(?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ten_khoa_hoc, $ma_loai, $thoi_gian,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$hinh,$hoc_phi,$trang_thai));
    }
    public function Delete_couse($ma_khoa_hoc){

        $sql = "delete from khoa_hoc where ma_khoa_hoc = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_khoa_hoc));
    }
    public function  Edit_couse($ma_khoa_hoc, $ten_khoa_hoc,$thoi_gian,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$hinh,$hoc_phi,$trang_thai)
    {
        $sql="update khoa_hoc set ten_khoa_hoc = ?,thoi_gian=?,thong_tin_khoa_hoc=?,ke_hoach_hoc_tap=?,hinh=?,hoc_phi=?,trang_thai=?  Where ma_khoa_hoc=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_khoa_hoc,$thoi_gian,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$hinh,$hoc_phi,$trang_thai,$ma_khoa_hoc));
    }
    public function return_couse_by_name($ten_khoa_hoc)
    {
        $sql = "SELECT COUNT(*) as KQ FROM khoa_hoc WHERE ten_khoa_hoc = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_khoa_hoc));
    }



}

?>