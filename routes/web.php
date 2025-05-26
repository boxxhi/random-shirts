<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');

});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/designer', function () {
    return view('designer');
});

