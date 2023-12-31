<?php

use App\Http\Controllers\Api\FaqController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("faq")->group(function (){
    Route::get('/', [FaqController::class, 'getAll']);
});
Route::name("home.")->group(function (){
    Route::get("order/services", [\App\Http\Controllers\Api\ServiceAPI::class , "services"])->name("order.services");
});