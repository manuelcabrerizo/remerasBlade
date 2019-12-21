<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Remera;
use App\Carrito;
use App\Categoria;
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
        $categorias = Categoria::all();
        $remeras = false;
        $camperas = false;
        $camisas = false;
        $accesorios = false;
        $trajes = false;
        $indumentaria = false;
        $cinturones = false;
        $vac = compact("usuarioLogeado", "productos", "categorias", "remeras", "camperas", "camisas", "accesorios", "trajes", "indumentaria", "cinturones", "categorias", "usuarioLogeado", "productos");
        return view('home', $vac);
      }else {
        $categorias = Categoria::all();
        $productos = Remera::all();
        $remeras = false;
        $camperas = false;
        $camisas = false;
        $accesorios = false;
        $trajes = false;
        $indumentaria = false;
        $cinturones = false;
        $vac2 = compact("productos", "categorias", "remeras", "camperas", "camisas", "accesorios", "trajes", "indumentaria", "cinturones", "categorias", "usuarioLogeado", "productos");
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
          return redirect('home');
        }
      }
    }

    public function mostrarCategorias(Request $rec){
      $categorias = Categoria::all();
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $remeras = false;
      $camperas = false;
      $camisas = false;
      $accesorios = false;
      $trajes = false;
      $indumentaria = false;
      $cinturones = false;
      $categoriaId = $rec["categoria"];
      if($rec["categoria"] == 1){
        $remeras = true;
      }
      if($rec["categoria"] == 2){
        $camperas = true;
      }
      if($rec["categoria"] == 3){
        $camisas = true;
      }
      if($rec["categoria"] == 4){
        $accesorios = true;
      }
      if($rec["categoria"] == 5){
        $trajes = true;
      }
      if($rec["categoria"] == 6){
        $indumentaria = true;
      }
      if($rec["categoria"] == 7){
        $cinturones = true;
      }
      $vac = compact("remeras", "camperas", "camisas", "accesorios", "trajes", "indumentaria", "cinturones", "categorias", "usuarioLogeado", "productos", "categoriaId");
      return view('home', $vac);

    }
    public function buscar(Request $rec){
      $usuarioLogeado = Auth::user();
      $categorias = Categoria::all();
      $productos = Remera::all();
      $buscar = $rec["q"];
        $remeras = false;
        $camperas = false;
        $camisas = false;
        $accesorios = false;
        $trajes = false;
        $indumentaria = false;
        $cinturones = false;
        $vac = compact("usuarioLogeado", "productos", "categorias", "remeras", "camperas", "camisas", "accesorios", "trajes", "indumentaria", "cinturones", "categorias", "buscar");
        return view('home', $vac);
      }

    
      // $remeras = false;
      // $camperas = false;
      // $camisas = false;
      // $accesorios = false;
      // $trajes = false;
      // $indumentaria = false;
      // $cinturones = false;
      // $q = $rec["q"];
      // if($q != ""){
      //   //futuro buscador
      //   $vac = compact("usuarioLogeado", "productos", "categorias", "remeras", "camperas", "camisas", "accesorios", "trajes", "indumentaria", "cinturones");
      //   return view('home', $vac);
      // }

      // function(){
      //   $q=Input:: get(q);
      //   if($q != ""){
      //     $prod=productos:: where('detalle','LIKE','%'.$q.'%');
      //     return "hola";
      //   }
      //   return "Sin resultados";
      // });

}
