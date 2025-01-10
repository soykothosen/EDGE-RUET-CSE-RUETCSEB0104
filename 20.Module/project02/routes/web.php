<?php

use Illuminate\Support\Facades\Route;

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
