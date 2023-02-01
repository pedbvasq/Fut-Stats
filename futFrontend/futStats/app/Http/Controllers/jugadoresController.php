<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class jugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::get($url.'/players');
        $data =$response->json();
        return view('jugadores',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("forms.jugadoresform");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $request->validate([
            'idplayers'=>'required',
            'firts_name'=>'required',
            'last_name'=>'required',
            'goals'=>'required',
            'assists'=>'required',
            'matches'=>'required',
            'date_birth'=>'required',
            'idteam'=>'required',
        
          ]);
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::post($url.'/players/',[
           'idplayers'=>$request->idplayers,
           'firts_name'=>$request->firts_name,
           'last_name'=>$request->last_name,
           'goals'=>$request->goals,
           'assists'=>$request->assists,
           'matches'=>$request->matches,
           'date_birth'=>$request->date_birth,
           'idteam'=>$request->idteam,
        ]);

        return redirect()->route('players.index');
   
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'idplayers'=>'required',
            'firts_name'=>'required',
            'last_name'=>'required',
            'goals'=>'required',
            'assists'=>'required',
            'matches'=>'required',
            'date_birth'=>'required',
            'idteam'=>'required',
        
          ]);
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::put($url.'/players/'.$request->idteams,[
            'idplayers'=>$request->idplayers,
            'firts_name'=>$request->firts_name,
            'last_name'=>$request->last_name,
            'goals'=>$request->goals,
            'assists'=>$request->assists,
            'matches'=>$request->matches,
            'date_birth'=>$request->date_birth,
            'idteam'=>$request->idteam,
           
        ]);

        return redirect()->route('player.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($idplayers)
    {
        //
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::delete($url.'/players/'.$idplayers);
        return redirect()->route('players.index');
    }

    public function view($idplayers){
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::get($url.'/players/'.$idplayers);
        $team = $response->json();
        return view('forms.jugadoresFormEdit',compact('player'));
    }
}
