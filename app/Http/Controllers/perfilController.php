<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Remera;
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
  public function mostrarCrear(){
    $usuarioLogeado = Auth::user();
    $vac = compact("usuarioLogeado");
    return view('crearProducto', $vac);
  }
  public function saveProduct(Request $rec){
    $usuarioLogeado = Auth::user();
    $producto = new Remera;
    $producto->nombre = $rec['nombre'];
    $producto->foto = $_FILES['foto2']['name'];
    $producto->detalle = $rec['detalle'];
    $producto->precio = $rec['precio'];
    $producto->color = $rec['color'];
    $producto->talle = $rec['talle'];
    $producto->user_id = $usuarioLogeado->id;
    $producto->save();
    if($_FILES){
      move_uploaded_file($_FILES["foto2"]['tmp_name'], "img/".$producto->foto);
    }
    return redirect("/perfil");
  }

  public function mostrarProductos(){
    $usuarioLogeado = Auth::user();
    $productos = Remera::all();
    $editar = false;
    $vac = compact("usuarioLogeado", "productos", "editar");
    return view('misProductos', $vac);
  }
  public function controlarProducto(Request $rec){
    if(isset($rec["eliminar"])){
      $productos = Remera::all();
      foreach ($productos as $producto) {
        if($rec["eliminar"] == $producto->id){
          $producto->delete();
          return redirect("misProductos");
        }
      }
    }elseif(isset($rec["editar"])){
      $usuarioLogeado = Auth::user();
      $productos = Remera::all();
      $editar = true;
      foreach($productos as $producto){
        if($producto->id == $rec["editar"]){
          $productoId = $producto;
          $vac = compact("usuarioLogeado", "productos", "editar", "productoId");
          return view('misProductos', $vac);
        }
      }


    }
  }

  public function modificarProducto(Request $rec){
    $usuarioLogeado = Auth::user();
    $productos = Remera::all();
    foreach ($productos as $producto) {
      if($producto->id == $rec["modificar"]){
        $producto->nombre = $rec['nombre'];
        $producto->foto = $_FILES['foto3']['name'];
        $producto->detalle = $rec['detalle'];
        $producto->precio = $rec['precio'];
        $producto->color = $rec['color'];
        $producto->talle = $rec['talle'];
        $producto->user_id = $usuarioLogeado->id;
        $producto->save();
        if($_FILES){
          move_uploaded_file($_FILES["foto3"]['tmp_name'], "img/".$producto->foto);
        }
        return redirect("misProductos");
      }
    }
  }
}
