<div id="main-wrapper">

    <div class="content-heading text-center" style="margin-right: 53%;">
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='adddocument.php'">Thêm </button>
    </div>
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-body">
<!--                            <form method="POST">-->
<!--                                <div style="text-align: center" >-->
<!--                                    <select class="select2 form-control custom-select" style="width: 30%; height:36px;" name="ma_khoa_hoc">-->
<!--                                        <option>Chọn</option>-->
<!--                                        --><?php
//                                        $m_category = new M_category();
//                                        $category = $m_category->Read_category();
//                                        $m_couse = new M_couse();
//
//                                        foreach ($category as $ct)
//                                        {
//                                            ?>
<!---->
<!--                                            <optgroup label="--><?php //echo $ct->ten_loai; ?><!--">-->
<!--                                                --><?php
//                                                $couse = $m_couse->read_couse_by_category($ct->ma_loai);
//                                                foreach ($couse as $cs)
//                                                {
//                                                    ?>
<!--                                                    <option  value="--><?php //echo $cs->ma_khoa_hoc?><!--">--><?php
//                                                        echo $cs->ten_khoa_hoc;
//                                                        ?><!--</option>-->
<!--                                                    --><?php
//                                                }
//                                                ?>
<!--                                            </optgroup>-->
<!---->
<!--                                            --><?php
//                                        }
//                                        ?>
<!--                                    </select>-->
<!--                                    <button type="submit" class="btn btn-success" style="height: 2.4em;"  name="btnTimKiem" >Lọc</button>-->
<!--                                </div>-->
<!--                            </form>-->
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Tên người dùng</th>
                                        <th>Khóa học</th>
                                        <th >Cảm nhận</th>

                                        <th >Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($rates as $rt) {
                                        ?>
                                        <tr>

                                            <td><?php echo $rt->ho_ten;?></td>
                                            <td><?php echo $rt->ten_khoa_hoc;?></td>
                                            <td>
                                                <?php echo $rt->ten_cam_nhan;?>
                                            </td>

                                            <td>
                                                <?php
                                                    $classBtn = $rt->trang_thai == 0 ? "info" : "danger";
                                                    $textStatus = $rt->trang_thai == 0 ? "Kích hoạt" : "Không kích hoạt";
                                                ?>
                                                <button type="submit" class="btn btn-<?php echo $classBtn?>" onclick="window.location.href='editstatus.php?ma_cam_nhan=<?php echo $rt->ma_cam_nhan;?>&trang_thai=<?php echo $rt->trang_thai?>'">
                                                    <?php echo $textStatus;?>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>