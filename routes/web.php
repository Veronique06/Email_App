<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ProfilController;
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
})->name('welcome');

Route::middleware(['auth','verified' ,'complete_profil'])->group(function () {
    Route::get('/home', function () {
        return view('userView.dashboard');
    })->name('home');
});

Route::get('complete', function () {
    return view('userView.complete_profil');
})->name('complete_profil')->middleware(['auth','verified']);

Route::get('complete-profil-valid',[ProfilController::class , "completer_information"])
->name('complete_profil_valid')->middleware('auth');

Route::post('/contact',[ContactController::class , "save_contact"])
->name('contact');

require __DIR__ . '/admin_route.php';
