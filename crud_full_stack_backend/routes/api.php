<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getDataApi;
use App\Http\Controllers\Postcontroller;

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

Route::get("getList",[getDataApi::class, 'getList']);
Route::post("addData",[Postcontroller::class, 'addData']);
Route::post("contactData",[ContactController::class, 'contactData']);
Route::post("login",[Postcontroller::class, 'login']);
Route::delete("clear/{id}",[Postcontroller::class, 'clear']);
