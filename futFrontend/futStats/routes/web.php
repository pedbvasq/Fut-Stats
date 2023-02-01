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
Route::get('ligaAdmin',[adminLigaController::class,'index'])->name('liga.index');
Route::get('equiposAdmin',[adminEquipoController::class,'index'])->name('teams.index');
Route::get('jugadoresAdmin',[adminJugadoresController::class,'index']);
Route::get('/equiposAdmin/{idteams}',[EquipoController::class,'view'])->name('teams.view');
Route::get('equiposform',[EquipoController::class,'create']);

//Get de User
Route::get('equipos',[EquipoController::class,'index']);
Route::get('ligas',[ligaController::class,'index']);
Route::get('jugadores',[jugadoresController::class,'index']);


//post
Route::post('teams',[EquipoController::class,'store'])->name('teams');
Route::post('league',[adminLigaController::class,'store'])->name('league');
Route::post('player',[jugadoresController::class,'store'])->name('player');



//delete

Route::get('equiposAdmin/delete/{idteams}',[EquipoController::class,'delete'])->name('team.delete');
Route::get('jugaroesAdmin/delete/{idplayer}',[jugadoresController::class,'delete'])->name('player.delete');

//edit
Route::post('equiposAdmin/update',[EquipoController::class,'update'])->name('teams.update');
Route::post('equiposAdmin/update',[jugadoresController::class,'update'])->name('players.update');


?>