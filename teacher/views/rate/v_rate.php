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
                                    <?php
                                    if(!empty($error)) echo "<div class=\"alert alert-danger\">
  <strong></strong> ".$error."
</div>";
                                    ?>
                                    <?php
                                    if(!empty($sucess)) echo "<div class=\"alert alert-success\">
  <strong></strong> ".$sucess."
</div>";
                                    ?>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >Đánh giá</label>
                                        <div class="col-sm-9">
                                            <textarea  name="danh_gia" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success" style="height: 2.4em;"  name="btnDanhGia" >Gửi đánh giá</button>
                                </div>
                            </form>
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