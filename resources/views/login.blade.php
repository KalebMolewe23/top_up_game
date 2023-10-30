<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="{!! asset('assets/login/images/icons/favicon.ico') !!}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/vendor/bootstrap/css/bootstrap.min.css') !!}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') !!}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/vendor/animate/animate.css') !!}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/vendor/css-hamburgers/hamburgers.min.css') !!}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/vendor/animsition/css/animsition.min.css') !!}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/vendor/select2/select2.min.css') !!}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/vendor/select2/select2.min.css') !!}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/css/util.css') !!}">
        <link rel="stylesheet" type="text/css" href="{!! asset('assets/login/css/main.css') !!}">
    <!--===============================================================================================-->
    </head>

    <body>
        <div class="limiter">
            <div class="container-login100" style="background-image: url(https://i.pinimg.com/originals/11/a9/4e/11a94e7f7d9e92dbcb687ae5fdb6eafd.jpg);">
                <div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
                        Silahkan Login
                    </span>
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <b>Opps!</b> {{session('error')}}
                    </div>
                    @endif
                    <form action="{{ route('actionlogin') }}" method="post">
                    @csrf
                        <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                            <input class="input100" type="email" name="email" placeholder="Email" required="">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password" required="">
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        </div>

                        <div class="container-login100-form-btn m-t-32">
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>