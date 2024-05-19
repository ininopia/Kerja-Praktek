<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeojsonController;
use App\Http\Controllers\Api\BatasDesaController;
use App\Http\Controllers\Api\KecamatanController;


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
 Route::get('geojson', [GeojsonController::class, 'getAllGeojson']);
 Route::get('geojson/{filename}', [GeojsonController::class, 'getGeojsonFile']);

 Route::get('desa', [BatasDesaController::class, 'getAllGeojson']);
 Route::get('desa/{filename}', [BatasDesaController::class, 'getGeojsonFile']);

 Route::get('kecamatan', [KecamatanController::class, 'getAllGeojson']);
 Route::get('kecamatan/{filename}', [KecamatanController::class, 'getGeojsonFile']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
