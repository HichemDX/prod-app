<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\unite;
use App\Models\Produit;

class UniteController extends Controller
{
    public function GetData(){
    return [
      // ['id' => 1, 'name' => 'alger', 'postion' => 'alger','produit'=>'granula'],
      // ['id' => 2, 'name' => 'sig', 'postion' => 'Mascara','produit'=>'Dela3'],

    ];
    }
    public function index()
    { 
        return View('unite.index',[
          'unite' => unite::all(),
          'produit' => Produit::all(),

        ]);
      

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('unite.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $unite = new unite();
      $unite->name = $request->input('nameunite');
      $unite->position = $request->input('postion');
      $unite->idProduit = $request->input('option');
    $unite->save();
    return redirect()->route('unite.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $index = unite::findOrFail($id);
    return view(
      'unite.show',
      ['unite' => $index]
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
