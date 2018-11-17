
<div id="main-wrapper">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="" method="post" action="">
                            <div class="card-body">
                                <?php
                                if(!empty($error)) echo "<div class=\"alert alert-danger\">
  <strong></strong> ".$error."
</div>";
                                ?>
                                <h4 class="card-title">Thêm loại danh mục tin tức</h4>
                                <div class="form-group row">

                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại tin tức</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_danh_muc" name="ten_danh_muc"  placeholder="Tên danh mục" required>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="save" name="btnSave">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>