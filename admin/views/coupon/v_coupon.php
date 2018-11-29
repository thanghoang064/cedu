<div id="main-wrapper">

    <div class="content-heading text-center" style="margin-right: 53%">
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='couse.php?ma_loai=<?php echo $couse->ma_loai;?>'">Quay lại </button>
        <button  style="margin:auto" class="btn btn-default" href="" id="" onclick="window.location.href='addcoupon.php'">Thêm </button>

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

                                        <th>Tên khuyến mãi</th>
                                        <th>Phần trăm giảm giá</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Trạng thái</th>
                                        <th style="">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($coupons as $cp) {
                                        ?>
                                        <tr>

                                            <td><?php echo $cp->ten_khuyen_mai;?></td>
                                            <td><?php echo $cp->phan_tram_giam_gia;?></td>
                                            <td><?php echo $cp->ngay_bat_dau;?></td>
                                            <td><?php echo $cp->ngay_ket_thuc;?></td>
                                            <td><span style="margin-right: 15%;"
                                                      class="badge badge-pill badge-<?php if($cp->trang_thai==0)
                                                      {
                                                          echo "danger";
                                                      }
                                                      else
                                                      {
                                                          echo "info";
                                                      }

                                                      ?>
                            float-right"><?php if($cp->trang_thai==0)
                                                    {
                                                        echo "ngưng hoạt động";
                                                    }
                                                    else
                                                    {
                                                        echo "đang hoạt động";
                                                    }?></span>
                                            </td>
                                            <td>
                                                <button type="button" id="" class="btn btn-info"
                                                        onclick="window.location.href='editcoupon.php?ma_khuyen_mai=<?php echo $cp->ma_khuyen_mai;?>'">
                                                    Sửa
                                                </button>
                                                <button type="button" id="" class="btn btn-danger"
                                                        onclick="window.location.href='deletecoupon.php?ma_khuyen_mai=<?php echo $cp->ma_khuyen_mai;?>'">
                                                    Xóa
                                                </button>
                                                <button type="button" data-id="<?php echo $cp->ma_khuyen_mai?>" class="btn btn-orange btn-send-coupon">
                                                    Gửi mã khuyến mãi
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

<script>
    $(document).ready(function() {
        $(".btn-send-coupon").click(function() {
            $("body").loading({
               message: "Đang xử lý gửi email"
            });
            const id = $(this).data('id');
            $.ajax({
                url: 'sendcoupon.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    id
                }
            }).done(function(result) {
                $("body").loading('stop');
                if(result.status == 1) {
                    window.location.reload();
                }
            });
        })
    })
</script>