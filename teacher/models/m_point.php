<?php
include_once ("database.php");
class M_point extends database
{
    public function read_class_by_id_teacher($ma_giang_vien)
    {
        $sql = "SELECT * FROM lop WHERE ma_gv = $ma_giang_vien";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_giang_vien));
    }


    public function Read_student_by_idclass($ma_lop)
    {
        $sql = "SELECT nd.ma_nguoi_dung,nd.ho_ten FROM nguoi_dung as nd,dang_ki as dk WHERE  nd.ma_quyen = 2 and nd.ma_nguoi_dung = dk.ma_nguoi_dung and dk.ma_lop = $ma_lop  and dk.tinh_trang = 1" ;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Read_student_by_idclass_have_point($ma_lop)
    {

        $sql = "SELECT nd.ma_nguoi_dung,nd.ho_ten,dt.diem FROM nguoi_dung as nd,dang_ki as dk, diem_thi as dt where dt.ma_lop = $ma_lop and nd.ma_nguoi_dung = dt.ma_nguoi_dung and dk.tinh_trang = 1 and dk.ma_nguoi_dung = nd.ma_nguoi_dung group by nd.ma_nguoi_dung" ;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function  Insert_point($ma_diem_thi,$ma_lop,$diem,$ma_nguoi_dung)
    {
        $sql ="insert into diem_thi values(?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ma_lop,$diem,$ma_nguoi_dung));
    }
    public function  Edit_point($ma_khoa_hoc, $ten_khoa_hoc,$thoi_gian,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$hinh,$hoc_phi,$trang_thai)
    {
        $sql="update khoa_hoc set ten_khoa_hoc = ?,thoi_gian=?,thong_tin_khoa_hoc=?,ke_hoach_hoc_tap=?,hinh=?,hoc_phi=?,trang_thai=?  Where ma_khoa_hoc=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_khoa_hoc,$thoi_gian,$thong_tin_khoa_hoc,$ke_hoach_hoc_tap,$hinh,$hoc_phi,$trang_thai,$ma_khoa_hoc));
    }
    public function return_kq($ma_lop)
    {
        $sql = "SELECT COUNT(*) as KQ FROM diem_thi WHERE ma_lop = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_lop));
    }

    public function get_time_expired($ma_lop)
    {
        $sql = "select * from khoa_hoc as kh, lop as l where kh.ma_khoa_hoc = l.ma_khoa_hoc and l.ma_lop = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_lop));
    }

}
?>