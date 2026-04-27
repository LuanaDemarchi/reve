<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/informacion', function () {
    return view('informacion');
});


Route::get('/productos', function () {
    return view('productos');
});

Route::get('/quienes_somos', function () {
    return view('quienes_somos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/terminos', function () {
   return view('terminos');
});

Route::get('/cookies', function () {
   return view('cookies');
});

Route::get('/tortas', function () {
   return view('tortas');
});

Route::get('/rolls', function () {
   return view('rolls');
});