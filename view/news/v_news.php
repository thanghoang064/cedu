
<!-- News Page Area Start Here -->
<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <?php
                    if(count($newss) == 0)
                    {
                        echo "<div class='alert alert-info'>Hiện vẫn chưa có tin tức trong mục này. Nhấn vào <a class='thongbao' href='index.php'>đây</a> để quay lại trang chủ</div>";
                    }
                    else{
                    for($i = 0;$i<count($newss);$i+=3) {
                    ?>
                    <?php
                    for ($j = $i; $j < $i + 3; $j++) {
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-img-holder">
                                <img  style="    width: 848px;height: 402px;" src="public/layout/imagesnews/<?php echo $newss[$j]->hinh;?>"  class="img-responsive" alt="research">
                            </div>
                            <h2 class="title-default-left-bold"><a href="#"><?php echo $newss[$j]->ten_tin_tuc;?></a></h2>
                            <ul class="title-bar-high news-comments">
                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Ngày đăng: <?php echo date('d-m-Y', strtotime($newss[$j]->ngay_tao));?></span></a></li>
                            </ul>
                            <p><?php echo $newss[$j]->mo_ta_ngan;?></p>
                            <a href="singernews.php?ma_tin_tuc=<?php echo $newss[$j]->ma_tin_tuc; ?>&ma_danh_muc=<?php echo $newss[$j]->ma_danh_muc; ?>" class="default-big-btn">Xem thêm</a>
                        </div>
                    </div>
                        <?php
                        if ($j == count($newss) - 1) {
                            break;
                        }
                    }
                        ?>

                        <div class="clearfix"></div>
                        <?php
                    }
                    }
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <ul class="pagination-center">
                            <?php
                            if($count > 6 && $isPaging)
                            {
                                echo $lst;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">




                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Page Area End Here -->