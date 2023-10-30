<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biens_immeubiliers;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class biensImmeubiliersController extends Controller
{
    public function index()
    {

        $meuble = biens_immeubiliers::all();
        return view('/Biens_immeubiliers' , compact('meuble'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $users = User::all();
        $users = User::all(['id', 'name']);
        // dd($users);
        $types = Type::all(['id' , 'name']);
        $meuble = biens_immeubiliers::all();
        return view('meubles.ajouter', compact('users', 'types'));

    }

    public function store(Request $request){
        $numero=$request->numero;
        $taille=$request->taille;
        $prix=$request->prix;
        $img=$request->img;
        $description=$request->description;
        $users=$request->users;
        $types=$request->types;


        $meuble= new biens_immeubiliers();
        $meuble->numero=$numero;
        $meuble->taille=$taille;
        $meuble->prix=$prix;
        $meuble->description=$description;
        $meuble->img=$img;
        $meuble->users_id=$users;
        $meuble->types_id=$types;
        if ($request->hasFile('img')) {
            $request->file('img')->move('images/', $request->file('img')->getClientOriginalName());
            $meuble->img = $request->file('img')->getClientOriginalName();
            $meuble->save();
        }

       $meuble-> save();
        return redirect('/meuble')->with('status', 'Le Produit a été bien poste avec succes.');

    }

public function delete(string $id)
{
    $meuble = biens_immeubiliers::find($id);
    $meuble->cascadeDelete();
    $meuble->delete();


    return redirect('/meuble')->with('status', 'Le Produit a été bien supprimée avec succes.');
}
public function show(string $id)
{
    $meubles = biens_immeubiliers::findOrfail($id);
    return view('utilisateurs.detail', compact('meubles'));
}
public function edit(string $id)
    {
        $meubles = biens_immeubiliers::find($id);
        $users = User::all();
        $types = Type::all();
        return view('utilisateurs.edit', compact('meubles', 'users', 'types'));
    }


    /**)
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $meubles = biens_immeubiliers::find($id);
        $meubles->numero= $request->input('numero');
        $meubles->taille= $request->input('taille');
        $meubles->prix= $request->input('prix');
        $meubles->description= $request->input('description');
        $meubles->img= $request->input('img');
        $meubles->users_id= $request->input('users_id');
        $meubles->types_id= $request->input('types_id');
        if ($request->hasFile('img')) {
            $request->file('img')->move('images/', $request->file('img')->getClientOriginalName());
            $meubles->img = $request->file('img')->getClientOriginalName();
            $meubles->save();
        }
        $meubles->update();
        return redirect('/meuble')->with('status', 'Le Produit a été bien modifie avec succes.');


    }
    public function affichesss(){

       $meubles = biens_immeubiliers::all();
         return view('nos_services' , compact('meubles'));
     }
 }
