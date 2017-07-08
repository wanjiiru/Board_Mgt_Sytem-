@extends('layouts.app')
@section('content')
    <main class="main-section">
        <div class="row">
            {!! Form::open(['url' => 'boards/create  ']) !!}
            <div class="box-header">Add meeting</div>
            <div class="row"></div>
            <div class="small-8 column">
                {!! Form::label('Name') !!}
                {!! Form::text('name', null, ['class'=>'', 'id'=>'']) !!}
            </div>
            <div class="small-8 column">
                {!! Form::submit('Add Board', ['class'=>'button']) !!}
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
