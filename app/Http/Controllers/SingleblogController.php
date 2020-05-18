<?php

namespace App\Http\Controllers;

use App\Singleblog;
use Illuminate\Http\Request;

class SingleblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('layouts.singleblog');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Singleblog  $singleblog
     * @return \Illuminate\Http\Response
     */
    public function show(Singleblog $singleblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Singleblog  $singleblog
     * @return \Illuminate\Http\Response
     */
    public function edit(Singleblog $singleblog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Singleblog  $singleblog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Singleblog $singleblog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Singleblog  $singleblog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Singleblog $singleblog)
    {
        //
    }
}
