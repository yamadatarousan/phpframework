<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/helpers.php';

use MyFramework\Routing\Router;

// ルート定義を読み込み
require_once __DIR__ . '/../routes/web.php';

// リクエストを処理
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
Router::dispatch($method, $uri);