<?php
session_start();
?>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Add your site or application content here -->
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<!-- Main Body Area Start Here -->
<div id="wrapper">
    <!-- Header Area End Here -->
    <header>
        <div id="header2" class="header2-area">
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="header-top-left">
                                <ul>
                                    <?php

                                    if(isset($_SESSION['user']))
                                    {
                                        $userInfo = $_SESSION['user'];
                                        echo "<span style='color: #FFF'>Xin chào " . $userInfo->ho_ten . "</span>";
                                    }
                                    else
                                    {
                                        ?>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> 094.806.1238</a></li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">thanghoang064@gmail.com</a></li>
                                        <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="header-top-right">
                                <ul>
                                    <li>
                                        <?php
                                        if(!isset($_SESSION['user'])) {
                                            ?>
                                            <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock"
                                                                                                    aria-hidden="true"></i>
                                                Đăng nhập</a>
                                            <?php
                                        }
                                        ?>
                                        <div class="login-form" id="login-form" style="display: none;">
                                            <div class="title-default-left-bold">Đăng nhập</div>
                                            <form method="POST">
                                                <label>Tên người dùng hoặc email *</label>
                                                <input type="text" placeholder="E-mail" name="ten_dang_nhap"  required/>
                                                <label>Mật khẩu *</label>
                                                <input type="password" placeholder="Mật khẩu" name="mat_khau" required/>
                                                <label class="check">Bạn chưa có tài khoản?<a href="registration.php">Đăng kí ngay</a></label>
                                                <button class="default-big-btn" type="submit" name="login" value="Login">Đăng nhập</button>
                                                <button class="default-big-btn form-cancel" type="submit" value="">Hủy</button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apply-btn-area">
                                            <?php
                                            if ($_SESSION['user'])
                                            {
                                                ?>
                                                <a href="http://localhost:8888/cedu/student/quantri.php" class="apply-now-btn">Trang học viên</a>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apply-btn-area">
                                            <?php
                                            if(isset($_SESSION['user'])) {
                                                ?>
                                                <a href="logout.php?func=exit" class="apply-now-btn">Đăng xuất</a>
                                                <?php
                                            }
                                            ?>
                                        </div>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-area bg-textPrimary" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <div class="logo-area">
                                <a href="index.html"><img class="img-responsive" src="public/layout/img/logo-primary.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <?php
                            include('templates/navigation.php');
                            ?>
                        </div>
                        <div class="col-lg-1 col-md-1 hidden-sm">
                            <div class="header-search">
                                <form>
                                    <input type="text" class="search-form" placeholder="Search...." required="">
                                    <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>

                                    <li><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                            <li><a href="index3.html">Home 3</a></li>
                                            <li><a href="index4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="about1.html">About 1</a></li>
                                            <li><a href="about2.html">About 2</a></li>
                                            <li><a href="about3.html">About 3</a></li>
                                            <li><a href="about4.html">About 4</a></li>
                                            <li><a href="lecturers1.html">lecturers 1</a></li>
                                            <li><a href="lecturers2.html">lecturers 2</a></li>
                                            <li><a href="single-lecturers.html">lecturers Details</a></li>
                                            <li><a href="pricing1.html">Pricing Plan 1</a></li>
                                            <li><a href="pricing2.html">Pricing Plan 2</a></li>
                                            <li><a href="shop1.html">Shop 1</a></li>
                                            <li><a href="shop2.html">Shop 2</a></li>
                                            <li><a href="single-shop.html">Shop Details</a></li>
                                            <li><a href="account.html">Account</a></li>
                                            <li><a href="registration.html">Registration</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Courses</a>
                                        <ul>
                                            <li><a href="courses1.html">Courses 1</a></li>
                                            <li><a href="courses2.html">Courses 2</a></li>
                                            <li><a href="courses3.html">Courses 3</a></li>
                                            <li><a href="single-courses1.html">Course Details 1</a></li>
                                            <li><a href="single-courses2.html">Course Details 2</a></li>
                                            <li><a href="single-courses3.html">Course Details 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Research</a>
                                        <ul>
                                            <li><a href="research1.html">Research 1</a></li>
                                            <li><a href="research2.html">Research 2</a></li>
                                            <li><a href="research3.html">Research 3</a></li>
                                            <li><a href="single-research.html">Research Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">News</a>
                                        <ul>
                                            <li class="has-child-menu"><a href="#">News</a>
                                                <ul class="thired-level">
                                                    <li><a href="news1.html">News 1</a></li>
                                                    <li><a href="news2.html">News 2</a></li>
                                                    <li><a href="single-news.html">News Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-child-menu"><a href="#">Event</a>
                                                <ul class="thired-level">
                                                    <li><a href="event.html">Event</a></li>
                                                    <li><a href="single-event.html">Event Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="gallery1.html">Gallery 1</a></li>
                                            <li><a href="gallery2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a>
                                        <ul>
                                            <li><a href="contact1.html">Contact 1</a></li>
                                            <li><a href="contact2.html">Contact 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
    </header>
    <?php
    // include('templates/layout.php');
    //  $a =0;
    include_once ("models/m_user.php");
    $flag= false;
    if(isset($_POST["login"]))
    {

        $ten=$_POST["ten_dang_nhap"];
        $m_user=new M_user();
        // $users = $m_user->read_user_by_nameuser($ten);
        //die();
        $mk=$_POST["mat_khau"];
        $error = "";
        $error = $m_user->luu_dang_nhap($ten,$mk);
        $userInfo = $_SESSION['user'];
        $users = $m_user->read_user_by_email($ten);


    }




    ?>
    <?php
    if(!empty($error)) echo "<div class=\"alert alert-danger\">
  <strong>Danger!</strong> ".$error."
</div>";
    ?>
