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
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="point.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Thêm điểm </span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="quantri.php?func=exit" aria-expanded="false"><i class="m-r-10 mdi mdi-logout"></i><span class="hide-menu">Đăng xuất</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>