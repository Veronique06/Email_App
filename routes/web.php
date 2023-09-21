<?php

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



Route::middleware(['auth', 'complete_profil'])->group(function () {
    Route::get('/home', function () {
        return view('userView.home');
    })->name('home');
});

Route::get('complete', function () {
    return view('userView.complete_profil');
})->name('complete_profil')->middleware('auth');

require __DIR__ . '/admin_route.php';
