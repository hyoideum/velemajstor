@extends('layouts.level1')

@section('content')
<div class="page-container-wrap">
    <div class="listing-block businessinfo-listing">
        <h4>Business Information</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="businessinfo-left-block">
                    <div class="form-group">
                        <label for="listing_name">Listing Name</label>
                        <input id="listing_name" type="text" class="form-control form-single-element" placeholder="Ex: Anderson Hotel" aria-required="true">
                        <input id="listing_tagline" type="text" class="form-control" placeholder="Business Tagline goes here" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="listing_email">Contact Email</label>
                        <input id="listing_email" type="email" class="form-control" placeholder="Ex: info@example.com" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="listing_phone_no">Contact Phone</label>
                        <input id="listing_phone_no" type="text" class="form-control" placeholder="Ex: +1-0000-000-000" aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="listing_website">Website</label>
                        <input id="listing_website" type="text" class="form-control" placeholder="Ex: www.example.com" aria-required="true">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection