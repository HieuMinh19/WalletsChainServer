

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DUCNGUYEN | Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#007bff" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#007bff">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#007bff">
    
    <link rel="icon" href="{{asset('img/ducfavicon.ico')}}" sizes="16x16">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/font-awesome-5/css/fontawesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lib/adminlte/css/adminlte.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('lib/iCheck/square/blue.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <style>

        body {
            width: 360px;
            height: auto;
            z-index: -9999;
            margin-left: auto;
            margin-right: auto;
            margin-top: 80px;
            margin-bottom: auto;
        }

        canvas {
            background-color: #e9ecef;
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -9999;
        }

        .has-feedback{
            margin-bottom:5px;
        }
        .register-logo{
            margin-bottom:5px;
        }

    </style>
</head>

<body>
    <!-- background animate -->
    <!-- <canvas id="dot-connect"></canvas> -->
    <canvas class="connecting-dots"></canvas>
    <!-- /.background animate -->
    <!-- Login -->
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>DUC NGUYEN</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">{{ __('messages.register_a_new_membership')}}</p>

                <form action="{{route('action-register')}}" method="POST">
                @csrf
                    <div class="form-group has-feedback">
                    <span class="fa fa-user form-control-feedback"></span>
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name')}}" name="name" placeholder="Full name">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                    <span class="fa fa-envelope form-control-feedback"></span>
                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{old('email')}}" placeholder="Email">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                    <span class="fa fa-lock form-control-feedback"></span>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <span class="fa fa-lock form-control-feedback"></span>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                    </div>
                    <input type="hidden" name="del_flg" value="0">

                    <div class="row">
                        <div class="col-8">
                            <!-- <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('messages.register') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('lib/iCheck/icheck.min.js')}}"></script>
    <!-- dot-connect -->
    <script src="{{asset('lib/canvas-animation/dot-connect.js')}}"></script>
    <!-- <script src="{{asset('lib/canvas-animation/dot-connect.min.js')}}"></script> -->

    <script>
        // $(function() {
        //     $('input').iCheck({
        //         checkboxClass: 'icheckbox_square-blue',
        //         radioClass: 'iradio_square-blue',
        //         increaseArea: '20%' // optional
        //     })
        // })
    </script>



















</body>

</html>
