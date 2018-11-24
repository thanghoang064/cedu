
<nav id="desktop-nav">
    <ul>
        <li class="active"><a href="#">Trang chủ</a>
            <ul>
                <li class="active"><a href="index.html">Home 1</a></li>
                <li><a href="index2.html">Home 2</a></li>
                <li><a href="index3.html">Home 3</a></li>
                <li><a href="index4.html">Home 4</a></li>
            </ul>
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
        <li><a href="#">Giảng viên</a>
            <ul>
                <li><a href="research1.html">Research 1</a></li>
                <li><a href="research2.html">Research 2</a></li>
                <li><a href="research3.html">Research 3</a></li>
                <li><a href="single-research.html">Research Details</a></li>
            </ul>
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
            <ul>
                <li><a href="contact1.html">Contact 1</a></li>
                <li><a href="contact2.html">Contact 2</a></li>
            </ul>
        </li>

    </ul>
</nav>