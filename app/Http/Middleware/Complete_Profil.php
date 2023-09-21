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
        /*
        if(auth()->user()->Admin==1 )
        {
            return $next($request);

        }else{
            return view('userView.complete_profil');
        }

        */

        if(Auth::user()->profil == 0){
            return redirect()->route('complete_profil');
        }else{
            return $next($request);
        }

    }
}
