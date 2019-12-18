<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use Auth;
use App\Carrito;
use App\Remera;

class preguntasController extends Controller
{
  public function guardarPregunta(Request $rec){
    $usuarioLogeado = Auth::user();
    $pregunta = new Pregunta;
    $pregunta->contenido = $rec["pregunta"];
    $pregunta->producto_id = $rec["productoId"];
    $pregunta->user_id = $usuarioLogeado->id;
    $pregunta->save();
    return redirect("producto".$rec["productoId"]);
  }
}
