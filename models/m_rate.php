<?php
require_once ("database.php");
class M_rate extends database{
    public function Read_rate_home(){
        $sql = "SELECT cn.ma_cam_nhan, nd.ho_ten,kh.ten_khoa_hoc,cn.ten_cam_nhan,cn.trang_thai FROM cam_nhan as cn,nguoi_dung as nd,khoa_hoc as kh WHERE cn.ma_khoa_hoc = kh.ma_khoa_hoc and nd.ma_nguoi_dung = cn.ma_nguoi_dung and cn.trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function Read_rate_home_by_idcouse($ma_khoa_hoc){
        $sql = "SELECT cn.ma_cam_nhan, nd.ho_ten,kh.ten_khoa_hoc,cn.ten_cam_nhan,cn.trang_thai FROM cam_nhan as cn,nguoi_dung as nd,khoa_hoc as kh WHERE cn.ma_khoa_hoc = kh.ma_khoa_hoc and nd.ma_nguoi_dung = cn.ma_nguoi_dung and cn.trang_thai=1 and cn.ma_khoa_hoc = $ma_khoa_hoc ";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
}

?>