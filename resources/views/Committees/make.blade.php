@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@section('content')
    <h2>Create comittee </h2>
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['url' => '/committees']) !!}
                <div class="form-group">
                    {!! Form::label('name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('chaiperson') !!}
                    {!! Form::text('chairperson', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('summary') !!}
                    {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::select('members') !!}
                    {!! Form::text('add members', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create committee', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
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
    </section>
@endsection
