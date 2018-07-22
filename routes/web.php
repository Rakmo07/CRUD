<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/retrive', function () use ($router) {
    return "This is Retrive";
});

$router->get('/insert', function () use ($router) {
    return "This is Insert ";
});

$router->get('/update', function () use ($router) {
    return "This is Update";
});

$router->get('/delete', function () use ($router) {
    return "This is Delete";
});




