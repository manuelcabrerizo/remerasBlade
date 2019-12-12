<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Carrito;
use App\Remera;
class carritoController extends Controller
{
  public function carritoRemove(Request $rec){
    $usuarioLogeado = Auth::user();
    $productos = Remera::all();
    $carrito = Carrito::all();
    $vac = compact("usuarioLogeado", "productos");
    foreach ($carrito as $producto) {
        if($producto->producto_id == $rec["eliminar"] && $producto->user_id == $usuarioLogeado->id){
          $producto->delete();
          return redirect("carrito");
        }
      }
  }
}
