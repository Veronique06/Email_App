<?php

use App\Http\Controllers\ContactController;
use App\Models\Mes_contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ProfilController;
use App\Http\Controllers\user\AbonnementController;
use App\Http\Controllers\user\CompteController;
use App\Http\Controllers\user\MesContactController;
use App\Models\ContactUser;

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

Route::get('/home', function () {
    return view('userView.dashboard');
})->name('home')->middleware(['auth','verified' ,'complete_profil']);

Route::middleware(['auth','verified' ,'complete_profil'])->prefix('users')->name('user.')->group(function () {

    Route::name('packs.')->group(function () {
        Route::get('nos-packs', [AbonnementController::class , 'voir_les_packs'])->name('voir_les_packs');
    });

    //Profils et paramètres
    Route::name('profil.')->group(function () {
        Route::get('mon-profil', [CompteController::class , 'mon_profil'])->name('mon_profil');
        Route::get('setting', [CompteController::class , 'setting_profil'])->name('setting');
        
    });

     Route::name('contactUser.')->group(function () {
        Route::get('listes', [MesContactController::class , 'liste_contact'])->name('listes');
       
        
    });

});

Route::get('complete', function () {
    return view('userView.complete_profil');
})->name('complete_profil')->middleware(['auth','verified']);

Route::get('complete-profil-valid',[ProfilController::class , "completer_information"])
->name('complete_profil_valid')->middleware(['auth','verified']);

Route::post('/contact',[ContactController::class , "save_contact"])
->name('contact');

require __DIR__ . '/admin_route.php';
