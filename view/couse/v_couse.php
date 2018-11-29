<!-- Courses Page 1 Area Start Here -->
<div class="courses-page-area1">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="courses-page-top-area">
                            <div class="courses-page-top-left">
                                <p></p>
                            </div>
                            <div class="courses-page-top-right">
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="gried-view">
                            <?php
                            if(count($couses) == 0)
                            {
                                echo "<div class='alert alert-info'>Hiện vẫn chưa có  khóa học trong mục này. Nhấn vào <a class='thongbao' href='index.php'>đây</a> để quay lại trang chủ</div>";
                            }
                            else{
                            for($i = 0;$i<count($couses);$i+=3) {
                            ?>
                            <?php
                            for ($j = $i; $j < $i + 3; $j++) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="courses-box1">
                                    <div class="single-item-wrapper">
                                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                            <img class="img-responsive" style="    width: 265px;height: 190px;" src="public/layout/imagescouse/<?php echo $couses[$j]->hinh;?>" alt="courses">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="courses-content-wrapper">
                                            <h3 class="item-title"><a href="singer.php?ma_khoa_hoc=<?php echo $couses[$j]->ma_khoa_hoc; ?>&ma_loai=<?php echo $couses[$j]->ma_loai; ?>"><?php echo $couses[$j]->ten_khoa_hoc;?></a></h3>
                                            <ul class="courses-info">
                                                Thời gian học:
                                                <li><?php echo $couses[$j]->thoi_gian; ?> Tuần</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php
                                if ($j == count($couses) - 1) {
                                    break;
                                }
                            }
                                ?>

                                <div class="clearfix"></div>
                                <?php
                            }
                            }
                            ?>
                        </div>
                        <!-- Listed product show -->
