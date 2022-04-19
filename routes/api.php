<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerZall;
use App\Http\Controllers\IdeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('idees', IdeeController::class);

// Route::get('idees', 'ApiController@getAllIdee');
 //Route::get('idee/{id}', 'Controller::getIdee');

 Route::get('/idee/{id}', [controllerZall::class, 'getIdee']);
// Route::post('idees', 'ApiController@createIdee');
// Route::put('idees/{id}', 'ApiController@updateIdee');
// Route::delete('idees/{id}','ApiController@deleteIdee');
