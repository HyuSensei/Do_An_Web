<?php
session_start();
include('./data/config.php')
?>
<!DOCTYPE html>
<html lang="en">

<?php include('./component/head.php') ?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <svg class="logo-abbr" width="53" height="53" viewBox="0 0 53 53">
                    <path class="svg-logo-primary-path" d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z" fill="#5BCFC5" />
                    <path class="svg-logo-primary-path" d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z" fill="#5BCFC5" />
                </svg>

                <p class="brand-title" width="124px" height="33px" style="font-size: 30px;">Admin</p>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



        <!--**********************************
            Header start
        ***********************************-->
        <?php include('./component/header.php') ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <?php include('./sidebar.php') ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-6">
                                        <div class="card-bx bg-blue">
                                            <img class="pattern-img" src="images/pattern/pattern6.png" alt="">
                                            <div class="card-info text-white">
                                                <img src="images/pattern/circle.png" class="mb-4" alt="">
                                                <h2 class="text-white card-balance">$824,571.93</h2>
                                                <p class="fs-16">Wallet Balance</p>
                                                <span>+0,8% than last week</span>
                                            </div>
                                            <a class="change-btn" href="javascript:void(0);"><i class="fa fa-caret-up up-ico"></i>Change<span class="reload-icon"><i class="fas fa-sync-alt reload active"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row  mt-xl-0 mt-4">
                                            <div class="col-md-6">
                                                <h4 class="card-title">Card's Overview</h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit psu olor</span>
                                                <ul class="card-list mt-4">
                                                    <li><span class="bg-blue circle"></span>Account<span>20%</span></li>
                                                    <li><span class="bg-success circle"></span>Services<span>40%</span></li>
                                                    <li><span class="bg-warning circle"></span>Restaurant<span>15%</span></li>
                                                    <li><span class="bg-light circle"></span>Others<span>15%</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <canvas id="polarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Table Start -->
                    <div class="container-fluid pt-4 px-4" style="background-color: #e8eaec;">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="rounded h-100 p-4" style="background-color: #e8eaec;box-shadow:-2px -13px 50px 6px grey;">
                                    <h6 class="mb-4" style="color: #e28585;">Product Table</h6>
                                    <h2>Modal Demo</h2>
                                    <button class='btn'>Open Modal</button>
                                    <div class="modal">
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <?php include('./product/create.php') ?>
                                        </div>
                                    </div>
                                    <?php include('./product/view_product.php') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table End -->


                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include('./jquery.php') ?>
</body>

</html>
