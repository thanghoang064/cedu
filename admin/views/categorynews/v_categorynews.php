<div id="main-wrapper">

    <div class="content-heading text-center">
        <button  style="margin-right: 58%" class="btn btn-default" onclick="window.location.href='addcategory.php'" id="them_loai">Thêm </button>

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

                                        <th>Tên danh mục</th>
                                        <th style="    width: 8%;">Tình trạng</th>
                                        <th style="width: 8%">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($categorynews as $ct) {
                                        ?>
                                        <tr>

                                            <td><a href="news.php?ma_loai=<?php echo $ct->ma_danh_muc?>"><?php echo $ct->ten_danh_muc;?></a></td>
                                            <td><span style="margin-right: 15%;"
                                                      class="badge badge-pill badge-<?php if($ct->trang_thai==0)
                                                      {
                                                          echo "danger";
                                                      }
                                                      else
                                                      {
                                                          echo "info";
                                                      }

                                                      ?>
                            float-right"><?php if($ct->trang_thai==0)
                                                    {
                                                        echo "chưa kích hoạt";
                                                    }
                                                    else
                                                    {
                                                        echo "kích hoạt";
                                                    }?></span>
                                            </td>
                                            <td>
                                                <button type="submit" id="sua_loai" class="btn btn-info" onclick="window.location.href='editcategorynews.php?ma_danh_muc=<?php echo $ct->ma_danh_muc;?>'">Sửa</button>

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