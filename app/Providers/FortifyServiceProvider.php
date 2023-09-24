<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
         if(request()->is('admin/*')){
            config()->set('fortify.guard', 'admin');
            config()->set('fortify.home', 'admin/home');//
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

          Fortify::requestPasswordResetLinkView(function () {
                return view('auth.forgot-password');
            });

             Fortify::resetPasswordView(function (Request $request) {
                return view('auth.reset-password', ['request' => $request]);
            });

            Fortify::registerView(function () {
            return view('auth.register');
            });

              Fortify::loginView(function () {
              return view('auth.login');
            });

              Fortify::verifyEmailView(function () {
                return view('auth.verify-email');
            });

                Fortify::authenticateUsing(function (Request $request) 
            {

            // if($request->is('admin/*'))
            // {
            //     $user = Admin::where('email', $request->email)->first();
               
            //     if ($user && Hash::check($request->password, $user->password)) 
            //     {

            //         return $user;

            //     }else{
           
                if($request->is('admin/*')){
                    $user = Admin::where('email', $request->email)->first();
                    if ($user &&  Hash::check($request->password, $user->password)) 
                    {
                        return $user;
                    }
                }else{
                    $user = User::where('email', $request->email)->first();
                    if ($user &&  Hash::check($request->password, $user->password)) 
                    {
                        return $user;
                    }
                }
   
             
         });

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
