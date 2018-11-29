
<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 57%;">
        <!--        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='category.php'">Quay lại </button>-->
        <button  style="margin: auto" class="btn btn-default" onclick="window.location.href='document.php'">Quay lại </button>
    </div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="" enctype="multipart/form-data" method="post" action="">
                            <div class="card-body">
                                <h4 class="card-title">Thêm tài liệu</h4>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >Khóa học </label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="ma_khoa_hoc">
                                            <option>Select</option>
                                            <?php
                                            $m_category = new M_category();
                                            $category = $m_category->Read_category();
                                            $m_couse = new M_couse();

                                            foreach ($category as $ct)
                                            {
                                            ?>

                                            <optgroup label="<?php echo $ct->ten_loai; ?>">
                                                <?php
                                                $couse = $m_couse->read_couse_by_category($ct->ma_loai);
                                                foreach ($couse as $cs)
                                                {
                                                    ?>
                                                    <option  value="<?php echo $cs->ma_khoa_hoc?>"><?php
                                                        echo $cs->ten_khoa_hoc;
                                                        ?></option>
                                                    <?php
                                                }
                                               ?>
                                            </optgroup>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >File </label>
                                    <div class="col-sm-9">
                                       <input type="file" name="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >Mô tả tài liệu </label>
                                    <div class="col-sm-9">
                                        <textarea  name="mo_ta_tai_lieu" class="form-control" required></textarea>
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
