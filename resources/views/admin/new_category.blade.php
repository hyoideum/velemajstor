@extends('layouts.level1')

@section('content')
    <div class="page-container-wrap">
        <div class="listing-block businessinfo-listing">
            <form method="post" action="new_category">
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

                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <label for="name">Ime kategorije</label>
                    <input type="text" name="name">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection