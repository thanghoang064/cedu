<?php
require_once ("database.php");
class M_teacher extends database{
    public function read_teacher($vt = -1, $limit = -1)
    {
        $sql = "select * from giang_vien where trang_thai = 1";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}

?>