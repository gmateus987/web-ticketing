<?php

require_once __DIR__ . '/../src/Router.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$version = getenv('APP_VERSION');
$response = handleRequest($path, $version);
http_response_code($response['status']);
header('Content-Type: ' . $response['contentType']);

echo $response['body'];