<?php
session_start();
session_destroy();

$index_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';

header('Location: ' . $index_url);
exit();
?>