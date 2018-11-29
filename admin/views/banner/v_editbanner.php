
<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 57%;">
        <!--        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='category.php'">Quay lại </button>-->
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='banner.php'">Quay lại </button>
    </div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="" enctype="multipart/form-data" method="post" action="">
                            <div class="card-body">
                                <h4 class="card-title">Sửa tiêu đề</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sửa tiêu đề</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_tieu_de" name="ten_tieu_de" value="<?php echo $banner->ten_tieu_de;?>"  placeholder="" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh tiêu đề</label>
                                    <div class="col-sm-9">
                                        <input  style=""  id="hinh_tieu_de" name="f_hinh_tieu_de" type="file" name="files[]" accept="image/*"  />
                                        <div class="col-xs-6  bg-white" id="image-holder3" style=" border-style: dashed; position: relative;width: 100%; padding-top: 56.25%;">
                                            <img src="../public/layout/imagesbanner/<?php echo $banner->hinh;?>"style=" position: absolute;top: 0;left: 0;bottom: 0;right: 0;height: 100%;width: 100%;" />

                                            <!--                                                <img class="img-responsive" id="image-holder" style=" position: absolute;top: 0;left: 0;bottom: 0;right: 0;height: 100%;" src="" alt=""/>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="trang_thai"  >
                                            <option  value="1" <?php if($banner->trang_thai == 1) echo"selected"; ?>>Kích hoạt</option>
                                            <option value="0" <?php if($banner->trang_thai == 0) echo"selected"; ?>>Bỏ kích hoạt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="" name="btnSave">Lưu</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
