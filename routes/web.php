<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KonyolDrama;
use App\Http\Controllers\KonyolNews;
use App\Http\Controllers\KonyolPemerintah;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('konyol', function () {
    return view('konyol');
})->name('konyol');
Route::get('/konyol', [KonyolDrama::class, 'index'])->name('konyol');

Route::get('sports', function () {
    return view('sports');
})->name('sports');

Route::get('news', function () {
    return view( 'news');
})->name('news');
Route::get('/news', [KonyolNews::class, 'index'])->name('news');

Route::get('pemerintah', function () {
    return view( 'pemerintah');
})->name('pemerintah');
Route::get('/pemerintah', [KonyolPemerintah::class, 'index'])->name('pemerintah');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::fallback(function () {
    return view('NotFound.NF');
});
