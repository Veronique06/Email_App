<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class ProfilController extends Controller
{
    function completer_information(){

        $user = User::find(Auth::user()->id);
        $user->profil = true;
        $user->save();

        return redirect()->route('home')->with('success', "Vous venez de completer otre proil aec succès");
    }
}
