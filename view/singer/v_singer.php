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
                                                        echo "<button class='btn btn-primary register-course-order' data-href='order.php?ma_lop=".$cl->ma_lop."' type='button'>Đăng ký</button>";
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
                                <h3 class="sidebar-title">Đánh giá của học viên</h3>
                                <?php
                                foreach ($rates as $rt) {
                                    ?>
                                    <div class="media">
                                        <a href="#" class="pull-left">
                                            <img width="67" height="64" alt="Comments" src="public/layout/img/course/student.jpg"
                                                 class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <h3><a href="#"><?php
                                                    echo $rt->ho_ten;
                                                    ?></a></h3>
                                            <p><?php
                                                echo $rt->ten_cam_nhan;
                                                ?></p>
                                            <div class="replay-area">

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Giá tiền</h3>
                            <div class="sidebar-course-price">
                                <span style="font-size: 25px"><?php
                                    echo number_format($couse->hoc_phi);
                                    ?> VND</span>
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


    $(".register-course-order").click(function() {
        const isLogged = $("#is-logged").val();
        if(isLogged == "none") {
            $("#login-button").addClass("open");
            $("#login-form").css("display", "block");
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#login-form").offset().top
            }, 500);
        }
        else {
            var href = $(this).data("href");
            window.location.href = href;
        }
    });
</script>
