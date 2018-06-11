@extends('layouts.level1')

@section('content')
    <div class="page-container-wrap">
        <div class="listing-block businessinfo-listing">
            <h3>Kategorije</h3>
            @foreach($categories as $category)
                <h5>{{ $category->name }}</h5>
            @endforeach

            <a href="{{ route('new_category') }}">Dodaj kategoriju</a>
        </div>
    </div>
@endsection