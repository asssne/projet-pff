<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $users= User::all();
        return view('utilisateurs/users' , compact('users'));
    }
    public function delet($id)
    {
        $users = User::find($id);


            // Supprimez l'utilisateur
            $users->delete();

            return redirect()->back()->with('success', 'Utilisateur supprimé avec succès.');
        }

    }
