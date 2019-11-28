<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
  public function mostarView(){
    session_start();
    $_SESSION["contacto"] = true;
    return view('contactoFinal');
  }
}
