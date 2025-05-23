<?php

// routes/web.php
use App\Controllers\HomeController;
use MyFramework\Routing\Router;

Router::get('/', [HomeController::class, 'index']);
Router::get('/users/{id}', [HomeController::class, 'show']);
Router::get('/favicon.ico', function () {
    http_response_code(204); // No Content
});