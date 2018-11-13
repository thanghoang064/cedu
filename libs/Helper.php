<?php
include("libs/plugins/phpmailer/PHPMailerAutoload.php");
class Helper{
    public static function loadMenu()
    {
        require_once ("models/m_category.php");
        $m_category = new M_category();
        $category = $m_category->read_category();
        return $category;
    }
    public static function Gui_mail_lien_he($tieu_de, $noi_dung,$email){
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";
        $mail->isHTML(true);
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
        $mail->Port = 465; // set the SMTP port for the GMAIL server

        $mail->Username = "thanghoang064@gmail.com"; // GMAIL username
        $mail->Password = "eotzmfeyuycgblmi"; // GMAIL password




        $mail->AddAddress($email);
        $mail->setFrom("trungtamdayhoc@gmail.com", "Quản lý trung tâm dạy học");
        $mail->Subject = $tieu_de;
        $mail->Body = $noi_dung;

        try{
            $mail->Send();
            return true;
        } catch(Exception $e){
            echo "Fail - " . $mail->ErrorInfo;
            return false;
        }
    }

    public static function Bo_dau ($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );

        foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = preg_replace('/\s+/', '-', $str);
        return strtolower($str);
    }

//    public static function parseStringToInt($str) {
//        // 1996/11/30
//
//        $arr = explode('/', '$str');
//        return
//    }
}
?>