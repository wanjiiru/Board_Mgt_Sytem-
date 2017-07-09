@extends('layouts.app')
@section('content')
    <main>
        <aside>
            <ul>
                <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                <li><a href="{{route('boards.index')}}" >Boards</a></li>
                <li><a href="committees/make ">Create Committee</a></li>
                <li><a href="meetings">Meetings</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Issues</a></li>
            </ul>
        </aside>
        <section class="main-section">
            <div class="section-wrapper">

            </div>
        </section>
    </main>
@endsection