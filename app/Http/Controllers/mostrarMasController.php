<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Carrito;
use App\Remera;
use App\Pregunta;
use App\Respuesta;
use App\Categoria;
use Illuminate\Support\Facades\DB;
class mostrarMasController extends Controller
{
    public function mostrarView($id){
      $usuarioLogeado = Auth::user();
      $usuarios = DB::table('users')->get();
      $productos = Remera::all();
      $respuestas = Respuesta::all();
      $preguntas = Pregunta::all();
      $categorias = Categoria::all();
      $productoId = $id;
      $vac = compact("usuarioLogeado", "productos", "productoId", "preguntas", "respuestas", "usuarios", "categorias");
      return view("mostarMas", $vac);
    }
    public function mostarCarro(Request $rec){
      if(isset($rec["incrementar"])){
        $usuarioLogeado = Auth::user();
        $productos = Remera::all();
        $carrito = new Carrito;
        foreach ($productos as $producto) {
          if($producto->id == $rec["incrementar"]){
            $carrito->user_id = $usuarioLogeado->id;
            $carrito->producto_id = $producto->id;
            $carrito->save();
            $carro = Carrito::all();
            $vac = compact("usuarioLogeado", "productos", "carro");
            return view('carrito', $vac);
          }
        }
      }elseif(isset($rec["incrementar2"])){
        setcookie("productoId", $rec["incrementar2"], time()+3600);
        return redirect('login');
      }
    }
}
