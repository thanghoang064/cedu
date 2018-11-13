<?php
require_once ("database.php");
class M_teacher extends database{
    public function read_teacher_active()
    {
        $sql = "select * from giang_vien where trang_thai = 1";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function read_teacher()
    {
        $sql = "select * from giang_vien";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function  Insert_teacher($ma_gv,$ten_gv,$hinh_gv,$thongtin_gv,$trang_thai)
    {
        $sql ="insert into giang_vien values(?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ten_gv,$hinh_gv,$thongtin_gv,$trang_thai));
    }

    public function  Edit_teacher($ma_gv,$ten_gv,$hinh_gv,$thongtin_gv,$trang_thai)
    {
        $sql="update giang_vien set ten_gv = ?,hinh_gv=?,thongtin_gv=?,trang_thai=? Where ma_gv=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_gv,$hinh_gv,$thongtin_gv,$trang_thai,$ma_gv));
    }
    public function read_teacher_by_idteacher($ma_gv)
    {
        $sql = "select*from giang_vien where ma_gv  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_gv));
    }
    public function Delete_teacher($ma_gv){

        $sql = "delete from giang_vien where ma_gv = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_gv));
    }


}

?>