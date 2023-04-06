<?php

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UniteController;
use App\Models\produit;
use App\Models\unite;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::resource('produit', ProduitController::class);
Route::resource('unite', UniteController::class);

Route::get('/test', function () {
  $unite = unite::find(1);
  // return $unite = unite::with('produit')->find(id: 1);
  $produit = $unite->produit;
  
  foreach($produit as $value){
  echo  $value->name;
  }


});
Route::get('/unite-produit', function () {
  $unite = Unite::find(1);
  $produits = $unite->produit;
  return $produits;
});
Route::get('/produit-unite', function () {
  $produit = Produit::find(1);
  $unites = $produit->unite;
  return $unites;
});