{{-- @php

    $selected = (array) Request::query('attrs', []);

@endphp --}}

<?php
// Assuming you have access to $_GET or $_POST depending on your request method
$filterTimes = isset($_GET['attrs']['time']) ? $_GET['attrs']['time'] : [];
$filterStops = isset($_GET['filters']['stops']) ? $_GET['filters']['stops'] : [];
$filterClasses = isset($_GET['attrs']['class']) ? $_GET['attrs']['class'] : [];
$filterAirlines = isset($_GET['attrs']['flight']) ? $_GET['attrs']['flight'] : [];

?>

<div class="g-filter-item">
    <div class="item-title">
        <h3>Stops</h3>
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <div class="item-content">
        <ul>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="filters[stops][]" value="0" <?= in_array('0', $filterStops) ? 'checked' : '' ?>> Non-stop
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="filters[stops][]" value="1" <?= in_array('1', $filterStops) ? 'checked' : '' ?>> 1 stop
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="filters[stops][]" value="2" <?= in_array('2', $filterStops) ? 'checked' : '' ?>> 2 stop
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="filters[stops][]" value="3" <?= in_array('3', $filterStops) ? 'checked' : '' ?>> 3 stop
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="filters[stops][]" value="3" <?= in_array('4', $filterStops) ? 'checked' : '' ?>> 4 stop
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    
</div>
<div class="g-filter-item">
    <div class="item-title">
        <h3>Departure time</h3>
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    {{-- <div class="item-content">
        <ul>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="early_morning"<?= in_array('early_morning', $filterTimes) ? 'checked' : '' ?>>Early morning
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="morning"<?= in_array('morning', $filterTimes) ? 'checked' : '' ?>>Morning
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="afternoon" <?= in_array('afternoon', $filterTimes) ? 'checked' : '' ?>>Afternoon
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="evening"<?= in_array('evening', $filterTimes) ? 'checked' : '' ?>>Evening
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="night"<?= in_array('night', $filterTimes) ? '' : '' ?>>Night
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div> --}}
    <div class="item-content">
        <ul>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="early_morning" 
                            <?= in_array('early_morning', $filterTimes) ? 'checked' : '' ?>>Early morning (00:00 - 9:00)
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="morning" 
                            <?= in_array('morning', $filterTimes) ? 'checked' : '' ?>>Morning (9:00 - 12:00)
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="afternoon" 
                            <?= in_array('afternoon', $filterTimes) ? 'checked' : '' ?>>Afternoon (12:00 - 17:00)
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="evening" 
                            <?= in_array('evening', $filterTimes) ? 'checked' : '' ?>>Evening (17:00 - 21:00)
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[time][]" value="night" 
                            <?= in_array('night', $filterTimes) ? 'checked' : '' ?>>Night (21:00 - 24:00)
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    
</div>
{{-- <div class="g-filter-item">
    <div class="item-title">
        <h3>Class</h3>
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <div class="item-content">
        <ul>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[class][]" value="ECONOMY" <?= in_array('ECONOMY', $filterClasses) ? 'checked' : '' ?>> Economy
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[class][]" value="PREMIUM_ECONOMY" <?= in_array('PREMIUM_ECONOMY', $filterClasses) ? 'checked' : '' ?>>Premium
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[class][]" value="BUSINESS" <?= in_array('BUSINESS', $filterClasses) ? 'checked' : '' ?>>Business
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
            <li>
                <div class="bravo-checkbox">
                    <label>
                        <input type="checkbox" name="attrs[class][]" value="FIRST" <?= in_array('FIRST', $filterClasses) ? 'checked' : '' ?>>First Class
                        <span class="checkmark"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div>
</div> --}}
<div class="g-filter g-filter-item">
    <div class="g-title item-title">
        <h3>Airlines</h3>
   

        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
 <input type="text" id="searchInput" placeholder="Search airlines...">
    <div class="item-content">
        <ul>
            {{-- @php
                $airlines = [];
                if (isset($flight_data['searchResult']['tripInfos']['ONWARD'])) {
                    foreach ($flight_data['searchResult']['tripInfos']['ONWARD'] as $trip) {
                        foreach ($trip['sI'] as $segment) {
                            $airlineName = htmlspecialchars($segment['fD']['aI']['name']);
                            if (!in_array($airlineName, $airlines)) {
                                $airlines[] = $airlineName;
                            }
                        }
                    }
                    sort($airlines);
                }
            @endphp --}}
            @php
    $airlines = [];
    
    // First Condition: Only ONWARD exists
    if (isset($flight_data['searchResult']['tripInfos']['ONWARD']) 
        && empty($flight_data['searchResult']['tripInfos']['RETURN']) 
        && empty($flight_data['searchResult']['tripInfos']['COMBO'])) {
        
        foreach ($flight_data['searchResult']['tripInfos']['ONWARD'] as $trip) {
            foreach ($trip['sI'] as $segment) {
                $airlineName = htmlspecialchars($segment['fD']['aI']['name']);
                if (!in_array($airlineName, $airlines)) {
                    $airlines[] = $airlineName;
                }
            }
        }
        sort($airlines);
    
    // Second Condition: Both ONWARD and RETURN exist
    } elseif (isset($flight_data['searchResult']['tripInfos']['RETURN']) 
        && isset($flight_data['searchResult']['tripInfos']['ONWARD'])) {
        
        foreach (['ONWARD', 'RETURN'] as $tripType) {
            foreach ($flight_data['searchResult']['tripInfos'][$tripType] as $trip) {
                foreach ($trip['sI'] as $segment) {
                    $airlineName = htmlspecialchars($segment['fD']['aI']['name']);
                    if (!in_array($airlineName, $airlines)) {
                        $airlines[] = $airlineName;
                    }
                }
            }
        }
        sort($airlines);

    // Third Condition: COMBO exists
    } elseif (isset($flight_data['searchResult']['tripInfos']['COMBO'])) {
        
        foreach ($flight_data['searchResult']['tripInfos']['COMBO'] as $trip) {
            foreach ($trip['sI'] as $segment) {
                $airlineName = htmlspecialchars($segment['fD']['aI']['name']);
                if (!in_array($airlineName, $airlines)) {
                    $airlines[] = $airlineName;
                }
            }
        }
        sort($airlines);
    }
