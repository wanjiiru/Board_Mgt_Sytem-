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
        $committees = Committee::all();
        return view ('committees.index',['committees'=>$committees]);

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
        $this->validate ($request(),['name'=>'required', 'chairperson'=>'required']);
        $input = request()->all ();
        Committee::create($input);
        return redirect (',committees');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\committees  $committees
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $committee = Committee::findOrFail($id);
        return view ('committee.show', compact ('committee'));
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
