<?php

namespace App\Http\Controllers;

use App\board_membership;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class BoardMembershipController extends Controller
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
        $inputs = $request->all();
        $user_id = $inputs['user_id'];
//        dd($user_id, $inputs);
        foreach ($user_id as $user)
        {
            $boardUser = User::where('email', $user)->first();
            if($boardUser)
            {
                board_membership::create([
                    'board_id'   => $inputs['board'],
                    'user_id'  =>  $boardUser->id,
                    'position' => 'member'
                ]);
            }
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\board_membership  $board_membership
     * @return \Illuminate\Http\Response
     */
    public function show(board_membership $board_membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\board_membership  $board_membership
     * @return \Illuminate\Http\Response
     */
    public function edit(board_membership $board_membership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\board_membership  $board_membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, board_membership $board_membership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\board_membership  $board_membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(board_membership $board_membership)
    {
        //
    }

}
