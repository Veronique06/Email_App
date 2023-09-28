<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Mes_contact;
use Illuminate\Http\Request;

class MesContactController extends Controller
{
    //

    function liste_contact()
    {
        $contacts = Mes_contact::all();
        return view('userView.mescontacts.listeContact',['contacts'=>$contacts]);
    }

}
