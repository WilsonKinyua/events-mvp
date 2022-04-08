{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="" name="description">
    <meta content="Wezaprosoft" name="author">
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign In to your account - {{ trans('panel.site_title') }}</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!--Bootstrap css -->
    <link href="{{ asset('auth/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        a {
            text-decoration: none !important;
        }

    </style>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <a class="logo" href="{{ route('login') }}">
                                            <img src="{{ asset('img/weza-logo.png') }}" width="150px" alt="">
                                        </a>
                                        <h3 class="h3 text-gray-900 mb-4 mt-4">
                                            Stakeholder Management Platform (SMP)
                                        </h3>
                                    </div>
                                    <div class="text-center">
                                        @if (session('message'))
                                            <div class="alert alert-info" role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        @if (session('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                    <form method="POST" action="{{ route('login') }}" class="">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" name="email" type="text"
                                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                required autocomplete="email" autofocus
                                                placeholder="Enter {{ trans('global.login_email') }}"
                                                value="{{ old('email', null) }}">
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password" name="password" type="password"
                                                class="form-control rounded-11{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                required placeholder="{{ trans('global.login_password') }}">
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signup"
                                                    name="remember">
                                                <label class="custom-control-label" for="checkbox-signup">Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-primary" href="{{ route('password.request') }}">Forgot
                                            Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="" name="description">
    <meta content="Wezaprosoft" name="author">
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Title -->
    <title>Sign In to your account - Business Forum System</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico')}}">

    <!--Bootstrap css -->
    <link href="{{ asset('login_assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('login_assets/css/style.css')}}" rel="stylesheet" />
    <!---Icons css-->
    <link href="{{ asset('login_assets/css/icons.css')}}" rel="stylesheet" />

    <!-- Color Skin css -->
    <link href="{{ asset('login_assets/colors/color1.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="h-100vh page-style1">
    <div class="page">
        <div class="page-single">
            <div class="p-5">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="card-group mb-0">
                                    <div class="card p-4">
                                        <div class="card-body">
                                            <div class="text-center title-style mb-6">
                                                <h1 class="mb-2">Login</h1>
                                                <hr>
                                                <p class="text-muted">Sign In to your account</p>
                                            </div>
                                            <div class="text-center">
                                                @if (session('message'))
                                                    <div class="alert alert-info" role="alert">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
                                                @if (session('error'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                                                @if (session('success'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <form method="POST" action="{{ route('login') }}" class="">
                                                @csrf
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fe fe-user"></i>
                                                        </div>
                                                    </div>
                                                    <input id="email" name="email" type="text"
                                                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                        required autocomplete="email" autofocus
                                                        placeholder="Enter {{ trans('global.login_email') }}"
                                                        value="{{ old('email', null) }}">
                                                    @if ($errors->has('email'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('email') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fe fe-lock"></i>
                                                        </div>
                                                    </div>
                                                    <input id="password" name="password" type="password"
                                                        class="form-control rounded-11{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                        required placeholder="{{ trans('global.login_password') }}">
                                                    @if ($errors->has('password'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('password') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="remember"
                                                            type="checkbox" id="remember" />
                                                        <span class="custom-control-label">Remember me</span>
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit"
                                                            class="btn  btn-primary btn-block px-4">Login</button>
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="card text-white bg-primary py-5 d-md-down-none page-content mt-0">
                                        <div class="text-center justify-content-center page-single-content">
                                            <div class="box">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <img src="{{ asset('login_assets/images/png/login.png')}}"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
