<?php


use Illuminate\Support\Facades\Http;use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
    return "Hello";
});
Route::get("/first",[\App\Http\Controllers\sampleController::class,'index']);


Route::get('/hello',[\App\Http\Controllers\Mycontroller::class,'hello']);


Route::get('{id}',[\App\Http\Controllers\sampleController::class,'dynamic']);


Route::get('post/create',[\App\Http\Controllers\PostController::class,'create']);




Route::get('post/browse',[\App\Http\Controllers\PostController::class,'browse']);


Route::get('post/delete',[\App\Http\Controllers\PostController::class,'delete']);
Route::get('post/edit',[\App\Http\Controllers\PostController::class,'edit']);

Route::get('/hello/create',[\App\Http\Controllers\HelloController::class,'create']);

Route::get('/hello/browse',[\App\Http\Controllers\HelloController::class,'browse']);


