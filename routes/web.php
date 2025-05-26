<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});

Route::get('/home', function () {
    return view('home');

});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/designer', function () {
    return view('designer');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    // TODO: Implementar el CRUD
    return view('designer');
});
