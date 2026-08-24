<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - RZ Digital Creative Company Profile Landing Page
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('rz-digital.index');
})->name('home');

Route::get('/company-profile', function () {
    return view('rz-digital.index');
})->name('company-profile');

Route::get('/rz-digital', function () {
    return view('rz-digital.index');
})->name('rz-digital');
