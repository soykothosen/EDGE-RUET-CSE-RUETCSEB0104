<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/user/{name}', function ($name) {
    #echo "$name";
    return view('user',['name'=>$name]);
});

Route::get('addcontroller',[UserController::class,'getData']);
