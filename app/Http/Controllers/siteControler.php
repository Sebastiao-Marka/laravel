<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteControler extends Controller
{
   public function index(){
    $name = "Daniel";
    $habits = ["ler", "Estudar", "vencer"];
    return view ( 'home', [
        "name" => $name, 
        "habits" => $habits,
    ]);
   }
}