<!--                        <div role="tabpanel" class="tab-pane" id="list-view">-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                <div class="courses-box3">-->
<!--                                    <div class="single-item-wrapper">-->
<!--                                        <div class="courses-img-wrapper hvr-bounce-to-right">-->
<!--                                            <img class="img-responsive" src="public/layout/img/course/1.jpg" alt="courses">-->
<!--                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>-->
<!--                                        </div>-->
<!--                                        <div class="courses-content-wrapper">-->
<!--                                            <h3 class="item-title"><a href="#">GMAT</a></h3>-->
<!--                                            <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>-->
<!--                                            <ul class="courses-info">-->
<!--                                                <li>1 Year-->
<!--                                                    <br><span> Course</span></li>-->
<!--                                                <li>15-->
<!--                                                    <br><span> Classes</span></li>-->
<!--                                                <li>05 pm - 07 pm-->
<!--                                                    <br><span> Time</span></li>-->
<!--                                            </ul>-->
<!--                                            <div class="courses-fee">$400</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                <div class="courses-box3">-->
<!--                                    <div class="single-item-wrapper">-->
<!--                                        <div class="courses-img-wrapper hvr-bounce-to-right">-->
<!--                                            <img class="img-responsive" src="public/layout/img/course/2.jpg" alt="courses">-->
<!--                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>-->
<!--                                        </div>-->
<!--                                        <div class="courses-content-wrapper">-->
<!--                                            <h3 class="item-title"><a href="#">IELTS</a></h3>-->
<!--                                            <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>-->
<!--                                            <ul class="courses-info">-->
<!--                                                <li>2 Months-->
<!--                                                    <br><span> Course</span></li>-->
<!--                                                <li>15-->
<!--                                                    <br><span> Classes</span></li>-->
<!--                                                <li>08 pm - 09 pm-->
<!--                                                    <br><span> Time</span></li>-->
<!--                                            </ul>-->
<!--                                            <div class="courses-fee">$800</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                <div class="courses-box3">-->
<!--                                    <div class="single-item-wrapper">-->
<!--                                        <div class="courses-img-wrapper hvr-bounce-to-right">-->
<!--                                            <img class="img-responsive" src="public/layout/img/course/3.jpg" alt="courses">-->
<!--                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>-->
<!--                                        </div>-->
<!--                                        <div class="courses-content-wrapper">-->
<!--                                            <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>-->
<!--                                            <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>-->
<!--                                            <ul class="courses-info">-->
<!--                                                <li>6 Months-->
<!--                                                    <br><span> Course</span></li>-->
<!--                                                <li>15-->
<!--                                                    <br><span> Classes</span></li>-->
<!--                                                <li>04 pm - 06 pm-->
<!--                                                    <br><span> Time</span></li>-->
<!--                                            </ul>-->
<!--                                            <div class="courses-fee">$100</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                <div class="courses-box3">-->
<!--                                    <div class="single-item-wrapper">-->
<!--                                        <div class="courses-img-wrapper hvr-bounce-to-right">-->
<!--                                            <img class="img-responsive" src="public/layout/img/course/10.jpg" alt="courses">-->
<!--                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>-->
<!--                                        </div>-->
<!--                                        <div class="courses-content-wrapper">-->
<!--                                            <h3 class="item-title"><a href="#">Graphic Design</a></h3>-->
<!--                                            <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>-->
<!--                                            <ul class="courses-info">-->
<!--                                                <li>2 Years-->
<!--                                                    <br><span> Course</span></li>-->
<!--                                                <li>15-->
<!--                                                    <br><span> Classes</span></li>-->
<!--                                                <li>03 pm - 05 pm-->
<!--                                                    <br><span> Time</span></li>-->
<!--                                            </ul>-->
<!--                                            <div class="courses-fee">$500</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                <div class="courses-box3">-->
<!--                                    <div class="single-item-wrapper">-->
<!--                                        <div class="courses-img-wrapper hvr-bounce-to-right">-->
<!--                                            <img class="img-responsive" src="public/layout/img/course/11.jpg" alt="courses">-->
<!--                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>-->
<!--                                        </div>-->
<!--                                        <div class="courses-content-wrapper">-->
<!--                                            <h3 class="item-title"><a href="#">Diploma</a></h3>-->
<!--                                            <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>-->
<!--                                            <ul class="courses-info">-->
<!--                                                <li>10 Months-->
<!--                                                    <br><span> Course</span></li>-->
<!--                                                <li>15-->
<!--                                                    <br><span> Classes</span></li>-->
<!--                                                <li>09 am - 11 am-->
<!--                                                    <br><span> Time</span></li>-->
<!--                                            </ul>-->
<!--                                            <div class="courses-fee">$300</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                <div class="courses-box3">-->
<!--                                    <div class="single-item-wrapper">-->
<!--                                        <div class="courses-img-wrapper hvr-bounce-to-right">-->
<!--                                            <img class="img-responsive" src="public/layout/img/course/12.jpg" alt="courses">-->
<!--                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>-->
<!--                                        </div>-->
<!--                                        <div class="courses-content-wrapper">-->
<!--                                            <h3 class="item-title"><a href="#">CSE</a></h3>-->
<!--                                            <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>-->
<!--                                            <ul class="courses-info">-->
<!--                                                <li>6 Months-->
<!--                                                    <br><span> Course</span></li>-->
<!--                                                <li>15-->
<!--                                                    <br><span> Classes</span></li>-->
<!--                                                <li>05 pm - 07 pm-->
<!--                                                    <br><span> Time</span></li>-->
<!--                                            </ul>-->
<!--                                            <div class="courses-fee">$600</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="pagination-left">
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
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-9">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Tìm khóa học</h3>
                            <div class="sidebar-find-course">
                                <form id="checkout-form" method="post">

                                    <div class="form-group">
                                        <div class="custom-select">
                                            <select id="ten_khoa_hoc" name="ten_khoa_hoc" class='select2'>
                                                <?php
                                                foreach ($couses_full as $cs) {
                                                    ?>
                                                    <option value="<?php echo $cs->ma_khoa_hoc;?>"><?php echo $cs->ten_khoa_hoc;?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="sidebar-search-btn disabled" type="submit" name="btnTimKhoaHoc" value="">Tìm khóa học</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Danh mục khóa học</h3>
                            <?php
                            $m_category = new M_category();
                            $category = $m_category->Read_category();

                            ?>
                            <ul class="sidebar-categories">
                                <?php
                                foreach ($category as $ct) {
                                    ?>
                                    <li><a href="couse.php?ma_loai=<?php echo $ct->ma_loai;?>"><?php echo $ct->ten_loai;?> </a></li>
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
<!-- Courses Page 1 Area End Here -->