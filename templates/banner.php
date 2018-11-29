
<?php
include('models/m_banner.php');
$m_banner = new M_banner();
$banners = $m_banner->read_banner();

?>
<div class="slider1-area overlay-default index1" style="margin-top: 5px;">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides" style="height: 585px;">
            <?php
            foreach ($banners as $bn) {
                ?>
                <img src="public/layout/imagesbanner/<?php echo $bn->hinh;?>" alt="slider" title="#slider-direction-1"/>
                <?php
            }
            ?>
        </div>
<!--        <div id="slider-direction-1" class="t-cn slider-direction">-->
<!--            <div class="slider-content s-tb slide-1">-->
<!--                <div class="title-container s-tb-c">-->
<!--                    <div class="title1">Best Education For Design</div>-->
<!--                    <div class="slider-btn-area">-->
<!--                        <a href="#" class="default-big-btn">Start a Course</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>
<!-- Slider 1 Area End Here -->