<?php
require_once ("database.php");
class M_category extends database{
    public function read_category()
    {
        $sql = "select * from danh_muc_khoa_hoc";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }

        $this->setQuery($sql);
        return $this->loadAllRows();

    }



}

?>