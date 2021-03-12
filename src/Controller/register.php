<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/config/connection.php";

$register_url = 'http://' . $_SERVER['HTTP_HOST'] . '/register';

$name = mysqli_real_escape_string($connection, trim($_POST['name']));
$user = mysqli_real_escape_string($connection, trim($_POST['user']));
$password = mysqli_real_escape_string($connection, trim(md5($_POST['password'])));

$sql = "SELECT count(*) AS total FROM user WHERE user = '$user'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['user_exists'] = true;
    header('Location: ' . $register_url);
    exit;
}

$sql = "INSERT INTO user (name, user, password, date) VALUES ('$name', '$user', '$password', NOW())";

if($connection->query($sql) === TRUE) {
    $_SESSION['register_status'] = true;
}

$connection->close();

header('Location: ' . $register_url);
exit;
?>