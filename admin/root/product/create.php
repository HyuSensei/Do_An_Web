<?php
session_start();
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
                        <h4>value Add
                            <a href="../tableProduct.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="code.php" method="POST">

                            <div class="mb-3">
                                <label>product_name</label>
                                <input type="text" name="product_name" class="form-control" data-rule-required="true" data-rule-minlength="6" data-msg-required="Please enter ten san pham.">
                            </div>
                            <div class="mb-3">
                                <label>describe</label>
                                <input type="text" name="describe" class="form-control" data-rule-required="true" data-msg-required="Please enter mo ta.">
                            </div>
                            <div class="mb-3">
                                <label>img_main</label>
                                <input type="text" name="img_main" class="form-control" data-rule-required="true" data-msg-required="Please enter anh.">
                            </div>
                            <div class="mb-3">
                                <label>price</label>
                                <input type="text" name="price" class="form-control" data-rule-required="true" data-rule-minlength="5" data-msg-required="Please enter gia.">
                            </div>
                            <div class="mb-3">
                                <label>type</label>
                                <input type="text" name="type" class="form-control" data-rule-required="true" data-rule-minlength="5" data-msg-required="Please enter khuyen mai.">
                            </div>
                            <div class="mb-3">
                                <label>quantity</label>
                                <input type="text" name="quantity" class="form-control" data-rule-required="true" data-rule-minlength="5" data-msg-required="Please enter khuyen mai.">
                            </div>
                            <div class="mb-3">
                                <label>category</label>
                                <input type="text" name="category" class="form-control" data-rule-required="true" data-rule-minlength="3" data-msg-required="Please enter danh muc.">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save value</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
