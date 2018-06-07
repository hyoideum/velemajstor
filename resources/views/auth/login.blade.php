@extends('layouts.level1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12">
                <div class="registration-form-block">
                    <div class="registration-form-title">
                        <h4>{{ __('Login') }}</h4>
                    </div>

                    <div class="form-group">
                        <form method="POST" action="{{ route('login') }}" class="form-common">
                            @csrf

                            <div class="form-group">
                                <label for="email"
                                       class="col-sm-4 col-form-label">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="userName"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                <label for="password"
                                       class="col-md-4 col-form-label">{{ __('Password') }}</label>

                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                    @endif
                            </div>


                            <div class="form-group row form-check-row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="forgot-link-block">
                                            <a class="forgot-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-btn-block">
                                    <button type="submit" class="form-btn">{{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- panel -->
            </div>
        </div>
    </div>
@endsection
