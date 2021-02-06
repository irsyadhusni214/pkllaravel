<?php

use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::get('provinsi/kota', [ProvinsiController::class, 'kota']);
Route::get('provinsi/kecamatan', [ProvinsiController::class, 'kecamatan']);
Route::get('provinsi/kelurahan', [ProvinsiController::class, 'kelurahan']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id}', [ProvinsiController::class, 'show']);
Route::delete('provinsi/{id}', [ProvinsiController::class, 'destroy']);


Route::get('indonesia', [ApiController::class, 'index']);
Route::get('global', [ApiController::class, 'global']);
Route::get('provinsi2', [ApiController::class, 'provinsi']);
Route::get('provinsi2/{id}', [ApiController::class, 'provinsi']);