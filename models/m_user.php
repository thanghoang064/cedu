<?php
@session_start();
require_once ("database.php");
class M_user extends database
{
    function read_user()
    {
        $sql="select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function thoat_dang_nhap()
    {
        session_destroy();
        header("location:index.php");
    }
    function luu_dang_nhap($ten,$mk)
    {
        $user = $this->read_user_by_id_pass($ten,$mk);
        if(isset($user->ma_quyen) && $user->ma_quyen == 2)
        {
            $_SESSION['user'] = $user;
            $selfURL = explode("/", $_SERVER['REQUEST_URI']);
            echo "<script type='text/javascript'>window.location.href = '". $selfURL[2] ."'</script>";
        }

        else
        {
            return "Thông tin đăng nhập không hợp lệ ";
        }
    }
//    function Doc_Table()
//    {
//        $sql="SHOW TABLES FROM jean_thoi_trang";
//        $this->setQuery($sql);
//        return $this->loadAllRows();
//    }
    function read_user_by_id_pass($ten,$mk)
    {
        $sql="select * from nguoi_dung where email=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten,md5($mk)));
    }
    public function  Edit_user($ma_nd,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$active)
    {
        $sql="update nguoi_dung set ho_ten = ?,ten_dang_nhap=?,mat_khau=?,email=?,active = ? Where ma_nd=?";
        $this->setQuery($sql);
        return $this->execute(array($ho_ten,$ten_dang_nhap,$mat_khau,$email,$active,$ma_nd));
    }
    public function read_user_by_iduser($ma_nd)
    {
        $sql = "select*from nguoi_dung where ma_nguoi_dung  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_nd));
    }
    public  function  read_user_by_email($ten_dn)
    {
        $sql = "select*from nguoi_dung where email  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_dn));
    }




    public function  Insert_user($ma_nd,$loai_nd,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ki,$active)
    {
        $sql ="insert into nguoi_dung values(?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array("","",$ho_ten,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ki,""));
    }
}
?>