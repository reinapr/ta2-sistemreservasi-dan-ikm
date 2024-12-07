<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/prosedur', function () {
    return view('prosedur');

});

Route::get('/radiologi', function () {
    return view('radiologi');

});

Route::get('/laboratorium', function () {
    return view('laboratorium');

});

Route::get('/form-ikm', function () {
    return view('form-ikm');

});

Route::get('/ikm-report', function () {
    return view('ikm-report');

});

Route::get('/administrasi', function () {
    return view('administrasi');

});

Route::get('/test', function () {
    return view('test');

});

Route::get('/test2', function () {
    return view('test2');

});

Route::get('/test3', function () {
    return view('test3');

});

