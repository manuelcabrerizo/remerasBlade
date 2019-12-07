<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class perfilController extends Controller
{
  public function mostarView(){
    $usuarioLogeado = Auth::user();
    if(isset($usuarioLogeado)){
      $update = false;
      $vac = compact("usuarioLogeado");
      $vac2 = compact("update");
      return view('perfil', $vac, $vac2);
    }else{
      return view('perfil');
    }
  }

  public function update(){
    $usuarioLogeado = Auth::user();
    $update = true;
    $vac = compact("usuarioLogeado");
    $vac2 = compact("update");
    return view('perfil', $vac, $vac2);
  }
  public function save(Request $rec){
    $usuarioLogeado = Auth::user();
      $usuarioLogeado->name = $rec['name'];
      $usuarioLogeado->email = $rec['email'];
      $usuarioLogeado->password = password_hash($rec["password"], PASSWORD_DEFAULT);
      $usuarioLogeado->save();
      if($_FILES){
        move_uploaded_file($_FILES["imagen2"]['tmp_name'], "img/".$usuarioLogeado->foto);
      }
      return redirect('/perfil');
  }
}
