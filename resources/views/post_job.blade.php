@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <form method="post" action="post_job">
                            {{ csrf_field() }}

                            @if(Auth::user())
                                <input type="hidden" name="user_id" value={{ Auth::user()->id }}>
                            @else
                                <input type="hidden" name="user_id" value=2>
                            @endif

                            <input name="title">
                            <input name="description">
                            <select name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <select name="location">
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                @endforeach
                            </select>

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
