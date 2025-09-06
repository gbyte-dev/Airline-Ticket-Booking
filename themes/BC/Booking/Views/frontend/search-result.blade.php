<?php

use Illuminate\Support\Facades\Crypt;
?>
<style>
    .flight-info-card.selected {
        background-color: #f0f0f0;
        /* Change color on select */
    }

    .manish_card.active {
        background-color: #d3f5d3;
        /* Change this to your preferred color */
    }


    .flight-info-card.active {
        background-color: #d3f5d3;
        /* Change this to your preferred color */
    }


    .flight-card {
        border: 1px solid #e6e6e6;
        border-radius: 10px;
        margin-bottom: 20px;
        padding: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .flight-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;
    }

    .flight-info .airline {
        display: flex;
        align-items: center;
        text-align: left;
    }

    .flight-info .airline img {
        width: 40px;
        margin-right: 10px;
    }

    .flight-info .price {
        font-size: 24px;
        /* color: #ff5722; */
        color: #2b32e7;
        font-weight: bold;
    }

    .flight-info .discount {
        font-size: 14px;
        color: green;
    }

    .flight-info .book-btn {
        background-color: #ff5722;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
    }

    .flight-info .book-btn:hover {
        background-color: #e64a19;
    }

    .table-header {
        background-color: #f7f7f7;
        padding: 10px 0;
        font-size: 14px;
        color: #999;
        text-align: center;
    }

    .smart-sort {
        font-size: 14px;
        color: #555;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .card-body {
        padding: 20px;
    }

    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 10px;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .manish {
        margin-top: 0rem;
        margin-bottom: 0rem;
        border: 0;
        border-top: 2px solid rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 15px;
        font-weight: bold;
    }
