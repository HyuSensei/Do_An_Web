<?php
session_start();
require '../data/connnect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM custumers WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Deleted Successfully";
        header("Location: ../tableCustomer.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Deleted";
        header("Location: ../tableCustomer.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone_number = mysqli_real_escape_string($connect, $_POST['phone_number']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $verify_token = mysqli_real_escape_string($connect, $_POST['verify_token']);


    $query = "UPDATE custumers SET name='$name', email='$email', phone_number='$phone_number', address='$address', password='$password', verify_token='$verify_token' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Updated Successfully";
        header("Location: ../tableCustomer.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Updated";
        header("Location: ../tableCustomer.php");
        exit(0);
    }
}



if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone_number = mysqli_real_escape_string($connect, $_POST['phone_number']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $verify_token = mysqli_real_escape_string($connect, $_POST['verify_token']);

    $query = "INSERT INTO custumers (name,email,phone_number,address,password,verify_token) VALUES ('$name','$email','$phone_number','$address','$password','$verify_token')";
    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        $_SESSION['message'] = "value Created Successfully";
        header("Location: ./create.php");
    } else {
        $_SESSION['message'] = "value Not Created";
        header("Location: ./create.php");
    }
}
