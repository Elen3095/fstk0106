<?php
error_reporting(E_ALL);

//$myLocalAdress='http://localhost/www/minisite2608/';

require 'functions.php';

// if no controller param given - return books
$controller = requestGet('controller', 'books'); // $_GET['controller']

// todo: validate $controller value

$controllerFile = "{$controller}.php";

if (!file_exists($controllerFile)) {
    $controllerFile = 'books.php';
}

require $controllerFile;

require 'layout.phtml';