<?php

use Illuminate\Support\Facades\Route;

$servicios = [
    // ['titulo' => 'Servicio 01'],    
    // ['titulo' => 'Servicio 02'],
    // ['titulo' => 'Servicio 03'],
    // ['titulo' => 'Servicio 04'],
    // ['titulo' => 'Servicio 05'],    
];

Route::view('/', 'home') ->name('home');
Route::view('nosotros', 'nosotros') ->name('nosotros');
Route::get('servicios','App\Http\Controllers\Servicios2Controller@index')->name('servicios');
//Route::resource('servicios', 'App\Http\Controllers\Servicios2Controller');
Route::resource('servicios', 'App\Http\Controllers\Servicios2Controller')->only('index', 'show');
Route::view('contacto', 'contacto') ->name('contacto');
