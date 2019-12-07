<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class contactoController extends Controller
{
  public function mostarView(){
    $usuarioLogeado = Auth::user();
    if(isset($usuarioLogeado)){
      $vac = compact("usuarioLogeado");
      return view('contactoFinal', $vac);
    }else{
      return view('contactoFinal');
    }
  }
}
