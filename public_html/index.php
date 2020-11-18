<?php

ob_start();
session_start();

require __DIR__ . "//vendor//autoload.php";

use CoffeeCode\Router\Router;

setlocale(LC_TIME, 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


$router = new Router(site());
$router->namespace("Source\Controllers");

/**
 * INSTITUTIONAL PAGES
 */
$router->group(null);
$router->get('/', 'Web:Home', 'web.home');
$router->get('/solucoes', 'Web:Services', 'web.services');
$router->get('/blog', 'Web:Blog', 'web.blog');
$router->get("/post", 'Web:Post', 'web.post');
$router->get('/teste', 'Web:Test', 'web.test');
$router->post('/register', 'App:Register','app.register');



$router->dispatch();


if ($router->error()) {
    var_dump($router->error());
    // $router->redirect("web.error", ["errcode" => $router->error()]);
}


ob_end_flush();