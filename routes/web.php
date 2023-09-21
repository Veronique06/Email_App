<?php

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
});


Route::middleware(['auth', 'complete_profil'])->group(function () {
    Route::get('/home', function () {
        return view('userView.home');
    })->name('home');
});

Route::get('complete', function () {
    return view('userView.complete_profil');
})->name('complete_profil')->middleware('auth');

Route::get('complete-profil-valid',[ProfilController::class , "completer_information"])
->name('complete_profil_valid')->middleware('auth');

require __DIR__ . '/admin_route.php';
