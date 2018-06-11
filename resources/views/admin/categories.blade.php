@extends('layouts.level1')

@section('content')
    <div class="page-container-wrap">
        <div class="listing-block businessinfo-listing">

            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif

            <h3>Kategorije</h3>
            @foreach($categories as $category)
                <h5>{{ $category->name }}</h5>
            @endforeach

            <button><a href="{{ route('new_category') }}">Dodaj kategoriju</a></button>
        </div>
    </div>
@endsection