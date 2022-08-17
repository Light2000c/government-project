<?php

use App\Http\Controllers\CoronavirusController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TopicController;
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
    return view('home');
})->name('home');

Route::get('/coronavirus', [CoronavirusController::class, 'index'])->name('coronavirus');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/topics', [TopicController::class, 'index'])->name('topics');

Route::get('/ministry', [MinistryController::class, 'index'])->name('ministry');
