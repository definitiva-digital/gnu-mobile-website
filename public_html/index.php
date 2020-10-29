<?php

ob_start();
session_start();

require __DIR__ . "//vendor//autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("Source\Controllers");

/**
 * INSTITUTIONAL PAGES
 */
$router->group(null);
$router->get('/', 'Web:Home', 'web.home');
$router->get('/teste', 'Web:Test', 'web.test');
$router->post('/register', 'App:Register','app.register');



$router->dispatch();


if ($router->error()) {
    var_dump($router->error());
    // $router->redirect("web.error", ["errcode" => $router->error()]);
}


ob_end_flush();