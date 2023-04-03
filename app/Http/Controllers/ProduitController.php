<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
class ProduitController extends Controller
{

    private static function GetDate(){
    return [
      // ['id' => 1, 'name' => 'Granula'],
      // ['id' => 2, 'name' => 'Bolozar'],
      // ['id' => 3, 'name' => 'Dela3'],
    ];
    
    }
    public function index()
    {
    return view('Produit.index'
    ,[
      'produit' => Produit::all(),
      
    ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('produit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $produit = new Produit();
      $produit->name = $request->input('nameproduit');
    $produit->save();
    return redirect()->route('produit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $index = Produit::findOrFail($id);
    return view('produit.show',
    ['produit' =>$index]
  );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
