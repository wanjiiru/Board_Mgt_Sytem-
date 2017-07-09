@extends('layouts.app')

@section('content')
    <main class="main-section">
        <div class="row">
            {!! Form::open(['url' => 'meetings']) !!}
            <div class="box-header">Add meeting</div>
            <div class="row"></div>
            <div class="small-8 column">
                {!! Form::label('Location') !!}
                {!! Form::text('location', null, ['class'=>'', 'id'=>'']) !!}
            </div>
            <div class="small-8 column">
                {!! Form::label('Agenda') !!}
                {!! Form::text('agenda', null, ['class'=>'', 'id'=>'Agenda']) !!}
            </div>

            <div class="small-8 column">
                {!! Form::label('Date') !!}
                {!! Form::text('date', null, ['class'=>'', 'id'=>'datepicker']) !!}
            </div>

            <div class="small-8 column">
                {!! Form::label('') !!}
                <select name="board" id="board">
                    @foreach($boards as $b)
                        <option value="{{$b->id}}">{{$b->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="small-8 column">
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

