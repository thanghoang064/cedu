<?php
include_once ("database.php");
class M_coupon extends database
{
    public function Read_coupon(){
        $sql = "select * from khuyen_mai";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
//`ma_khuyen_mai`, `ten_khuyen_mai`, `phan_tram_giam_gia`, `ngay_bat_dau`, `ngay_ket_thuc`, `trang_thai`
    public function  add_coupon($ma_khuyen_mai,$ten_khuyen_mai,$phan_tram_giam_gia,$ngay_bat_dau,$ngay_ket_thuc,$trang_thai)
    {
        $sql ="insert into khuyen_mai values(?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_khuyen_mai,$ten_khuyen_mai,$phan_tram_giam_gia,$ngay_bat_dau,$ngay_ket_thuc,$trang_thai));
    }
    public function Return_coupon_by_namecoupon($ten_khuyen_mai)
    {
        $sql = "select count(*) as KQ from khuyen_mai where ten_khuyen_mai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_khuyen_mai));
    }
    public function Read_coupon_by_namecoupon($ten_khuyen_mai)
    {
        $sql = "select * from khuyen_mai where ten_khuyen_mai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_khuyen_mai));
    }
//    public function return_category_by_name($ten_loai)
//    {
//        $sql = "SELECT COUNT(*) as KQ FROM danh_muc_khoa_hoc WHERE ten_loai = ?";
//        $this->setQuery($sql);
//        return $this->loadRow(array(trim($ten_loai)));
//    }
//    public function  Them_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha)
//    {
//        $sql ="insert into loai_san_pham values(?,?,?,?)";
//        $this->setQuery($sql);
//        return $this->execute(array($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha));
//    }
    public function  Edit_coupon($ma_khuyen_mai,$ten_khuyen_mai,$phan_tram_giam_gia,$ngay_bat_dau,$ngay_ket_thuc,$trang_thai)
    {
        $sql="update khuyen_mai set ten_khuyen_mai=?,phan_tram_giam_gia=?,ngay_bat_dau =?,ngay_ket_thuc = ?,trang_thai = ? Where ma_khuyen_mai=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_khuyen_mai,$phan_tram_giam_gia,$ngay_bat_dau,$ngay_ket_thuc,$trang_thai,$ma_khuyen_mai));
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