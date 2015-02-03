@extends('layouts.master')

@section('content')
    <div id="fotw-flag-header" class="row">
        <div class="small-12 columns">
            @if($country)
                <h2 title="{{ $country->name }}">{{ $country->name }}</h2>
            @endif
        </div><!-- end columns -->
    </div><!-- end .row -->

    <div id="fotw-flag-main">
        @include('partials.flag-items.flag-item-main-markup')
    </div><!-- end #fotw-flag-main -->
@stop