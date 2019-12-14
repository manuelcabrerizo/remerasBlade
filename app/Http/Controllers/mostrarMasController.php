<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Carrito;
use App\Remera;
class mostrarMasController extends Controller
{
    public function mostrarView(Request $rec){
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $productoId = $rec["verMas"];
      $vac = compact("usuarioLogeado", "productos", "productoId");
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
        setcookie("noLogeado", true, time()+3600);
        return redirect('login');
      }
    }
}
