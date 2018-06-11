@extends('layouts.level1')

@section('content')
    <div class="page-container-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="header-content-block">

                        @if(Session::has('message'))
                            <div class="alert alert-info">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                            <h2>{{ $user->name }}</h2>
                            <p>Email: {{ $user->email }}</p>
                            <p>Phone:
                                @if($user->phone == null)
                                    {{ '/' }}
                                @else
                                    {{ $user->phone }}
                                @endif
                            </p>
                            <p>Role: {{ $user->role }}</p>
                        <button><a href="{{route('edit_profile') }}">Uredi profil</a></button>
                        <button><a href="{{ url()->previous() }}">Back</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection