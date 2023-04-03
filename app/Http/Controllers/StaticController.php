<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
  public function produit () {
    return view('produit');
  }
  public function unite() {
    return view('unite');
  }
}
