<?php
require_once ("database.php");
class M_oder extends database{


    public function statistic_oder()
    {

        $sql='SELECT concat(Month(dkh.ngay_dk),"-",Year(dkh.ngay_dk)) as ThangNam, sum(dkh.gia_tien) as tong FROM dang_ki as dkh where dkh.tinh_trang in(1,2) group by Month(dkh.ngay_dk),Year(dkh.ngay_dk) order by Month(dkh.ngay_dk), Year(dkh.ngay_dk)';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_oderlist()
    {
        $sql = "select * from dang_ki as dk,nguoi_dung as nd,lop as l where  dk.ma_nguoi_dung = nd.ma_nguoi_dung and l.ma_lop = dk.ma_lop";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function read_couse_by_idclass($ma_lop)
    {
        $sql = "SELECT * FROM lop as l,khoa_hoc as kh WHERE l.ma_khoa_hoc = kh.ma_khoa_hoc AND l.ma_lop = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_lop));
    }
    public function read_oder_by_idoder($ma_dk)
    {
        $sql = "select * from dang_ki as dk,nguoi_dung as nd,lop as l where  dk.ma_nguoi_dung = nd.ma_nguoi_dung and l.ma_lop = dk.ma_lop and dk.ma_dk = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_dk));
    }
    public function  Edit_status($ma_dk,$trang_thai)
    {
        $sql="update dang_ki set tinh_trang=?  Where ma_dk =?";
        $this->setQuery($sql);
        return $this->execute(array($trang_thai,$ma_dk));
    }
    public function read_listoder_by_idcouse($ma_khoa_hoc)
    {
        $sql = "select * from dang_ki as dk,nguoi_dung as nd,lop as l where  dk.ma_nguoi_dung = nd.ma_nguoi_dung and l.ma_lop = dk.ma_lop and dk.ma_lop in ( SELECT ma_lop FROM khoa_hoc as kh,lop as l WHERE kh.ma_khoa_hoc = l.ma_khoa_hoc AND kh.ma_khoa_hoc = ?) ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_khoa_hoc));
    }
}

?>