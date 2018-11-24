<div id="main-wrapper" xmlns="http://www.w3.org/1999/html">

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
                    <form class="form-horizontal" id="" method="post"  action="">
                        <div class="card" style="background: initial;">
                            <div class="content-box-header">
                                <h3></h3>
                                <div class="clear"></div>
                            </div>
                            <!-- End .content-box-header -->
                            <div class="content-box-content">
                                <div class="tab-content default-tab" id="tab1">
                                    <fieldset>
                                        <strong>
                                            <font color="#993300">
                                                <p>

                                                    <label>Mã đăng kí: <?php echo $oder->ma_dk;?></label>
                                                    <label><span style="margin-left:50px">Ngày đăng kí: <?php echo $oder->ngay_dk;?></span></label>
                                                </p>
                                                <p>
                                                    <label>Họ tên học viên: <?php echo $oder->ho_ten;?></label>
                                                </p>
                                                <p>

                                                    <label><span>Điện thoại:<?php echo $oder->phone;?></span></label>
                                                    <label><span style="margin-left:20px">Email:<?php echo $oder->email;?></span></label>
                                                </p>
                                                <p>
                                                    <label>Tên khóa học: <?php echo $couse_class->ten_khoa_hoc;?></label>
                                                </p>

                                                <p>
                                                    <label>Trị giá: <?php echo number_format($oder->gia_tien);?>VND</label>
                                                </p>
                                                <p>
                                                    <input type="hidden" id="ma_lop" name ="ma_lop" value = "<?php echo $couse_class->ma_lop;?>">
                                                    <label >Trạng thái:</label>
                                                    <?php

                                                    if($oder->tinh_trang==1)
                                                    {
                                                        echo '<label>Đã thanh toán</label>';
                                                    }
                                                    else {
                                                        ?>
                                                        <!--                                                        <select id="" name="trang_thai">-->
                                                        <!---->
                                                        <!--                                                            <option value="0">Chưa thanh toán</option>-->
                                                        <!--                                                            <option value="1">Đã thanh toán</option>-->
                                                        <!--                                                        </select>-->

                                                        <?php
                                                        echo '<label>Chưa thanh toán</label>';
                                                    }
                                                    ?>

                                                </p>
                                            </font>
                                            <strong>
                                    </fieldset>
                                    <div class="clear"></div>
                                    <!-- End .clear -->
                                    <table class="col-sm-12 table-bordered table-striped table-condensed sorttable dataTable no-footer" style="margin-bottom:10px;padding:0px; width:100%; font-size:14px" id="DataTables_Table_0" role="grid"><thead>
                                        <tr class="chieu-cao" style="color:#fff;background-color:#0082c8; height:38px" role="row"><td class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Lớp: activate to sort column descending">Lớp</td><td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thời gian: activate to sort column ascending">Thời gian</td><td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ngày khai giảng: activate to sort column ascending">Ngày khai giảng</td><td class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Địa điểm học: activate to sort column ascending">Địa điểm học</td>
                                        </tr> </thead><tbody>

                                        <tr role="row" class="odd">
                                            <td class="nowap sorting_1" data-title="Lớp"><?php echo $couse_class->ten_lop; ?></td>
                                            <td class="nowap" data-title="Thời gian"><?php echo $couse_class->ca_hoc; ?></td>
                                            <td class="nowap" data-title="Ngày khai giảng">20/12/1996</td>
                                            <td data-title="Địa điểm học">136 nguyễn văn cừ</td>

                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <p><input class="button print" type="button" value="In đăng kí" name="btnIn" onclick="window.print()" /></p>
                                                <div class="clear"></div>
                                            </td>
                                            <td colspan="3">
                                                <div class="pagination"><h4>Tổng thành tiền: <?php echo number_format($couse_class->don_gia) ?> đồng</h4> </div>
                                                <div class="clear"></div></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <?php
                                if ($oder->tinh_trang==1)
                                {
                                    echo ' <button style="margin-left: 40%;" type="submit" class="btn btn-primary" >Quay lại</button>';
                                }
                                else {
                                    ?>
                                    <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="save"
                                            name="btnSave">Cập nhật thanh toán
                                    </button>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </form>
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
