<?php
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', 'admin');
define('DB', 'phpecommerce');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('err: could not connect');
?>