<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    function mon_profil(){
        return view('userView.moncompte.profil');
    }

    function setting_profil(){
        return view('userView.moncompte.setting');
    }
}
