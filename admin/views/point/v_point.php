<div id="main-wrapper">

    <div class="content-heading text-center" style="margin-right: 46%;">
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='category.php'">Quay lại </button>
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='addcouse.php?ma_loai=<?php echo $_GET["ma_loai"];?>'">Thêm </button>
        <button class="btn btn-success" type="button" id="dowload-excel">Xuất excel </button>
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
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Danh mục</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <?php
                                            $hidden = $kq->KQ > 0 ? "hide" : "";
                                        ?>
                                        <?php
                                            if($flag) {
                                        ?>
                                        <form method="POST" action="importExcel.php" enctype="multipart/form-data" class="text-right <?php echo $hidden?>">
                                            <button class="btn btn-danger" type="submit" name="btnGui">Thêm bảng điểm excel </button>
                                            <input type="file" name="file">
                                            <input type="hidden" name="ma_lop" value="<?php echo $_GET['ma_lop'];?>" ?>
                                        </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">

                                    <thead>
                                    <tr>
                                        <th>Mã học viên</th>
                                        <th>Tên học viên</th>
                                        <th>Điểm thi</th>
                                        <th>Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($students as $st) {

                                        ?>
                                        <tr>

                                            <td><?php echo $st->ma_nguoi_dung; ?></td>
                                            <td><?php echo $st->ho_ten;?></td>
                                            <td><?php echo $st->diem;?></td>
                                            <td></td>
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
<input type="hidden" id="ma_lop" value="<?php echo $_GET['ma_lop'];?>" ?>
<script>
    $(document).ready(function() {
        const ma_lop = $("#ma_lop").val();
        $("#dowload-excel").click(function() {
            $.ajax({
                type: 'POST',
                url: 'exportexcel.php',
                dataType: 'json',
                data: {
                    ma_lop
                }
            }).done(function(response) {
                if(response.status === 'success') {
                    var link = document.createElement("a");
                    link.dowload = "excel.xlsx";
                    link.href = response.name;
                    link.click();
                }
            });
        });
    })
</script>