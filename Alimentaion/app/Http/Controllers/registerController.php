<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{

 public function inscriptionadmin(){
    return view('pages.inscription');
 }

//  public function inscriptionadmin(){
//    return view('admin.inscription');
// }
 public function utilisateurs(){
   // $roles= Role::all();
   $users= User::all();
   // $categorie= Categories::all();
   // $produit= Produits::all();
   return view('utilisateurs',compact('users'));

}
 public function adminformulaire(Request $request){
   
   User::create([
      'nom'=> $request->nom,
      'prenom'=> $request->prenom,
      'numero'=> $request->numero,
      'domicile'=> $request->domicile,
      'password'=> bcrypt($request->password),
      'role_id'=> 1,
   ]);
   return 'ok';
}


}

