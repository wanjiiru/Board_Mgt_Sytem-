<?php

namespace App\Http\Controllers;

use App\Meetings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\FormRequests\MeetingsFormRequest;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Meetings::all ();
        return view ( 'Meetings.index', ['meetings' => $meetings] );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('meetings.create');
    }

    /**
     * @param MeetingsFormRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MeetingsFormRequest $request)
    {
        $date = Carbon::parse($request->input('date'))->toDateString();
        $request['date'] = $date;

        Meetings::create ( $request->all() );
        return redirect ( '/meetings/' );
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $meeting = Meeting::findOrFail($id);
        return view ('Meetings.show', compact ('Meeting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function edit(Meetings $meetings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meetings $meetings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetings $meetings)
    {
        //
    }
}
