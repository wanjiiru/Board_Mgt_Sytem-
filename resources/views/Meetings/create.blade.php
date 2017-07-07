@extends('layouts.app')

@section('content')
<main class="login">
    <div class="box login-box ">
        {!! Form::open(['url' => 'meetings']) !!}
        <div class="box-header">Add meeting</div>
        <div class="box-body">
            <div class="row">
                <div class="column-12">
                    {!! Form::label('Location') !!}
                    {!! Form::text('location', null, ['class'=>'', 'id'=>'']) !!}
            </div>
            <div class="row">
                <div class="small-3 columns">
                    {!! Form::label('Title') !!}
                    {!! Form::text('title', null, ['class'=>'placeholder', 'id'=>'']) !!}
                </div>
                <div class="row"
                    <div class="column-12">
                        {!! Form::label('Agenda') !!}
                        {!! Form::text('agenda', null, ['class'=>'Placeholder', 'id'=>'Agenda']) !!}
                    </div>
                <div class="row"
                    <div class="column-12">
                        {!! Form::label('Date') !!}
                        {!! Form::text('date', null, ['class'=>'', 'id'=>'datepicker']) !!}
                </div>
                <div class ="row">
                    <div class ="column-12">
                        {!! Form::label('Comittee') !!}
                        {!! Form::select('committee', ["All Board Members", "Full Board"]) !!}
                </div>
                <div class="row">
                    <div class="column-12">
                        {!! Form::submit('Add', ['class'=>'button button-success']) !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
                @if (count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection

