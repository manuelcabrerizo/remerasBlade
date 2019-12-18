<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respuesta;
use App\Pregunta;

class respuestasController extends Controller
{
  public function guardarRespuesta(Request $rec){
    $preguntas = Pregunta::all();
    $respuesta = new Respuesta;
    $respuesta->contenido = $rec["respuesta"];
    $respuesta->pregunta_id = $rec["preguntaId"];
    $respuesta->save();
    return redirect("producto".$rec["productoId"]);
  }
}
