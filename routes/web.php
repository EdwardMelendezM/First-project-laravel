<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services/example', function () {
    return view('services');
});



// View muestra datos estaticos
// Route::view()
Route::view('/landing/about', 'landing.home')->name('landingAbout');
Route::view('/landing/home', 'landing.home')->name('landingHome');

// Obtiene los datos para la pagina no estatica
// Route::get()
// Route::post()
// Route::put()
// Route::delete()
// Route::patch()