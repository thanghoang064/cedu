<div id="main-wrapper">

    <div class="content-heading text-center" style="margin-right: 53%;">

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
                            <form method="POST">
                                <div style="text-align: center" >
                                    <select class="select2 form-control custom-select" style="width: 30%; height:36px;" name="ma_lop">
                                        <option>Mời bạn chọn lớp học</option>

                                        <?php
                                        //  $couse = $m_couse->read_couse_by_category($ct->ma_loai);
                                        foreach ($class as $cl)
                                        {
                                            ?>
                                            <option  value="<?php echo $cl->ma_lop?>"><?php
                                                echo $cl->ten_lop;
                                                ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" class="btn btn-success" style="height: 2.4em;"  name="btnTimKiem" >Xem điểm</button>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Khóa học</th>
                                        <th >Điểm</th>
                                        <th >Xếp loại</th>
                                    </tr>
                                    </thead>
                                    <h1><?php echo $notu;?></h1>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $point->ten_khoa_hoc;?></td>
                                            <td>
                                                <?php echo $point->diem;?>
                                            </td>
                                            <td>
                                                <?php if($point->diem>8)
                                                {
                                                    echo "Giỏi";
                                                }
                                                else if ($point->diem<8&&$point->diem>6)
                                                {
                                                    echo "Khá";
                                                }
                                                    ?>
                                            </td>
                                        </tr>
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