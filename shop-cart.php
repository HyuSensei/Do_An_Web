<?php
$sum = 0;
$total = 0;
session_start();
function price_format($price)
{
    $result = number_format($price, 0, '.', ',');
    echo $result;
}
if(isset($_SESSION['id'])){
    $name=$_SESSION['name'];
    $phone=$_SESSION['phone_number'];
    $address=$_SESSION['address'];
}else{
    $name="Nhập họ và tên...";
    $phone="Nhập số điện thoại...";
    $address="Nhâp địa chỉ...";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>
    <?php include('css.php') ?>
    <script type="text/javascript">
    $(document).ready(function() {
        let name=$('#name').val();
        let phone_number=$('#phone_number').val();
        let address=$('#address').val();
        let method;
        if ($('.orderoff').is(':checked')) {
            method = 'orderoff';
        } else if ($('.ordervnpay').is(':checked')) {
            method = 'ordervnpay';
        } else if ($('.ordermomo').is(':checked')) {
            method = 'ordermomo';
        }
      $('#order').click(function(){
            $.ajax({
                type: "POST",
                url: "includes/process_order.php",
                data: {name:name,phone_number:phone_number,address:address,method:method},
                success: function (response) {
                    alert("Đặt hàng thành công!");
                    $('.form2')[0].reset();
                    console.log(response);
                }
            });
      });
    $('#bank').hide();
    $('#redirect').hide();
    $('.ordervnpay').change(function (){
       if($('.ordervnpay').is(':checked')){
           $('#bank').show();
           $('#redirect').show();
           $('#btn_orderoff').hide();
       }else {
           $('#redirect').hide();
           $('#bank').hide();
           $('#btn_orderoff').show();
       }
    })
    });
  </script>
</head>
<body>
    <?php include('header.php') ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Trang Chủ</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Shop Cart Section Begin -->


    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_SESSION['cart'])) foreach (($_SESSION['cart']) as $id =>  $value) :  ?>
                                    <tr>
                                        <td class="cart__product__item">
                                            <img src="<?php echo $value['img_main'] ?>" width=100px alt="">
                                            <div class="cart__product__item__title">
                                                <h6><?php echo $value['product_name'] ?></h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="cart__price"><?php price_format($value['price'])  ?> đ</td>
                                        <td class="cart__quantity">
                                            <div style="margin-top: 10px;display: flex;">
                                                <a href="./includes/update_quantity_cart.php?id=<?php echo $id ?>&type=increase" style="margin: 10px;"><i style="font-size: 25px;" class="fa-solid fa-circle-plus"></i></a>
                                                <span style="margin: 10px;"><?php echo $value['quantity'] ?></span>
                                                <a href="./includes/update_quantity_cart.php?id=<?php echo $id ?>&type=decrease" style="margin: 10px;"><i style="font-size: 25px;" class="fa-solid fa-circle-minus"></i></a>
                                            </div>

                                        </td>
                                        <td class="cart__total"><?php price_format($value['price'] * $value['quantity'])  ?> đ</td>
                                        <td class="cart__close" data-id="<?php echo $id ?>"><a href="./includes/delete_cart.php?id=<?php echo $id ?>"><span class="icon_close"></span></a></td>
                                        <?php
                                        $sum = $value['price'] * $value['quantity'];
                                        $total += $sum;
                                        ?>
                                    </tr>
                                <?php endforeach  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="#">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a href="#"><span class="icon_loading"></span> Update cart</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form action="./includes/process_order.php" method="POST" class="checkout__form">
                                <h5>CHI TIẾT ĐẶT HÀNG</h5>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="checkout__form__input">
                                            <p>Họ tên người nhận <span>*</span></p>
                                            <input id="name" type="text" name="name" value="<?php echo $name?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="checkout__form__input">
                                            <p>Số điện thoại <span>*</span></p>
                                            <input id="phone_number" name="phone_number" type="text" value="<?php echo $phone?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Địa chỉ nhận hàng  <span>*</span></p>
                                            <input id="address" type="text"  name="address" value="<?php echo $address?>">
                                        </div>
                                    </div>
                                    <div id="bank" class="col-lg-12">
                                        <div class="checkout__form__checkbox">
                                            <p style="font-weight: 500;">Chọn ngân hàng <span style="color: #d1402c">*</span></p>
                                            <select style="height: 50px;font-size: 16px" name="bank_code" id="bank_code" class="form-control">
                                                <option value="ádas">Không chọn</option>
                                                <option value="NCB"> Ngan hang NCB</option>
                                                <option value="AGRIBANK"> Ngan hang Agribank</option>
                                                <option value="SCB"> Ngan hang SCB</option>
                                                <option value="SACOMBANK">Ngan hang SacomBank</option>
                                                <option value="EXIMBANK"> Ngan hang EximBank</option>
                                                <option value="MSBANK"> Ngan hang MSBANK</option>
                                                <option value="NAMABANK"> Ngan hang NamABank</option>
                                                <option value="VNMART"> Vi dien tu VnMart</option>
                                                <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                                <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                                <option value="HDBANK">Ngan hang HDBank</option>
                                                <option value="DONGABANK"> Ngan hang Dong A</option>
                                                <option value="TPBANK"> Ngân hàng TPBank</option>
                                                <option value="OJB"> Ngân hàng OceanBank</option>
                                                <option value="BIDV"> Ngân hàng BIDV</option>
                                                <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                                <option value="VPBANK"> Ngan hang VPBank</option>
                                                <option value="MBBANK"> Ngan hang MBBank</option>
                                                <option value="ACB"> Ngan hang ACB</option>
                                                <option value="OCB"> Ngan hang OCB</option>
                                                <option value="IVB"> Ngan hang IVB</option>
                                                <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        <button name="redirect" id="redirect" class="primary-btn" style="width: 100%;border-radius: 20px">Đặt hàng</button>
                    </form>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Thành Tiền</h6>
                        <ul>
                            <li>Tổng <span>
                                    <?php
                                    price_format($total);
                                    ?>đ
                                </span></li>
                        </ul>
                        <form id="form2" method="POST" style="margin-bottom:20px ;" >
                            <div class="checkout__order__widget">
                                <label style="font-size: 15px" for="o-acc">
                                    Thanh toán khi nhận hàng
                                    <input type="checkbox" class="orderoff" name="orderoff" value="orderoff" id="o-acc">
                                    <span class="checkmark"></span>
                                </label>
                                <label style="font-size: 16px" for="check-payment">
                                    Thanh toán vnpay
                                    <input type="checkbox" class="ordervnpay" name="ordervnpay" value="ordervnpay" id="check-payment">
                                    <span class="checkmark"></span>
                                </label>
                                <label style="font-size: 16px" for="paypal">
                                    Thanh toán momo
                                    <input type="checkbox" class="ordermomo" name="ordermomo" value="ordermomo" id="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </form>
                       <button id="btn_orderoff" class="primary-btn" style="width: 100%"><a  href="" id="order" >Đặt hàng</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->

    <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                        <div class="instagram__text">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                        <div class="instagram__text">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                        <div class="instagram__text">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                        <div class="instagram__text">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                        <div class="instagram__text">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                        <div class="instagram__text">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->
    <?php
    include ('footer.php')
    ?>

    <?php include('js.php') ?>
</body>

</html>
