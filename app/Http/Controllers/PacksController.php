<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class PacksController extends Controller
{
    //
    function liste_packs()
    {
        $packs = Pack::all();
        return view('adminView.listePacks',['packs' => $packs]);
    }
    function edit_form($id)
    {
        $packs = Pack::find($id);
        return view('adminView.editPack',['packs' => $packs]);
    }

     function save_edit(Request $req)
    {
          $req->validate([
            'pack_id'=>['required', 'numeric', 'min:1', 'exists:packs,id'],
            'title' => 'required|string',
            'nombre_contact' => ['required', 'numeric', 'min:0'],
            'nombre_email' => ['required', 'numeric', 'min:0'],
            'price_promo' => ['required', 'numeric', 'min:0'],
            'price' => ['required', 'numeric', 'min:0'],
            'nombre_jours' => ['required', 'numeric', 'min:0'],
            'nombre_multi_user' => ['required', 'numeric', 'min:0'],
         
        ]) ;

        $packs = Pack::find( $req['pack_id'] );
        $packs->title= $req['title'];
        $packs->nombre_contact= $req['nombre_contact'];
        $packs->nombre_email= $req['nombre_email'];
        $packs->price_promo= $req['price_promo'];
        $packs->price= $req['price'];
        $packs->nombre_jours= $req['nombre_jours'];
        $packs->nombre_multi_user= $req['nombre_multi_user'];

        $packs->save();
        return redirect()->route('admin.liste')->with('success', "Infos packs modifié avec succès");
    }
}
