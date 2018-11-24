

<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 57%;">
        <!--        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='category.php'">Quay lại </button>-->
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='categorynews.php?ma_danh_muc=<?php echo $_GET["ma_danh_muc"];?>'">Quay lại </button>
    </div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">

                        <form class="form-horizontal" id="form_addcouse" method="post" enctype="multipart/form-data" action="">
                            <div class="card-body">
                                <input type="hidden" class="form-control" id="ma_danh_muc" name="ma_danh_muc"  placeholder="" value="<?php echo $_GET['ma_danh_muc'];?>">
                                <h4 class="card-title">Danh mục : </h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên tin tức</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_tin_tuc" name="ten_tin_tuc"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh tin tức</label>

                                    <div class="col-sm-9">
                                        <input  style=""  id="hinh_tin_tuc" name="f_hinh_tin_tuc" type="file" name="files[]" accept="image/*"  required/>
                                        <div class="col-xs-6  bg-white" id="image-holder4" style=" border-style: dashed; position: relative;width: 100%; padding-top: 56.25%;">
                                            <!--                                                <img class="img-responsive" id="image-holder" style=" position: absolute;top: 0;left: 0;bottom: 0;right: 0;height: 100%;" src="" alt=""/>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô tả ngắn</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="mo_ta_ngan" name="mo_ta_ngan"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Nội dung</label>
                                    <div class="col-sm-9">
                                        <textarea name="noi_dung" class="form-control" required></textarea>
                                    </div>
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
