<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Category;
use App\Http\Controllers\Products;
use App\Models\Products as ModelsProducts;
use Illuminate\Http\Request;
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
})->name('home');
Route::get('/san-pham', function () {
    return view('pages.products');
})->name('san-pham');
Route::get('/san-pham-chi-tiet/{id}', function ($id) {
    $product = ModelsProducts::where('id', $id)->get();
    return view('pages.productdetail', compact('product'));
})->name('san-pham-chi-tiet');
Route::get('/dich-vu', function () {
    return view('pages.services');
})->name('dich-vu');
Route::get('/goi-dich-vu', function () {
    return view('pages.packages');
})->name('goi-dich-vu');
Route::get('/tin-tuc', function () {
    return view('pages.news');
})->name('tin-tuc');
Route::get('/lien-he', function () {
    return view('pages.contact');
})->name('lien-he');
Route::get('/chinh-sach', function () {
    return view('pages.policy');
})->name('chinh-sach');
Route::get('/ve-chung-toi', function () {
    return view('pages.aboutus');
})->name('ve-chung-toi');
Route::get('/tai-ung-dung', function () {
    return view('pages.download');
})->name('tai-ung-dung');
Route::get('/policy', function () {
    return view('pages.policyGG');
})->name('policy');


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginRegisterController::class, 'index']);
    Route::post('/login', [LoginRegisterController::class, 'login'])
        ->name('login');

    Route::get('/register', [LoginRegisterController::class, 'index']);
    Route::post('/register', [LoginRegisterController::class, 'register'])
        ->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('auth.pages.dashboard')->with('title', 'Dashboard');
    })->name('dashboard');

    Route::post('/logout', [LoginRegisterController::class, 'logout'])
        ->name('logout');

    Route::get('/danh-muc-san-pham', [Category::class, 'index'])->name('category');
    Route::post('/danh-muc-san-pham', [Category::class, 'store'])
        ->name('productcategory.store');
    Route::get('/danh-muc-san-pham/{id}', [Category::class, 'update'])
        ->name('productcategory.update');
    Route::post('/danh-muc-san-pham/{id}', [Category::class, 'destroy'])
        ->name('productcategory.destroy');

    Route::get('/danh-sach-san-pham', [Products::class, 'index'])
        ->name('productlist');
    Route::get('/them-san-pham', function () {
        return view('auth.pages.addproduct');
    })->name('addproduct');
    Route::post('/them-san-pham', [Products::class, 'store'])
        ->name('productlist.store');
    Route::get('/sua-san-pham/{id}', [Products::class, 'updateView'])
        ->name('product.list.update');
    Route::post('/sua-san-pham/{id}', [Products::class, 'update'])
        ->name('productlist.update');
    Route::post('/xoa-san-pham/{id}', [Products::class, 'destroy'])
        ->name('productlist.destroy');
    Route::post('/upload',  [Products::class, 'upload'])
        ->name('productlist.upload');
});
