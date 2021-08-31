@extends('layouts.auth')

@section('content')
<div class="auth-box-w">
    <div class="logo-w">
        <a href="{{ url('/') }}"><img alt="" style="width: 40%;" src="{{ asset('theme/img/logoblack2.png') }}"></a>
    </div>

    <h4 class="auth-header">
    </h4>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <input id="email" 
                    type="email" 
                    class="form-control form-control-login @error('email') is-invalid @enderror" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email" 
                    autofocus
                >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
            <input id="password" 
                type="password" 
                class="form-control form-control-login @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
        </div>

        <div class="form-group row">
            <div class="col-md-12 px-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-12 px-0">
                <button type="submit" class="btn btn-primary">Inloggen</button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link pl-sm-0 pl-md-2" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection
