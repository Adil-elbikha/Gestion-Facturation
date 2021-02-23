<?php

namespace App\Http\Controllers;

use App\resources\views;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients = Client::all();
        return view('Client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create($request->all());
        return redirect()->route('Client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findorfail($id);
        return view('Client.show', compact('client'));
        return make('Client.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$Client=clients::all();
        // return view('Client.edit', compact('Client'));
        $clients = Client::find($id);
        return view('Client.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$Client->update($request->all());
        //return redirect()->route('admin.clients.index');
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',

        ]);

        // $request->validate();
        $Clients = Client::find($id);
        $Clients->nom = $request->get('nom');
        $Clients->prenom = $request->get('prenom');
        $Clients->tel = $request->get('tel');

        $Clients->save();
        //return view('Client.index')->with('success', 'Product has been updated!');
        //return redirect('/index')->with('success', 'Contact updated!');
        return redirect()->route('Client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //$clients = Client::findOrFail($id);
        //DB::table('laravel8facture')->where('id',$id)->delete();
        Client::destroy($id);
        return redirect()->route('Client.index');
        //Session::flash('flash_message', 'Task successfully deleted!');
        //$Clients = Client::find($id);
        //$Clients->delete();
        //return redirect()->route('Client.index');
        //$clients->delete();
        //return redirect()->route('Client.index')->with('succes','project deleted successfuly');
    }
}
