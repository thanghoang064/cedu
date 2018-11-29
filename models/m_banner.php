<?php
require_once ("database.php");
class M_banner extends database{
    public function read_banner()
    {
        $sql = "select * from tieu_de where trang_thai = 1";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }
        $this->setQuery($sql);
        return $this->loadAllRows();

    }



}

?>