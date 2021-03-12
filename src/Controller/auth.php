<?php
session_start();

$index_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';

if(!$_SESSION['user']) {
    header('Location: ' . $index_url);
    exit();
}
?>