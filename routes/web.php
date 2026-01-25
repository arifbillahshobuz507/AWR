<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('pageNotFound.pageNotFound');
})->name('force.redirect');

Route::fallback(function () {
    return redirect()->route('force.redirect');
});

