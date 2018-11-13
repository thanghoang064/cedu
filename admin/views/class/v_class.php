<div id="main-wrapper">

    <div class="content-heading text-center" style="margin-right: 53%">
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='couse.php?ma_loai=<?php echo $couse->ma_loai;?>'">Quay lại </button>
        <button  style="margin:auto" class="btn btn-default" href="" id="" onclick="window.location.href='addclass.php?ma_khoa_hoc=<?php echo $_GET["ma_khoa_hoc"];?>'">Thêm </button>

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

                                        <th>Tên Lớp</th>
                                        <th>Ca học</th>
                                        <th>Thời gian khai giảng</th>
                                        <th>Địa điểm học</th>
                                        <th>Trạng thái</th>
                                        <th style="">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($classs as $cl) {
                                        ?>
                                        <tr>

                                            <td><a href="point.php?ma_lop=<?php echo $cl->ma_lop?>"><?php echo $cl->ten_lop;?></a></td>
                                            <td><?php echo $cl->ca_hoc;?></td>
                                            <td><?php echo $cl->thoi_gian_khai_giang;?></td>
                                            <td><?php echo $cl->dia_diem_hoc;?></td>
                                            <td><span style="margin-right: 15%;"
                                                      class="badge badge-pill badge-<?php if($cl->trang_thai==0)
                                                      {
                                                          echo "danger";
                                                      }
                                                      else
                                                      {
                                                          echo "info";
                                                      }

                                                      ?>
                            float-right"><?php if($cl->trang_thai==0)
                                                    {
                                                        echo "ngưng hoạt động";
                                                    }
                                                    else
                                                    {
                                                        echo "đang hoạt động";
                                                    }?></span>
                                            </td>
                                            <td>
                                                <button type="submit" id="sua_lop" class="btn btn-info"
                                                        onclick="window.location.href='editclass.php?ma_lop=<?php echo $cl->ma_lop;?>&ma_khoa_hoc=<?php echo $_GET["ma_khoa_hoc"];?>'">
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