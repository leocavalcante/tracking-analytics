<?php

session_start();
$queryString = $_SESSION['queryString'];
$queryString = unserialize($queryString);

$_GET = array_merge($queryString, $_GET);

unset($_GET['r']);

header('Location: e.php?'.http_build_query($_GET));