<?php

use App\Http\Controllers\CoronavirusController;
use App\Http\Controllers\ImportController;
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



Route::group(['prefix' => 'import'], function () {
    Route::get('/general-information', function () {
        return view('imports.generalinformation');
    })->name('general-information');

    Route::get('/living-animals', function () {
        return view('imports.livinganimals');
    })->name('livinganimals');

    Route::get('/food-and-goods', function () {
        return view('imports.foodandgoods');
    })->name('foodandgoods');

    Route::get('/plant-based', function () {
        return view('imports.plantbased');
    })->name('plantbased');

    Route::get('/organic', function () {
        return view('imports.organic');
    })->name('organic');

    Route::get('/faq', function () {
        return view('imports.faq');
    })->name('faq');

    Route::get('/explanation-of-terms', function () {
        return view('imports.explanation');
    })->name('explanation');

    Route::get('/downloads', function () {
        return view('imports.downloads');
    })->name('downloads');

    Route::get('/living-animals/import', function () {
        return view('imports.living-animal-import');
    })->name('living-animal-import');

    Route::get('/living-animals/travel', function () {
        return view('imports.living-animal-travel');
    })->name('living-animal-travel');
});
