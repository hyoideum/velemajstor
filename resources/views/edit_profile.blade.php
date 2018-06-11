@extends('layouts.level1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12">
                <div class="registration-form-block">
                    <div class="registration-form-title">
                        <h4>{{ __('Uredi profil') }}</h4>
                    </div>

                    <div class="form-group">
                        <form method="post" action="update_profile">
                            {{ csrf_field() }}

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="name" class="col-sm-4 col-form-label">{{ __('Ime i Prezime') }}</label>
                                    <input  type="text" name="name" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-4 col-form-label">{{ __('E-Mail adresa') }}</label>
                                    <input  type="email" name="email" value="{{ $user->email }}">
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Broj telefona') }}</label>
                                    <input type="tel" name="phone" value="{{ $user->phone }}">
                            </div>

                            <div class="form-group row form-check-row">
                                <p>Prijavljeni te kao: {{ $user->role }}</p>
                                {{--<label for="role" class="col-form-label text-md-right">{{ __('Prijavljujem se kao') }}</label>--}}
                                    {{--<input type="radio" name="role" value="majstor" required>Majstor--}}
                                    {{--<input type="radio" name="role" value="potrazivac">Potrazivac<br>--}}
                            </div>

                            <button type="submit">Submit</button>
                            <button><a href="{{ url()->previous() }}" role="button">Back</a></button>
                        </form>
                    </div>

            </div>
        </div>
    </div>
@endsection
