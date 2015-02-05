@extends('layouts.master')

@section('content')
    <form id="fotw-search-form">
        <div id="fotw-search-main" class="row">
            <div class="small-12 medium-7 columns">
                <div class="searchfield">
                    <div class="row">
                        <div class="small-12 columns">
                            <label><input class="input-lg" name="s" type="text" placeholder="Search for a flag"
                                    value="{{ ($s) ?: null }}" autocomplete="off" autocorrect="off"/></label>
                        </div>
                    </div>
                </div><!-- end .searchfield -->
            </div><!-- end columns -->
            <div class="small-12 medium-5 columns">
                <div class="searchfield">
                    <div id="fotw-search-form-options">
                        {{--<label>Check these out</label>--}}
                        <div class="checkwrap">
                            <input name="at[]" type="checkbox" value="sovereign_states" {{ (!$at  || in_array( 'sovereign_states', $at)   ) ? 'checked' : null }}>
                            <label for="at[]">Sovereign States</label>
                        </div><!-- end .checkwrap -->
                        <div class="checkwrap">
                            <input name="at[]" type="checkbox" value="overseas_territories" {{ ( in_array( 'overseas_territories', $at) ) ? 'checked' : null }}>
                            <label for="at[]">Overseas Territories</label>
                        </div><!-- end .checkwrap -->
                        <div class="checkwrap">
                            <input name="at[]" type="checkbox" value="constituent_countries" {{ ( in_array( 'constituent_countries', $at) ) ? 'checked' : null }}>
                            <label for="at[]">Constituent Countries</label>
                        </div><!-- end .checkwrap -->
                    </div>
                </div><!-- end .searchfield -->
            </div><!-- end columns -->
        </div><!-- end .row -->
    </form>

    <div id="fotw-results-main">
        @include('partials.flag-items.flag-items-markup')
        <div class="results-loader">
            <i class="results-loader-icon fa fa-spinner fa-pulse"></i>
        </div>
    </div><!-- end #fotw-results-main -->

@stop