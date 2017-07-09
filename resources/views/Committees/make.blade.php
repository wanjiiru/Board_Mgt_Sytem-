@extends('layouts.app')
@section('content')
    <h2>Create comittee </h2>
    <section class="main-section">
        <div class="section-wrapper">
            <div class="box">
                <div class="row">
                    <div class="small-8 column">
                        {!! Form::open(['url' => '/committees']) !!}
                        <div class="small-8 column">
                            {!! Form::label('name') !!}
                            {!! Form::text('name', null) !!}
                        </div>
                        <div class="small-8 column">
                            {!! Form::label('chaiperson') !!}
                            {!! Form::text('chairperson', null) !!}
                        </div>
                        <div class="small-8 column">
                            {!! Form::label('summary') !!}
                            {!! Form::textarea('summary', null) !!}
                        </div>
                        <div class="small-8 column">
                            {!! Form::select('members') !!}
                            {!! Form::text('add members', null) !!}
                        </div>
                        <div class="small-8 column">
                            {!! Form::submit('Create committee') !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @if (count($errors))
                    <div class="row">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div></div>
        </div>
        @endif
        </div>
    </section>
    <script src="/js/app.js"></script>
    <script> $(document).foundation();</script>
@endsection
