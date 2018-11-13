<?php
include_once ("database.php");
class M_category extends database
{
    public function Read_category(){
        $sql = "select * from danh_muc_khoa_hoc";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function  add_category($ma_loai,$ten_loai,$trang_thai)
    {
        $sql ="insert into danh_muc_khoa_hoc values(?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai,$ten_loai,$trang_thai));
    }
    public function Read_category_by_id($ma_loai)
    {
        $sql = "select * from danh_muc_khoa_hoc where ma_loai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai));
    }
    public function return_category_by_name($ten_loai)
    {
        $sql = "SELECT COUNT(*) as KQ FROM danh_muc_khoa_hoc WHERE ten_loai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array(trim($ten_loai)));
    }
//    public function  Them_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha)
//    {
//        $sql ="insert into loai_san_pham values(?,?,?,?)";
//        $this->setQuery($sql);
//        return $this->execute(array($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha));
//    }
    public function  Edit_Categoty($ma_loai,$ten_loai,$trang_thai)
    {
        $sql="update danh_muc_khoa_hoc set ten_loai=?,trang_thai=? Where ma_loai=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai,$trang_thai,$ma_loai));
    }
//
//
    public function Delete_category($ma_loai){

        $sql = "delete from loai_khoa_hoc where ma_loai = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai));
    }
//    public function Doc_ma_loai_san_pham_theo_ma_loai_cha($ma_loai_cha=0)
//    {
//        $sql = "select ma_loai,ten_loai from loai_san_pham where ma_loai_cha = ?";
//        $this->setQuery($sql);
//        return $this->loadAllRows(array($ma_loai_cha));
//    }
}
?>