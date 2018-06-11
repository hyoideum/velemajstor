@extends('layouts.level1')

@section('content')
<div class="page-container-wrap">
    <div class="listing-block businessinfo-listing">
        <form method="post" action="post_job">
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

            <input type="hidden" name="user_id" value={{ Auth::user()->id }}>

            <div class="form-group">
                <label for="title" class="col-sm-4 col-form-label">{{ __('Naslov') }}</label>
                    <input type="text" class="form-control" name="title" required autofocus>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-4 col-form-label">{{ __('Opis posla') }}</label>
                <textarea type="text" class="form-control" cols="80" rows="10" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="category" class="col-sm-4 col-form-label">{{ __('Kategorija') }}</label>
                <select name="category">Kategorija
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="location" class="col-sm-4 col-form-label">{{ __('Lokacija') }}</label>
                <select name="location">Lokacija
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                    @endforeach
                </select>

                <div class="form-group form-check-row">
                    <label for="number" class="col-form-label text-md-right">{{ __('Želite li prikazati broj telefona na ovom oglasu?') }}</label>
                    <div class="form-group">
                        <input type="radio" name="number" value="1" required>Prikaži moj broj telefona na oglasu
                    </div>
                    <div class="form-group">
                        <input type="radio" name="number" value="0">Ne želim prikazati broj telefona na ovom oglasu
                    </div>
                </div>
            </div>

            <button type="submit">Submit</button>
            <button><a href="{{ url()->previous() }}">Otkaži</a></button>
        </form>
    </div>
</div>


@endsection