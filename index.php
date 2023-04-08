<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glowing - Reveal The Beauty of Skin</title>
  <!--
    - favicon
  -->
  <?php include('css.php') ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.add_to_cart').click(function() {
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: "./includes/add_to_cart.php",
            data: {
              id
            }
          })
          .done(function(response) {
            if (response == 1) {
              alert('Thêm giỏ hàng thành công');
            } else {
              alert('Thêm giỏ hàng thất bại');
              console.log("Lỗi", response);
            }
          });
      });
    });
  </script>
</head>

<body id="top">
  <?php include('header.php') ?>
  <main>
    <article>

      <!--
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero" data-section>
        <div class="container">

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('./assets/images/hero-banner-1.jpg')">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    Reveal The <br>
                    Beauty of Skin
                  </h1>

                  <p class="hero-text">
                    Made using clean, non-toxic ingredients, our products are designed for everyone.
                  </p>

                  <p class="price">Starting at $7.99</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('./assets/images/hero-banner-2.jpg')">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    Reveal The <br>
                    Beauty of Skin
                  </h1>

                  <p class="hero-text">
                    Made using clean, non-toxic ingredients, our products are designed for everyone.
                  </p>

                  <p class="price">Starting at $7.99</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image: url('./assets/images/hero-banner-3.jpg')">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    Reveal The <br>
                    Beauty of Skin
                  </h1>

                  <p class="hero-text">
                    Made using clean, non-toxic ingredients, our products are designed for everyone.
                  </p>

                  <p class="price">Starting at $7.99</p>

                  <a href="#" class="btn btn-primary">Shop Now</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #COLLECTION
      -->

      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="container">

          <ul class="collection-list">

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Summer Collection</h2>

                <p class="card-text">Starting at $17.99</p>

                <a href="#" class="btn-link">
                  <span class="span">Shop Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-1.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">What’s New?</h2>

                <p class="card-text">Get the glow</p>

                <a href="#" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-2.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Buy 1 Get 1</h2>

                <p class="card-text">Starting at $7.99</p>

                <a href="#" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-3.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #SHOP
      -->

      <!-- <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Sản Phẩm Bán Chạy</h2>

            <a href="#" class="btn-link">
              <span class="span">Tất cả sản phẩm</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">



          </ul>

        </div>
      </section> -->

      <!-- Product Section Begin -->
      <section class="product-details spad">
        <div class="container">
          <div class="row" id="show_product">
            <?php include('./includes/test_product.php') ?>
          </div>
        </div>
      </section>
      <!-- Banner Section End -->

      <!-- <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Sản Phẩm Mới</h2>

            <a href="#" class="btn-link">
              <span class="span">Shop All Products</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">



          </ul>

        </div>
      </section> -->





      <!--
        - #BANNER
      -->

      <section class="section banner" aria-label="banner" data-section>
        <div class="container">

          <ul class="banner-list">

            <li>
              <div class="banner-card banner-card-1 has-before hover:shine">

                <p class="card-subtitle">New Collection</p>

                <h2 class="h2 card-title">Discover Our Autumn Skincare</h2>

                <a href="#" class="btn btn-secondary">Explore More</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/banner-1.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="banner-card banner-card-2 has-before hover:shine">

                <h2 class="h2 card-title">25% off Everything</h2>

                <p class="card-text">
                  Makeup with extended range in colors for every human.
                </p>

                <a href="#" class="btn btn-secondary">Shop Sale</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/banner-2.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #FEATURE
      -->

      <section class="section feature" aria-label="feature" data-section>
        <div class="container">

          <h2 class="h2-large section-title">Why Shop with Glowing?</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-1.jpg" width="204" height="236" loading="lazy" alt="Guaranteed PURE" class="card-icon">

                <h3 class="h3 card-title">Guaranteed PURE</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-2.jpg" width="204" height="236" loading="lazy" alt="Completely Cruelty-Free" class="card-icon">

                <h3 class="h3 card-title">Completely Cruelty-Free</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-3.jpg" width="204" height="236" loading="lazy" alt="Ingredient Sourcing" class="card-icon">

                <h3 class="h3 card-title">Ingredient Sourcing</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #OFFER
      -->

      <section class="section offer" id="offer" aria-label="offer" data-section>
        <div class="container">

          <figure class="offer-banner">
            <img src="./assets/images/offer-banner-1.jpg" width="305" height="408" loading="lazy" alt="offer products" class="w-100">

            <img src="./assets/images/offer-banner-2.jpg" width="450" height="625" loading="lazy" alt="offer products" class="w-100">
          </figure>

          <div class="offer-content">

            <p class="offer-subtitle">
              <span class="span">Special Offer</span>

              <span class="badge" aria-label="20% off">-20%</span>
            </p>

            <h2 class="h2-large section-title">Mountain Pine Bath Oil</h2>

            <p class="section-text">
              Made using clean, non-toxic ingredients, our products are designed for everyone.
            </p>

            <div class="countdown">

              <span class="time" aria-label="days">15</span>
              <span class="time" aria-label="hours">21</span>
              <span class="time" aria-label="minutes">46</span>
              <span class="time" aria-label="seconds">08</span>

            </div>

            <a href="#" class="btn btn-primary">Get Only $39.00</a>

          </div>

        </div>
      </section>





      <!--
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog" data-section>
        <div class="container">

          <h2 class="h2-large section-title">More to Discover</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-1.jpg" width="700" height="450" loading="lazy" alt="Find a Store" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Find a Store</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-2.jpg" width="700" height="450" loading="lazy" alt="From Our Blog" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">From Our Blog</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-3.jpg" width="700" height="450" loading="lazy" alt="Our Story" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Our Story</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>


<?php include('footer.php') ?>



  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>

  <?php include('js.php') ?>
</body>

</html>
