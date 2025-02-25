<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ajouter', function () {
    return view('ajouter');
});
Route::get('/categorie', function () {
    return view('categorie');
});


