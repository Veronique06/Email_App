<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pack;

class AbonnementController extends Controller
{
    function voir_les_packs(){
        $packs = Pack::all();
        return view('userView.packs.voir_liste',['packs' => $packs]);
    }
}
