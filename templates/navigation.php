
<nav id="desktop-nav">
    <ul>
        <li class="active"><a href="index.php">Trang chủ</a>
        </li>

        <?php
        @session_start();
        require_once ("libs/Helper.php");
        $category = Helper::loadMenu();
        ?>
        <li><a href="#">Danh mục khóa học</a>
            <ul>
                <?php
                foreach ($category as $ct) {
                ?>
                <li><a href="couse.php?ma_loai=<?php echo $ct->ma_loai;?>"><?php echo $ct->ten_loai;?></a></li>
                    <?php
                }
                ?>
            </ul>
        </li>
        <li><a href="teacher.php">Giảng viên</a>

        </li>
        <?php
        $category_news = Helper::loadMenu_news();
        ?>
        <li><a href="#">Danh mục tin tức</a>
            <ul>
                <?php
                foreach ($category_news as $ct_news) {
                ?>
                <li><a href="news.php?ma_danh_muc=<?php echo $ct_news->ma_danh_muc;?>"><?php echo $ct_news->ten_danh_muc;?></a></li>
                    <?php
                }
                ?>

            </ul>
        </li>
        <li><a href="#">Liên hệ</a>
        </li>

    </ul>
</nav>