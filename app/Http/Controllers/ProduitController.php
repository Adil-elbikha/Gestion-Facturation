<?php

namespace App\Http\Controllers;

use App\resources\views;
use Illuminate\Http\Request;
use App\Models\Produit;
use Response;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {





        $produit = Produit::all();
        return view('Produit.index',compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produit=Produit::all();
        return view('Produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produit::create($request->all());
        return redirect()->route('Produit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
     {

     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('Produit.edit', compact('produit'));
    }


    public function getProduct($id)
    {
        $produit = Produit::find($id);
        return Response::json($produit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'reference' => 'required',
            'total' => 'required',

        ]);


        $produit = Produit::find($id);
        $produit->nom = $request->get('nom');
        $produit->reference = $request->get('reference');
        $produit->total= $request->get('total');

        $produit->save();

        return redirect()->route('Produit.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(  $id)
    {
        Produit::destroy($id);
        return redirect()->route('Produit.index');
    }
}
