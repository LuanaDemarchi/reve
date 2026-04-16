<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('principal');


Route::get('/quienes-somos', function () {
    return view('quienes_somos');
})->name('quienes_somos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
