@extends('layouts.master')

@section('content')

    <div id="fotw-flag-show-header" class="row">
        <div class="small-12 columns">
           <!-- nothing yet -->
           <br>
           <br>
        </div><!-- end columns -->
    </div><!-- end .row -->

    <div id="fotw-flag-show-main" class="row">
        <div class="small-12 medium-6 columns">
            @include('partials.flag-items.flag-item-main-markup')
        </div><!-- end columns -->
        <div class="small-12 medium-6 columns">


            <div class="flag-details-wrap">
                <h2 class="fdw-header fdw-header-primary" title="{{ $area->name }}">{{ $area->name }}</h2>
                <h5 class="fdw-header">Official Name:</h5><span class="fdw-copy">Republic of Name Here</span>
                <div class="clear"></div>
                <h5 class="fdw-header">Classification:</h5><span class="fdw-copy"></span>
                <div class="clear"></div>
                <h5 class="fdw-header">ISO Codes:</h5><span class="fdw-copy">{{ $area->code_iso('alpha-2') }} <small>(3166 a-2)</small>, {{ $area->code_iso('alpha-3') }} <small>(3166 a-3)</small></span>
            </div>

        </div><!-- end columns -->
    </div><!-- end #fotw-flag-main -->

@stop