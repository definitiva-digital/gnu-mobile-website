<?php


namespace Source\Controllers;


class App extends Controller
{
    public function __construct($router) { parent::__construct($router); }

    public function register($data)
    {
        var_dump($data);
    }
}

