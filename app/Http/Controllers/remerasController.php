<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Remera;

class remerasController extends Controller
{
    public function listado(){
      $remeras = Remera::all();
      $vac = compact("remeras");
      return view('remeras', $vac);
    }
}
