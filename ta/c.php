<?php

$queryString = $_COOKIE['queryString'];
$queryString = unserialize($queryString);

if (isset($_GET['r']) && $_GET['r'] == 'no') {
  unset($queryString['r']);
  unset($_GET['r']);
}

$_GET = array_merge($queryString, $_GET);

header('Location: t.php?'.http_build_query($_GET));