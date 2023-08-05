<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProductController;

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
    return view('frontend.home');
});


// nav route
Route::get('/home', [NavbarController::class, 'home'])->name('home');
Route::get('/about', [NavbarController::class, 'about'])->name('about');
Route::get('/product', [NavbarController::class, 'products'])->name('product');
Route::get('/news', [NavbarController::class, 'news'])->name('news');
Route::get('/contact', [NavbarController::class, 'contact'])->name('contact');

Route::get('/admin', function () {
    return view('backend.menu.menulist');
});

// menuitem navber
Route::resource('/menuitems', NavbarController::class);

//category
Route::resource('/category', CategoriesController::class);

//adddress
Route::resource('/address', ContactController::class);

//products
Route::resource('/products', ProductController::class);
