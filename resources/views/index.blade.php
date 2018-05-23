@extends('layouts.majstor')

@section('content')
<div class="page-container-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="header-content-block">
                    <div class="header-title-block">
                        <h2>Explore Your City</h2>
                        <p>Discover what makes feel better nearest you.</p>
                    </div>
                    <form class="form-common filter-form filter-header-form" method="get" action="search">
                        <div class="form-group outer-select-field">
                            <a class="dropdown-special location-btn" href="javascript:void(0)">
                                <i class="fa fa-crosshairs" aria-hidden="true"></i> Kategorija
                                <select name="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </a>
                            <input type="text" class="outer-select-input-box" id="categoty_list" placeholder="Farbanje">
                        </div>
                        <div class="form-group outer-select-field">
                            <a class="dropdown-special location-btn" href="javascript:void(0)">
                                <i class="fa fa-crosshairs" aria-hidden="true"></i> Lokacija
                                <select name="location">
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                    @endforeach
                                </select>
                            </a>
                            <input type="text" class="outer-select-input-box" id="city_location" placeholder="Mostar">
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="danger-btn">
                                <i class="ti-search" aria-hidden="true"></i>
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection