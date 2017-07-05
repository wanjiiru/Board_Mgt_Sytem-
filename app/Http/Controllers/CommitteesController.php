<?php

namespace App\Http\Controllers;

use App\committees;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('committees.make');
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
     * @param  \App\committees  $committees
     * @return \Illuminate\Http\Response
     */
    public function show(committees $committees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\committees  $committees
     * @return \Illuminate\Http\Response
     */
    public function edit(committees $committees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\committees  $committees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, committees $committees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\committees  $committees
     * @return \Illuminate\Http\Response
     */
    public function destroy(committees $committees)
    {
        //
    }
}
