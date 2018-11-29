
<!-- News and Event Area Start Here -->
<div class="news-event-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                <h2 class="title-default-left">Tin tức gần đây</h2>
                <ul class="news-wrapper">
                    <?php
                        foreach ($news as $ns) {
                            ?>
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img style="width: 150px;height: 101px" src="public/layout/imagesnews/<?php echo $ns->hinh; ?> " class="img-responsive"
                                                     alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html"><?php echo $ns->ten_tin_tuc?></a></h3>
                                    <div class="post-date"><?php echo date('d-m-Y', strtotime($ns->ngay_tao));?></div>
                                    <p><?php echo $ns->mo_ta_ngan;?></p>
                                </div>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                <h2 class="title-default-left">Lớp học sắp khai giảng</h2>
                <ul class="event-wrapper">
                    <?php
                    foreach ($new_couses as $nc) {
                            $date = explode("-", $nc->thoi_gian_khai_giang);
                        ?>
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <div class="event-calender-wrapper">
                                <div class="event-calender-holder">
                                    <h3><?php echo $date[2]?></h3>
                                    <p><?php echo $date[1]?></p>
                                    <span><?php echo $date[0]?></span>
                                </div>
                            </div>
                            <div class="event-content-holder">
                                <h3><a target="_blank" href="singer.php?ma_khoa_hoc=<?php echo $nc->ma_khoa_hoc;?>"><?php echo $nc->ten_lop;?></a></h3>
                                <ul>
                                    <li><?php echo $nc->ca_hoc;?></li>
                                    <li><?php echo $nc->ten_khoa_hoc;?></li>
                                </ul>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- News and Event Area End Here -->
<!-- Counter Area Start Here -->
<div class="counter-area bg-primary-deep" style="background-image: url('public/layout/img/banner/4.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".0s" data-wow-delay=".1s">
                <h2 class="about-counter title-bar-counter" data-num="<?php echo intval($ct1->CT);?>"><?php echo intval($ct1->CT);?></h2>
                <p>Số lượng giảng viên trung tâm</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".0s" data-wow-delay=".2s">
                <h2 class="about-counter title-bar-counter" data-num="<?php echo intval($cs->CS);?>"><?php echo intval($cs->CS);?></h2>
                <p>Tổng số học viên của trung tâm</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".0s" data-wow-delay=".3s">
                <h2 class="about-counter title-bar-counter" data-num="<?php echo intval($cc->CC);?>"><?php echo intval($cc->CC);?></h2>
                <p>Tổng số khóa học của trung tâm</p>
            </div>
        </div>
    </div>
</div>
<!-- Counter Area End Here -->
<!-- Students Say Area Start Here -->
<div class="students-say-area">
    <h2 class="title-default-center">Cảm nhận học viên</h2>
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
            <?php
            foreach ($rates as $rt) {
                ?>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#"><?php echo $rt->ho_ten;?></a></h3>
                            <span class="item-designation"><?php echo $rt->ten_khoa_hoc;?></span>
                            <ul class="rating-wrapper">

                            </ul>
                            <div class="item-content"><?php echo $rt->ten_cam_nhan;?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Students Say Area End Here -->

<!-- Brand Area Start Here -->
<div class="brand-area">
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/1.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/2.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/3.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/4.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/1.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/2.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/3.jpg" alt="brand"></a>
            </div>
            <div class="brand-area-box">
                <a href="#"><img src="public/layout/img/brand/4.jpg" alt="brand"></a>
            </div>
        </div>
    </div>
</div>
<!-- Brand Area End Here -->