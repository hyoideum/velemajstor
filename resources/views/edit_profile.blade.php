@extends('layouts.level1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <form method="post" action="update_profile">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-sm-4 col-form-label">{{ __('Name') }}</label>
                                    <input  type="text" name="name" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>
                                    <input  type="email" name="email" value="{{ $user->email }}">
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Phone Number') }}</label>
                                    <input type="tel" name="phone" value="{{ $user->phone }}">
                            </div>

                            <div class="form-group row form-check-row">
                                <label for="role" class="col-form-label text-md-right">{{ __('Prijavljujem se kao') }}</label>
                                    <input type="radio" name="role" value="majstor" required>Majstor
                                    <input type="radio" name="role" value="potrazivac">Potrazivac<br>

                            </div>

                            <button type="submit">Submit</button>
                            <button><a href="{{ url()->previous() }}" role="button">Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
