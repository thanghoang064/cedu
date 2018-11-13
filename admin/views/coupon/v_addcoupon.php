
<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 57%;">
        <!--        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='category.php'">Quay lại </button>-->
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='class.php?ma_khoa_hoc=<?php echo $_GET["ma_khoa_hoc"];?>'">Quay lại </button>
    </div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="" method="post" action="">
                            <div class="card-body">
                                <h4 class="card-title">Thêm khuyến mãi </h4>
                                <?php include 'views/error.php'?>
                                <div class="form-group row">
                                    <input type="hidden" class="form-control" id="ma_khoa_hoc" name="ma_khoa_hoc"  placeholder="" value="<?php echo $_GET['ma_khoa_hoc'];?>">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khuyên mãi</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_khuyen_mai" name="ten_khuyen_mai"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phần trăm giảm giá</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="phan_tram_giam_gia" name="phan_tram_giam_gia"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày bắt đầu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ngay_bat_dau" name="ngay_bat_dau"  placeholder="Ngày bắt đầu" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ngay_ket_thuc" name="ngay_ket_thuc"  placeholder="Ngày kết thúc" readonly required>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="saveclass" name="btnSave">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