</style>
<style>
    /* Loader Modal Styles */
    .loader-modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Black background with opacity */
        z-index: 9999;
        /* On top */
        justify-content: center;
        /* Center horizontally */
        align-items: center;
        /* Center vertically */
    }

    .loader-content {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 180px;
    }

    .svg-calLoader {
        width: 230px;
        height: 230px;
        transform-origin: 115px 115px;
        animation: 1.4s linear infinite loader-spin;
    }

    .cal-loader__plane {
        fill: #FFA500;
    }

    .cal-loader__path {
        stroke: #FFFFFF;
        animation: 1.4s ease-in-out infinite loader-path;
    }

    @keyframes loader-spin {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes loader-path {
        0% {
            stroke-dasharray: 0, 580, 0, 0, 0, 0, 0, 0, 0;
        }

        50% {
            stroke-dasharray: 0, 450, 10, 30, 10, 30, 10, 30, 10;
        }

        100% {
            stroke-dasharray: 0, 580, 0, 0, 0, 0, 0, 0, 0;
        }
    }
</style>
<style>
    .flight-info-card {
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 10px;
    }

    .flight-info-card.highlight {
        border: 1px solid #007bff;
        background-color: #f0f8ff;
    }

    .flight-info-card .airline-logo {
        width: 40px;
        height: 40px;
    }

    .flight-info-card .price {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .flight-info-card .duration {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .flight-info-card .non-stop {
        font-size: 0.75rem;
        color: #6c757d;
    }

    .header {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .header .price {
        text-align: right;
    }

    @media (max-width: 767.98px) {
        .header .price {
            text-align: left;
        }
    }
</style>
<style>
    .manish_unquie {
        max-width: fit-content;
        position: fixed;
        top: 81%;
        left: 0;
        right: -18%;
        z-index: 1000;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .flight-card-unique {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .flight-details-unique {
        display: flex;
        align-items: center;
    }

    .flight-details-unique img {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .flight-info-unique {
        text-align: center;
        margin: 0 20px;
    }

    .flight-info-unique span {
        display: block;
    }

    .price-section-unique {
        text-align: right;
    }

    .price-section-unique .price {
        font-size: 24px;
        font-weight: bold;
    }

    .price-section-unique .discount {
        color: green;
    }

    .book-now-btn-unique {
        background-color: #ff6f00;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .flight-details-link-unique {
        text-align: left;
        margin-top: 10px;
    }

    .flight-details-link-unique a {
        color: #007bff;
        text-decoration: none;
    }
</style>

<!-- Loader Modal -->
<div id="loader-modal" class="loader-modal">
    <div class="loader-content">
        <!-- Loader SVG -->
        <svg class="svg-calLoader" xmlns="http://www.w3.org/2000/svg" width="230" height="230">
            <path class="cal-loader__path"
                d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z"
                fill="none" stroke="#0099cc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77" />
            <path class="cal-loader__plane"
                d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z"
                class="cal-loader__plane" fill="#000033" />
        </svg>
    </div>
</div>


<!-- END-=-->
	@php 
	if(session('currency')==''){
	$curr_currency  = $_COOKIE['currency']?? 'INR';
	}else{
		$curr_currency  =  session('currency');
	}
	
	@endphp

<?php

$selectedCurrency = isset($curr_currency) ? $curr_currency : 'INR';
$a=1;
// Convert total fare to selected currency
// dd($flight_data);

if (isset($flight_data['searchResult']['tripInfos']['ONWARD']) && empty($flight_data['searchResult']['tripInfos']['RETURN']) && empty($flight_data['searchResult']['tripInfos']['COMBO'])) {
?>
<div class="container mt-2">
    <!-- Table Header -->
    <div class="row text-center table-header" style="margin-right: 0px;margin-left: 0px;">
		<div class="col-md-1" style="max-width: 2%;"></div>
        <div class="col-md-2">Airlines</div>
        <div class="col-md-2">Departure</div>
        <div class="col-md-2">Duration</div>
        <div class="col-md-2">Arrival</div>
        <div class="col-md-2">Price</div>
		<div class="col-md-1"></div>
    </div>
    <?php
        $a = 1;
	
        foreach ($flight_data['searchResult']['tripInfos']['ONWARD'] as $trip) {
         $h=0;
		 $m=0;
	  foreach ($trip['sI'] as $in => $seg) {
		        $h += floor($seg['duration'] / 60);
                $m += $seg['duration'] % 60;
									
           if($in < count($trip['sI']) - 1) {
					$nSegment = $trip['sI'][$in + 1];
					$aCurrent = strtotime($seg['at']);
					$nTime = strtotime($nSegment['dt']);
					// Calculate layover time in minutes
					$layTime = ($nTime - $aCurrent) / 60; // in minutes
					$h += floor($layTime / 60);
					$m += $layTime % 60;
							
           }
		  
	  }
	  
	  $triptimereq =   normalizeTime($h, $m) ;
	  

            if (isset($trip['totalPriceList'][0]['fd']['ADULT']['fC'])) {
                // Get passenger information
                $adults = $paxInfo['ADULT'] ?? 1;
                $children = $paxInfo['CHILD'] ?? 0;
                $infants = $paxInfo['INFANT'] ?? 0;

                // Get fare details
                $baseFare = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
                $taxes = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'];
                $discount = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['DIS'] ?? 0;

                // Calculate total fare
                $totalBaseFare = ($baseFare * $adults) + ($baseFare * $children) + ($baseFare * $infants);
                $totalTaxes = ($taxes * $adults) + ($taxes * $children) + ($taxes * $infants);
                $totalDiscount = ($discount * $adults) + ($discount * $children) + ($discount * $infants);
                $totalFare = $totalBaseFare + $totalTaxes - $totalDiscount;

                // Convert the total fare to selected currency
                echo "<script>var totalFareInr$a = $totalFare;</script>";
            }
            $segment = $trip['sI'][0];
            $airCode = htmlspecialchars($segment['fD']['aI']['code']);
            $code = htmlspecialchars($segment['fD']['aI']['name']);
            $airName = htmlspecialchars($segment['fD']['aI']['name']);
            $flightNumbers = htmlspecialchars($segment['fD']['fN']);

            $gmtTimezone = new DateTimeZone('GMT');
				
            // Convert segment's departure time to GMT
            $departureDateTime = new DateTime($segment['dt'], new DateTimeZone('GMT')); // Assuming the original time is in UTC
            $departureDateTime->setTimezone($gmtTimezone);
            $departureTimes = $departureDateTime->format(' H:i');

            // Convert segment's arrival time to GMT
            $arrivalDateTime = new DateTime(end($trip['sI'])['at'], new DateTimeZone('GMT')); // Assuming the original time is in UTC
            $arrivalDateTime->setTimezone($gmtTimezone);
            $arrivalTimes = $arrivalDateTime->format(' H:i');

            // Calculate duration
            $duration = $departureDateTime->diff($arrivalDateTime);
            $days = $duration->d;
            $hours = $duration->h + ($days * 24); // Convert days to hours and add
            $minutes = $duration->i;
			
			
            // Format duration text
            $durationText = $triptimereq ;"$hours hours $minutes minutes";
            $departureDate = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->format('D, j M Y');
            $endDate = (new DateTime(date('Y-m-d', strtotime(end($trip['sI'])['at']))));
            $days = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->diff($endDate)->days;
            $sto = (count($trip['sI']) > 1) ? (count($trip['sI']) - 1) : 0;
            $stopText = $sto > 0 ? "$sto stops" : 'Direct';
            $departureLocation = htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')');
            $arrivalLocation = htmlspecialchars(end($trip['sI'])['aa']['city'] . ' (' . end($trip['sI'])['aa']['code'] . ')');
            $code = [
                'airCode' => htmlspecialchars($segment['fD']['aI']['code']),
                'code' => htmlspecialchars($segment['fD']['aI']['name']),
                'airName' => htmlspecialchars($segment['fD']['aI']['name']),
                'flightNumbers' => htmlspecialchars($segment['fD']['fN']),
                'departureTimes' => date('H:i', strtotime($segment['dt'])),
                'arrivalTimes' => date('H:i', strtotime(end($trip['sI'])['at'])),
                'durationText' => $durationText , //"$hours hours $minutes minutes",
                'departureDate' => (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->format('D, j M Y'),
                'arrivalDate' => (new DateTime(date('Y-m-d', strtotime(end($trip['sI'])['at']))))->format('D, j M Y'),
                'stopText' => $sto > 0 ? "$sto stops" : 'Non-stop',
                'departureLocation' => htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')'),
                'arrivalLocation' => htmlspecialchars(end($trip['sI'])['aa']['city'] . ' (' . end($trip['sI'])['aa']['code'] . ')'),
                'departureLocations' => htmlspecialchars($segment['da']['name']  . $segment['da']['city'] . ' (' . $segment['da']['code'] . ') ' . $segment['da']['country']),
                'arrivalLocations' => htmlspecialchars(end($trip['sI'])['aa']['name']  . end($trip['sI'])['aa']['city'] . ' (' . end($trip['sI'])['aa']['code'] . ') ' . end($trip['sI'])['aa']['country']),
                'adults' => $adults = $paxInfo['ADULT'] ?? 1,
                'children' => $children = $paxInfo['CHILD'] ?? 0,
                'infants' => $infants = $paxInfo['INFANT'] ?? 0,
                'totalBaseFare' => $totalBaseFare = ($baseFare * $adults) + ($baseFare * $children) + ($baseFare * $infants),
                'totalTaxes' => $totalTaxes = ($taxes * $adults) + ($taxes * $children) + ($taxes * $infants),
                'totalDiscount' => $totalDiscount = ($discount * $adults) + ($discount * $children) + ($discount * $infants),
                'totalFare' => $totalFare = $totalBaseFare + $totalTaxes - $totalDiscount,
                'stops' => $stops = (count($trip['sI']) > 1) ? (count($trip['sI']) - 1) : 0,
                'stopsTime' => [],
                'departureDateTime' => $departureDateTime = date('H:i', strtotime($segment['dt'])),
                'arrivalDateTime' => $arrivalDateTime = date('H:i', strtotime(end($trip['sI'])['at']))
            ];
            // Process stop times
            if (count($trip['sI']) > 1) {
                foreach (array_slice($trip['sI'], 0, -1) as $index => $stop) {
                    $startTime = date('H:i', strtotime($stop['at']));
                    $city = $stop['aa']['city'];
                    $airportName = $stop['aa']['name']; // Assuming 'airport' contains the airport name

                    // Get next stop if it exists
                    if (isset($trip['sI'][$index + 1])) {
                        $nextStop = $trip['sI'][$index + 1];
                        $endTime = date('H:i', strtotime($nextStop['at']));
                        $nextAirportName = $nextStop['aa']['name']; // Get next airport name

                        // Calculate waiting time (if any)
                        $waitingTime = (strtotime($nextStop['at']) - strtotime($stop['at'])) / 60; // in minutes

                        // Build the stop detail
                        $code['stopsTime'][] = [
                            'start_time' => $startTime,
                            'city' => $city,
                            'airport_name' => $airportName, // Add airport name for current stop
                            'end_time' => $endTime,
                            'waiting_time' => $waitingTime . ' minutes',
                            'next_airport_name' => $nextAirportName, // Add next airport name
                        ];
                    }
                }
            }

            // Example output handling for stops
            if (count($code['stopsTime']) === 1) {
                // One stop
                $flightDetails['stopsTime'] = [
                    'type' => 'one-stop',
                    'details' => $code['stopsTime'],
                ];
            } elseif (count($code['stopsTime']) === 2) {
                // Two stops
                $flightDetails['stopsTime'] = [
                    'type' => 'two-stop',
                    'details' => $code['stopsTime'],
                ];
            } else {
                // No stops or just a direct flight
                $flightDetails['stopsTime'] = [
                    'type' => 'direct',
                    'details' => [],
                ];
            }
            $encryptedCode = Crypt::encrypt($code);



        ?>
    <div class="flight-card mx-auto">
        <div class="flight-card_SHOW" data-details="details-<?= $a ?>">
            <div class="flight-info">
                <div class="airline">
                    <img src="https://www.gstatic.com/flights/airline_logos/70px/<?php echo $airCode; ?>.png"
                        alt="<?php echo $airName; ?>">
                    <div>
                        <strong><?php echo $airName; ?></strong><br>
                        <span><?php echo $airCode; ?>-<?php echo $flightNumbers; ?></span><br>
                        <span class="pt-1" style="color: #5191fa; text-decoration: none; cursor: pointer;"
                            onmouseover="this.style.textDecoration='underline';"
                            onmouseout="this.style.textDecoration='none';">
                            Show Details
                        </span>
                    </div>
                </div>
                <div>
                    <strong><?php echo $departureTimes; ?></strong><br>
                    <span>Departure</span>
                </div>
                <div class="duration">
                    <span><?php echo $durationText; ?></span>
                    <hr class="manish">
                    <span class="non-stop"><?= $stopText ?></span>
                </div>
                <div>
                    <strong><?php echo $arrivalTimes; ?></strong><br>
                    <span>Arrival</span>
                </div>
                <div class="text-right">
                    <span class="price" style="color:#5191fa" id="price-<?= $a ?>"><?php echo number_format($totalFare, 2); ?></span><br>
                </div>
                <a href="{{ route('booking.checkout', ['code' => $encryptedCode]) }}" class="book-btn">Book</a>
            </div>
        </div>
        <div class="container-fluid" id="details-<?= $a ?>" style="display: none; border: 2px solid #5191fa">
            <div class="row pt-2">
                <div class="col-md-12">
                    <div class="ca">
                        <span class="card-title"><?= $departureLocation ?> → <?= $arrivalLocation ?></span>
                        <span class="float-right" style="color: #5191fa;"><?= $departureDate ?></span> 
                        <?php
                                foreach ($trip['sI'] as $index => $segment) {
                                    $rowClass = (count($trip['sI']) > 1) ? 'connecting-flight' : 'direct-flight';
                                    $airlineCode = htmlspecialchars($segment['fD']['aI']['code']);
                                    $airlineName = htmlspecialchars($segment['fD']['aI']['name']);
                                    $flightNumber = htmlspecialchars($segment['fD']['fN']);
                                    $departureTime = date('H:i', strtotime($segment['dt']));
                                    $arrivalTime = date('H:i', strtotime($segment['at']));
                                    $durationHours = floor($segment['duration'] / 60);
                                    $durationMinutes = $segment['duration'] % 60;
                                    $duration = htmlspecialchars("{$durationHours}h {$durationMinutes}m");
                                    $departureLocations = htmlspecialchars($segment['da']['name'] . ' (' . $segment['da']['city'] . ') - ' . $segment['da']['code']);
                                    $arrivalLocations = htmlspecialchars($segment['aa']['name'] . ' (' . $segment['aa']['city'] . ') - ' . $segment['aa']['code']);
                                    $departureLocation = htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')');
                                    $arrivalLocation = htmlspecialchars($segment['aa']['city'] . ' (' . $segment['aa']['code'] . ')');
                                    $seatType = htmlspecialchars($segment['sT'] ?? 'Economy');
                                    $departureDate = date('D, j M Y', strtotime($segment['dt']));
                                    $arrivalDate = date('D, j M Y', strtotime($segment['at']));
                                    // Calculate layover time if not the last segment
                                ?>
                        <div class="row <?= $rowClass ?>" style="/*border-bottom: 2px solid rgb(119, 95, 189)*/">
                            <div class="col-md-2">
                                <div class="ca">
                                    <div class="card-body text-center">
                                        <img src='https://www.gstatic.com/flights/airline_logos/70px/<?php echo $airlineCode; ?>.png'
                                            alt="Logo" class="img-fluid" style="height: 30px">
                                        <h5 class="card-title"><?= $airlineName ?></h5>
                                        <p class="card-text"><?= $airlineCode ?>-<?= $flightNumber ?></p>
                                        <p class="card-text"><?= $seatType ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ca">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $departureLocation ?> <?= $departureTime ?></h5>
                                        <p class="card-text"><?= $departureDate ?></p>
                                        <p class="card-text"><?= $departureLocations ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="ca">
                                    <div class="card-body text-center" style="padding-top: 40%;">
                                        <i class="icofont-clock-time" style="font-size: 2rem; width: 1rem;"></i>
                                        <p class="card-text"><?= $duration ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ca">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $arrivalTime ?> <?= $arrivalLocation ?></h5>
                                        <p class="card-text"><?= $arrivalDate ?></p>
                                        <p class="card-text"><?= $arrivalLocations ?></p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <?php
                                    if ($index < count($trip['sI']) - 1) {
                                        $nextSegment = $trip['sI'][$index + 1];
                                        $arrivalTimeCurrent = strtotime($segment['at']);
                                        $nextDepartureTime = strtotime($nextSegment['dt']);
                                        // Calculate layover time in minutes
                                        $layoverTime = ($nextDepartureTime - $arrivalTimeCurrent) / 60; // in minutes
                                        $hours = floor($layoverTime / 60);
                                        $minutes = $layoverTime % 60;
                                        echo "<p class='text-center' style='border-bottom: 2px solid #5191fa'>Layover time: $hours hours $minutes minutes.</p>";
                                    }
                                } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            $a++;
        }
    } elseif (isset($flight_data['searchResult']['tripInfos']['RETURN']) && ($flight_data['searchResult']['tripInfos']['ONWARD']) ) {
       
        $a = 1;
        ?>
    <div class="container mt-4 manish_unquie">
        <div class="flight-card-unique">
            <div class="flight-details-unique" id="flightDetails">
                <img id="airlineLogo" alt="Airline logo" height="40" width="40" />
                <div>
                    <span id="airlineName"></span>
                    <span id="departureTime"></span>
                    <span id="departureAirport"></span>
                </div>
                <div class="flight-info-unique">
                    <span id="flightDuration"></span>
                    <span id="stopText"></span>
                </div>
                <div>
                    <span id="arrivalTime"></span>
                    <span id="arrivalAirport"></span>
                </div>
            </div>&nbsp;&nbsp;&nbsp;
            <div class="flight-details-unique" id="showFlightDetailsReturn">
                <img id="airlineLogos" alt="Airline logo" height="40" width="40" />
                <div>
                    <span id="airlineNames"></span>&nbsp;&nbsp;
                    <span id="departureTimes"></span>
                    <span id="departureAirports"></span>&nbsp;&nbsp;
                </div>
                <div class="flight-info-uniques">
                    <span id="flightDurations"></span>&nbsp;&nbsp;
                    <span id="stopTexts"></span>&nbsp;&nbsp;
                </div>
                <div>
                    <span id="arrivalTimes"></span>
                    <span id="arrivalAirports"></span>&nbsp;&nbsp;
                </div>
            </div>
            <div class="price-section-unique">
                <div class="price" id="total_price" >
                </div>
                <div class=" has-loading"><button data-id="" href="" id="bookid" onclick="event.preventDefault()"
                        class="btn btn-primary text-white btn-choose w-100 ">Book</button></div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="row header">
                    <div class="col-3">
                        Airlines
                    </div>
                    <div class="col-2">
                        Departure
                    </div>
                    <div class="col-2">
                        Duration
                    </div>
                    <div class="col-2">
                        Arrival
                    </div>
                    <div class="col-3 text-end">
                        Price
                        <i class="fas fa-arrow-up">
                        </i>
                    </div>
                </div>
                <?php
                    // $allTrips = [];
				$a=1;
                    foreach ($flight_data['searchResult']['tripInfos']['ONWARD'] as $trip) {
                         $segmentvalue = '';
                        if (isset($trip['totalPriceList'][0]['fd']['ADULT']['fC'])) {
                            // Get passenger information
                            $adults = $paxInfo['ADULT'] ?? 1;
                            $children = $paxInfo['CHILD'] ?? 0;
                            $infants = $paxInfo['INFANT'] ?? 0;

                            // Get fare details
                            $baseFare = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
                            $taxes = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'];
                            $discount = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['DIS'] ?? 0;

                            // Calculate total fare
                            $totalBaseFare = ($baseFare * $adults) + ($baseFare * $children) + ($baseFare * $infants);
                            $totalTaxes = ($taxes * $adults) + ($taxes * $children) + ($taxes * $infants);
                            $totalDiscount = ($discount * $adults) + ($discount * $children) + ($discount * $infants);
                            $totalFare = $totalBaseFare + $totalTaxes - $totalDiscount;

                            // Convert the total fare to selected currency
                            echo "<script>var totalFareInr$a = $totalFare;</script>";
                        }

                         $segmentvalue= $trip['sI'];
						 $segmentvalue['adult'] = $adults??1;
		            	 $segmentvalue['children'] = $children??0;
			             $segmentvalue['infants'] = $infants??0;
						 $segmentvalue['totalBaseFare'] = $totalBaseFare??0;
						 $segmentvalue['totalTaxes'] = $totalTaxes??0;
						$segmentvalue['totalDiscount'] = $totalDiscount??0;
						$segmentvalue['totalFare'] = $totalFare??0;
			  
						// $segmentvalue = htmlspecialchars(json_encode($segmentvalue), ENT_QUOTES);  
						  $segmentvalue = Crypt::encrypt($segmentvalue);
                        // Display flight details
                        $segment = $trip['sI'][0];
                        $airCode = htmlspecialchars($segment['fD']['aI']['code']);
                        $airName = htmlspecialchars($segment['fD']['aI']['name']);
                        $flightNumbers = htmlspecialchars($segment['fD']['fN']);
                        $departureTimes = date('H:i', strtotime($segment['dt']));
                        $arrivalTimes = date('H:i', strtotime(end($trip['sI'])['at']));
                        $startTime = date('Y-m-d H:i', strtotime($segment['dt']));
                        $endTime = date('Y-m-d H:i', strtotime(end($trip['sI'])['at']));
                        $duration = $segment['duration']; // Assume this is in minutes
                        $hours = floor($duration / 60);
                        $minutes = $duration % 60;
                        $durationText = "$hours h $minutes m";
                        $departureDate = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->format('D, j M Y');
                        $endDate = (new DateTime(date('Y-m-d', strtotime(end($trip['sI'])['at']))));
                        $days = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->diff($endDate)->days;
                        $sto = (count($trip['sI']) > 1) ? (count($trip['sI']) - 1) : 0;
                        $stopText = $sto > 0 ? "$sto stops" : 'Direct';
                        $departureLocation = htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')');
                        $departureLocations = htmlspecialchars($segment['da']['code']);
                        // $departureLocation = htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')');
                        $arrivalLocation = htmlspecialchars(end($trip['sI'])['aa']['city'] . ' (' . end($trip['sI'])['aa']['code'] . ')');
                        $arrivalLocations = htmlspecialchars(end($trip['sI'])['aa']['code']);

                        $flightDetailsOnward = [
                            'airCode' => htmlspecialchars($segment['fD']['aI']['code']),
                            'airName' => htmlspecialchars($segment['fD']['aI']['name']),
                            'flightNumbers' => htmlspecialchars($segment['fD']['fN']),
                            'departureTimes' => date('H:i', strtotime($segment['dt'])),
                            'arrivalTimes' => date('H:i', strtotime(end($trip['sI'])['at'])),
                            'startTime' => date('Y-m-d H:i', strtotime($segment['dt'])),
                            'endTime' => date('Y-m-d H:i', strtotime(end($trip['sI'])['at'])),
                            'duration' => $segment['duration'],
                            'hours' => floor($segment['duration'] / 60),
                            'minutes' => $segment['duration'] % 60,
                            'durationText' => "$hours h $minutes m",
                            'departureDate' => (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->format('D, j M Y'),
                            'endDate' => (new DateTime(date('Y-m-d', strtotime(end($trip['sI'])['at'])))),
                            'days' => (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->diff($endDate)->days,
                            'stops' => (count($trip['sI']) > 1) ? (count($trip['sI']) - 1) : 0,
                            // 'stopText' => $stops > 0 ? "$stops stops" : 'Direct',
                            'departureLocation' => htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')'),
                            'departureLocations' => htmlspecialchars($segment['da']['code']),
                            'arrivalLocation' => htmlspecialchars(end($trip['sI'])['aa']['city'] . ' (' . end($trip['sI'])['aa']['code'] . ')'),
                            'arrivalLocations' => htmlspecialchars(end($trip['sI'])['aa']['code']),
                        ];

                        $flightDetailsOnwardJson = htmlspecialchars(json_encode($flightDetailsOnward), ENT_QUOTES);
                    ?>
                <div class="flight-info-card" onclick="showFlightDetails(this)" data-side='detailin'
                    data-airline="<?= $airName ?>" data-code="<?= $airCode ?>"
                    data-flight-number="<?= $flightNumbers ?>" data-departure="<?= $departureTimes ?>"
                    data-duration="<?= $hours ?>h:<?= $minutes ?>m" data-arrival="<?= $arrivalTimes ?>"
                    data-price="<?= $totalFare ?>" data-departureLocations="<?= $departureLocations ?>"
                    data-arrivalLocations="<?= $arrivalLocations ?>"
                    data-flightDetailsOnwardJson="<?= $flightDetailsOnwardJson ?>"  data-all="<?=$segmentvalue?>" >
                    <div class="row">
                        <div class="col-3 d-flex align-items-center">
                            <img alt="IndiGo logo" class="airline-logo" height="20"
                                src="https://www.gstatic.com/flights/airline_logos/70px/<?php echo $airCode; ?>.png"
                                width="20" />
                            <div class="ms-2">
                                <div>
                                    <?= $airName ?>
                                </div>
                                <div class="text-muted">
                                    <?= $airCode ?>-<?= $flightNumbers ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <div>
                                <?= $departureTimes ?>
                            </div>
                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <div>
                                <div class="duration">
                                    <?= $hours ?>h:<?= $minutes ?>m
                                </div>
                                <div class="non-stop">
                                    <?= $stopText ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <div>
                                <?= $arrivalTimes ?>
                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-end">
                            <div class="price" id="price-{{$a}}">
                                <?= $totalFare ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $a++; } ?>
            </div>
            {{-- return flight Details --}}
            <div class="col-md-6">
                <div class="row header">
                    <div class="col-3">
                        Airlines
                    </div>
                    <div class="col-2">
                        Departure
                    </div>
                    <div class="col-2">
                        Duration
                    </div>
                    <div class="col-2">
                        Arrival
                    </div>
                    <div class="col-3 text-end">
                        Price
                        <i class="fas fa-arrow-up">
                        </i>
                    </div>
                </div>
                <?php

                    foreach ($flight_data['searchResult']['tripInfos']['RETURN'] as $trip) {
						$segmentvalue ='';
                        if (isset($trip['totalPriceList'][0]['fd']['ADULT']['fC'])) {
                            // Get passenger information
                            $adults = $paxInfo['ADULT'] ?? 1;
                            $children = $paxInfo['CHILD'] ?? 0;
                            $infants = $paxInfo['INFANT'] ?? 0;
                            // Get fare details
                            $baseFare = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
                            $taxes = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'];
                            $discount = $trip['totalPriceList'][0]['fd']['ADULT']['fC']['DIS'] ?? 0;

                            // Calculate total fare
                            $totalBaseFare = ($baseFare * $adults) + ($baseFare * $children) + ($baseFare * $infants);
                            $totalTaxes = ($taxes * $adults) + ($taxes * $children) + ($taxes * $infants);
                            $totalDiscount = ($discount * $adults) + ($discount * $children) + ($discount * $infants);
                            $totalFare = $totalBaseFare + $totalTaxes - $totalDiscount;

                            // Convert the total fare to selected currency
                            echo "<script>var totalFareInr$a = $totalFare;</script>";
                        }

                         $segmentvalue= $trip['sI'];
						 $segmentvalue['adult'] = $adults??1;
		            	 $segmentvalue['children'] = $children??0;
			             $segmentvalue['infants'] = $infants??0;
						 $segmentvalue['totalBaseFare'] = $totalBaseFare??0;
						 $segmentvalue['totalTaxes'] = $totalTaxes??0;
						$segmentvalue['totalDiscount'] = $totalDiscount??0;
						$segmentvalue['totalFare'] = $totalFare??0;
						
						  $segmentvalue = Crypt::encrypt($segmentvalue);

						//	$segmentvalue = htmlspecialchars(json_encode($segmentvalue), ENT_QUOTES);  
						
                        // Display flight details
                        $segment = $trip['sI'][0];
                        $airCode = htmlspecialchars($segment['fD']['aI']['code']);
                        $airName = htmlspecialchars($segment['fD']['aI']['name']);
                        $flightNumbers = htmlspecialchars($segment['fD']['fN']);
                        $departureTimes = date('H:i', strtotime($segment['dt']));
                        $arrivalTimes = date('H:i', strtotime(end($trip['sI'])['at']));
                        $startTime = date('Y-m-d H:i', strtotime($segment['dt']));
                        $endTime = date('Y-m-d H:i', strtotime(end($trip['sI'])['at']));
                        $duration = $segment['duration']; // Assume this is in minutes
                        $hours = floor($duration / 60);
                        $minutes = $duration % 60;
                        $durationText = "$hours h $minutes m";
                        $departureDate = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->format('D, j M Y');
                        $endDate = (new DateTime(date('Y-m-d', strtotime(end($trip['sI'])['at']))));
                        $days = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->diff($endDate)->days;
                        $sto = (count($trip['sI']) > 1) ? (count($trip['sI']) - 1) : 0;
                        $stopText = $sto > 0 ? "$sto stops" : 'Direct';
                        $departureLocation = htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')');
                        $departureLocations = htmlspecialchars($segment['da']['code']);
                        $arrivalLocation = htmlspecialchars(end($trip['sI'])['aa']['city'] . ' (' . end($trip['sI'])['aa']['code'] . ')');
                        $arrivalLocations = htmlspecialchars(end($trip['sI'])['aa']['code']);
                    ?>
                <div class="flight-info-card manish_card" onclick="showFlightDetailsReturn(this)"
                    data-airline="<?= $airName ?>" data-code="<?= $airCode ?>"
                    data-flight-number="<?= $flightNumbers ?>" data-departure="<?= $departureTimes ?>"
                    data-duration="<?= $hours ?>h:<?= $minutes ?>m" data-arrival="<?= $arrivalTimes ?>"
                    data-price="<?= $totalFare ?>" data-departureLocations="<?= $departureLocations ?>"
                    data-arrivalLocations="<?= $arrivalLocations ?>"  data-all="<?=$segmentvalue?>" >
                    <div class="row">
                        <div class="col-3 d-flex align-items-center">
                            <img alt="IndiGo logo" class="airline-logo" height="20"
                                src="https://www.gstatic.com/flights/airline_logos/70px/<?php echo $airCode; ?>.png"
                                width="20" />
                            <div class="ms-2">
                                <div>
                                    <?= $airName ?>
                                </div>
                                <div class="text-muted">
                                    <?= $airCode ?>-<?= $flightNumbers ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <div>
                                <?= $departureTimes ?>
                            </div>
                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <div>
                                <div class="duration">
                                    <?= $hours ?>h:<?= $minutes ?>m
                                </div>
                                <div class="non-stop">
                                    <?= $stopText ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex align-items-center">
                            <div>
                                <?= $arrivalTimes ?>
                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-end">
                            <div class="price" id="price-{{$a}}">
                                <?= $totalFare ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  $a++; } ?>
            </div>
            {{-- jane flight details end --}}
        </div>
        <?php
        $a++;
    }elseif(isset($flight_data['searchResult']['tripInfos']['COMBO'])) {
        ?>
        @include('Flight.Views.frontend.ajax.combo');
		
		
         <?php
    }else{
        echo '<p>No flight information available</p>';
    }

        ?>
@php 
      
	  $codereq = ['type' => 'Round Trip']; 
	  $msg = Crypt::encrypt($codereq);

@endphp
<form  id="flightalldetails" action="{{route('booking.checkout',['code'=> $msg ])}}">
<div id="flightdatago"></div>
<div id="flightdatareturn"></div>
<input type="hidden" name="totalmoney" id="totalmoneyall">
</form>


            <!-- JS Scripts -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script>
                function initializeFlightCardClickEvents() {
                    // Attach click event listeners to all flight cards
                    document.querySelectorAll('.flight-card_SHOW').forEach(function(card) {
                        card.addEventListener('click', function() {
                            // Get the ID of the details div to show
                            var detailsId = card.getAttribute('data-details');
                            var detailsDiv = document.getElementById(detailsId);

                            // Toggle the display style of the details div
                            if (detailsDiv.style.display === 'none' || detailsDiv.style.display === '') {
                                detailsDiv.style.display = 'block';
                            } else {
                                detailsDiv.style.display = 'none';
                            }
                        });
                    });
                }

                // Initialize on page load
                document.addEventListener('DOMContentLoaded', function() {
                    initializeFlightCardClickEvents();
                });
            </script>
	
            <script>
                const conversionRates = {
                    'USD': 0.012, // 1 INR = 0.012 USD
                    'CAD': 0.015, // 1 INR = 0.015 CAD
                    'INR': 1 // 1 INR = 1 INR
                };
               	@php 
						if(session('currency')==''){
						$curr_currency  = $_COOKIE['currency']?? 'INR';
						}else{
							$curr_currency  =  session('currency');
						}
						
						@endphp
	              const initialCurrency = '{{$curr_currency}}';
			
			
                function changeCurrency(selectedCurrency) {
                    // Update the currency display
                    document.getElementById('currency-display').textContent = selectedCurrency;
					 let el = document.querySelectorAll('.currencyvalue');
						// Loop through each element and append 'pqr'
						el.forEach(function(el) {
								el.value = selectedCurrency;  // Append 'pqr' to the current content
							});
					var formid=  document.getElementById('formopened').value;	
					if(initialCurrency != selectedCurrency){
					    document.getElementById(formid).submit();
					}
					var avalue = document.getElementById('avalue');
					if(avalue){
						var a = avalue.value;
					}else{
						var a = <?= $a - 1 ?>;
					}
                    // Update prices
                    for (let i = 1; i <=a ; i++) {
                        const priceElement = document.getElementById(`price-${i}`);
                        const fareInINR = window[`totalFareInr${i}`]; // Get total fare in INR
                        const convertedFare = fareInINR * conversionRates[selectedCurrency];
                        priceElement.innerHTML = getCurrencyIcon(selectedCurrency)+'  '+`  ${convertedFare.toFixed(2)}`;
                    }
 
                }

                document.addEventListener('DOMContentLoaded', () => {
                    changeCurrency(initialCurrency);
                });
            </script>
            <script>
                function toggleFlightDetails(id) {
                    const details = document.getElementById(`details-${id}`);
                    if (details.style.display === "none") {
                        details.style.display = "block";
                    } else {
                        details.style.display = "none";
                    }
                }
            </script>
            <script>
                let selectedFlight = null;
                let selectedReturnFlight = null;
                let previouslySelectedCard = null;
                let previouslySelectedReturnCard = null;

                function showFlightDetails(element) {
                    // Remove active class from previously selected card
                    if (previouslySelectedCard) {
                        previouslySelectedCard.classList.remove('active');
                    }

                    // Add active class to the currently clicked card
                    element.classList.add('active');
                    previouslySelectedCard = element; // Update previously selected card

                    // Retrieve data attributes from the clicked element
                    const airline = element.getAttribute('data-airline');
                    const code = element.getAttribute('data-code');
                    const flightNumber = element.getAttribute('data-flight-number');
                    const departure = element.getAttribute('data-departure');
                    const departureLocations = element.getAttribute('data-departureLocations');
                    const arrivalLocations = element.getAttribute('data-arrivalLocations');
                    const duration = element.getAttribute('data-duration');
                    const arrival = element.getAttribute('data-arrival');
                    const price = parseFloat(element.getAttribute('data-price')); // Convert to float
                    const stopText = element.getAttribute('data-stop-text');
                    const side = element.getAttribute('data-side');
                    
                    // Convert the JSON string to an object
                    const flightDetailsOnwardJson = JSON.parse(element.getAttribute('data-flightDetailsOnwardJson'));
                    // Store the data in an object
                    selectedFlight = {
                        airline,
                        code,
                        flightNumber,
                        departure,
                        arrivalLocations,
                        departureLocations,
                        flightDetailsOnwardJson,
                        duration,
                        arrival,
                        price,
                        stopText
                    };

                    // Update the flight details section
                    document.getElementById('airlineName').textContent = selectedFlight.airline;
                    document.getElementById('departureTime').textContent = selectedFlight.departure.split(' ')[0];
                    document.getElementById('departureAirport').textContent = selectedFlight.departureLocations;
                    document.getElementById('flightDuration').textContent = selectedFlight.duration;
                    document.getElementById('stopText').textContent = selectedFlight.stopText;
                    document.getElementById('arrivalTime').textContent = selectedFlight.arrival.split(' ')[0];
                    document.getElementById('arrivalAirport').textContent = selectedFlight.arrivalLocations;
                  //  console.log(flightDetailsOnwardJson);
                    document.getElementById('airlineLogo').src =
                        `https://www.gstatic.com/flights/airline_logos/70px/${selectedFlight.code}.png`;

                    // Update the total price
                    updateTotalPrice();
					 const all = element.getAttribute('data-all');
					 appendFlightDataToDiv(all, 'flightdatago')
		
                }

                function showFlightDetailsReturn(element) {
                    // Remove active class from previously selected return card
                    if (previouslySelectedReturnCard) {
                        previouslySelectedReturnCard.classList.remove('active');
                    }

                    // Add active class to the currently clicked card
                    element.classList.add('active');
                    previouslySelectedReturnCard = element; // Update previously selected card

                    // Retrieve data attributes from the clicked element
                    const airline = element.getAttribute('data-airline');
                    const code = element.getAttribute('data-code');
                    const flightNumber = element.getAttribute('data-flight-number');
                    const departure = element.getAttribute('data-departure');
                    const departureLocations = element.getAttribute('data-departureLocations');
                    const arrivalLocations = element.getAttribute('data-arrivalLocations');
                    const duration = element.getAttribute('data-duration');
                    const arrival = element.getAttribute('data-arrival');
                    const price = parseFloat(element.getAttribute('data-price')); // Convert to float
                    const stopText = element.getAttribute('data-stop-text');

                    // Store the data in an object
                    selectedReturnFlight = {
                        airline,
                        code,
                        flightNumber,
                        departure,
                        departureLocations,
                        arrivalLocations,
                        duration,
                        arrival,
                        price,
                        stopText
                    };
                    // alert(selectedReturnFlight.departureLocation);
                    // Update the flight details section
                    document.getElementById('airlineNames').textContent = selectedReturnFlight.airline;
                    document.getElementById('departureTimes').textContent = selectedReturnFlight.departure.split(' ')[0];
                    document.getElementById('departureAirports').textContent = selectedReturnFlight.departureLocations;
                    document.getElementById('flightDurations').textContent = selectedReturnFlight.duration;
                    document.getElementById('stopTexts').textContent = selectedReturnFlight.stopText;
                    document.getElementById('arrivalTimes').textContent = selectedReturnFlight.arrival.split(' ')[0];
					
                    // Set the image source
                    document.getElementById('airlineLogos').src =
                        `https://www.gstatic.com/flights/airline_logos/70px/${selectedReturnFlight.code}.png`;

                    // Update the total price
                    updateTotalPrice();
	               const all = element.getAttribute('data-all');
	
					 appendFlightDataToDiv(all, 'flightdatareturn')
					 
                    // Sample data object
                    const flightData = {
                        airline: airline,
                        flightNumber: flightNumber,
                        class: 'Economy',
                        departureAirport: 'Kempegowda International Airport',
                        departureCode: 'BLR',
                        departureTime: '18:25',
                        duration: '1h 0m',
                        arrivalCode: 'IXE',
                        arrivalTime: '19:25',
                        date: 'Wed, 25 Sep 2024',
                        arrivalAirport: 'Bajpe, Mangalore',
                        checkInBaggage: '15kg (1 piece)',
                        cabinBaggage: '7kg'
                    };

                    // Call the function to create structure
                    createStructure(flightData, side);
                }
 
                function updateTotalPrice() {
                    const outgoingPrice = selectedFlight ? selectedFlight.price : 0;
                    const returnPrice = selectedReturnFlight ? selectedReturnFlight.price : 0;
                    var totalPrice = outgoingPrice + returnPrice;
					var pr =  document.getElementById('currency-display').textContent.trim();;
					totalPrice =  totalPrice * conversionRates[pr];
                    $('#totalmoneyall').val(totalPrice) ;

                    document.getElementById('total_price').innerHTML = getCurrencyIcon(pr) +' '+`${totalPrice.toLocaleString()}`;
				
                }

				function getCurrencyIcon(selectedCurrency) {
					let icon;

					switch (selectedCurrency) {
						case 'USD':
							icon = '<i class="fa fa-dollar"></i>'; // Dollar icon
							break;
						case 'INR':
							icon = '<i class="fa fa-rupee"></i>'; // Rupee icon
							break;
						case 'CAD':
							icon = 'C<i class="fa fa-dollar"></i>'; // Dollar icon (you can choose a different one if needed)
							break;
						default:
							icon = selectedCurrency; // Fallback to the currency code
							break;
					}

					return icon; // Return the icon HTML
				}


                function createStructure(data, side) {
                    let content =
                        ' <div class="trip-section-header">   lko → pune Wed, 25 Sep </div> <img alt="Virat logo" height="40" src="https://example.com/virat-logo.png" width="40" />';
                    content += '<div class="flight-info"><div>' + data.airline + '</div>';
                    content += '<div>' + data.flightNumber + ' ' + data.class + '</div>';
                    content += '<div>' + data.departureAirport + '</div></div>';

                    content += '<div class="flight-time">';
                    content += data.departureCode + '<strong>' + data.departureTime + '</strong>';
                    content += '</div>';

                    content += '<div class="flight-duration">';
                    content += '<i class="far fa-clock"></i> ' + data.duration;
                    content += '</div>';

                    content += '<div class="flight-time">';
                    content += data.arrivalCode + '<strong>' + data.arrivalTime + '</strong>';
                    content += '</div>';

                    content += '<div class="flight-info">';
                    content += '<div>' + data.date + '</div>';
                    content += '<div>' + data.arrivalAirport + '</div>';
                    content += '</div>';

                    content += '<div class="baggage-info">';
                    content += '<div>Check-in baggage ' + data.checkInBaggage + '</div>';
                    content += '<div>Cabin baggage ' + data.cabinBaggage + '</div>';
                    content += '</div>';

                    // Use jQuery to append the HTML content
                    $('#' + side).html(content);
                }
				
				
	function appendFlightDataToDiv(selectedReturnFlight, divId) { 
    // Get the div element
    const div = document.getElementById(divId);
 //const jsonData = JSON.stringify(selectedReturnFlight);
    // Create a string that will hold all the input fields
    let inputFields = '';
            // Create hidden input field using template literals
            inputFields += '<input type="hidden" name="'+divId+'" value="'+selectedReturnFlight+'">';

    // Append the generated input fields to the div using innerHTML
    div.innerHTML = inputFields;
}

$(document).ready(function() {
    $('#bookid').click(function(e) {
        e.preventDefault(); 
		$('#flightalldetails').submit();
        var form = document.getElementById('flightalldetails');
		
   
    });
});
</script>
