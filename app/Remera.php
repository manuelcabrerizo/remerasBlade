<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remera extends Model
{
  public $table = "productos";
  public $guarded = [];

  public function usuarios(){
    return $this->belongsToMany("app\Authenticatable", "carrito", "producto_id", "user_id");
  }
  public function usuario(){
    return $this->belongsToMany("app\Comprausuario", "compras", "producto_id", "user_id");
  }
}