@endphp

        
            @if(!empty($airlines))
                @foreach($airlines as $index => $airlineName)
                    @if($index < 6)
                        <li>
                            <div class="bravo-checkbox">
                                <label>
                                    <input type="checkbox" name="attrs[flight][]" value="{{ $airlineName }}"  > {{ $airlineName }}
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </li>
                    @else
                        <li style="display:none" class="more-airline">
                            <div class="bravo-checkbox">
                                <label>
                                    <input type="checkbox" name="attrs[flight][]" value="{{ $airlineName }}"  > {{ $airlineName }}
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </li>
                    @endif
                @endforeach
        
                <li>
                    <a href="javascript:void(0)" class="show-more-airline font_manish" style="display:{{ count($airlines) > 6 ? 'block' : 'none' }}">Show more</a>
                    <a href="javascript:void(0)" class="hide-more-airline font_manish" style="display:none">Hide details</a>
                </li>
            @endif
        </ul>
    </div>
</div>
<script>
	const form = document.querySelector('.show-more-airline');
	if(form)
    document.querySelector('.show-more-airline').addEventListener('click', function() {
        document.querySelectorAll('.more-airline').forEach(item => item.style.display = 'block');
        document.querySelector('.show-more-airline').style.display = 'none';
        document.querySelector('.hide-more-airline').style.display = 'block';
    });
	 const hideForm = document.querySelector('.hide-more-airline');
if(hideForm)
    document.querySelector('.hide-more-airline').addEventListener('click', function() {
        document.querySelectorAll('.more-airline').forEach(item => item.style.display = 'none');
        document.querySelector('.show-more-airline').style.display = 'block';
        document.querySelector('.hide-more-airline').style.display = 'none';
    });
</script>
<script>
// JavaScript to handle keyup and hide non-matching airlines
document.getElementById('searchInput').addEventListener('keyup', function () {
    var searchValue = this.value.toLowerCase(); // Get the search input value and convert to lowercase
    var items = document.querySelectorAll('.g-filter .item-content ul li'); // Get all list items inside your filter

    // Loop through each list item and check if it matches the search value
    items.forEach(function (item) {
        var text = item.textContent.toLowerCase(); // Get the text content of each item
        if (text.includes(searchValue)) {
            item.style.display = ''; // Show the item if it matches
        } else {
            item.style.display = 'none'; // Hide the item if it doesn't match
        }
    });
});

</script>

