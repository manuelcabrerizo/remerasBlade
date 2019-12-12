<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Remera;
use App\Carrito;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
      $usuarioLogeado = Auth::user();
      if(isset($usuarioLogeado)){
        $productos = Remera::all();
        $vac2 = compact("productos");
        $vac = compact("usuarioLogeado");
        return view('home', $vac, $vac2);
      }else {
        $productos = Remera::all();
        $vac2 = compact("productos");
        return view('home', $vac2);
      }
    }

    public function carritoView(){
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $carro = Carrito::all();
      $vac = compact("usuarioLogeado", "productos", "carro");
      return view('carrito', $vac);
    }

    public function carritoAdd(Request $rec){
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $carrito = new Carrito;
      $vac = compact("usuarioLogeado", "productos");
      foreach ($productos as $producto) {
        if($producto->id == $rec["incrementar"]){
          $carrito->user_id = $usuarioLogeado->id;
          $carrito->producto_id = $producto->id;
          $carrito->save();
          return view('home', $vac);
        }
      }
    }
}
