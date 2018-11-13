<?php
@session_start();
//include ("models/m_user");
////require_once ("libs/Pager.php");
////$users = Pager::loadMenu(8);
//////
////
//if(isset($_SESSION["fullname"])) {
//    include ("models/m_user");
//$users = $m_user->read_user_by_iduser(8);
//}
?>
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Thống kê doanh thu</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="category.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Danh mục-Khóa học-Lớp-Điểm</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="document.php" aria-expanded="false"><i class="mdi m-r-10 mdi mdi-account-alert"></i><span class="hide-menu">Tài liệu</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="teacher.php" aria-expanded="false"><i class="m-r-10 mdi mdi-account-switch"></i><span class="hide-menu">Giảng viên</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="user.php" aria-expanded="false"><i
                                    class="m-r-10 mdi mdi-account-key"></i><span
                                    class="hide-menu">Quản lí người  dùng</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="banner.php" aria-expanded="false"><i class="m-r-10 mdi mdi-apps"></i><span class="hide-menu">Tiêu đề</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="banner.php" aria-expanded="false"><i class="m-r-10 mdi mdi-apps"></i><span class="hide-menu">Chương trình khuyến mại</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="oder.php" aria-expanded="false"><i class="m-r-10 mdi mdi-cart-outline"></i><span class="hide-menu">Danh sách đăng kí</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="quantri.php?func=exit" aria-expanded="false"><i class="m-r-10 mdi mdi-logout"></i><span class="hide-menu">Đăng xuất</span></a></li>

                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a></li>
                        <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>