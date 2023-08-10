<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
public function administrateurs()
{
    $roles= Role::all();
    $users= User::all();
    $categorie= Categories::all();
    $produit= Produits::all();
    return view('utilisateurs',compact('users','categorie','produit'));
}
}
