<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/teams/vernalis', function () {
    return view('vernalis');
});
