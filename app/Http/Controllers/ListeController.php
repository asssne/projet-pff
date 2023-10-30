<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

class ListeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('utilisateurs/users' , compact('users')); 
    }
}
