<?php
@session_start();
?>
<script src="https://checkout.stripe.com/checkout.js"></script>
<div id="view-order" class="sc_section bg_tint_dark sc_contact_bg_img" xmlns="http://www.w3.org/1999/html">
    <div class="sc_section_overlay sc_contact_bg_color" data-overlay="0.8" data-bg_color="#024b5e">
        <div class="sc_section_content">
            <div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3_5em_imp">
                <div  class="sc_contact_form sc_contact_form_standard aligncenter width_80per" style="text-align: center;">
                    <h2 class="sc_contact_form_title" style="text-align: center;">Đăng kí khóa học</h2>
                    <p class="sc_contact_form_description">Thông tin đăng kí của bạn sẽ được gửi về mail*</p>
                    <form style=""  method="post" action="" id="confirmForm">
                        <div id="form123" style="text-align: center">
                            <div class="sc_contact_form_info">
                                <div class="sc_contact_form_item sc_contact_form_field label_over">
                                    <h4 style="color: #444444">Tên khóa học: <?php echo $couse->ten_khoa_hoc; ?></h4>
                                    <h4 style="color: #444444">Tên lớp: <?php echo $couse->ten_lop; ?></h4>
                                    <h4 style="color: #444444">Ca học: <?php echo $couse->ca_hoc; ?></h4>
                                    <h4 style="color: #444444">Ngày khai giảng: <?php echo $couse->thoi_gian_khai_giang; ?></h4>
                                    <h4 style="color: red">Còn lại: <?php echo $couse->so_cho; ?> slot</h4>
                                    <h4 style="color: red">Học phí : <?php
                                        if(isset($_SESSION['user']))
                                        {
                                            $ma_nguoi_dung = $_SESSION['user']->ma_nguoi_dung;

                                        }
                                    //    echo $ma_nguoi_dung;
                                       $m_oder = new M_oder();
                                       $kq = $m_oder->return_studentoder($ma_nguoi_dung,1);
                                      // echo $kq->KQ;
                                        if($kq->KQ>0)
                                        {
                                            $hoc_phi = $couse->hoc_phi-(($couse->hoc_phi*10)/100);
                                        }
                                        else
                                        {
                                            $hoc_phi = $couse->hoc_phi;
                                        }

                                        echo number_format($hoc_phi); ?> VND</h4>
                                    <input type="hidden" name="txtMoney" id="txtMoney" value="<?php echo $hoc_phi;?>"/></br>
                                    <input type="hidden" name="txtDiscount" class="txtDiscount" value=""/></br>
