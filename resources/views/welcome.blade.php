
@extends('layouts.app')
@section('content')

        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
                @endif
                <div class="nav-side-menu">
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                    <div class="menu-list">
                        <ul id="menu-content" class="menu-content collapse out">
                            <li>
                                <a href="">
                                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                </a>
                            </li>
                            <li data-toggle="collapse" data-target="#products" class="collapsed active">
                                <a href="#"><i class="fa  fa-lg"></i>Meetings <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="products">
                                <li><a href="#">General</a></li>
                                <li><a href="#">Panels</a></li>
                            </ul>
                            <li data-toggle="collapse" data-target="#service" class="collapsed">
                                <a href="#"><i class="fa fa-lg"></i>Boards <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="service">
                                <a href="boards/create">
                                    <li>Create new Board</li>
                                </a>
                                <a href="committees/make">
                                    <li>Create commitee</li>
                                </a>
                            </ul>
                            <li data-toggle="collapse" data-target="#new" class="collapsed">
                                <a href="#"><li class="fa fa-user fa-lg"></li> Members directory <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="new">
                                <a href="api/user"></a>
                                <li>Add new members</li>
                            </ul><li>
                            <ul>
                                <a href="#">
                                    <li class="fa fa-newspaper-o"></li> Generate Report</a>
                            </ul>
                            </li>
                        </ul>
                                <li>
                                <a href="#">
                                    <i class="fa fa-question "></i> Issues
                                </a>
                                </li>
                    </div>
                </div>
            </div>
    </div>
            <div id ="app"><p>asdfghjkldfghjkldfxfjk</p>lllllllllll
                <example></example>
            </div>
            <script src="/js/app.js"></script>
            <script> $(document).foundation();</script>
   @endsection