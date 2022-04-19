<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use Illuminate\Http\Request;

class IdeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return idee::all(); 
    }

    // public function create() {
    //     $idees = Idee::all();
    //     return view('idee.create',[
    //         'idees' => $idees
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // recuperation des donnees
    public function store(Request $request)
    {
        $inputsData = $request->all();
        $inputsData['libelle'] = $request->has('libelle') ? true : false;
        $inputsData['discription'] = $request->has('description') ? true : false;
        $inputsData['message'] = $request->has('message') ? true : false;

        Idee::create($inputsData);
        return redirect()->route('idee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function show(Idee $idee)
    {
        return view('idee.show',['idee'=>$idee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idee $idee)
    {
        
        return view('idee.update',['idee'=>$idee]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idee $idee)
    {
        
        return view('idee.destroy',['idee'=>$idee]);
    }
}


