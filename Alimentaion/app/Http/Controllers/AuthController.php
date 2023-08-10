<?php

namespace App\Http\Controllers;
// use App\Models\produit;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
return view('auth/inscription');
    }
}
