<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ligaController;
use App\Http\Controllers\jugadoresController;
use App\Http\Controllers\adminLigaController;
use App\Http\Controllers\adminEquipoController;
use App\Http\Controllers\adminJugadoresController;
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

// Get de pagina principal

Route::get('/', function () {
    return view('welcome');
});

Route::get('ligaForm', function () {
    return view('/forms/ligaForm');
});


//Get de Admin
Route::get('ligaAdmin',[adminLigaController::class,'index']);
Route::get('equiposAdmin',[adminEquipoController::class,'index'])->name('teams.index');
Route::get('jugadoresAdmin',[adminJugadoresController::class,'index']);


//Get de User
Route::get('equipos',[EquipoController::class,'index']);
Route::get('ligas',[ligaController::class,'index']);
Route::get('jugadores',[jugadoresController::class,'index']);
Route::get('equiposform',[EquipoController::class,'create']);

//post
Route::post('teams',[EquipoController::class,'store'])->name('teams');
Route::post('league',[adminLigaController::class,'store'])->name('league');


//delete

Route::get('jugadoresAdmin/delete/{idteams}',[EquipoController::class,'delete'])->name('team.delete');

?>