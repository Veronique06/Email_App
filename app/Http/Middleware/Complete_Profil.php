<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Complete_Profil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

<<<<<<< HEAD
        if(Auth::user()->profil == 0){
            return redirect()->route('complete_profil');
        }else{
            return $next($request);
        }

=======

        if(Auth::user()->profil == 0){
            return redirect()->route('complete_profil');
        }else{
            return $next($request);
        }


>>>>>>> 819c3d72cbfb4f8617fed3427632945e21700bb9
    }
}
