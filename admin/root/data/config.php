<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'do_an_web');
$link = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
