<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ligaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::get($url.'/league');
        $data =$response->json();
        return view('ligas',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("forms.ligaForm");
        
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
            'idleague'=>'required',
            'leaguename'=>'required',
            'budget'=>'required',
          ]);
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::post($url.'/league/',[
           'idleague'=>$request->idleague,
           'leaguename'=>$request->leaguename,
           'budget'=>$request->budget,   
        ]);

        return redirect()->route('league.index');
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
    public function update(Request $request)
    {
        $request->validate([
            'idleague'=>'required',
            'leaguename'=>'required',
            'budget'=>'required',
        
          ]);
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::put($url.'/league/'.$request->idleague,[
           'idleague'=>$request->idleague,
           'leaguename'=>$request->leaguename,
           'budget'=>$request->budget,
        ]);

        return redirect()->route('league.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($idleague)
    {
        //
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::delete($url.'/league/'.$idleague);
        return redirect()->route('league.index');
    }


    public function view($idleague){
        $url= env('URL_SERVER_API','http://localhost:3000/stats');
        $response = Http::get($url.'/league/'.$idleague);
        $league = $response->json();
        return view('forms.ligaFormEdit',compact('league'));
    }
}
