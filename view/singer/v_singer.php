<div class="courses-page-area3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img style="width: 848px;height: 423px;" src="public/layout/imagescouse/<?php echo $couse->hinh;?>" class="img-responsive" alt="course">
                        <div class="course-details-inner">
                            <h2 class="title-default-left title-bar-high"><?php echo $couse->ten_khoa_hoc?></h2>
                            <p><?php echo $couse->thong_tin_khoa_hoc?></p>
                            <h3 class="sidebar-title">Thông tin về khóa học</h3>
                            <ul class="course-feature">
                                <li>Thời gian học : <?php echo $couse->thoi_gian;?> Tuần </li>
                                <li>Kế hoạch học tập: </li>
                            </ul>
                        </div>
                        <?php
                            if(!empty($_SESSION['user'])) {
                                echo "<input type='hidden' value='isLogged' id='is-logged'/>";
                            }
                            else {
                                echo "<input type='hidden' value='none' id='is-logged'/>";
                            }
                        ?>
                        <div>
                            <table class="col-sm-12 table-bordered table-striped table-condensed  dataTable no-footer" style="margin-bottom:10px;padding:0px; width:100%; font-size:14px" >
                                <thead>
                                <tr class="chieu-cao" style="color:#fff;background-color:#0082c8; height:38px" role="row">
                                    <td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Lớp: activate to sort column descending">Lớp</td>
                                    <td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thời gian: activate to sort column ascending">Thời gian</td>
                                    <td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ngày khai giảng: activate to sort column ascending">Ngày khai giảng</td>
                                    <td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Địa điểm học: activate to sort column ascending">Địa điểm học</td>
                                    <td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Địa điểm học: activate to sort column ascending">Giảng viên dạy</td>
                                    <td class="sorting" rowspan="1" colspan="1" aria-label="Địa điểm học: activate to sort column ascending">Slot</td>
                                    <td style="width:100px;" rowspan="1" colspan="1">&nbsp;</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                // $originalDate = "2010-03-21";

                                //   echo $newDate;
                                foreach ($classs as $cl) {
                                    if($cl->trang_thai==1 && strtotime($cl->thoi_gian_khai_giang) > time() - (24 * 3600 * 7)) {
                                        ?>
                                        <tr class="odd">
                                            <td class="nowap sorting_1" data-title="Lớp"><?php echo $cl->ten_lop; ?></td>
                                            <td class="nowap" data-title="Thời gian"><?php echo $cl->ca_hoc; ?></td>
                                            <td class="nowap"
                                                data-title="Ngày khai giảng"><?php echo date("d-m-Y", strtotime($cl->thoi_gian_khai_giang)); ?></td>
                                            <td data-title="Địa điểm học"><?php echo $cl->dia_diem_hoc; ?></td>
                                            <td data-title="Địa điểm học"><?php echo $cl->ten_gv; ?></td>
                                            <td data-title="Địa điểm học"><?php
                                                if($cl->so_cho==0)
                                                {
                                                    echo '<p style="color:red">Hết chỗ</p>';
                                                }
                                                else
                                                {
                                                    echo $cl->so_cho;
                                                }
                                                ?></td>
                                            <td>
                                                <?php
                                                if($cl->so_cho!=0) {
                                                    $kq = $m_order->return_oder($cl->ma_lop,$_SESSION["user"]->ma_nguoi_dung);
                                                    ?>
<!--                                                    <button class="btn btn-primary register-course" data-href="order.php?ma_lop=--><?php //echo $cl->ma_lop ?><!--" onclick="registerCourse()" type="button"  --><?php

                                                    if($kq->KQ == 0) {
                                                        echo "<button class='btn btn-primary register-course' data-href='order.php?ma_lop=".$cl->ma_lop."' onclick='registerCourse()' type='button'>Đăng ký</button>";
                                                    }
                                                    else
                                                    {
                                                        echo "<button class='btn btn-primary register-course' type='button'>Đã đăng ký</button>";
                                                    }
                                                    ?>
                                                    <?php
                                                }

                                                ?>

                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <button style="opacity: 0;"></button>
                        <div class="section-divider"></div>
                        <div class="course-details-inner">
                            <div class="course-details-comments">
                                <h3 class="sidebar-title">Student Reviews</h3>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Comments" src="public/layout/img/course/16.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Greg Christman</a></h3>
                                        <h4>Excellent course!</h4>
                                        <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                        <div class="replay-area">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Comments" src="public/layout/img/course/17.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Lora Ekram</a></h3>
                                        <h4>Excellent course!</h4>
                                        <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                        <div class="replay-area">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Comments" src="public/layout/img/course/18.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Mike Jones</a></h3>
                                        <h4>Excellent course!</h4>
                                        <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                        <div class="replay-area">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Comments" src="public/layout/img/course/16.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Greg Christman</a></h3>
                                        <h4>Excellent course!</h4>
                                        <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                        <div class="replay-area">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-comments">
                                <h3 class="sidebar-title">Leave A Comment</h3>
                                <div class="row">
                                    <div class="contact-form" id="review-form">
                                        <form>
                                            <fieldset>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="rate-wrapper">
                                                            <div class="rate-label">Your Rating:</div>
                                                            <div class="rate">
                                                                <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Course Price</h3>
                            <div class="sidebar-course-price">
                                <span>$400.00</span>
                                <a href="#" class="enroll-btn">Enroll THis Course</a>
                                <a href="#" class="download-btn">Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Course Reviews</h3>
                            <div class="sidebar-course-reviews">
                                <h4>Average Rating<span>4.8</span></h4>
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                </ul>
                                <div class="skill-area">
                                    <div class="progress">
                                        <div class="lead">5 Stars </div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 100%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="100%" class="progress-bar wow fadeInLeft  animated"></div><span>10</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">4 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="80%" class="progress-bar wow fadeInLeft  animated"></div><span>6</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">3 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 60%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="60%" class="progress-bar wow fadeInLeft  animated"></div><span>3</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">2 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div><span>0</span>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">1 Stars</div>
                                        <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 0%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="0%" class="progress-bar wow fadeInLeft  animated"></div><span>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Skilled Lecturer</h3>
                            <div class="sidebar-skilled-area">
                                <ul>
                                    <li>
                                        <div class="skilled-img">
                                            <a href="#"><img src="public/layout/img/sidebar/1.jpg" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="skilled-content">
                                            <h4><a href="#">Kazi Fahim</a></h4>
                                            <p>Senior WordPress Developer</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="skilled-img">
                                            <a href="#"><img src="public/layout/img/sidebar/2.jpg" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="skilled-content">
                                            <h4><a href="#">Daizy</a></h4>
                                            <p>Graphic Designer</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="skilled-img">
                                            <a href="#"><img src="public/layout/img/sidebar/3.jpg" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="skilled-content">
                                            <h4><a href="#">Masum Devid</a></h4>
                                            <p>Senior UI Designer</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Related Courses</h3>
                            <div class="sidebar-related-area">
                                <ul>
                                    <li>
                                        <div class="related-img">
                                            <a href="#"><img src="public/layout/img/sidebar/4.jpg" class="img-responsive" alt="related"></a>
                                        </div>
                                        <div class="related-content">
                                            <h4><a href="#">GMAT Class</a></h4>
                                            <p>$159</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="related-img">
                                            <a href="#"><img src="public/layout/img/sidebar/5.jpg" class="img-responsive" alt="related"></a>
                                        </div>
                                        <div class="related-content">
                                            <h4><a href="#">IELTS Class</a></h4>
                                            <p>$200</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="related-img">
                                            <a href="#"><img src="public/layout/img/sidebar/6.jpg" class="img-responsive" alt="related"></a>
                                        </div>
                                        <div class="related-content">
                                            <h4><a href="#">Joomla Class</a></h4>
                                            <p>$120</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="related-img">
                                            <a href="#"><img src="public/layout/img/sidebar/7.jpg" class="img-responsive" alt="related"></a>
                                        </div>
                                        <div class="related-content">
                                            <h4><a href="#">Graphic Desing</a></h4>
                                            <p>$300</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Asked Any Question?</h3>
                            <div class="sidebar-question-form">
                                <form id="question-form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="message" id="sidebar-form-message" rows="3" cols="20" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="default-full-width-btn">Send</button>
                                        </div>
                                        <div class='form-response'></div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<script>

    $(document).ready(function() {
        console.log(123);
    })

    function registerCourse() {
        const isLogged = $("#is-logged").val();
        if(isLogged == "none") {
            $("#login-button").addClass("open");
            $("#login-form").css("display", "block");
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#login-form").offset().top
            }, 500);
        }
        else {
            var element = $(".register-course");
            var href = $(element).data("href");
            window.location.href = href;
        }
    }
</script>
