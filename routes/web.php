<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
0->https://jwt-auth.readthedocs.io/en/develop/laravel-installation/

1-> composer require tymon/jwt-auth

2-> app.php
provider->
Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
aliases->
'JWTAuth'=>Tymon\JWTAuth\Facades\LaravelServiceProvider::class,
'JWTAuthFactory'=>Tymon\JWTAuth\Facades\JWTAuthFactory::class,

3-> php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

4-> php artisan jwt:secret

5-> Modify User Model

5-> Modify config/auth.php [guard]
 
6-> Create AuthController

7-> define route and use middleware->api

*/
 

Route::fallback(function(){
     $erroris = array(
        'message'=>"route not found..!!",
        'error'=>"failed",
        'status'=>false,
      );
      return response()->json($erroris, 404); 
});


Route::get('/', function () {
    return view('welcome');
});
