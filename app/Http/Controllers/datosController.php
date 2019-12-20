<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Carrito;
use App\Remera;
use App\Tarjeta;
use App\Ubicacion;
use App\Compra;
use App\Comprausuario;


class datosController extends Controller
{
    public function pedirDatos(){
      $tarjetas = Tarjeta::all();
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $carrito = Carrito::all();
      $vac = compact("tarjetas", "usuarioLogeado", "productos", "carrito");
      return view('datos', $vac);
    }

    public function guardarDatos(Request $rec){
      $tarjetas = Tarjeta::all();
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $carrito = Carrito::all();
      $domicilios = Ubicacion::all();
      $tarjeta = new Tarjeta;
      $tarjeta->numero = $rec["tarjeta"];
      $tarjeta->user_id = $usuarioLogeado->id;
      $tarjeta->save();
      $vac = compact("domicilios", "usuarioLogeado", "productos", "carrito", "tarjetas", "tarjeta");
      return view('ubicacion', $vac);
    }
    public function guardarUbicacion(Request $rec){
      $usuarioLogeado = Auth::user();
      $tarjetas = Tarjeta::all();
      $tarjetaNueva = $rec["button"];
      $productos = Remera::all();
      $carrito = Carrito::all();
      $domicilios = Ubicacion::all();
      $domicilio = new Ubicacion;
      $domicilio->domicilio = $rec["nombre"];
      $domicilio->calle = $rec["calle"];
      $domicilio->provincia = $rec["provincia"];
      $domicilio->user_id = $usuarioLogeado->id;
      $domicilio->save();
      $vac = compact("tarjetaNueva", "usuarioLogeado", "productos", "carrito", 'domicilio', "tarjetas");
      return view('compra', $vac);
    }
    public function usarTarjeta(Request $rec){
      $tarjetas = Tarjeta::all();
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $carrito = Carrito::all();
      $domicilios = Ubicacion::all();
      $usarTarjeta = $rec["usarTarjeta"];
      $vac = compact("domicilios", "usuarioLogeado", "productos", "carrito", "tarjetas", "usarTarjeta");
      return view('ubicacion', $vac);
    }
    public function usarUbicacion(Request $rec){
      $usuarioLogeado = Auth::user();
      $tarjetas = Tarjeta::all();
      $productos = Remera::all();
      $carrito = Carrito::all();
      $domicilios = Ubicacion::all();
      $tarjeta = $rec["tarjetaElegida"];
      $ubicacionId = $rec["usarDomicilio"];
      $vac = compact("usuarioLogeado", "productos", "carrito", "tarjeta", "ubicacionId", "domicilios","tarjetas");
      return view('compra', $vac);
    }

    public function compraAdd(){
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $carrito = Carrito::all();
      $compraUsuario = new Comprausuario;
      $compraUsuario->user_id = $usuarioLogeado->id;
      $compraUsuario->save();
      foreach ($usuarioLogeado->carrito as $productoCarro) {
        $compra = new Compra;
        $compra->user_id = $compraUsuario->id;
        $compra->producto_id = $productoCarro->id;
        $compra->save();
        foreach ($carrito as $productoC){
          if($productoCarro->id == $productoC->producto_id && $usuarioLogeado->id == $productoC->user_id){
            $productoC->delete();
          }
        }
      }
      return redirect('home');
    }
}
