<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Http\Request;

$router->get('/', function (Request $request) use ($router) {
    return null;
});

$router->post('/users/sign-in', ['uses' => 'UserSignInController@execute']);
$router->post('/users/sign-up', ['uses' => 'UserSignUpController@execute']);