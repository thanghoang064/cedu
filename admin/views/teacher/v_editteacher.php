
<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 57%;">
        <!--        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='category.php'">Quay lại </button>-->
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='teacher.php'">Quay lại </button>
    </div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="form_editteacher" enctype="multipart/form-data" method="post" action="">
                            <div class="card-body">
                                <h4 class="card-title">Sửa giảng viên</h4>
                                <?php
                                include_once 'views/error1.php';
                                $errorClass = new CError();
                                $errorClass->showError($error_1);
                                //    $errorClass->showError($success);
                                //Error::showError($error_1);
                                ?>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên giảng viên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_v" name="ten_gv"  placeholder="" value="<?php echo $teacher->ten_gv;?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh giảng viên</label>

                                    <div class="col-sm-9">
                                        <input  style=""  id="hinh_gv" name="f_hinh_gv" type="file" name="files[]" accept="image/*"  />
                                        <div class="col-xs-6  bg-white" id="image-holder2" style=" border-style: dashed; position: relative;width: 100%; padding-top: 56.25%;">
                                            <img src="../public/layout/imagesteacher/<?php echo $teacher->hinh_gv;?>"style=" position: absolute;top: 0;left: 0;bottom: 0;right: 0;height: 100%;width: 100%;" />


                                            <!--                                                <img class="img-responsive" id="image-holder" style=" position: absolute;top: 0;left: 0;bottom: 0;right: 0;height: 100%;" src="" alt=""/>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >Thông tin giảng viên </label>
                                    <div class="col-sm-9">
                                        <textarea  name="thongtin_gv" class="form-control" required><?php echo $teacher->thongtin_gv;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $teacher->email;?>"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password" value=""   placeholder="" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                    <input type="hidden" id="trang_thai_value" name ="trang_thai_value" value = "<?php echo $teacher->trang_thai;?>">

                                    <div class="col-sm-9">
                                        <select class="form-control" id="trang_thai" name="trang_thai"  >
                                            <option  value="1">Kích hoạt</option>
                                            <option value="0">Bỏ kích hoạt</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="editteacher" name="btnSave">Lưu</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
