
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
                        <form class="form-horizontal" id="form_addclass" method="post" action="addclass.php">
                            <div class="card-body">
                                <h4 class="card-title">Thêm lớp </h4>
                                <?php
                                if(!empty($error)) echo "<div class=\"alert alert-danger\">
  <strong></strong> ".$error."
</div>";
                                ?>
                                <div class="form-group row">
                                    <input type="hidden" class="form-control" id="ma_khoa_hoc" name="ma_khoa_hoc"  placeholder="" value="<?php echo $_GET['ma_khoa_hoc'];?>">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên lớp</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_lop" name="ten_lop"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giảng viên dạy</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="" name="ten_gv"  >
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
                                        <input type="text" class="form-control" id="ca_hoc" name="ca_hoc"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày khai giảng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ngay_khai_giang" name="ngay_khai_giang"  placeholder="Ngày khai giảng" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa điểm học</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dia_diem_hoc" name="dia_diem_hoc"  placeholder=""  required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số chỗ</label>
                                    <div class="col-sm-9">
                                        <input min="0" type="number" class="form-control" id="so_cho" name="so_cho"  placeholder=""  required>
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
