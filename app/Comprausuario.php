<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprausuario extends Model
{
  public $table = "comprasusuarios";
  public $guarded = [];

  public function compras(){
    return $this->belongsToMany("app\Remera", "compras","user_id",  "producto_id");
  }
}
