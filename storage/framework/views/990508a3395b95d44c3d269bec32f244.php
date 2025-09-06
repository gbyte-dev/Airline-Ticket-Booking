

<style>
 @media (max-width: 425px) {
    .flight-info {
        flex-grow: 1;
           margin-left:-10px !important;
    font-size: 11px;
    }
.bravo_wrap .bravo-list-item .topbar-search .control .item:first-child {
    border: none;
    font-size: 11px !important;
}
    .card-text{
font-size: 11px !important;
}
 .card-title {
        font-size: larger;
        font-weight: bold;
        font-size: 11px !important;
    }
.font_manish {
    color: #ff7d01;
    font-size: 11px;
}
}
 @media (max-width: 375px) {
    .flight-info {
        flex-grow: 1;
        margin-left: -10px !important;
        font-size: 11px;
    }
    .flight-info .price {
        font-size: 12px;
        /* color: #ff5722; */
        color: #ff7d01;
        font-weight: bold;
        margin-left: -22px;
    }
.bravo_wrap .bravo-list-item .topbar-search .control .item:first-child {
    border: none;
    font-size: 11px !important;
}
    .card-text{
font-size: 10px !important;
}
 .card-title {
        font-size: larger;
        font-weight: bold;
        font-size: 10px !important;
    }
}
    @media (max-width: 767.98px) {
        .flight-info {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
            flex-direction: row;
            align-content: center;
            flex-wrap: wrap;
        }

        .flight-info {
            flex: 1;
            margin-left: -18px;
        }

        body {
            color: #1a2b48;
            font-family: Poppins, sans-serif;
            font-size: 7px;
            font-weight: 400;
            line-height: 1.5;
            overflow-x: hidden;
        }

        .flight-info .price {
            font-size: 12px;
            /* color: #ff5722; */
            color: #ff7d01;
            font-weight: bold;
        }


        .card-title {
            font-size: larger;
            font-weight: bold;
        }

        .card-text {
            font-size: 9px;
        }

        .rowManish {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            margin-right: -39px;
            margin-left: -39px;
            flex-wrap: wrap;
            flex-direction: row;
            align-content: space-between;
            justify-content: space-evenly;
            padding-right: 14px;
            padding-left: 13px;
        }

        .card-body {
            padding: 0px;
        }

        .flight-card {
            border: 4px solid #e6e6e6;
            border-radius: 24px;
            margin-bottom: 6px;
            padding: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .flight_details_card {
            display: none;
        }



    }
    .airline:hover{
        cursor: pointer;
    }
    .airname:hover{
        cursor: pointer;  
    }
    .duration:hover{
        cursor: pointer;
    }
    .arivetime:hover{
        cursor: pointer;
    }
    .font_manish:hover{
        cursor: pointer;
    }
    .dropdown-toggle:hover{
        cursor: pointer;
    }
</style>

<?php
    if (session('currency') == '') {
        $curr_currency = $_COOKIE['currency'] ?? 'CAD';
    } else {
        $curr_currency = session('currency');
    }
    if (isset($_GET['currency'])) {
        $curr_currency = $_GET['currency'];
    }
?>




<div class="container mt-2">
    <!-- Table Header -->
    <div class="row text-center table-header flight_details_card" style="margin-right: 0px;margin-left: 0px;">
        <div class="col-md-1 d-none d-md-block" style="max-width: 2%;"></div>
        <div class="col-2 col-md-2">Airlines</div>
        <div class="col-3 col-md-2">Departure</div>
        <div class="col-3 col-md-2">Duration</div>
        <div class="col-3 col-md-2">Arrival</div>
        <div class="col-1 col-md-2">Price</div>
        <div class="col-md-1 d-none d-md-block"></div>
    </div>
    <?php
        $a = 1;
		$initialLimit = 20;
		$showAll = isset($_GET['show_all']) ? true : false; 
		
        foreach ($flight_data['searchResult']['tripInfos']['ONWARD'] as $trip) {
            //  dd($trip);
			
			if (!$showAll && $a >= $initialLimit) {
				break;
			}
			
         $h=0;
		 $m=0;
	  foreach ($trip['sI'] as $in => $seg) {
		        $h += floor($seg['duration'] / 60);
                $m += $seg['duration'] % 60;

           if($in < count($trip['sI']) - 1) {
					$nSegment = $trip['sI'][$in + 1];
					$aCurrent = strtotime($seg['at']);
					$nTime = strtotime($nSegment['dt']);
					$layTime = ($nTime - $aCurrent) / 60;
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

                // Calculate total fare
                $totalBaseFare = ($baseFare * $adults) + ($baseFare * $children) + ($baseFare * $infants);
                $totalTaxes = ($taxes * $adults) + ($taxes * $children) + ($taxes * $infants);
                $totalDiscount = ($discount * $adults) + ($discount * $children) + ($discount * $infants);
                $totalFare = $totalBaseFare + $totalTaxes - $totalDiscount;

                echo "<script>var totalFareInr$a = $totalFare;</script>";
            }
            $segment = $trip['sI'][0];
            $airCode = htmlspecialchars($segment['fD']['aI']['code']);
            $code = htmlspecialchars($segment['fD']['aI']['name']);
            $airName = htmlspecialchars($segment['fD']['aI']['name']);
            $flightNumbers = htmlspecialchars($segment['fD']['fN']);

            $iBkey=$trip['totalPriceList'][0]['tai']['tbi'];
            foreach ($iBkey as $key => $value) {
            }
        
            $iB = isset($trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['iB']) ? $trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['iB'] : '';
            $cB = isset($trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['cB']) ? $trip['totalPriceList'][0]['tai']['tbi'][$key][0]['ADULT']['cB'] : '';
            // dd($iB);

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
            $durationText = $triptimereq ;"$hours hours $minutes minutes";
            $departureDate = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->format('D, j M Y');
            $endDate = (new DateTime(date('Y-m-d', strtotime(end($trip['sI'])['at']))));
            $days = (new DateTime(date('Y-m-d', strtotime($segment['dt']))))->diff($endDate)->days;
            $sto = (count($trip['sI']) > 1) ? (count($trip['sI']) - 1) : 0;
            $stopText = $sto > 0 ? "$sto stops" : 'Direct';
            $departureLocation = htmlspecialchars($segment['da']['city'] . ' (' . $segment['da']['code'] . ')');
            $arrivalLocation = htmlspecialchars(end($trip['sI'])['aa']['city'] . ' (' . end($trip['sI'])['aa']['code'] . ')');
            $flight_id = [];
            foreach ($trip['totalPriceList'] as $key => $value) {
                if (isset($value['id'])) {
                    $flight_id[] = $value['id'];
                }
            }
            $flight_id = implode(',', $flight_id);
            // dd($flight_id);
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
                'arrivalDateTime' => $arrivalDateTime = date('H:i', strtotime(end($trip['sI'])['at'])),
                'segment' => $trip['sI'],
                'triptimeReq'=>$triptimereq,
                'flight_class'=>$_GET['seating_seat']?? 'Economy',
                'flight_id'=>isset($trip['totalPriceList'][0]['id']) ? $trip['totalPriceList'][0]['id'] : '',
                'currency'=>$curr_currency,
                'iB'=>$iB,
                'cB'=>$cB,
            ];
            if (count($trip['sI']) > 1) {
                foreach (array_slice($trip['sI'], 0, -1) as $index => $stop) {
                    $startTime = date('d-m-Y H:i', strtotime($stop['at']));
                    $city = $stop['aa']['city'];
                    $airportName = $stop['aa']['name'];

                    if (isset($trip['sI'][$index + 1])) {
                        $nextStop = $trip['sI'][$index + 1];
                        $depaturetTime = date('d-m-Y H:i', strtotime($nextStop['dt']));
                        $endTime = date('d-m-Y H:i', strtotime($nextStop['at']));
                        $nextAirportName = $nextStop['aa']['name']; 
                        $depatureTimeObj = new DateTime($depaturetTime);
                        $startTimeObj = new DateTime($startTime);
                        $waitingTime = $depatureTimeObj->diff($startTimeObj);
                        $hours = $waitingTime->h;
                        $minutes = $waitingTime->i;
                        $waitingTime = ($hours > 0 ? $hours . ' hours ' : '') . $minutes . ' minutes';
                        $code['stopsTime'][] = [
                            'start_time' => $startTime,
                            'city' => $city,
                            'airport_name' => $airportName, 
                            'depaturetime' => $depaturetTime,
                            'end_time' => $endTime,
                            'waiting_time' => $waitingTime,
                            'next_airport_name' => $nextAirportName,
                        ];
                    }
                }
            }

            if (count($code['stopsTime']) === 1) {
                $flightDetails['stopsTime'] = [
                    'type' => 'one-stop',
                    'details' => $code['stopsTime'],
                ];
            } elseif (count($code['stopsTime']) === 2) {
                $flightDetails['stopsTime'] = [
                    'type' => 'two-stop',
                    'details' => $code['stopsTime'],
                ];
            } else {
                $flightDetails['stopsTime'] = [
                    'type' => 'direct',
                    'details' => [],
                ];
            }
            $oneWay = ['oneWay' => 'OneWay Trip'];
            $msg2 = Crypt::encrypt($oneWay);
            $encryptedCode = Crypt::encrypt($code);

        ?>
    <div class="flight-card mx-auto manishbhai">
        <div class="flight-card_SHOW" data-details="details-<?= $a ?>">
            <div class="flight-info">
                <div class="airline">
                    <img src="https://www.gstatic.com/flights/airline_logos/70px/<?php echo $airCode; ?>.png"
                        alt="<?php echo $airName; ?>">
                    <div>
                        <strong ><?php echo $airName; ?></strong><br>
                        <span><?php echo $airCode; ?>-<?php echo $flightNumbers; ?></span><br>
                        <span class="pt-1 font_manish" style=" text-decoration: none; cursor: pointer;"
                            onmouseover="this.style.textDecoration='underline';"
                            onmouseout="this.style.textDecoration='none';">
                            Show Details
                        </span>
                    </div>
                </div>
                <div class="airname">
                    <strong ><?php echo $departureTimes; ?></strong><br>
                    <span>Departure</span>
                </div>
                <div class="duration" >
                    <span><?php echo $durationText; ?></span>
                    <hr class="manish">
                    <span class="non-stop"><?= $stopText ?></span>
                </div>
                <div class="arivetime">
                    <strong><?php echo $arrivalTimes; ?></strong><br>
                    <span>Arrival</span>
                </div>
                <div class="text-right">
                    <span class="price" id="price-<?= $a ?>"> <span
                            class="font_manish"><?= $icon ?><?php echo number_format($totalFare, 2); ?></span></span><br>
                </div>
                <form action="<?php echo e(route('booking.checkout.post', ['code' => $msg2])); ?>" method="POST">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="code" value="<?= $encryptedCode ?>">
                    <button type="submit" class="book-btn font_manish ">Book</button>
                </form>
            </div>
        </div>

        <div class="container-fluid" id="details-<?= $a ?>"
            style="display: none; border: 2px solid #ff7d01;margin-top: 0.5rem; border-radius: 9px;">
            <div class="row pt-2 rowManish">
                <div class="col-md-12">
                    <div class="ca">
                        <span class="card-title"><?= $departureLocation ?> → <?= $arrivalLocation ?></span>
                        <span class="float-right font_manish"><?= $departureDate ?></span>
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
                            <div class="col-2 col-md-2">
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
                            <div class="col-4 col-md-4">
                                <div class="ca">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $departureLocation ?> <?= $departureTime ?></h5>
                                        <p class="card-text"><?= $departureDate ?></p>
                                        <p class="card-text"><?= $departureLocations ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-2">
                                <div class="ca">
                                    <div class="card-body text-center" style="padding-top: 40%;">
                                        <i class="icofont-clock-time" style="font-size: 2rem; width: 1rem;"></i>
                                        <p class="card-text"><?= $duration ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-4">
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
                                        $layoverTime = ($nextDepartureTime - $arrivalTimeCurrent) / 60; // in minutes
                                        $hours = floor($layoverTime / 60);
                                        $minutes = $layoverTime % 60;
                                        echo "<p class='text-center' style='border-bottom: 2px solid #ff7d01'>Layover time: $hours hours $minutes minutes.</p>";
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
?>
    <!-- Show All Button -->
    <?php if (!$showAll && count($flight_data['searchResult']['tripInfos']['ONWARD']) > $initialLimit): ?>
    <div class="text-center">
        <button id="show-all-btn" class="btn btn-primary">Show All Flights</button>
    </div>
    <?php endif; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#show-all-btn').on('click', function() {
                window.location.href = window.location.href + "&show_all=1";
            });
        });
    </script>





<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Flight/Views/frontend/ajax/onward.blade.php ENDPATH**/ ?>