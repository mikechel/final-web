<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BeerController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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

Route::get( '/beers', [BeerController::class, 'index'] );
Route::get( '/beers/{id}', [BeerController::class, 'show'] );
Route::post( '/beers', [BeerController::class, 'store'] );
Route::put( '/beers/{id}', [BeerController::class, 'update'] );
Route::delete( '/beers/{id}', [BeerController::class, 'destroy'] );

