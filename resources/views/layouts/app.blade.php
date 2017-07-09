<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link href="/css/app.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>
<body>
<header></header>
<main>
    <aside>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/boards">Boards</a></li>
            <li><a href="committees/make ">Committees</a></li>
            <li><a href="/meetings/create">Meetings</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Issues</a></li>
            <li><a href="{{ route('logout') }}">logout</a></li>

        </ul>
    </aside>
    <section class="main-section">
        <div class="section-wrapper">@yield('content')</div>
    </section>
</main>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).foundation()
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker({minDate : 0});
    });
</script>
</body>
</html>
