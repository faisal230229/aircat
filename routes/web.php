<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/service-detail', function () {
    return view('service-detail');
})->name('service-detail');

Route::get('/company-overview', function () {
    return view('overview');
})->name('company-overview');

Route::get('/company-milestone', function () {
    return view('milestone');
})->name('company-milestone');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
