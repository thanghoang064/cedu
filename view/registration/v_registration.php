<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary">
    <div class="container">
        <h2 class="sidebar-title">Registration</h2>
        <div class="registration-details-area inner-page-padding">
            <form id="checkout-form" method="post">
                <?php
                if(!empty($error)) echo "<div class=\"alert alert-danger\">
  <strong>Danger!</strong> ".$error."
</div>";
                ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="first-name">Họ và tên *</label>
                            <input type="text" id="user-name" name="ho_ten" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="email">Địa chỉ email *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="control-label" for="phone">Số điện thoại liên hệ *</label>
                        <input type="phone" id="phone" name="phone" class="form-control" required>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="phone">Mật khẩu *</label>
                            <input type="password" id="password" name="password"  class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="phone">Xác nhận mật khẩu *</label>
                            <input type="password" id="phone" name="confirm_password" class="form-control" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order mt-30">
                            <button class="view-all-accent-btn disabled" type="submit" name="btnSave" value="Login">Đăng kí</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Registration Page Area End Here -->