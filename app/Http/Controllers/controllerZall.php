<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use Illuminate\Http\Request;

class controllerZall extends Controller
{
    public function getIdee($id) {
        
        dd(Idee::where('id', $id)->get());
        // if () {
        //     $idees = Idees::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        //     return response($idees, 200);
        // } else {
        //     return response()->json([
        //     "message" => "Idees not found"
        //     ], 404);
        // }
    }
    
}
