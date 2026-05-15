<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
   public function home(){
    return view ( '/home');
   }
   public function login(){
    return view ( '/login');
   }
   public function autenticate(Request $request){

      $credential = $request->validate([
       'email' => 'required|email',
          'password' => 'required|min:6'
         ]);

      if(Auth::attempt($credential)){
         $request->section()->regenerete();

          return redirect()->intended(default: "/");
      }else{
      return back()->withErrors([
         'email' => 'Email invalido', 
      ]);
   }

   }
}
