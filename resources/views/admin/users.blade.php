@extends('layouts.level1')

@section('content')
    <div class="page-container-wrap">
        <div class="listing-block businessinfo-listing">

            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif

            <h3>Korisnici</h3>
            @foreach($users as $user)
                <h4>{{ $user->name }}</h4>
                <p>Email: {{ $user->email }}</p>
                <p>Phone:
                    @if($user->phone == null)
                        {{ '/' }}
                    @else
                        {{ $user->phone }}
                    @endif
                </p>
                <p>Role: {{ $user->role }}</p>
                    @if($user->active)
                        <a href="{{route('deactivate_user', ['id' => $user->id]) }}">Deaktiviraj korisnika</a>
                    @else
                        <a href="{{route('deactivate_user', ['id' => $user->id]) }}">Aktiviraj korisnika</a>
                    @endif
                <a href="{{ url()->previous() }}">Back</a>
            @endforeach
        </div>
    </div>
@endsection