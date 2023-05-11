<?php
session_start();
require('../data/connnect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title></title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>value Edit
                            <a href="../tableOrder.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM orders WHERE id='$id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $value = mysqli_fetch_array($query_run);
                        ?>
                                <form action="./code_orders.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $value['id']; ?>">

                                    <div class="mb-3">
                                        <label> id_customer</label>
                                        <input type="text" name="id_customer" value="<?= $value['id_customer']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> code_order</label>
                                        <input type="text" name="code_order" value="<?= $value['code_order']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> order_status</label>
                                        <input type="text" name="order_status" value="<?= $value['order_status']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> date</label>
                                        <input type="text" name="date" value="<?= $value['date']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> payment</label>
                                        <input type="text" name="payment" value="<?= $value['payment']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> customer_address</label>
                                        <input type="text" name="customer_address" value="<?= $value['customer_address']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> phone_customer</label>
                                        <input type="text" name="phone_customer" value="<?= $value['phone_customer']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> total_price</label>
                                        <input type="text" name="total_price" value="<?= $value['total_price']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update value
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
