<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});


   

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::match(['post', 'get'], 'addNewClaim', '\App\Http\Controllers\Controller@addNewClaim')->name('addNewClaim');
    Route::match(['post', 'get'], 'dashboard', '\App\Http\Controllers\Controller@dashboard')->name('dashboard');
    Route::match(['post', 'get'], 'insertClaim', '\App\Http\Controllers\Controller@insertClaim')->name('insertClaim');
    Route::put('changeClaim', '\App\Http\Controllers\Controller@changeClaim')->name('changeClaim');

    Route::delete( 'deleteClaim', '\App\Http\Controllers\Controller@deleteClaim')->name('deleteClaim');
    Route::match(['post', 'get'], 'report', '\App\Http\Controllers\Controller@report')->name('report');
    Route::match(['post', 'get'], 'feedback', '\App\Http\Controllers\Controller@addNewClaim')->name('feedback');
    Route::match(['post', 'get'], 'contactUs', '\App\Http\Controllers\Controller@contactUs')->name('contactUs');
    Route::match(['post', 'get'], 'paymentStatus', '\App\Http\Controllers\Controller@paymentStatus')->name('paymentStatus');
    Route::match(['post', 'get'], 'botAssistant', '\App\Http\Controllers\Controller@botAssistant')->name('botAssistant');
    Route::match(['post', 'get'], 'deletePaymentStatus', '\App\Http\Controller\Controller@deletePaymentStatus')->name('deletePaymentStatus');
});

require __DIR__.'/auth.php';
