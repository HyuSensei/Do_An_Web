<?php
session_start();
require '../data/connnect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM products WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Deleted Successfully";
        header("Location: ../tableProduct.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Deleted";
        header("Location: ../tableProduct.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $product_name = mysqli_real_escape_string($connect, $_POST['product_name']);
    $describe = mysqli_real_escape_string($connect, $_POST['describe']);
    $img_main = mysqli_real_escape_string($connect, $_POST['img_main']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $type = mysqli_real_escape_string($connect, $_POST['type']);
    $quantity = mysqli_real_escape_string($connect, $_POST['quantity']);
    $category = mysqli_real_escape_string($connect, $_POST['category']);

    $query = "UPDATE products SET product_name='$product_name', describe='$describe', img_main='$img_main', price='$price', type='$type', quantity='$quantity', category='$category' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Updated Successfully";
        header("Location: ../tableProduct.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Updated";
        header("Location: ../tableProduct.php");
        exit(0);
    }
}



if (isset($_POST['save'])) {
    $product_name = mysqli_real_escape_string($connect, $_POST['<produ></produ>ct_name']);
    $describe = mysqli_real_escape_string($connect, $_POST['describe']);
    $img_main = mysqli_real_escape_string($connect, $_POST['img_main']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $type = mysqli_real_escape_string($connect, $_POST['type']);
    $quantity = mysqli_real_escape_string($connect, $_POST['quantity']);
    $category = mysqli_real_escape_string($connect, $_POST['category']);

    $query = "INSERT INTO products (product_name,describe,img_main,price,type,quantity,category) VALUES ('$product_name','$describe','$img_main','$price','$type','$quantity','$category')";

    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        $_SESSION['message'] = "value Created Successfully";
        header("Location: create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Created";
        header("Location: create.php");
        exit(0);
    }
}
