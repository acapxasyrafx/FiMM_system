@extends('layouts.app')

@section('content')
    @component('components.full-page-section')



        @component('components.card')
            @slot('title')
                <span class="icon"><i class="mdi mdi-lock"></i></span>
                <span>{{ __('Login') }}</span>
            @endslot
        @endcomponent
    @endcomponent
@endsection

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

</head>
<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Welcome back!</h3>
                            <form action="{{ route('login') }}" method="POST" >

                                {{ csrf_field() }}

                                <div class="form-label-group field">
                                    <input id="email" type="email" name="email" class="form-control input @error('email') is-danger @enderror" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                    @error('email')
                                    <p class="help is-danger" role="alert">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                    @if ($errors->has('email'))
                                        <span class="error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-label-group field">
                                    <input id="password" type="password" name="password" class="form-control input @error('password') is-danger @enderror" placeholder="Password" required autocomplete="current-password" autofocus>
                                    <label for="password">{{ __('Password') }}</label>

                                    @if ($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="control">
                                    <label tabindex="0" class="b-checkbox checkbox is-thin">
                                        <input type="checkbox" value="false" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="check is-black"></span>
                                        <span class="control-label">{{ __('Remember Me') }}</span>
                                    </label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">{{ __('Login') }}</button>
                                <div class="text-center">Don't have an account?
                                    <a class="small" href="{{ route('register') }}">Sign Up</a></div>
                                <div class="text-center">Forgot your password?
                                    @error('password')
                                    <p class="help is-danger" role="alert">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">
                                            {{ __('Click here') }}
                                        </a>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

