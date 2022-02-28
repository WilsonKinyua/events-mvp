<!DOCTYPE html>
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
</html>
