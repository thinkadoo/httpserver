<?php
require __DIR__ . '/../vendor/autoload.php';

use thinkadoo\HttpServer\Builder;
use Symfony\Component\HttpFoundation\Request;

Builder::createReactServer(function (Request $request) {
        return "Hello " . $request->get('name');
        //return new Response("Hello");
    })->listen(8080);