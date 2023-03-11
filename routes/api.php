<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Apidata;


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
Route::get('/alldata',[Apidata::class,"alldata"])->name("alldata");
Route::POST('/alldataStore',[Apidata::class,"alldataStore"])->name("alldataStore");
Route::get('/profile/{id}',[Apidata::class,"profile"])->name("profile");
Route::POST('/updateApi/{id}',[Apidata::class,"updateApi"])->name("updateApi");
Route::GET('/apiCode/{id}',[Apidata::class,"apiCode"])->name("apiCode");
