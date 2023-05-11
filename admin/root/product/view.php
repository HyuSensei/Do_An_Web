<?php
require '../data/connnect.php';
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>value View Details
                            <a href="../tableProduct.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM products WHERE id='$id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $value = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>product_name</label>
                                    <p class="form-control">
                                        <?= $value['product_name']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> describe</label>
                                    <p class="form-control">
                                        <?= $value['describe']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> img_main</label>
                                    <p class="form-control">
                                        <?= $value['img_main']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>price </label>
                                    <p class="form-control">
                                        <?= $value['price']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> type</label>
                                    <p class="form-control">
                                        <?= $value['type']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> quantity</label>
                                    <p class="form-control">
                                        <?= $value['quantity']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> category</label>
                                    <p class="form-control">
                                        <?= $value['category']; ?>
                                    </p>
                                </div>

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
