<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


class ApiController extends Controller
{
    public function getAllIdees() {
    //$idees = idees::get()->toJson(JSON_PRETTY_PRINT);
    //return response($idees, 200);
    }


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