<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FaqController;
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
