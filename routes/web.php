<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

use App\Http\Controllers\AboutController;

Route::get('/Menu', [AboutController::class, 'index'])->name('Menu');

Route::get('/about', function () {
    return view('menu');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');