<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RestaurantController;

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

//Order
Route::get('/', [OrderController::class, 'form']);
Route::post('/', [OrderController::class, 'store'])->name('order.store');
Route::get('/orderList', [OrderController::class, 'index']);

//Restaurant
Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/restaurant/create', [RestaurantController::class, 'create']);
Route::post('/restaurant/store', [RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/restaurant/{restaurant}/edit', [RestaurantController::class, 'edit'])->name('restaurant.edit');
Route::patch('/restaurant/{restaurant}', [RestaurantController::class, 'update'])->name('restaurant.update');
Route::delete('/restaurant/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete');
