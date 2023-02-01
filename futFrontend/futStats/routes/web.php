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


//Get de User
Route::get('equipos',[EquipoController::class,'index']);
Route::get('ligas',[ligaController::class,'index']);
Route::get('jugadores',[jugadoresController::class,'index']);

//Get de Admin
Route::get('ligaAdmin',[adminLigaController::class,'index'])->name('league.index');
Route::get('equiposAdmin',[adminEquipoController::class,'index'])->name('teams.index');
Route::get('jugadoresAdmin',[adminJugadoresController::class,'index'])->name('players.index');

Route::get('/equiposAdmin/{idteams}',[EquipoController::class,'view'])->name('teams.view');
Route::get('/ligaAdmin/{idleague}',[ligaController::class,'view'])->name('league.view');
Route::get('/jugadoresAdmin/{idplayers}',[jugadoresController::class,'view'])->name('players.view');



//Forms
Route::get('equiposform',[EquipoController::class,'create']);
Route::get('ligaForm',[ligaController::class,'create']);
Route::get('jugadoresform',[jugadoresController::class,'create']);



//Post
Route::post('teams',[EquipoController::class,'store'])->name('teams');
Route::post('league',[ligaController::class,'store'])->name('league');
Route::post('players',[jugadoresController::class,'store'])->name('players');


//edit
Route::post('equiposAdmin/update',[EquipoController::class,'update'])->name('teams.update');
Route::post('ligaAdmin/update',[ligaController::class,'update'])->name('league.update');
Route::post('jugadoresAdmin/update',[jugadoresController::class,'update'])->name('players.update');


//delete
Route::get('equiposAdmin/delete/{idteams}',[EquipoController::class,'delete'])->name('team.delete');
Route::get('/ligaAdmin/delete/{idleague}',[ligaController::class,'delete'])->name('league.delete');
Route::get('/jugadoresAdmin/delete/{idplayers}',[jugadoresController::class,'delete'])->name('players.delete');

?>