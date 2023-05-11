<!--**********************************
            Sidebar start
        ***********************************-->

<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="./index.php" role="button" data-bs-toggle="dropdown">
                    <img src="images/ion/man (1).png" width="20" alt="" />
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b><?php echo $_SESSION['name'] ?></b></span>
                        <!-- <small class="text-end font-w400"><?php echo $_SESSION['id'] ?></small> -->
                    </div>
                </a>

            </li>
            <li><a href="./index.php" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="./tableProduct.php" aria-expanded="true">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Product</span>
                </a>
            </li>
            <li><a href="./tableCustomer.php" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Customer</span>
                </a>
            </li>
            <li><a href="./tableOrder.php" aria-expanded="false">
                    <i class="flaticon-086-star"></i>
                    <span class="nav-text">Order</span>
                </a>
            </li>
            <li><a href="./tableVnpay.php" aria-expanded="false">
                    <i class="flaticon-045-heart"></i>
                    <span class="nav-text">Vnpay</span>
                </a>
            </li>
            <li><a href="../logout.php" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
