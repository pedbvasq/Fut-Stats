<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ligaController;
use App\Http\Controllers\jugadoresController;

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

Route::get('/admin',function(){
    return view('admin');
});

Route::get('equipos',[EquipoController::class,'index']);
Route::get('ligas',[ligaController::class,'index']);
Route::get('jugadores',[jugadoresController::class,'index']);
