<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $vac = compact("usuarioLogeado");
        return view('home', $vac);
      }else {
        return view('home');
      }
    }
}
