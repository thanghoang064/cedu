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
                        <form class="form-horizontal" id="form_editclass" method="post" >
                            <div class="card-body">
                                <h4 class="card-title">Sửa lớp </h4>
                                <div class="form-group row">
                                    <input type="hidden" class="form-control" id="ma_khoa_hoc" name="ma_khoa_hoc"  placeholder="" value="<?php echo $_GET['ma_khoa_hoc'];?>">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên lớp</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_lop" name="ten_lop" value="<?php echo $class->ten_lop;?>"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <input type="hidden" id="ten_gv_value1" name ="ten_gv_value1" value = "<?php echo $class->ma_gv?>">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giảng viên dạy</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="ten_gv1" name="ten_gv"  >
                                            <?php foreach ($teachers as $tc) {
                                                ?>
                                                <option value="<?php echo $tc->ma_gv;?>"><?php echo $tc->ten_gv;?></option>

                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ca học</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ca_hoc" name="ca_hoc" value="<?php echo $class->ca_hoc;?>" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày khai giảng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ngay_khai_giang" name="ngay_khai_giang"  value="<?php echo date('m-d-Y', strtotime($class->thoi_gian_khai_giang));?>" placeholder="" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa điểm học</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dia_diem_hoc" name="dia_diem_hoc" value="<?php echo $class->dia_diem_hoc;?>" placeholder=""  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thời gian học</label>
                                    <input type="hidden" id="trang_thai_value" name ="trang_thai_value" value = "<?php echo $class->trang_thai;?>">
                                    <div class="col-sm-9">
                                        <select class="form-control" id="trang_thai" name="trang_thai"  >
                                            <option value="1">Kích hoạt</option>
                                            <option value="0">Bỏ kích hoạt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số chỗ</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="so_cho" name="so_cho"  placeholder="" value="<?php echo $class->so_cho;?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="editclass" name="btnSave">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
