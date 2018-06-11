@extends('layouts.level1')

@section('content')
<div class="page-container-wrap">
    <div class="listing-block businessinfo-listing">
        <form method="post" action="post_job">
            {{ csrf_field() }}

                <input type="hidden" name="user_id" value={{ Auth::user()->id }}>
            <label for="title">Naslov</label>
                <input type="text" name="title">

            <label for="description">Opis posla</label>
                <input type="text" name="description">

            <select name="category">Kategorija
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <select name="location">Lokacija
                @foreach($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                @endforeach
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>


@endsection