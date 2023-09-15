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
    return view('pages.home');
});
Route::get('/dich-vu', function () {
    return view('pages.services');
});
Route::get('/goi-dich-vu', function () {
    return view('pages.packages');
});
Route::get('/tin-tuc', function () {
    return view('pages.news');
});
Route::get('/lien-he', function () {
    return view('pages.contact');
});
Route::get('/chinh-sach', function () {
    return view('pages.policy');
});
Route::get('/tai-ung-dung', function () {
    return view('pages.download');
});

