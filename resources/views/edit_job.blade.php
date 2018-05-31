@extends('layouts.level2')

@section('content')
    <div class="page-container-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="header-content-block">
                        <div class="header-title-block">
                            <form method="post" action="{{ route('edit_job', ['id' => $job->id]) }}">
                                {{ csrf_field() }}

                                <input type="text" name="title" value="{{ $job->title }}">
                                <input name="description" value="{{ $job->description }}">

                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection