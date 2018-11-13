
<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 53%">
        <button  style="margin: auto" class="btn btn-default" onclick="">Quay lại </button>
        <button  style="margin:auto" class="btn btn-default" onclick="window.location.href='addteacher.php'" id="" onclick="">Thêm </button>
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
                            <h5 class="card-title">Basic Datatable</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>

                                        <th>Tên giảng viên</th>
                                        <th>Ảnh giảng viên</th>
                                        <th>Thông tin giảng viên</th>
                                        <th>Trạng thái</th>
                                        <th style="">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($teachers as $tc) {
                                        ?>
                                        <tr>

                                            <td><?php echo $tc->ten_gv; ?></td>
                                            <td><img src="../public/layout/imagesteacher/<?php echo $tc->hinh_gv;?>" width="80px"/></td>
                                            <td><?php echo $tc->thongtin_gv; ?></td>
                                            <td><span style="margin-right: 15%;"
                                                      class="badge badge-pill badge-<?php if($tc->trang_thai==1)
                                                      {
                                                          echo "danger";
                                                      }
                                                      else
                                                      {
                                                          echo "info";
                                                      }

                                                      ?>
                                         float-right"><?php if($tc->trang_thai==1)
                                                    {
                                                        echo "đang làm viêc";
                                                    }
                                                    else
                                                    {
                                                        echo "nghỉ viêc";
                                                    }?></span>
                                            </td>
                                            <td>
                                                <button type="submit" id="sua_danh_gia" class="btn btn-info"
                                                        onclick="window.location.href='editteacher.php?ma_giang_vien=<?php echo $tc->ma_gv;?>'">
                                                    Sửa
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