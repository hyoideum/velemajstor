@extends('layouts.level2')

@section('content')
    <div class="page-container-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="box-widget">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="listing-reviews">

                                    @if(Session::has('message'))
                                        <div class="alert alert-info">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif

                                    @if($jobs->isEmpty())
                                        <h4>Još uvijek nemate objavljenih poslova</h4>
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

                                                        <a href="{{ route('show_job', ['id' => $job->id]) }}"
                                                           class="replay-btn">
                                                            Detalji posla
                                                        </a>
                                                    </div>
                                                </li>
                                            @if(!$job->approved)
                                                <p>Posao je postavljen, ali mora biti odobren kako bi bio vidljiv ostalim korisnicima</p>
                                            @endif
                                                <button><a href="{{ route('edit_job', ['id' => $job->id]) }}">Uredi posao</a></button>
                                                <button><a href="{{ route('delete_job', ['id' => $job->id]) }}">Izbriši posao</a></button>
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