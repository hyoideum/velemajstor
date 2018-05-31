@extends('layouts.level2')

@section('content')
    <div class="page-container-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="header-content-block">
                        <div class="header-title-block">
                            <h2>{{ $job->title }}</h2>
                            <p>Opis: {{ $job->description }}</p>
                            <p>Kategorija: {{ $job->category->name }}</p>
                            <p>Lokacija: {{ $job->location->location_name }}</p>
                            <p>Oglas postavio: {{ $job->user->name }}</p>
                            @auth
                                <p>Broj telefona: {{ $job->user->phone }}</p>

                            @if(Auth::user()->id == $job->user->id)
                                    <td><a href={{ route('edit_job', ['id' => $job->id]) }}>Edit</a></td>
                                    <td><a href={{ route('delete_job',['id' => $job->id]) }}>Delete</a></td>
                            @endif
                            @else
                                <p>Samo registrirani korisnici mogu vidjeti broj telefona</p>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection