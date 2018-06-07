@extends('layouts.level1')

@section('content')
<div class="page-container-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="box-widget">
                    <div class="panel panel-default">
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

                                            <div class="review-entry">
                                                <p>
                                                    Lokacija: {{ $job->location->location_name }}
                                                </p>
                                            </div>

                                            <div class="review-entry">
                                                <p>
                                                    Kategorija: {{ $job->category->name }}
                                                </p>
                                            </div>

                                            <a href="{{ route('show_job', ['id' => $job->id]) }}" class="replay-btn">
                                                Detalji posla
                                            </a>
                                        </div>
                                        @if(Auth::user()->hasRole('admin'))
                                            @if(!$job->approved())
                                            <a href="{{ route('approve_job', ['id' => $job->id]) }}" class="replay-btn">
                                                Approve
                                            </a>
                                                @endif
                                        @endauth
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