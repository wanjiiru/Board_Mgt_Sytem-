<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;
use App\User;
use App\members;
use App\board_membership;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    use DatabaseMigrations;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            $boards= Board::all ();
        }
        else{
            $boards = \App\board_membership::where('user_id',Auth::user()->id)->get();
        }
        return view ( 'Boards.index', ['boards' => $boards] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role == 'admin') {
            return view ( 'boards.create' );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Board::create ( $request->all() );
        return redirect ( '/boards/' );
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        $members = \App\board_membership::where('board_id',$id)->get();
        $board = Board::findOrFail($id);
        return view ('boards.show', compact ('board','users','members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        //
    }

    /**
     * @param Request $request
     */
//


}
