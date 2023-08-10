<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionController extends Controller
{
    public function connexionUser(Request $request){
            $credentials = $request->validate([
                'numero' => "required|numero",
                'password'=> "required",
            ]);
           
            if(Auth::attempt($credentials) && Auth::user()->role_id === 1){
                $request->session()->regenerate();
                return redirect()->route('administrateurs');
            }
            return back()->withErrors([
                'numero' => 'invalide numero',
                'password' => 'invalide password'
            ]);
            
        
        }  
    
}
