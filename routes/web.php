<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TrackingController;
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

// admin route

Route::get('/admin/order/create', [OrderController::class, 'myForm'])->name('create');
Route::post('/admin/order', [OrderController::class, 'store'])->name('store.order');
Route::get('/admin/order/view', [OrderController::class, 'index'])->name('view.orders');
Route::get('/admin/order/edit/{id}', [OrderController::class, 'editForm'])->name('edit.order');
Route::put('/admin/order/update/{order}', [OrderController::class, 'edit'])->name('update.order');

Route::get('/', 
    [HomeController::class, 'index']
)->name('home');
Route::get('/team', 
    [TeamController::class, 'index']
)->name('team');
Route::get('/partners', 
    [PartnerController::class, 'index']
)->name('partners');
Route::get('/faqs', 
    [FaqController::class, 'index']
)->name('faq');
Route::get('/tracking', [TrackingController::class, 'index'])->name('track');
Route::post('/tracking', [TrackingController::class, 'trackOrder'])->name('track.order');
