<?php
require_once ("database.php");
class M_banner extends database{
    public function read_banner()
    {
        $sql = "select * from tieu_de";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function  Insert_banner($ma_tieu_de,$ten_tieu_de,$hinh,$trang_thai)
    {
        $sql ="insert into tieu_de values(?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ten_tieu_de,$hinh,$trang_thai));
    }

    public function  Edit_banner($ma_tieu_de,$ten_tieu_de,$hinh,$trang_thai)
    {
        $sql="update tieu_de set ten_tieu_de = ?,hinh =?,trang_thai =? Where ma_tieu_de=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de,$hinh,$trang_thai,$ma_tieu_de));
    }
//    public function read_teacher_by_idteacher($ma_gv)
//    {
//        $sql = "select*from giang_vien where ma_gv  = ?";
//        $this->setQuery($sql);
//        return $this->loadRow(array($ma_gv));
//    }
    public function Delete_banner($ma_tieu_de){
        $sql = "delete from tieu_de where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_tieu_de));
    }
    public function read_banner_by_idbanner($ma_tieu_de)
    {
        $sql = "select*from tieu_de where ma_tieu_de  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_tieu_de));
    }


}

?>