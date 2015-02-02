@if($countries->count())
    <div class="items-wrap across-15 show-titles">
        @foreach($countries as $country)
            <div class="flag-item-wrap">
                <div class="{{ implode( $country->flagWrapCssClasses(), ' ' ) }}">
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
@else
    <div class="no-items-wrap">
        <h3 class="no-items-header">There were no countries returned for the query</h3>
    </div>
@endif