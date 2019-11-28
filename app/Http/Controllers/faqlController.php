<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqlController extends Controller
{
  public function mostarView(){
    session_start();
    $_SESSION["faq"] = true;
    return view('faqFinal');
  }
}
