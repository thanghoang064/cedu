<!-- Lecturers Page 1 Area Start Here -->
<div class="lecturers-page1-area">
    <div class="container">
        <div class="row">
            <?php
            if(count($teachers) == 0)
            {
                echo "<div class='alert alert-info'>Hiện vẫn chưa có  khóa học trong mục này. Nhấn vào <a class='thongbao' href='index.php'>đây</a> để quay lại trang chủ</div>";
            }
            else{
            for($i = 0;$i<count($teachers);$i+=3) {
            ?>
            <?php
            for ($j = $i; $j < $i + 3; $j++) {
            ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img style="width:262px;height: 272px" class="img-responsive" src="public/layout/imagesteacher/<?php echo $teachers[$j]->hinh_gv;?>" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#"><?php echo $teachers[$j]->ten_gv;?></a></h3>
                            <span class="item-designation"><?php echo $teachers[$j]->thongtin_gv;?></span>

                        </div>
                    </div>
                </div>
            </div>
                <?php
                if ($j == count($teachers) - 1) {
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
        <div class="row">
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
</div>
<!-- Lecturers Page 1 Area End Here -->