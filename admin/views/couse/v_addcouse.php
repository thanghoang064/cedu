

<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 57%;">
        <!--        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='category.php'">Quay lại </button>-->
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='couse.php?ma_loai=<?php echo $_GET["ma_loai"];?>'">Quay lại </button>
    </div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="form_addcouse" method="post" enctype="multipart/form-data" action="addcouse.php">
                            <div class="card-body">
                                <input type="hidden" class="form-control" id="ma_loai" name="ma_loai"  placeholder="" value="<?php echo $_GET['ma_loai'];?>">
                                <h4 class="card-title">Danh mục : <?php echo $category->ten_loai; ?></h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khóa học</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_khoa_hoc" name="ten_khoa_hoc"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thời gian học</label>
                                    <div class="col-sm-9">
                                            <input type="number" class="form-control" id="thoi_gian" name="thoi_gian"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thông tin khóa học</label>
                                    <div class="col-sm-9">
                                        <textarea name="thong_tin_khoa_hoc" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >Kế hoạch học tập</label>
                                    <div class="col-sm-9">
                                        <textarea  name="ke_hoach_hoc_tap" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh khóa học</label>

                                    <div class="col-sm-9">
                                        <input  style=""  id="hinh" name="f_hinh" type="file" name="files[]" accept="image/*"  required/>
                                        <div class="col-xs-6  bg-white" id="image-holder" style=" border-style: dashed; position: relative;width: 100%; padding-top: 56.25%;">
                                            <!--                                                <img class="img-responsive" id="image-holder" style=" position: absolute;top: 0;left: 0;bottom: 0;right: 0;height: 100%;" src="" alt=""/>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Học phí</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="hoc_phi" name="hoc_phi"  placeholder="" required>

                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="savecouse" name="btnSave">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
