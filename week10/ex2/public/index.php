<?php

define('DS', '/');
define('ROOT', dirname(dirname(__FILE__)));

$url = $_GET['url'];

require_once(ROOT . DS . 'library' . DS . 'bootstrap.php');