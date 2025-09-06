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
        font-size: 1rem; 
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
        color: #ff7d01;
        text-decoration: none;
    }
	
	.price {
        font-size: 1rem !important; 
        font-weight: bold;
    }
	
	
	/* CSS for mobile screens (max-width: 600px) */
	@media only screen and (max-width: 600px) {
		
	}


    @media (max-width: 767.98px) {
        .manish_unquie {
            max-width: fit-content;
            position: fixed;
            top: 69%;
            left: 0%;
            right: 0%;
            z-index: 1000;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding-right: 0px;
            padding-left: 11px;
        }

        .viratflight {
            display: none;
        }

        .flight-info-card .airline-logo {
            width: 25px;
            height: 25px;
        }

        .flight-info-card {
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 0px;
            margin-bottom: 8px;
        }

        .manishflight {
            padding-right: 11px;
            padding-left: 11px;
        }

        .flight_row_structure {
            color: #1a2b48;
            font-family: Poppins, sans-serif;
            font-size: 12px;
            font-weight: 300;
            line-height: 1;
            overflow-x: hidden;
        }
    }
	
	
	
	
	
/*   -------------------------------   */	
	
	

/* Mobile-specific styles */
@media only screen and (max-width: 600px) {
    .col-md-3, .col-md-2 {
        width: 100%; /* Stack elements vertically */
    }
    
    .col-12 {
        width: 100%;
    }

    .col-4 {
        width: 33.33%; /* Make them each one-third width for columns */
        text-align: center;
    }

    .airline-logo {
        height: 25px;
        width: 25px;
        margin-right: 8px;
    }

    .price {
        font-weight: bold;
        text-align: right;
		font-size: 0.8rem !important;
    }

    /* Align prices to the right and make the row layout responsive */
    .justify-content-end {
        justify-content: center; /* Center align items for a cleaner mobile view */
    }

    .duration, .non-stop {
        text-align: center;
        font-size: 14px;
    }
	.col-md-3.d-flex.align-items-center {
		justify-content: space-between;
	}
	.ms-2{
		display: flex;
	}
	
	.airname{
        padding-right: 1.5rem;
	}
	
	.code_flight_num{
		
	}
	
	/* .manishflight{
		padding:0.2rem;
	} */

}
</style>
<div class="container mt-4 manish_unquie">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="flight-card-unique d-flex flex-wrap justify-content-between">
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
                    <div class="price" id="total_price"></div>
                    <div class=" has-loading"><button data-id="" href="javascript::void(0)" id="bookid"
                            onclick="$('#flightalldetails').submit();"
                            class="btn btn-primary text-white btn-choose w-100 ">Book</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 col-6 manishflight">
            <div class="row header viratflight">
                <div class="col-3">
                    Airlines
                </div>
                <div class="col-2 p-0">
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
            $a=1;
			$initialLimit = 20;
			$showAll = isset($_GET['show_all']) ? true : false; 
			
			
                foreach ($flight_data['searchResult']['tripInfos']['ONWARD'] as $trip) {
                    // dd($trip);
                     $segmentvalue = '';
					 
					 if (!$showAll && $a >= $initialLimit) {
						break;
					}
					 
					 
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
                    $segmentvalue['flight_class'] = isset($_GET['seating_seat']) ? $_GET['seating_seat'] : 'Economy';
                    $segmentvalue['flight_id'] =isset($trip['totalPriceList'][0]['id']) ? $trip['totalPriceList'][0]['id'] : '';
                    $iBkey=$trip['totalPriceList'][0]['tai']['tbi'];
                            foreach ($iBkey as $key => $value) {
                              }
                    $segmentvalue['iB']= isset($trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['iB']) ? $trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['iB'] : '';
                    $segmentvalue['cB']= isset($trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['cB']) ? $trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['cB'] : '';
                    //  dd( $segmentvalue['ib']);
                    $segmentvalue = Crypt::encrypt($segmentvalue);
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
				
				
				
				
            <div class="flight-info-card flight-info-card_virat manishflight" onclick="showFlightDetails(this)" style="cursor: pointer; padding:4px;"  data-side='detailin'
                data-airline="<?= $airName ?>" data-code="<?= $airCode ?>" data-flight-number="<?= $flightNumbers ?>"
                data-departure="<?= $departureTimes ?>" data-duration="<?= $hours ?>h:<?= $minutes ?>m"
                data-arrival="<?= $arrivalTimes ?>" data-price="<?= $totalFare ?>"
                data-departureLocations="<?= $departureLocations ?>" data-arrivalLocations="<?= $arrivalLocations ?>"
                data-flightDetailsOnwardJson="<?= $flightDetailsOnwardJson ?>" data-all="<?= $segmentvalue ?>">
                <div class="row">
                    <div class="col-md-3 col-12 d-flex align-items-center">
                        <img alt="IndiGo logo" class="airline-logo" height="20"
                            src="https://www.gstatic.com/flights/airline_logos/70px/<?php echo $airCode; ?>.png"
                            width="20" />
                        <div class="ms-2">
                            <div class="airname">
                                <?= $airName ?>
                            </div>
                            <div class="text-muted code_flight_num">
                                <?= $airCode ?>-<?= $flightNumbers ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 d-flex align-items-center">
                        <div>
                            <?= $departureTimes ?>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 d-flex align-items-center">
                        <div>
                            <div class="duration">
                                <?= $hours ?>h:<?= $minutes ?>m
                            </div>
                            <div class="non-stop">
                                <?= $stopText ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 d-flex align-items-center">
                        <div>
                            <?= $arrivalTimes ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 d-flex align-items-center justify-content-end">
                        <div class="price" id="price-{{ $a }}"><?= $icon ?><?php echo number_format($totalFare, 2); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php $a++; } ?>
        </div>
        {{-- return flight Details --}}
        <div class="col-md-6 col-6 manishflight">
            <div class="row header viratflight">
                <div class="col-3">
                    Airlines
                </div>
                <div class="col-2 p-0">
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
$a=1;
$initialLimit = 20;
$showAll = isset($_GET['show_all']) ? true : false; 

                foreach ($flight_data['searchResult']['tripInfos']['RETURN'] as $trip) {
                    $segmentvalue ='';
					
					
					if (!$showAll && $a >= $initialLimit) {
						break;
					}
					
					
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
                    $segmentvalue['flight_id'] =isset($trip['totalPriceList'][0]['id']) ? $trip['totalPriceList'][0]['id'] : '';

                    
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
            <div class="flight-info-card flight-info-card_manish manish_card manishflight" onclick="showFlightDetailsReturn(this)" style="cursor: pointer;padding:4px;"
                data-airline="<?= $airName ?>" data-code="<?= $airCode ?>" data-flight-number="<?= $flightNumbers ?>"
                data-departure="<?= $departureTimes ?>" data-duration="<?= $hours ?>h:<?= $minutes ?>m"
                data-arrival="<?= $arrivalTimes ?>" data-price="<?= $totalFare ?>"
                data-departureLocations="<?= $departureLocations ?>" data-arrivalLocations="<?= $arrivalLocations ?>"
                data-all="<?= $segmentvalue ?>">
                <div class="row ">
                    <div class="col-12 col-md-3 d-flex align-items-center">
                        <img alt="IndiGo logo" class="airline-logo" height="20"
                            src="https://www.gstatic.com/flights/airline_logos/70px/<?php echo $airCode; ?>.png"
                            width="20" />
                        <div class="ms-2">
                            <div class="airname">
                                <?= $airName ?>
                            </div>
                            <div class="text-muted">
                                <?= $airCode ?>-<?= $flightNumbers ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 d-flex align-items-center">
                        <div>
                            <?= $departureTimes ?>
                        </div>
                    </div>
                    <div class="col-4 col-md-2  d-flex align-items-center">
                        <div>
                            <div class="duration">
                                <?= $hours ?>h:<?= $minutes ?>m
                            </div>
                            <div class="non-stop">
                                <?= $stopText ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 d-flex align-items-center">
                        <div>
                            <?= $arrivalTimes ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex align-items-center justify-content-end">
                        <div class="price" id="price-{{ $a }}">
                            <?= $icon ?><?php echo number_format($totalFare, 2); ?>
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
    ?>
<!-- Show All Button -->
<?php if (!$showAll && count($flight_data['searchResult']['tripInfos']['ONWARD']) > $initialLimit): ?>
    <div class="text-center">
        <button id="show-all-btn" class="btn btn-primary">Show All Flights</button>
    </div>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    window.onload = function() {
        const firstFlightCard = document.querySelector('.flight-info-card_virat');
        const firstReturnFlightCard = document.querySelector('.flight-info-card_manish');
        if (firstFlightCard) {
            firstFlightCard.click();
        }
        if (firstReturnFlightCard) {
            firstReturnFlightCard.click();
        }
    };
</script>
