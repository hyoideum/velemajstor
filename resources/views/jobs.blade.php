@extends('layouts.level1')

@section('content')
<div class="page-container-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="header-content-block">
                    <div class="header-title-block">
                        @if($jobs->isEmpty())
                            <h2>No jobs found for selected category/location</h2>
                        @else
                        <h2>Jobs for category: {{ $jobs[0]->category()->first()->name }}, and location: {{ $jobs[0]->location()->first()->location_name }}</h2>
                        @foreach($jobs as $job)
                            <a href="{{ route('show_job', ['id' => $job->id]) }}">
                                <h4>{{ $job->title }}</h4>
                                <p>{{ $job->description }}</p>
                            </a>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection