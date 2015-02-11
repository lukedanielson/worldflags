@if($area)
    <div class="country-item-wrap">
        <div class="row">
            <div class="small-12 columns">
                @if($area->flagImage2015())
                    <div class="flag-item-wrap">
                        <div class="{{ implode( $area->flagWrapCssClasses(), ' ' ) }}">
                            <a class="flag-item-link" title="{{ $area->name }}" href="{{ URL::to('flags/' . $area->slug) }}">
                                <img title="{{ $area->name }}" class="flag-img flag-img-svg" src="{{ $area->flagImage2015()->url }}">
                            </a>
                        </div><!-- end .flag-img-wrap -->
                        {{--<div class="flag-title-wrap">{{ $area->name }}</div><!-- end .flag-title-wrap -->--}}
                    </div><!-- end .flag-item-wrap -->
                @endif
            </div><!-- end .columns -->
        </div><!-- end .row -->
    </div><!-- end .country-item-wrap -->
@else
    <div class="no-items-wrap">
        <h3 class="no-items-header">There was no items returned for the query</h3>
    </div>
@endif