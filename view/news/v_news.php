
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
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-find-course">
                                <form id="checkout-form">
                                    <div class="form-group course-name">
                                        <input id="first-name" placeholder="Type Here . . .." class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <button class="sidebar-search-btn-full disabled" type="submit" value="Login">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="sidebar-categories">
                                <li><a href="#">GMAT</a></li>
                                <li><a href="#">IELTS</a></li>
                                <li><a href="#">Regular MBA</a></li>
                                <li><a href="#">BBA</a></li>
                                <li><a href="#">CSE</a></li>
                                <li><a href="#">Diploma</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Latest Posts</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="#"><img src="public/layout/img/sidebar/8.jpg" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h4>30 Nov, 2016</h4>
                                            <p>when an unknown printer took.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="#"><img src="public/layout/img/sidebar/4.jpg" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h4>10 Aug, 2016</h4>
                                            <p>when an unknown printer took.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="#"><img src="public/layout/img/sidebar/9.jpg" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h4>05 Jul, 2016</h4>
                                            <p>when an unknown printer took.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="#"><img src="public/layout/img/sidebar/10.jpg" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h4>30 Feb, 2016</h4>
                                            <p>when an unknown printer took.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Popular Tags</h3>
                            <ul class="product-tags">
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Study</a></li>
                                <li><a href="#">Class</a></li>
                                <li><a href="#">Lecturers</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">University</a></li>
                                <li><a href="#">Date</a></li>
                                <li><a href="#">Campus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Page Area End Here -->