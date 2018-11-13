
<?php
include("models/m_user.php");
$m_user = new M_user();

if(isset($_GET["func"]))
{

    $m_user->thoat_dang_nhap();
}
//$c_user->Hien_thi_dang_nhap();
?>
