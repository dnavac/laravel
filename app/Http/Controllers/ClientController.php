<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients= client::latest()->paginate(5);
        return view("client.index", compact("clients"))->with('i', (request()->input('page',1)-1)*5);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'firstName'=>'required',
                'lastName'=> 'required',
                'email'=> 'required'
            ]
        );
        Client::create($request->all());

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        // $request->validate(
        //     [
        //         'firstName'=>'required',
        //         'lastName'=> 'required',
        //         'email'=> 'required',
        //     ]
        // );
        // $client->update($request->all());

        // return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
