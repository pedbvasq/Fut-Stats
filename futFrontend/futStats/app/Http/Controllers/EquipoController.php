<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::get($url.'/teams');
        $data =$response->json();
        return view('equipos',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("teams");
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
            'idteams'=>'required',
            'nameteam'=>'required',
            'ab'=>'required',
            'budget'=>'required',
            'idleague'=>'required',
            'points'=>'required',
            'titles'=>'required',
        
          ]);
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::post($url.'/teams/',[
           'idteams'=>$request->idteams,
           'nameteam'=>$request->nameteam,
           'ab'=>$request->ab,
           'budget'=>$request->budget,
           'idleague'=>$request->idleague,
           'points'=>$request->points,
           'titles'=>$request->titles,
           
        ]);

        return $response;
   
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
    }


    public function delete($idteams)
    {
        //
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::delete($url.'/teams/'.$idteams);
        return $response;
        // return redirect()->route('teams.index');
    }
}
