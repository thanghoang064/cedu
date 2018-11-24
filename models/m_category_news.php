<?php
require_once ("database.php");
class M_category_news extends database{
    public function read_category_news()
    {
        $sql = "select * from danh_muc_tin_tuc";
//        if ($vt >= 0 && $limit > 0) {
//            $sql .= " limit $vt,$limit";
//        }

        $this->setQuery($sql);
        return $this->loadAllRows();

    }



}

?>