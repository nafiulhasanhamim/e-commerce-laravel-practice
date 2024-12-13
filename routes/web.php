<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
//use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');


Route::get('abouts/', function () {
    return view('abouts_custom');
})->name('abouts');


Route::controller(ProductsController::class)->prefix('products/')->name('product.')->group(function (){
    Route::get('/', 'products_index')->name('index');
    Route::get('collection/','products_collection')->name('collection');
    Route::get('details/{id}/','product_details')->name('detail')->where('id','[0-9]+');
});

Route::controller(OrderController::class)->prefix('order/')->name('order.')->group(function (){
    Route::get('/','order_index')->name('index');
    Route::get('checkout/','checkout')->name('checkout');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
