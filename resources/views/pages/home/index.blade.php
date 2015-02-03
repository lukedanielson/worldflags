@extends('layouts.master')

@section('content')
    <div id="fotw-search-main" class="row">
        <div class="small-12 columns">
            <div class="searchfield">
                <form id="fotw-search-form">
                    <div class="row">
                        <div class="small-12 columns">
                            <label><input class="input-lg" name="s" type="text" placeholder="Search for a flag" autocomplete="off" autocorrect="off"/></label>
                        </div>
                    </div>
                </form>
            </div><!-- end .searchfield -->
        </div><!-- end columns -->
    </div><!-- end .row -->

    <div id="fotw-results-main">
        @include('partials.flag-items.flag-items-markup')
        <div class="results-loader"></div>
    </div><!-- end #fotw-results-main -->
@stop