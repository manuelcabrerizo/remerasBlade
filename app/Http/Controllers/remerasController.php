<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Remera;

class remerasController extends Controller
{
    public function listado(){
      $productos = Remera::all();
      $vac = compact("productos");
      return view('home', $vac);
    }
}
