<!-- News Details Page Area Start Here -->
<div class="news-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-img-holder">
                            <img style="    width: 848px;height: 402px;" src="public/layout/imagesnews/<?php echo $new->hinh;?>" class="img-responsive" alt="research">

                        </div>
                        <h2 class="title-default-left-bold-lowhight"><a href="#"><?php echo $new->ten_tin_tuc?></a></h2>
                        <ul class="title-bar-high news-comments">
                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Ngày đăng: <?php echo date('d-m-Y', strtotime($new->ngay_tao));?></span></a></li>

                        </ul>
                        <p><?php echo $new->noi_dung;?></p>
                        <ul class="news-social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Latest Posts</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    <?php
                                    foreach ($news_l as $nl) {
                                        ?>
                                        <li>
                                            <div class="latest-research-img">
                                                <a href="#"><img style="    width: 80px;height: 62px;"
                                                                 src="public/layout/imagesnews/<?php echo $nl->hinh; ?>"
                                                                 class="img-responsive" alt="skilled"></a>
                                            </div>
                                            <div class="latest-research-content">
                                                <h4><?php echo date('d-m-Y', strtotime($nl->ngay_tao)); ?></h4>
                                                <p><?php echo $nl->ten_tin_tuc; ?></p>
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
            </div>
        </div>
    </div>
</div>
<!-- News Page Area End Here -->