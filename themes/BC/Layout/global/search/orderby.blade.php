@if(empty($hideMap))

<div class="item">

    <a href="{{ route($routeName,['_layout'=>'map']) }}">{{__("Show on the map")}}</a>
</div>

@endif

<div class="item orderby">

    @php
        $param = request()->input();
        $orderby =  request()->input("orderby");

    @endphp

    <div class="item-title">

        {{ __("Sort by:") }}

    </div>

    <input type="hidden" name="sort" value="{{$orderby}}">

    <div class="dropdown ">

        <span class=" dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            @switch($orderby)

                @case("asc")

                {{ __("Price (Low to high)") }}

                @break

                @case("desc")

                {{ __("Price (High to low)") }}

                @break

                @case("duration_asc")

                {{ __("Shortest Duration") }}

                @break
                @case("duration_desc")

                {{ __("Longest  Duration") }}

                @break
                @case("stops_asc")

                {{ __("Fewest Stops | Direct") }}

                @break
                @case("stops_desc")

                {{ __("Most Stops") }}

                @break
                @default
                {{ __("Recommended") }}
            @endswitch

        </span>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="" data-value="">{{ __("Recommended") }}</a>
            <a class="dropdown-item" href="" data-value="asc">{{ __("Price (Low to high)") }}</a>
            <a class="dropdown-item" href="" data-value="desc">{{ __("Price (High to low)") }}</a>
            {{-- <a class="dropdown-item" href="" data-value="duration_asc">{{ __("Shortest Duration") }}</a>
            <a class="dropdown-item" href="" data-value="duration_desc">{{ __("Longest  Duration") }}</a> --}}
            <a class="dropdown-item" href="" data-value="stops_asc">{{ __("Fewest Stops | Direct") }}</a>
            <a class="dropdown-item" href="" data-value="stops_desc">{{ __("Most Stops") }}</a>
            

        </div>

    </div>

</div>

