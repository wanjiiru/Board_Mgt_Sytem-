@extends('layouts.app')
@section('content')
    <section class="main-section">
        <div class="section-wrapper">
            <div class="row">
                <div class="column column-4 no-padding">
                    <div class="box">
                        <div class="box-header">New Board</div>
                        <div class="box-body">
                            {!! Form::open(['url' => 'boards  ']) !!}

                            {!! Form::label('Name') !!}
                            {!! Form::text('name', null, ['class'=>'', 'id'=>'']) !!}
                            {!! Form::submit('Add Board', ['class'=>'button']) !!}
                        </div>{!! Form::close() !!}
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
                        <div class="box-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
