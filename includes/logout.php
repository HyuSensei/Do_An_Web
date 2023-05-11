<?php

session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone_number']);
unset($_SESSION['address']);
unset($_SESSION['status']);

header('location:../index.php');

?>
