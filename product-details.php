<?php

session_start();

require_once('./db/config.php');
$id="";
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$sql="SELECT*FROM products WHERE id=$id";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
}
mysqli_close($connect);
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SkinLeLe</title>
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
                        <a href="#">Chi Tiết Sản Phẩm </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="">
                                <img src="<?php echo $row['img_main'] ?>" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="<?php echo $row['img_extra'] ?>" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="<?php echo $row['img_extra1'] ?>" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="<?php echo $row['img_extra2'] ?>" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="<?php echo $row['img_main'] ?>" alt="">
                                <img data-hash="product-2" class="product__big__img" src="<?php echo $row['img_extra'] ?>" alt="">
                                <img data-hash="product-3" class="product__big__img" src="<?php echo $row['img_extra1'] ?>" alt="">
                                <img data-hash="product-4" class="product__big__img" src="<?php echo $row['img_extra2'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h5><?php echo $row['product_name'] ?></h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price"><?php
                        $formatted_amount = number_format($row['price'] , 0, '.', ',');
                        echo $formatted_amount;
                         ?> đ</div>
                        <p><?php echo $row['describe'] ?></p>
                        <div class="product__details__button">
                            <a href="./includes/add_to_cart.php?id=<?php echo $row['id']  ?>" class="cart-btn"> Thêm giỏ hàng</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php') ?>

    <?php include('js.php') ?>
</body>

</html>
