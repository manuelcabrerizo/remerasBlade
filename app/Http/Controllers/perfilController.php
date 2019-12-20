<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Remera;
use App\Compra;
use App\Comprausuario;
class perfilController extends Controller
{
  public function mostarView(){
    $usuarioLogeado = Auth::user();
    $productos = Remera::all();
    if(isset($usuarioLogeado)){
      $update = false;
      $vac = compact("usuarioLogeado", "update", "productos");
      return view('perfil', $vac);
    }else{
      return view('perfil');
    }
  }

  public function update(){
    $usuarioLogeado = Auth::user();
    $productos = Remera::all();
    $update = true;
    $vac = compact("usuarioLogeado","productos", "update");
    return view('perfil', $vac);
  }
  public function save(Request $rec){
      $usuarioLogeado = Auth::user();
      if($rec['name'] != ""){
        $usuarioLogeado->name = $rec['name'];
      }
      if($rec['email'] != ""){
        $usuarioLogeado->email = $rec['email'];
      }
      if($rec['password'] != ""){
        $usuarioLogeado->password = password_hash($rec["password"], PASSWORD_DEFAULT);
      }
      $usuarioLogeado->save();
      if($_FILES && $_FILES["imagen2"] != ""){
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
    $errorNombre = false;
    $errorFoto = false;
    $errorDetalle = false;
    $errorPrecio = false;
    $producto = new Remera;
    if($rec['nombre'] != ""){
      $producto->nombre = $rec['nombre'];
    }else{
      $errorNombre = true;
    }
    if($rec['foto2'] != ""){
      $producto->foto = $_FILES['foto2']['name'];
    }else{
      $errorFoto = true;
    }
    if($rec['detalle'] != ""){
      $producto->detalle = $rec['detalle'];
    }else{
      $errorDetalle = true;
    }
    if($rec['precio'] != ""){
      $producto->precio = $rec['precio'];
    }else {
      $errorPrecio = true;
    }
    if($_FILES && $_FILES["foto2"] != ""){
      move_uploaded_file($_FILES["foto2"]['tmp_name'], "img/".$producto->foto);
    }else{
      $errorFoto = true;
    }
    if($errorNombre == false && $errorFoto == false && $errorDetalle == false && $errorPrecio == false){
      $producto->color = $rec['color'];
      $producto->talle = $rec['talle'];
      $producto->categoria_id = $rec['categoria'];
      $producto->user_id = $usuarioLogeado->id;
      $producto->save();
      return redirect("/perfil");
    }else{
      $vac = compact("errorNombre", "errorFoto", "errorPrecio", "errorDetalle", "usuarioLogeado");
      return view('crearProducto', $vac);
    }
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
        if($rec['nombre'] != ""){
          $producto->nombre = $rec['nombre'];
        }
        if($_FILES['foto3']['name'] != ""){
          $producto->foto = $_FILES['foto3']['name'];
        }
        if($rec['detalle'] != ""){
          $producto->detalle = $rec['detalle'];
        }
        if($rec['precio'] != ""){
          $producto->precio = $rec['precio'];
        }
        $producto->color = $rec['color'];
        $producto->talle = $rec['talle'];
        $producto->user_id = $usuarioLogeado->id;
        $producto->save();
        if($_FILES && $_FILES['foto3'] != ""){
          move_uploaded_file($_FILES["foto3"]['tmp_name'], "img/".$producto->foto);
        }
        return redirect("misProductos");
      }
    }
  }

  public function mostrarCompras(){
    $usuarioLogeado = Auth::user();
    $productos = Remera::all();
    $compra = Compra::all();
    $compraUsuario = Comprausuario::all();
    $vac = compact("usuarioLogeado", "productos", "compra", "compraUsuario");
    return view("miscompras", $vac);
  }
}
