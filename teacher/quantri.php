
<?php
include("controllers/c_teacher.php");
$c_teacher = new C_teacher();
if(isset($_GET["func"]))
{
    $c_teacher->thoat_dang_nhap();
}
$c_teacher->Hien_thi_dang_nhap();
?>
