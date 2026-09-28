<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    
});

Route::get('/jelajah', function () {
    return view('jelajah');

    
});