<!--                                    <input type="hidden" name="txtValue" id="txtValue" /></br>-->
                                    Mã khuyến mãi <input type="text" name="txtCoupon" id="txtCoupon" />
                                    <button type="button" class="btn-info" id="btnXacNhan" name="btnXacNhan">Xác nhận</button></br>
                                    <p id="result"></p>

                                </div>
                                <button type="submit" class="btn-success" id="btnDangKi" name="btnDangKi">Đăng kí</button>
                                <input type="hidden" value="1" name="type-payment" id="type-payment" />

                            </div>

                        </div>
                    </form>
                    <div class="group-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a data-value="1"  class="payment" href="#home" aria-controls="home" role="tab" data-toggle="tab">Thanh toán trực tiếp</a></li>
                            <li role="presentation"><a href="#profile" data-value="2" class="payment" aria-controls="profile" role="tab" data-toggle="tab">Chuyển khoản</a></li>
                            <li role="presentation"><a href="#messages" data-value="3" class="payment" aria-controls="messages" role="tab" data-toggle="tab">Thanh toán online</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">Địa chỉ: 52A Nguyễn Thái Sơn, Phường 3, Quận Gò Vấp, TPHCM</div>
                            <div role="tabpanel" class="tab-pane" id="profile">Số tài khoản: 0071000944930 VIETCOMBANK - HOANG QUANG THANG</div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <h3>Thanh toán trực tuyến bằng thẻ visa</h3>
                                <form id="myForm" action="charge.php" method="POST">
                                    <input type="hidden" name="ma_lop" value="<?php echo $_GET["ma_lop"];?>">
                                    <input type="hidden" id="stripeToken" name="stripeToken" />
                                    <input type="hidden" id="stripeEmail" name="stripeEmail" />
                                    <input type="hidden" id="amountInCents" name="amountInCents" />
                                    <input type="hidden" name="txtDiscount" class="txtDiscount" value=""/></br>
                                </form>

                                <input type="button" id="customButton" value="Pay With Card">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        // var handler = StripeCheckout.configure({
        //     key: 'pk_test_RktRYcffDgayxWK6b7Gho9Ol',
        //     image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
        //     token: function(token, args) {
        //         // Use the token to create the charge with a server-side script.
        //         // You can access the token ID with `token.id`
        //     }
        // });

        var handler = StripeCheckout.configure({
            key: 'pk_test_RktRYcffDgayxWK6b7Gho9Ol',
            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
            token: function(token) {
                $("#stripeToken").val(token.id);
                $("#stripeEmail").val(token.email);
                $("#amountInCents").val(Math.floor($("#amountInDollars").val() * 100));
                $("#myForm").submit();
            }
        });

        // $('#customButton').on('click', function(e) {
        //     var amountInCents = Math.floor($("#amountInDollars").val() * 100);
        //     var displayAmount = parseFloat(Math.floor($("#amountInDollars").val() * 100) / 100).toFixed(2);
        //     // Open Checkout with further options
        //     handler.open({
        //         name: 'Demo Site',
        //         description: 'Custom amount ($' + displayAmount + ')',
        //         amount: amountInCents,
        //     });
        //     e.preventDefault();
        // });

// Close Checkout on page navigation
        $(window).on('popstate', function() {
            handler.close();
        });

        $("#customButton").click(function(e) {
            let moneyStripe = 0;
            let money = +$("#txtMoney").val();
            let discount = +$(".txtDiscount").val();

            if(discount != 0) {
                moneyStripe = discount / 200;
            }
            else {
                moneyStripe = money / 200;
            }
            var amountInCents = Math.floor(moneyStripe);
            var displayAmount = parseFloat(Math.floor(moneyStripe)).toFixed(2);

            handler.open({
                name: 'Demo Site',
                description: 'Custom amount ($' + displayAmount/100 + ')',
                amount: amountInCents,
            });
        })

        $(".payment").click(function() {
            const value = $(this).data("value");
            $("#type-payment").val(value);
            if (value==1)
            {
                $("#btnDangKi").show();
                return;
            }
            if (value==2)
            {
                $("#btnDangKi").show();
                return;
            }
            if (value==3)
            {
                console.log(123);
                $("#btnDangKi").hide();
                return;
            }

        });

        $("#btnXacNhan").click(function() {
            $("#result").hide();
            var coupon = $('#txtCoupon').val();
            var money = $('#txtMoney').val();
            $.ajax({
                url: 'getcoupon.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    coupon
                }
            }).success(function(result) {
             //   alert("Thành công");
              //  console.log(result.data);

                if (result.data == 0)
                {
                    $("#result").show().html("Mã không hợp lệ").css('color', 'red');
                }
                else
                {
                    if (result.date ==2 )
                    {
                        $("#result").show().html("Mã đã hết hạn").css('color', 'red');
                    }
                    else {
                        const moneyDiscount = money * result.giamgia / 100;
                        $('.stripe-button').data('amount', moneyDiscount);
                        // Open Checkout with further options
                        $('.txtDiscount').val(money - moneyDiscount);
                        var nana = (money - moneyDiscount).toLocaleString('it-IT', {
                            style: 'currency',
                            currency: 'VND'
                        });
                        $("#result").show().html("Giá tiền giảm xuống còn" + nana + "VND").css('color', 'red');
                    }
                }
            });
        })


    });
</script>


