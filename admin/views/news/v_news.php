<div id="main-wrapper">

    <div class="content-heading text-center" style="margin-right: 53%;">
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='categorynews.php'">Quay lại </button>
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='addnews.php?ma_danh_muc=<?php echo $_GET["ma_danh_muc"];?>'">Thêm </button>
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
                            <h5 class="card-title"> Danh mục tin tức </h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Tên tin tức</th>
                                        <th>Mô tả ngắn</th>
                                        <th >Hình ảnh</th>
                                        <th >Nội dung</th>
                                        <th >Trạng thái</th>
                                        <th >Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($news as $ns) {
                                        ?>
                                        <tr>

                                            <td><?php echo $ns->ten_tin_tuc;?></a></td>
                                            <td><?php echo $ns->mo_ta_ngan;?> </td>
                                            <td><img src="../public/layout/imagesnews/<?php echo $ns->hinh;?>" width="80px"/></td>
                                            <td><?php echo $ns->noi_dung;?> </td>

                                            <td><span style="margin-right: 15%;"
                                                      class="badge badge-pill badge-<?php if($ns->trang_thai==1)
                                                      {
                                                          echo "danger";
                                                      }
                                                      else
                                                      {
                                                          echo "info";
                                                      }

                                                      ?>
                            float-right"><?php if($ns->trang_thai==1)
                                                    {
                                                        echo "kích hoạt";
                                                    }
                                                    else
                                                    {
                                                        echo "chưa kích hoạt";
                                                    }?></span>
                                            </td>
                                            <td>
                                                <button type="submit" id="sua_loai" class="btn btn-info" onclick="window.location.href='editnews.php?ma_tin_tuc=<?php echo $ns->ma_tin_tuc;?>&ma_danh_muc=<?php echo $_GET["ma_danh_muc"];?>'">
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