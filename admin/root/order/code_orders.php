<?php
session_start();
require '../data/connnect.php';


if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM orders WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Deleted Successfully";
        header("Location: ../tableOrder.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Deleted";
        header("Location: ../tableOrder.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $id_customer = mysqli_real_escape_string($connect, $_POST['id_customer']);
    $code_order = mysqli_real_escape_string($connect, $_POST['code_order']);
    $order_status = mysqli_real_escape_string($connect, $_POST['order_status']);
    $date = mysqli_real_escape_string($connect, $_POST['date']);
    $payment = mysqli_real_escape_string($connect, $_POST['payment']);
    $customer_address = mysqli_real_escape_string($connect, $_POST['customer_address']);
    $phone_customer = mysqli_real_escape_string($connect, $_POST['phone_customer']);
    $total_price = mysqli_real_escape_string($connect, $_POST['total_price']);

    $query = "UPDATE orders SET id_customer='$id_customer', code_order='$code_order', order_status='$order_status', date='$date', payment='$payment', customer_address='$customer_address', phone_customer='$phone_customer', total_price='$total_price' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Updated Successfully";
        header("Location: ../tableOrder.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Updated";
        header("Location: ../tableOrder.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $id_customer = mysqli_real_escape_string($connect, $_POST['id_customer']);
    $code_order = mysqli_real_escape_string($connect, $_POST['code_order']);
    $order_status = mysqli_real_escape_string($connect, $_POST['order_status']);
    $date = mysqli_real_escape_string($connect, $_POST['date']);
    $payment = mysqli_real_escape_string($connect, $_POST['payment']);
    $customer_address = mysqli_real_escape_string($connect, $_POST['customer_address']);
    $phone_customer = mysqli_real_escape_string($connect, $_POST['phone_customer']);
    $total_price = mysqli_real_escape_string($connect, $_POST['total_price']);

    $query = "INSERT INTO orders (id_customer,code_order,order_status,date,payment,customer_address,phone_customer,total_price) VALUES ('$id_customer','$code_order','$order_status','$date','$payment','$customer_address','$phone_customer','$total_price')";

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
