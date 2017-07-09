@extends('layouts.app')

@section('content')
    <div class="section-wrapper">@if(Auth::check())
            <p>Viewing as: {{Auth::user()->role}}.</p>
        @endif
        <div class="row">
            <div class="column column-6 no-padding">
                <div class="box">
                    <div class="box-header">Board Members</div>
                    <div class="box-body">
                        <table>
                            <thead>
                            <tr>
                                <th>User</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $m)
                                <tr>
                                    <td>{{$m->user_id}}</td>
                                    <td>{{ucwords($m->position)}}</td>
                                    <td>Make Chair</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer"></div>
                </div>
            </div>
            <div class="column column-6 no-padding">
                <div class="box">
                    <div class="box-header">Add Members</div>
                    <div class="box-body"><p>cmd+click to select multiple users</p>
                        <form action="/boardmembership" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="board" id="board" value="{{$board->id}}">
                            <select multiple id="user_id" name="user_id[]">
                                @foreach($users as $user)
                                    <option value="{{$user->email}}">{{$user->email}}</option>>
                                @endforeach
                            </select>
                            <button class="button">Add members to {{$board->name}}</button>
                        </form>
                    </div>
                    <div class="box-footer">@if (count($errors))
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif</div>
                </div>
            </div>
        </div>
    </div>
@endsection
