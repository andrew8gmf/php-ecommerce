<?php
session_start();
include('connection.php');

$home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/home';
$index_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';

if(empty($_POST['user']) || empty($_POST['password'])) {
    header('Location: ' . $index_url);
    exit();
}

$user = mysqli_real_escape_string($connection, $_POST['user']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$query = "SELECT user_id, user FROM user WHERE user = '{$user}' AND password = md5('{$password}')";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['user'] = $user;
    header('Location: ' . $home_url);
    exit();
} else {
    header('Location: ' . $index_url);
    $_SESSION['not_auth'] = true;
    exit();
}
?>