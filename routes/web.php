<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/faq', function () {
    $data_sx = ['lista_faqs_sx' => config('dati.faqs_sx')];
    $data_dx = ['lista_faqs_dx' => config('dati.faqs_dx')];
    return view('faq', $data_sx, $data_dx);
})->name('faq');
