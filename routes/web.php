<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GadgetController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\HomepageController;

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

Route::get('/', [HomepageController::class,'index']);
Route::get('/home', [HomepageController::class,'dashboard']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::get('/list',[HomeController::class,'list']);

    // route wisata
    Route::resource('wisata',WisataController::class); // contoh route crud

    // route gadget
    Route::resource('gadget',GadgetController::class); // contoh route crud
    // route layanan
    Route::get('/layanan',[GadgetController::class, 'layanan']); // contoh route crud

});
