<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function index(){
    $name = "Daniel";
    $habits = ["ler", "Estudar", "vencer"];
    return view ( 'home', compact('name', 'habits'));
   }

   public function dashboard(){
   return view('dashboard');
   }
}
