
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
                        <form class="form-horizontal" id="form_addteacher" enctype="multipart/form-data" method="post" action="">
                            <div class="card-body">
                                <h4 class="card-title">Thêm giảng viên</h4>
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
                                        <input type="text" class="form-control" id="ten_gv" name="ten_gv"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh giảng viên</label>

                                    <div class="col-sm-9">
                                        <input  style=""  id="hinh_gv" name="f_hinh_gv" type="file" name="files[]" accept="image/*"  />
                                        <div class="col-xs-6  bg-white" id="image-holder2" style=" border-style: dashed; position: relative;width: 100%; padding-top: 56.25%;">

                                            <!--                                                <img class="img-responsive" id="image-holder" style=" position: absolute;top: 0;left: 0;bottom: 0;right: 0;height: 100%;" src="" alt=""/>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >Thông tin giảng viên </label>
                                    <div class="col-sm-9">
                                        <textarea  name="thongtin_gv" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"  placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password"  placeholder="" required>
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="saveteacher" name="btnSave">Lưu</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
