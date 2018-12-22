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
                                    <select class="select2 form-control custom-select" style="width: 30%; height:36px;" name="ma_khoa_hoc">
                                        <option>Chọn</option>

                                                <?php
                                              //  $couse = $m_couse->read_couse_by_category($ct->ma_loai);
                                                foreach ($couses as $cs)
                                                {
                                                    ?>
                                                    <option  value="<?php echo $cs->ma_khoa_hoc?>"><?php
                                                        echo $cs->ten_khoa_hoc;
                                                        ?></option>
                                                    <?php
                                                }
                                                ?>

                                    </select>
                                    <button type="submit" class="btn btn-success" style="height: 2.4em;"  name="btnTimKiem" >Lọc</button>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Tên tài liệu</th>
                                        <th>Mô tả tài liệu</th>
                                        <th >Khóa học</th>
                                        <th >Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($documents as $dc) {
                                        ?>
                                        <tr>

                                            <td><a download="<?php echo $dc->ten_tai_lieu;?>" href="../public/layout/document/<?php echo $dc->ten_tai_lieu;?>"><?php echo $dc->ten_tai_lieu;?></a></td>
                                            <td><?php echo $dc->mo_ta_tai_lieu;?></td>
                                            <td>
                                                <?php
                                                $couse_name = $m_couse->read_couse_by_idcouse($dc->ma_khoa_hoc);
                                                echo $couse_name->ten_khoa_hoc;
                                                ?>

                                            </td>
                                            <td>
                                                <a class="btn btn-info" download="<?php echo $dc->ten_tai_lieu;?>" href="../public/layout/document/<?php echo $dc->ten_tai_lieu;?>" >
                                                  download
                                                </a>
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