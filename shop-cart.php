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
if(isset($_SESSION['order_success'])&& $_SESSION['order_success']){
    echo "<script>alert('Đặt hàng thành công!');</script>";
    unset($_SESSION['order_success']);
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
            <form action="./includes/process_order.php" method="POST" class="checkout__form">
                            <div class="row">
                                <div class="col-lg-6">
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
                                            </div>
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
                                            <div class="checkout__order__widget">
                                                <label style="font-size: 15px" for="o-acc">
                                                    Thanh toán khi nhận hàng
                                                    <input type="checkbox" class="orderoff" name="method" value="orderoff" id="o-acc">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label style="font-size: 16px" for="check-payment">
                                                    Thanh toán vnpay
                                                    <input type="checkbox" class="ordervnpay" name="method" value="ordervnpay" id="check-payment">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label style="font-size: 16px" for="paypal">
                                                    Thanh toán momo
                                                    <input type="checkbox" class="ordermomo" name="method" value="ordermomo" id="paypal">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                       <input type="submit" name="redirect" id="redirect"  class="primary-btn" style="width: 100%" value="Đặt hàng">
                                    </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->
    <?php
    include ('footer.php')
    ?>

    <?php include('js.php') ?>
</body>

</html>
