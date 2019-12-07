<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class faqlController extends Controller
{
  public function mostarView(){
    $usuarioLogeado = Auth::user();
    if(isset($usuarioLogeado)){
      $vac = compact("usuarioLogeado");
      return view('faqFinal', $vac);
    }else{
      return view('faqFinal');
    }
  }
}
