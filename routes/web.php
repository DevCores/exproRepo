<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('index');
Route::get('company/documents', function () {
    return view('documents');
})->name('documents');
Route::get('company/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('info', function () {
    return view('info');
})->name('info');
Route::get('menu', function () {
    return view('menu');
})->name('menu');

Route::get('/project/jin-chan', function () {
    return view('project.jin-chan');
})->name('jin-chan');
Route::get('/project/ecolab', function () {
    return view('project.ecolab');
})->name('ecolab');
Route::get('/project/howo', function () {
    return view('project.howo');
})->name('howo');
Route::any('/shop/mail', [App\Http\Controllers\CartController::class, 'mail'])->name('mail.cart');
Route::any('/shop/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('remove.card');
Route::any('/shop/qty', [App\Http\Controllers\CartController::class, 'qty'])->name('qty');
Route::any('/shop/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::any('/shop', [App\Http\Controllers\GetController::class, 'shop'])->name('sinotruk');
Route::any('/shop/category_{id}', [App\Http\Controllers\GetController::class, 'category'])->name('sinotruk_category');




Route::get('/news', [App\Http\Controllers\GetController::class, 'news'])->name('news');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

