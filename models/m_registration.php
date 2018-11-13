<?php
include_once ("database.php");
class M_registration extends database
{

    public function  add_user($ma_nguoi_dung,$email,$ho_ten,$password,$phone,$hinh,$trang_thai,$ma_quyen)
    {
        $sql ="insert into nguoi_dung values(?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_nguoi_dung,$email,$ho_ten,$password,$phone,$hinh,$trang_thai,$ma_quyen));
    }

}
?>