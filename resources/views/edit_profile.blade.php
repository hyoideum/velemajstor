@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <form method="post" action="update_profile">
                            {{ csrf_field() }}

                            <input type="text" name="name" value="{{ $user->name }}">
                            <input type="tel" name="phone" value="{{ $user->phone }}">

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
