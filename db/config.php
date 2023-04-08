<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'do_an_web');


$connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

mysqli_set_charset($connect, 'utf8');

if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}