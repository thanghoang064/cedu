<?php
require_once ("database.php");
class M_document extends database{

    public function read_document()
    {
        $sql = "select * from tai_lieu";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function  Insert_document($ma_tai_lieu,$ma_khoa_hoc,$ten_tai_lieu,$mo_ta_tai_lieu)
    {
        $sql ="insert into tai_lieu values(?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("",$ma_khoa_hoc,$ten_tai_lieu,$mo_ta_tai_lieu));
    }
    public function  Edit_document($ma_tai_lieu,$ma_khoa_hoc,$ten_tai_lieu,$mo_ta_tai_lieu)
    {
        $sql="update tai_lieu set ma_khoa_hoc = ?,ten_tai_lieu =?,mo_ta_tai_lieu=? Where ma_tai_lieu=?";
        $this->setQuery($sql);
        return $this->execute(array($ma_khoa_hoc,$ten_tai_lieu,$mo_ta_tai_lieu,$ma_tai_lieu));
    }
    public function Delete_document($ma_tai_lieu){

        $sql = "delete from tai_lieu where ma_tai_lieu = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_tai_lieu));
    }
    public function read_document_by_id($ma_tai_lieu)
    {
        $sql = "select*from tai_lieu where ma_tai_lieu  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_tai_lieu));
    }
    public function read_document_by_idcouse($ma_khoa_hoc)
    {
        $sql = "select * from tai_lieu where ma_khoa_hoc  = ".$ma_khoa_hoc;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }




}

?>