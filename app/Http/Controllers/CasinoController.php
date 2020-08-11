<?php

namespace App\Http\Controllers;

use App\Casino;
use Illuminate\Http\Request;

class CasinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$casinos = Casino::orderBy('id', 'desc')->get();
        return view('admin.casinos.index', compact('casinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $casino = Casino::create(['nice' => $request->nice, 'path' => $request->path]);
        if($casino){
	        return redirect()->route('')->with('success','New Casino added successfully');
        }
	    return redirect()->route('')->withErrors('New casino was not added to the database');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Casino  $casino
     * @return \Illuminate\Http\Response
     */
    public function show(Casino $casino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Casino  $casino
     * @return \Illuminate\Http\Response
     */
    public function edit(Casino $casino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Casino  $casino
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Casino $casino)
    {
	    $casino = $casino->update(['nice' => $request->nice, 'path' => $request->path]);
	    if($casino){
		    return redirect()->route('casino.index')->with('success','Casino data updated successfully');
	    }
	    return redirect()->back()->withErrors('cannot update casino data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Casino  $casino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casino $casino)
    {

    }
}
