<?php
class C_home
{
    public function show_chart()
    {
        // Model
        include_once("models/m_oder.php");
        $m_oder=new M_oder();
        $hoa_don=$m_oder->statistic_oder();
        $thang=array();
        $tong=array();

        foreach($hoa_don as $hd)
        {
            $thang[]=$hd->ThangNam;
            $tong[]=(float)$hd->tong;

        }

        $arr=array(
            "labels"=>$thang,
            "datasets"=>array(
                array(
                    "label"=>"Doanh thu theo tháng năm ",
                    "borderColor"=>"#F00",
                    "backgroundColor"=>"#FF9",
                    "fillColor"=>"rgba(172,194,132,0.4)",
                    "strokeColor"=>"#ACC26D",
                    "pointBorderColor"=>"#0C0",
                    "pointStrokeColor"=>"#9DB86D",
                    "pointBorderWidth" => 1,
                    "pointHoverRadius"=>5,
                    "pointHoverBorderWidth"=>3,
                    "pointRadius"=>5,
                    "pointHitRadius"=>10,
                    "data"=>$tong
                )
            )
        );
        $strJSON=json_encode($arr);
        // View
        $view = "views/home/v_chart.php";
        include('templates/layout.php');

    }
}
?>