@extends('layouts.master')

@section('content')

    <div id="fotw-search-main" class="row">
        <div class="small-12 columns">
            <div class="searchfield">
                <form id="fotw-search-form">
                    <div class="row">
                        <div class="small-12 columns">
                            <label><input class="input-lg" name="s" type="text" placeholder="Flags of The World" autocomplete="off" autocorrect="off"/></label>
                        </div>
                    </div>
                </form>
            </div><!-- end .searchfield -->
        </div><!-- end columns -->
    </div><!-- end .row -->

    <div id="fotw-results-main">
        <div class="items-wrap across-15 show-titles">
        @foreach($countries as $country)
            <div class="flag-item-wrap">
                <div class="flag-img-wrap">
                    @if($country->flagImage2015())
                        <img title="{{ $country->name }}" class="flag-img flag-img-svg" src="{{ $country->flagImage2015()->url }}">
                    @else
                        <img title="{{ $country->name }}" class="flag-img flag-img-svg" src="{{ $placeholderFlagImg1Url }}">
                    @endif
                </div><!-- end .flag-img-wrap -->
                <div class="flag-title-wrap">{{ $country->name }}</div><!-- end .flag-title-wrap -->
           </div><!-- end .flag-item-wrap -->
        @endforeach
        </div><!-- end .items-wrap -->
    </div>
@stop