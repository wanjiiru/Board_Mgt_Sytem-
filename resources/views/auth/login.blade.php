<html lang="en">
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
<main class="login">
    <div class="box login-box">
        <div class="box-header">Cyton BMS</div>
        <div class="box-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="column-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               required autofocus>
                    </div>
                </div>
                <div class="row">
                    <div class="column-12">
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column-12">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </div>
                </div>
                <div class="row">
                    <div class="column-12">
                        <button class="button" type="submit">Login</button>
                    </div>
                </div>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a></form>
        </div>
    </div>
</main>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).foundation()
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>
</body>
</html>