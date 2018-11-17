<?php
include_once ("database.php");
class M_categorynews extends database
{
    public function Read_categorynews(){
        $sql = "select * from danh_muc_tin_tuc";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function  add_categorynews($ma_danh_muc,$ten_danh_muc,$trang_thai)
    {
        $sql ="insert into danh_muc_tin_tuc values(?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_danh_muc,$ten_danh_muc,$trang_thai));
    }
    public function Read_categorynews_by_id($ma_danh_muc)
    {
        $sql = "select * from danh_muc_tin_tuc where ma_danh_muc = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_danh_muc));
    }
    public function return_categorynews_by_name($ten_danh_muc)
    {
        $sql = "SELECT COUNT(*) as KQ FROM danh_muc_tin_tuc WHERE ten_danh_muc = ?";
        $this->setQuery($sql);
        return $this->loadRow(array(trim($ten_danh_muc)));
    }
//    public function  Them_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha)
//    {
//        $sql ="insert into loai_san_pham values(?,?,?,?)";
//        $this->setQuery($sql);
//        return $this->execute(array($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha));
//    }
    public function  Edit_Categotynews($ma_danh_muc,$ten_danh_muc,$trang_thai)
    {
        $sql="update danh_muc_tin_tuc set ten_danh_muc=?,trang_thai=? Where ma_danh_muc=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_danh_muc,$trang_thai,$ma_danh_muc));
    }
//
//
//    public function Delete_category($ma_loai){
//
//        $sql = "delete from loai_khoa_hoc where ma_loai = ?";
//        $this->setQuery($sql);
//        return $this->execute(array($ma_loai));
//    }
//    public function Doc_ma_loai_san_pham_theo_ma_loai_cha($ma_loai_cha=0)
//    {
//        $sql = "select ma_loai,ten_loai from loai_san_pham where ma_loai_cha = ?";
//        $this->setQuery($sql);
//        return $this->loadAllRows(array($ma_loai_cha));
//    }
}
?>