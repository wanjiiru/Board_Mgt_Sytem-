@extends('layouts.app')
@section('content')

    {{--<dashboard id="dashboard" columns="5" rows="3">--}}
        {{--<news>--}}
        {{--</news>--}}
    {{--</dashboard>--}}
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Board Management System</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <main class="login">
        <div class="box login-box">
            <div class="box-header">News</div>
            <div class="box-body">
                <div class="row">
                    <dashboard></dashboard>
                </div>
            </div>
        </div>
    </main>
    </body>
    </html>
    <style>
        html,body{
            font-family: Tahoma;
            font-size: large;
            background-color: #2b542c;
            font-style: italic;
        }
    </style>


@endsection