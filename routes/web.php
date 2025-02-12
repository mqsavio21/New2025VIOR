<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/teams/vernalis', function () {
    return view('vernalis');
});

Route::get('/teams/ignite', function () {
    return view('ignite');
});

Route::get('/teams/eclipse', function () {
    return view('eclipse');
});
Route::get('/teams/aphrodite', function () {
    return view('aphrodite');
});
Route::get('/teams/reverie', function () {
    return view('reverie');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/academy', function () {
    return view('academy');
});
Route::get('/soranews', function () {
    return view('soranews');
});
Route::get('/ignitenews', function () {
    return view('ignitenews');
});
