@extends('layouts.level1')

@section('content')
<div class="page-container-wrap">

    {{--<h2>Jobs for category: {{ $jobs[0]->category()->first()->name }}, and location: {{ $jobs[0]->location()->first()->location_name }}</h2>--}}
    {{--@foreach($jobs as $job)--}}
        {{--<a href="{{ route('show_job', ['id' => $job->id]) }}">--}}
            {{--<h4>{{ $job->title }}</h4>--}}
            {{--<p>{{ $job->description }}</p>--}}
        {{--</a>--}}
    {{--@endforeach--}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="box-widget">
                    <div class="panel panel-default">
                        {{--<div class="panel-heading">--}}
                            {{----}}
                            {{--<div class="panel-title">--}}
                                {{--<h4>Traženi poslovi</h4>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="panel-body">
                            <div class="listing-reviews">
                                @if($jobs->isEmpty())
                                    <h4>Nažalost nema oglasa za posao za odabranu kategoriju i lokaciju</h4>
                                @else
                                <ul>
                                    @foreach($jobs as $job)
                                    <li>
                                        <div class="avatar-block">
                                            {{--<img src="#" alt="img" class="img-responsive">--}}
                                            <div class="comment-by">{{ $job->user->name }}
                                                <h4><a href="javascript:void(0)"></a></h4>
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <h4>{{ $job->title }}</h4>
                                            <div class="meta">
                                <span class="date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{ $job->created_at->format('d/m/Y') }}
                                </span>
                                                <span class="time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{ $job->created_at->format('H:i') }}
                                </span>
                                            </div>
                                            <div class="review-entry">
                                                <p>
                                                   {{ $job->description }}
                                                </p>
                                            </div>
                                            <a href="javascript:void(0)" class="replay-btn">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Replay
                                            </a>
                                        </div>
                                    </li>
                                        @endforeach
                                </ul>
                            @endif
                            </div>
                        </div><!--panel Body -->
                    </div><!--panel -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection