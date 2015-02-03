@if($country)
    <div class="country-item-wrap">

        <div class="row">
            <div class="small-12 medium-7 columns">
                @if($country->flagImage2015())
                    <div class="flag-item-wrap">
                        <div class="{{ implode( $country->flagWrapCssClasses(), ' ' ) }}">
                            <a class="flag-item-link" title="{{ $country->name }}" href="{{ URL::to('flags/' . $country->slug) }}">
                                <img title="{{ $country->name }}" class="flag-img flag-img-svg" src="{{ $country->flagImage2015()->url }}">
                            </a>
                        </div><!-- end .flag-img-wrap -->
                        {{--<div class="flag-title-wrap">{{ $country->name }}</div><!-- end .flag-title-wrap -->--}}
                    </div><!-- end .flag-item-wrap -->
                @endif
            </div><!-- end .columns -->
        </div><!-- end .row -->
    </div><!-- end .country-item-wrap -->
@else
    <div class="no-items-wrap">
        <h3 class="no-items-header">There was no country returned for the query</h3>
    </div>
@endif