<?php
use Laravel\Fortify\RoutePath;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login',function(){ return view('auth.loginAdmin'); })
    ->middleware(['guest:admin']) 
    ->name('login');

  $limiter = config('fortify.limiters.login');
    // $twoFactorLimiter = config('fortify.limiters.two-factor');
    // $verificationLimiter = config('fortify.limiters.verification', '6,1');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:admin',
            $limiter ? 'throttle:'.$limiter : null,
        ]));

  
 Route::get('/home',function(){ return view('admin.home'); })
           ->middleware(['auth:admin']) 
            ->name('home');

       Route::post(RoutePath::for('logout', '/logout'), [AuthenticatedSessionController::class, 'destroy'])
       ->middleware('auth:admin')
       ->name('logout');
});

