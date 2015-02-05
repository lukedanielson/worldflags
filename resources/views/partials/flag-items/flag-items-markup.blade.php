@if($areas->count())
    <div class="items-wrap {{ ($areas->count() >= 20) ? 'across-16' : 'across-10' }} {{ (Request::path() === '/' && !Input::get('s') ) ? '' : 'show-titles' }}">
        @foreach($areas as $area)
            <div class="flag-item-wrap">
                <div class="{{ implode( $area->flagWrapCssClasses(), ' ' ) }}">
                    <a class="flag-item-link" title="{{ $area->name }}" href="{{ URL::to('flags/' . $area->slug) }}">
                        @if($area->flagImage2015())
                            <img title="{{ $area->name }}" class="flag-img flag-img-svg" src="{{ $area->flagImage2015()->url }}">
                        @else
                            <img title="{{ $area->name }}" class="flag-img flag-img-svg" src="{{ $placeholderFlagImg1Url }}">
                        @endif
                    </a>
                </div><!-- end .flag-img-wrap -->
                <div class="flag-title-wrap">{{ $area->name }}</div><!-- end .flag-title-wrap -->
            </div><!-- end .flag-item-wrap -->
        @endforeach
    </div>
@else
    <div class="no-items-wrap">
        <h3 class="no-items-header">There were no results returned for the query{{ (isset($s) && $s && $s !== '') ? ' \'' . urldecode ($s) . '\'' : null  }}</h3>
    </div>
@endif