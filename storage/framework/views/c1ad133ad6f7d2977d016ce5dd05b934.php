<style>
    .booking-review .booking-review-content .review-section {
        padding: 0px;
        border-bottom: 8px solid #eaeef3;
    }

    @media (max-width: 767.98px) {
        .manish_combo {

            .h5,
            .h5 {
                font-size: .8rem !important;
            }
        }
    }
</style>
<div class="manish_unique">
    <div class="container manish_combo">
        <div class="row pt-2">
            <div class="col-md-12 col-12">
                <div class="ca">
                    <h3><b>Review Your Journey</b></h3>
                </div>
            </div>
        </div>

        <div class="row pt-2" style="border: 2px solid #ff7d01">
            <div class="col-md-12 col-12">
                <div class="ca">
                    <div class="col-md-12 col-12">
                        <div class="card-header text-center ">
                            <b class="font_manish " style="color: #ff7d01">Departure
                                Flight</b>
                            
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <span class="card-title"> <?php echo e($combo['departureLocation'] ?? ''); ?> →<span class='font_manish';>
                                <?php echo e($combo['triptimeReq'] ?? ''); ?> </span>→ <?php echo e($combo['city_aa'] ?? ''); ?>

                            (<?php echo e($combo['city_code'] ?? ''); ?>)</span>
                        <span class="float-right font_manish " style="margin-left: 34%;">
                            <?php if(isset($combo['departureDate'])): ?>
                                <?php echo e(date('D, d M Y', strtotime($combo['departureDate']))); ?>

                            <?php endif; ?>
                        </span>
                    </div>
                    <?php $__currentLoopData = $combo['segment2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <hr>
                        <?php
                            $id = $seg['id'] ?? '';
                            $flightCode = $seg['fD']['aI']['code'] ?? '';
                            $flightName = $seg['fD']['aI']['name'] ?? '';
                            $isLcc = $seg['fD']['aI']['isLcc'] ?? '';
                            $flightNumber = $seg['fD']['fN'] ?? '';
                            $equipmentType = $seg['fD']['eT'] ?? '';
                            $stops = $seg['stops'] ?? '';
                            $hours = floor($seg['duration'] / 60) ?? 0;
                            $minutes = $seg['duration'] % 60 ?? 0;
                            $duration = "{$hours} hours {$minutes} minutes";
                            $departureCode = $seg['da']['code'] ?? '';
                            $departureName = $seg['da']['name'] ?? '';
                            $departureCityCode = $seg['da']['cityCode'] ?? '';
                            $departureCity = $seg['da']['city'] ?? '';
                            $departureCountry = $seg['da']['country'] ?? '';
                            $departureCountryCode = $seg['da']['countryCode'] ?? '';
                            $departureTerminal = $seg['da']['terminal'] ?? '';
                            $departureTimezone = $seg['da']['timezoneId'] ?? '';
                            $arrivalCode = $seg['aa']['code'] ?? '';
                            $arrivalName = $seg['aa']['name'] ?? '';
                            $arrivalCityCode = $seg['aa']['cityCode'] ?? '';
                            $arrivalCity = $seg['aa']['city'] ?? '';
                            $arrivalCountry = $seg['aa']['country'] ?? '';
                            $arrivalCountryCode = $seg['aa']['countryCode'] ?? '';
                            $arrivalTerminal = $seg['aa']['terminal'] ?? '';
                            $arrivalTimezone = $seg['aa']['timezoneId'] ?? '';
                            $departureDate = date('d-m-Y', strtotime($seg['dt'] ?? ''));
                            $departureTime = date('H:i', strtotime($seg['dt'] ?? ''));
                            $arrivalDate = date('d-m-Y', strtotime($seg['at'] ?? ''));
                            $arrivalTime = date('H:i', strtotime($seg['at'] ?? ''));
                            $departureTimes = date('d-m-Y H:i', strtotime($seg['dt'] ?? ''));
                            $arrivalTimes = date('d-m-Y H:i', strtotime($seg['at'] ?? ''));
                            $isInternational = $seg['iand'] ?? '';
                            $isRoundTrip = $seg['isRs'] ?? '';
                            $stopNumber = $seg['sN'] ?? '';
                        ?>
                        <?php if(isset($departureCode) && $departureCode == $combo['to']): ?>
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <div class="card-header font_manish " style="text-align: center;">
                                        <b>Return Flight</b>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <span class="card-title"> <?php echo e($combo['city_aa'] ?? ''); ?>

                                        (<?php echo e($combo['city_code'] ?? ''); ?>)
                                        →<span class='font_manish';><?php echo e($combo['triptimeReturn'] ?? ''); ?> </span> →
                                        <?php echo e($combo['departureLocation'] ?? ''); ?></span>
                                    <span
                                        class="float-right font_manish "><?php echo e(date('D, d M Y', strtotime($departureDate))); ?></span>
                                </div>
                            </div>
                            <div class="row direct-flight p-2">
                                <div class="col-md-2 col-2">
                                    <div class="ca text-center">
                                        <img src='https://www.gstatic.com/flights/airline_logos/70px/<?php echo e($flightCode); ?>.png'
                                            alt="American Airlines Logo" class="img-fluid" style="height: 30px">
                                        <h5 class="card-title"> <?php echo e($flightName); ?></h5>
                                        <p class="card-text"> (<?php echo e($flightCode); ?>-<?php echo e($flightNumber); ?>)</p>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="ca">
                                        <h5 class="card-title"><?php echo e($departureCity); ?>(<?php echo e($departureCityCode); ?>)
                                            <?php echo e($departureTime); ?></h5>
                                        <p class="card-text"><?php echo e($departureDate); ?> </p>
                                        <p class="card-text"><?php echo e($departureName); ?>,<?php echo e($departureCity); ?>

                                            (<?php echo e($departureCityCode); ?>)
                                            ,
                                            <?php echo e($departureCountry); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="ca text-center" style="padding-top: 15%;">
                                        <i class="icofont-clock-time" style="font-size: 2rem; width: 1rem;"></i>
                                        <p class="card-text"> <?php echo e($duration); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="ca">
                                        <h5 class="card-title"><?php echo e($arrivalTime); ?> <?php echo e($arrivalCity); ?>

                                            (<?php echo e($arrivalCityCode); ?>)</h5>
                                        <p class="card-text"> <?php echo e($arrivalDate); ?></p>
                                        <p class="card-text"><?php echo e($arrivalName); ?>,<?php echo e($arrivalCity); ?>

                                            (<?php echo e($arrivalCityCode); ?>),<?php echo e($arrivalCountry); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row direct-flight p-2">
                                <div class="col-md-2 col-2">
                                    <div class="ca text-center">
                                        <img src='https://www.gstatic.com/flights/airline_logos/70px/<?php echo e($flightCode); ?>.png'
                                            alt="American Airlines Logo" class="img-fluid" style="height: 30px">
                                        <h5 class="card-title"> <?php echo e($flightName); ?></h5>
                                        <p class="card-text"> (<?php echo e($flightCode); ?>-<?php echo e($flightNumber); ?>)</p>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="ca">
                                        <h5 class="card-title"><?php echo e($departureCity); ?>(<?php echo e($departureCityCode); ?>)
                                            <?php echo e($departureTime); ?></h5>
                                        <p class="card-text"><?php echo e($departureDate); ?> </p>
                                        <p class="card-text"><?php echo e($departureName); ?>,<?php echo e($departureCity); ?>

                                            (<?php echo e($departureCityCode); ?>),
                                            <?php echo e($departureCountry); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-2">
                                    <div class="ca text-center" style="padding-top: 15%;">
                                        <i class="icofont-clock-time" style="font-size: 2rem; width: 1rem;"></i>
                                        <p class="card-text"> <?php echo e($duration); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="ca">
                                        <h5 class="card-title"><?php echo e($arrivalTime); ?> <?php echo e($arrivalCity); ?>

                                            (<?php echo e($arrivalCityCode); ?>)</h5>
                                        <p class="card-text"> <?php echo e($arrivalDate); ?></p>
                                        <p class="card-text"><?php echo e($arrivalName); ?>,<?php echo e($arrivalCity); ?>

                                            (<?php echo e($arrivalCityCode); ?>),<?php echo e($arrivalCountry); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        
        <?php if(!empty($fareRules)): ?> 
        <?php if(isset($fareRules['status']) &&
        $fareRules['status']['success'] === false &&
        $fareRules['status']['httpStatus'] === 404): ?>
    <?php
        header('Location: /');
        exit();
    ?>
<?php else: ?>
        <div class="container">
            <?php
                $noShowRules = [];
                $dateChangeRules = [];
                $cancellationRules = [];
                $seatChargeableRules = [];
                foreach ($fareRules as $route => $rules) {
                    foreach ($rules as $key => $rules_code) {
                        $store = isset($rules_code['tfr']) ? $rules_code['tfr'] : [];
                        if (isset($store)) {
                            foreach ($store as $ruleType => $ruleDetails) {
                                foreach ($ruleDetails as $detail) {
                                    switch ($ruleType) {
                                        case 'NO_SHOW':
                                            $noShowRules[] = [
                                                'policyInfo' => $detail['policyInfo'],
                                                'st' => $detail['st']?? 0,
                                                'et' => $detail['et']?? 0,
                                            ];
                                            break;
    
                                        case 'DATECHANGE':
                                            $dateChangeRules[] = [
                                                'amount' => $detail['amount'] ?? 0,
                                                'additionalFee' => $detail['additionalFee'] ?? 0,
                                                'policyInfo' => $detail['policyInfo'] ?? '',
                                                'st' => $detail['st'] ?? 0,
                                                'et' => $detail['et'] ?? 0,
                                            ];
                                            break;
    
                                        case 'CANCELLATION':
                                            $cancellationRules[] = [
                                                'amount' => $detail['amount'] ?? 0,
                                                'additionalFee' => $detail['additionalFee'] ?? 0,
                                                'st' => $detail['st'] ?? 0,
                                                'et' => $detail['et'] ?? 0,
                                            ];
                                            break;
    
                                        case 'SEAT_CHARGEABLE':
                                            $seatChargeableRules[] = [
                                                'policyInfo' => $detail['policyInfo']?? 0,
                                                'st' => $detail['st']?? 0,
                                                'et' => $detail['et']?? 0,
                                            ];
                                            break;
                                    }
                                }
                            }
                        }
                    }
                }
                // Output the results
                // echo '<pre>';
                // echo "No Show Rules:\n";
                // print_r($noShowRules);
    
                // echo "\nDate Change Rules:\n";
                // print_r($dateChangeRules);
    
                // echo "\nCancellation Rules:\n";
                // print_r($cancellationRules);
    
                // echo "\nSeat Chargeable Rules:\n";
                // print_r($seatChargeableRules);
                // $hours = isset($noShowRules[0]['et']) ? $noShowRules[0]['et'] : (isset($cancellationRules[0]['et']) ? $cancellationRules[0]['et'] : 4);
                // $policy = isset($noShowRules[0]['policyInfo']) ? $noShowRules[0]['policyInfo'] : 'As per airlines policy';
                // $Refamount = convertCurrency($cancellationRules[0]['amount'], $curr_currency);
                // $additionalFee = convertCurrency($cancellationRules[0]['additionalFee'], $curr_currency);
                // $Dateamount = convertCurrency($dateChangeRules[0]['amount'], $curr_currency);
                // $DateadditionalFee = convertCurrency($dateChangeRules[0]['additionalFee'], $curr_currency);
                // $agency = convertCurrency(400, $curr_currency);
                // $totalRefund = $combo['totalFare'] - ($Refamount + $additionalFee + $agency);
                // $totalDateRefund = $Dateamount + $DateadditionalFee + $agency;
                // $st = $cancellationRules[0]['st'] ?? (($cancellationRules[0] ?? [])['st'] ?? '');
                // echo $et = $cancellationRules[0]['et'] ?? (($cancellationRules[0] ?? [])['et'] ?? '');

                // $cancellationRules[0]['st'] ?? '';
                // $cancellationRules[0]['et'] ?? '';
                // Safely retrieving values from the $noShowRules and $cancellationRules arrays
$hours = isset($noShowRules[0]['et']) ? $noShowRules[0]['et'] : (isset($cancellationRules[0]['et']) ? $cancellationRules[0]['et'] : 4);
$policy = isset($noShowRules[0]['policyInfo']) ? $noShowRules[0]['policyInfo'] : 'As per airlines policy';
$Refamount = isset($cancellationRules[0]['amount']) ? convertCurrency($cancellationRules[0]['amount'], $curr_currency) : 0;
$additionalFee = isset($cancellationRules[0]['additionalFee']) ? convertCurrency($cancellationRules[0]['additionalFee'], $curr_currency) : 0;
$Dateamount = isset($dateChangeRules[0]['amount']) ? convertCurrency($dateChangeRules[0]['amount'], $curr_currency) : 0;
$DateadditionalFee = isset($dateChangeRules[0]['additionalFee']) ? convertCurrency($dateChangeRules[0]['additionalFee'], $curr_currency) : 0;
$agency = convertCurrency(400, $curr_currency);
$totalRefund = isset($combo['totalFare']) ? $combo['totalFare'] - ($Refamount + $additionalFee + $agency) : 0;
$totalDateRefund = $Dateamount + $DateadditionalFee + $agency;

$st = isset($cancellationRules[0]['st']) ? $cancellationRules[0]['st'] : '';
$et = isset($cancellationRules[0]['et']) ? $cancellationRules[0]['et'] : '';

// Output the 'et' value
echo $et;

            ?>
        </div>
        <div class="container">
            <div class="card-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Baggage Information</h5>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td> Check-in baggage :</td>
                                    <td class="text-right"><?php echo e($combo['iB'] > 0 ? $combo['iB'] . ' /Adult' : 'No'); ?></td>
                                </tr>
                                <tr>
                                    <td> Cabin baggage :</td>
                                    <td class="text-right"><?php echo e($combo['cB'] > 0 ? $combo['cB'] . ' /Adult' : 'No'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Cancellation Charges</h5>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Within 4 hours of departure</td>
                                    <td class="text-right">No Refund</td>
                                </tr>
                                <tr>
                                    <td>Cancellation fee (Before 4 hours Departure )</td>
                                    <td class="text-right"><?php echo $icon; ?><?php echo e(number_format($Refamount + $additionalFee + $agency, 2)); ?>

                                        <div class="icon-container">
                                            <i class="fa fa-info-circle"></i>
                                            <span class="hover-text">
                                                <table>
                                                    <tr>
                                                        <td>Flight Cost</td>
                                                        <td class="text-right"><?php echo $icon; ?><?php echo e(number_format($combo['totalFare'], 2)); ?>

                                                        <td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airline Fee</td>
                                                        <td class="text-right"><?php echo $icon; ?><?php echo e(number_format($Refamount + $additionalFee, 2)); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agency Fee</td>
                                                        <td class="text-right"><?php echo $icon; ?><?php echo e(number_format($agency, 2)); ?></td>
                                                    </tr>
                                                </table>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Amount refundable(Before 4 hours Departure)</td>
                                    <td class="text-right"> 
                                        <?php if($totalRefund < 0): ?>
                                           No Refund
                                        <?php else: ?>
                                            <?php echo $icon; ?><?php echo e(number_format($totalRefund, 2)); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Reschedule Charges</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Within 4 hours of departure</td>
                                        
                                        <td class="text-right">Non changeable </td>
                                    </tr>
                                    <tr>
                                        <td>Date change charges (Before 4 hours Departure)</td>
                                        <td class="text-right"><?php echo $icon; ?><?php echo e(number_format($totalDateRefund, 2)); ?>+Fare
                                            Difference if any</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Important Cancellation & Rescheduling Policy</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>• <?php echo e($policy); ?></li>
                                <li>• Charges will be applied per passenger, per sector.</li>
                                <li>• Rescheduling Charges = Rescheduling/Change Penalty + Fare Difference (if applicable).
                                </li>
                                <li>• Partial cancellations are not permitted for tickets booked under special discounted
                                    fares.
                                </li>
                                <li>• If the ticket is not canceled within the specified time or in case of a no-show, only
                                    statutory
                                    taxes will be refunded by the respective airline.</li>
                                <li>• Infants do not have a baggage allowance.</li>
                                <li>• For certain restricted fare types, amendments and cancellations are not allowed.</li>
                                <li>• Airline penalties must be reconfirmed before any cancellation or changes.</li>
                                <li>• Airline penalty charges are subject to change without prior notice.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php endif; ?>
        <?php else: ?>
        <div class="container mt-1">
            
            <div class="card-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Baggage Information</h5>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td> Check-in baggage :</td>
                                    <td class="text-right"><?php echo e($combo['iB'] > 0 ? $combo['iB'] . ' /Adult' : 'No'); ?></td>
                                </tr>
                                <tr>
                                    <td> Cabin baggage :</td>
                                    <td class="text-right"><?php echo e($combo['cB'] > 0 ? $combo['cB'] . ' /Adult' : 'No'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Cancellation Charges</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Before 4 hours Departure</td>
                                        <td>As per airlines policy</td>
                                    </tr>
                                    <tr>
                                        <td>Agency Fee</td>
                                        <td><?php echo $icon; ?><?php echo e(convertCurrency(400, $curr_currency)); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h5>Reschedule Charges</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Before 4 hours Departure</td>
                                        <td>As per airlines policy</td>
                                    </tr>
                                    <tr>
                                        <td>Agency Fee</td>
                                        <td><?php echo $icon; ?><?php echo e(convertCurrency(400, $curr_currency)); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Important Cancellation & Rescheduling Policy</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>• Charges will be applied per passenger, per sector.</li>
                            <li>• Rescheduling Charges = Rescheduling/Change Penalty + Fare Difference (if applicable).
                            </li>
                            <li>• Partial cancellations are not permitted for tickets booked under special discounted
                                fares.
                            </li>
                            <li>• If the ticket is not canceled within the specified time or in case of a no-show, only
                                statutory
                                taxes will be refunded by the respective airline.</li>
                            <li>• Infants do not have a baggage allowance.</li>
                            <li>• For certain restricted fare types, amendments and cancellations are not allowed.</li>
                            <li>• Airline penalties must be reconfirmed before any cancellation or changes.</li>
                            <li>• Airline penalty charges are subject to change without prior notice.</li>
                        </ul>
                    </div>
                </div>
            </div>
          
        </div>
        <?php endif; ?>
        <div class="row p-2">
            <div class="col-md-7 col-12">
            </div>
            <div class="col-md-5 col-12">
                <div class="ca card-shadow">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered m-0">
                                <tr>
                                    <td class="text-right">Base Fare</td>
                                    <td class="text-right"><?= $icon?><?php echo e(number_format($combo['totalBaseFares'], 2)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-right">Tax</td>
                                    <td class="text-right"><?= $icon?><?php echo e(number_format($combo['totalTaxess'], 2)); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Total Fare</th>
                                    <th class="text-right"><?= $icon?><?php echo e(number_format($combo['totalFare'], 2)); ?>

                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mb-3 p-2">
            <div class="text-right">
                <a href="#" class="btn btn-danger px-5" id="continueBooking">Continue Booking</a>
            </div>
        </div>
    </div>
</div>
<div class="virat" style="display: none">
    <form action="<?php echo e(route('booking.flightBooking')); ?>" method="post" id="form-checkout-threedata">
        <?php echo csrf_field(); ?>
        <ul>
            <input type="hidden" name="airCode" value="<?php echo e($combo['airCode']); ?>" />
            <input type="hidden" name="code" value="<?php echo e($combo['code']); ?>" />
            <input type="hidden" name="airName" value="<?php echo e($combo['airName']); ?>" />
            <input type="hidden" name="flightNumbers" value="<?php echo e($combo['flightNumbers']); ?>" />
            <input type="hidden" name="departureTimes" value="<?php echo e($combo['departureTimes']); ?>" />
            <input type="hidden" name="arrivalTimes" value="<?php echo e($combo['arrivalTimes']); ?>" />
            <input type="hidden" name="durationText" value="<?php echo e($combo['durationText']); ?>" />
            <input type="hidden" id="departureDate" name="on_date" value="<?php echo e($combo['departureDate']); ?>" />
            <input type="hidden" name="stopText" value="<?php echo e($combo['stopText']); ?>" />
            <input type="hidden" id="departureLocation" name="departureLocation"
                value="<?php echo e($combo['departureLocation']); ?>" />
            <input type="hidden" id="arrivalLocation" name="arrivalLocation" value="<?php echo e($combo['arrivalLocation']); ?>" />
            <input type="hidden" name="adults" value="<?php echo e($combo['adults']); ?>" />
            <input type="hidden" name="children" value="<?php echo e($combo['children']); ?>" />
            <input type="hidden" name="infants" value="<?php echo e($combo['infants']); ?>" />
            <input type="hidden" name="currency_type" value="<?php echo e($icon); ?>" />
            <input type="hidden" name="totalBaseFare" value="<?php echo e($combo['totalBaseFare']); ?>" />
            <input type="hidden" name="totalTaxes" value="<?php echo e($combo['totalTaxes']); ?>" />
            <input type="hidden" name="totalDiscount" value="<?php echo e($combo['totalDiscount']); ?>" />
            <input type="hidden" name="totalFare" value="<?php echo e($combo['totalFare']); ?>" />
            <input type="hidden" name="arrivalDate" value="<?php echo e($combo['arrivalDate']); ?>" />
            <input type="hidden" name="flight_details" value="<?php echo e(json_encode($combo['segment2']) ?? ''); ?>" />
            <input type="hidden" name="flight_class"
                value="<?php echo e(isset($combo['flight_class']) ? $combo['flight_class'] : ''); ?>" />
            
            <input type="hidden" name="flight_type" id="flight_type"
                value="<?php echo e($combo['departureDate'] ? 'return' : 'One way'); ?>">
            <input type="hidden" name="random_id" value="<?php echo e(rand(0000, 999999999999999999)); ?>" />
            <?php if(isset($combo['returnDate']) && $combo['returnDate'] != ''): ?>
                <input type="hidden" name="from" value="<?php echo e($combo['from'] ?? ''); ?>" />
                <input type="hidden" name="to" value="<?php echo e($combo['to'] ?? ''); ?>" />
                <input type="hidden" name="date" value="<?php echo e($combo['date'] ?? ''); ?>" />
                <input type="hidden" id="returndate" name="return_date"
                    value="<?php echo e($combo['returnDate'] ?? ''); ?>" />
            <?php endif; ?>
            <?php if(is_array($combo['stopsTime'])): ?>
                <input type="hidden" name="stopsTime" value="<?php echo e(json_encode($combo['stopsTime'])); ?>" />
            <?php else: ?>
                <input type="hidden" name="stopsTime" value="<?php echo e($combo['stopsTime']); ?>" />
            <?php endif; ?>
        </ul>
        
        <div class="bravo-booking-page padding-content">
            <div class="container">
                <div id="bravo-checkout-page">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="form-title">Booking Submission</h3>
                            <div class="booking-form">
                                <div id="form-checkout" class="form-checkout">
                                    <div class="form-section">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label>First Name <span
                                                            class="required">*</span></label> <input type="text"
                                                        placeholder="First Name" value="" name="first_name"
                                                        class="form-control" required onchange="handleInputChange()">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Last Name <span
                                                            class="required">*</span></label>
                                                    <input type="text" placeholder="Last Name" value=""
                                                        name="last_name" class="form-control"
                                                        onchange="handleInputChange()">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-email">
                                                <div class="form-group"><label>Email <span
                                                            class="required">*</span></label>
                                                    <input type="email" placeholder="email@domain.com"
                                                        value="" name="email" class="form-control" required
                                                        onchange="handleInputChange()">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Phone <span
                                                            class="required">*</span></label>
                                                    <input type="tel" placeholder="Your Phone" value=""
                                                        name="phone" class="form-control" required
                                                        onchange="handleInputChange()">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-address-line-1">
                                                <div class="form-group"><label>Address</label> <input type="text"
                                                        placeholder="Address line 1" value="" name="address"
                                                        class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6 field-city">
                                                <div class="form-group"><label>City </label> <input type="text"
                                                        value="" name="city" placeholder="Your City"
                                                        class="form-control" required onchange="handleInputChange()">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-state">
                                                <div class="form-group"><label>State/Province/Region </label>
                                                    <input type="text" value="" name="state"
                                                        placeholder="State/Province/Region" class="form-control"
                                                        required onchange="handleInputChange()">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-zip-code">
                                                <div class="form-group"><label>ZIP code/Postal code </label> <input
                                                        type="text" value="" name="zip_code"
                                                        placeholder="ZIP code/Postal code" class="form-control"
                                                        required onchange="handleInputChange()">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-country">
                                                <div class="form-group"><label>Country <span
                                                            class="required">*</span></label>
                                                    <select name="country" class="form-control" required
                                                        onchange="handleInputChange()">
                                                        <option value="" disabled>-- Select --</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua And Barbuda">Antigua And Barbuda
                                                        </option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia And Herzegovina">Bosnia And
                                                            Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British
                                                            Indian
                                                            Ocean
                                                            Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam
                                                        </option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                            Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, Democratic Republic">Congo,
                                                            Democratic
                                                            Republic</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic
                                                        </option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                        </option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland
                                                            Islands
                                                            (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island & Mcdonald Islands">Heard
                                                            Island &
                                                            Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See
                                                            (Vatican
                                                            City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India" selected="selected">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic Of">Iran, Islamic
                                                            Republic Of
                                                        </option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle Of Man">Isle Of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea">Korea</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao
                                                            People's
                                                            Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                            Jamahiriya
                                                        </option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States Of">Micronesia,
                                                            Federated States Of</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles
                                                        </option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian
                                                            Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation
                                                        </option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin">Saint Martin</option>
                                                        <option value="Saint Pierre And Miquelon">Saint Pierre And
                                                            Miquelon
                                                        </option>
                                                        <option value="Saint Vincent And Grenadines">Saint Vincent
                                                            And
                                                            Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome And Principe">Sao Tome And Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia And Sandwich Isl.">South
                                                            Georgia
                                                            And
                                                            Sandwich Isl.</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard And Jan Mayen">Svalbard And Jan
                                                            Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad And Tobago">Trinidad And Tobago
                                                        </option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks And Caicos Islands">Turks And Caicos
                                                            Islands
                                                        </option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Outlying Islands">United
                                                            States
                                                            Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands,
                                                            British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                        </option>
                                                        <option value="Wallis And Futuna">Wallis And Futuna
                                                        </option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6"><label>Special Requirements </label>
                                                <textarea name="customer_notes" cols="30" rows="2" placeholder="Special Requirements"
                                                    class="form-control" required onchange="handleInputChange()"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        
                                        <div id="accordionExampleform" class="gateways-table accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="mb-0">
                                                        <label data-toggle="collapse"
                                                            data-target="#gateway_offline_paymentform"
                                                            aria-expanded="true">
                                                            <input type="radio" name="payment_gateway"
                                                                value="offline_payment"
                                                                onchange="handleInputChange()">
                                                            DETAILS FILL PASSENGER FORM
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="gateway_offline_paymentform" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="gateway_name">
                                                            <div class="container mt-1">
                                                                <div class="form-section">
                                                                    <h4 class="section-title h6">Please be careful
                                                                        -
                                                                        Passenger
                                                                        details must match your passport or photo ID
                                                                    </h4>
                                                                    <!-- Adults Section -->
                                                                    <div class="form-group" style="display: none">
                                                                        <label>Number of Adults</label>
                                                                        <select id="numAdults" class="form-select"
                                                                            onchange="updateAdultFields()">
                                                                            <option value="0"
                                                                                <?php echo e($combo['adults'] == 0 ? 'selected' : ''); ?>>
                                                                                0</option>
                                                                            <option value="1"
                                                                                <?php echo e($combo['adults'] == 1 ? 'selected' : ''); ?>>
                                                                                1</option>
                                                                            <option value="2"
                                                                                <?php echo e($combo['adults'] == 2 ? 'selected' : ''); ?>>
                                                                                2</option>
                                                                            <option value="3"
                                                                                <?php echo e($combo['adults'] == 3 ? 'selected' : ''); ?>>
                                                                                3</option>
                                                                            <option value="4"
                                                                                <?php echo e($combo['adults'] == 4 ? 'selected' : ''); ?>>
                                                                                4</option>
                                                                            <option value="5"
                                                                                <?php echo e($combo['adults'] == 5 ? 'selected' : ''); ?>>
                                                                                5</option>
                                                                            <option value="6"
                                                                                <?php echo e($combo['adults'] == 6 ? 'selected' : ''); ?>>
                                                                                6</option>
                                                                            <option value="7"
                                                                                <?php echo e($combo['adults'] == 7 ? 'selected' : ''); ?>>
                                                                                7</option>
                                                                            <option value="8"
                                                                                <?php echo e($combo['adults'] == 8 ? 'selected' : ''); ?>>
                                                                                8</option>
                                                                            <option value="9"
                                                                                <?php echo e($combo['adults'] == 9 ? 'selected' : ''); ?>>
                                                                                9</option>
                                                                            <option value="10"
                                                                                <?php echo e($combo['adults'] == 10 ? 'selected' : ''); ?>>
                                                                                10</option>
                                                                            <option value="11"
                                                                                <?php echo e($combo['adults'] == 11 ? 'selected' : ''); ?>>
                                                                                11</option>
                                                                            <option value="12"
                                                                                <?php echo e($combo['adults'] == 12 ? 'selected' : ''); ?>>
                                                                                12</option>
                                                                            <option value="13"
                                                                                <?php echo e($combo['adults'] == 13 ? 'selected' : ''); ?>>
                                                                                13</option>
                                                                            <option value="14"
                                                                                <?php echo e($combo['adults'] == 14 ? 'selected' : ''); ?>>
                                                                                14</option>
                                                                            <option value="15"
                                                                                <?php echo e($combo['adults'] == 15 ? 'selected' : ''); ?>>
                                                                                15</option>
                                                                        </select>
                                                                    </div>

                                                                    <div id="adultFields"></div>
                                                                    <!-- Children Section -->
                                                                    <div class="form-group" style="display: none">
                                                                        <label>Number of Children</label>
                                                                        <select id="numChildren" class="form-select"
                                                                            onchange="updateChildFields()">
                                                                            <option value="0"
                                                                                <?php echo e($combo['children'] == 0 ? 'selected' : ''); ?>>
                                                                                0</option>
                                                                            <option value="1"
                                                                                <?php echo e($combo['children'] == 1 ? 'selected' : ''); ?>>
                                                                                1</option>
                                                                            <option value="2"
                                                                                <?php echo e($combo['children'] == 2 ? 'selected' : ''); ?>>
                                                                                2</option>
                                                                            <option value="3"
                                                                                <?php echo e($combo['children'] == 3 ? 'selected' : ''); ?>>
                                                                                3</option>
                                                                            <option value="4"
                                                                                <?php echo e($combo['children'] == 4 ? 'selected' : ''); ?>>
                                                                                4</option>
                                                                            <option value="5"
                                                                                <?php echo e($combo['children'] == 5 ? 'selected' : ''); ?>>
                                                                                5</option>
                                                                            <option value="6"
                                                                                <?php echo e($combo['children'] == 6 ? 'selected' : ''); ?>>
                                                                                6</option>
                                                                            <option value="7"
                                                                                <?php echo e($combo['children'] == 7 ? 'selected' : ''); ?>>
                                                                                7</option>
                                                                            <option value="8"
                                                                                <?php echo e($combo['children'] == 8 ? 'selected' : ''); ?>>
                                                                                8</option>
                                                                            <option value="9"
                                                                                <?php echo e($combo['children'] == 9 ? 'selected' : ''); ?>>
                                                                                9</option>
                                                                            <option value="10"
                                                                                <?php echo e($combo['children'] == 10 ? 'selected' : ''); ?>>
                                                                                10</option>
                                                                            <option value="11"
                                                                                <?php echo e($combo['children'] == 11 ? 'selected' : ''); ?>>
                                                                                11</option>
                                                                            <option value="12"
                                                                                <?php echo e($combo['children'] == 12 ? 'selected' : ''); ?>>
                                                                                12</option>
                                                                            <option value="13"
                                                                                <?php echo e($combo['children'] == 13 ? 'selected' : ''); ?>>
                                                                                13</option>
                                                                            <option value="14"
                                                                                <?php echo e($combo['children'] == 14 ? 'selected' : ''); ?>>
                                                                                14</option>
                                                                            <option value="15"
                                                                                <?php echo e($combo['children'] == 15 ? 'selected' : ''); ?>>
                                                                                15</option>
                                                                        </select>
                                                                    </div>

                                                                    <div id="childFields"></div>

                                                                    <!-- Infants Section -->
                                                                    <div class="form-group" style="display: none">
                                                                        <label>Number of Infants</label>
                                                                        <select id="numInfants" class="form-select"
                                                                            onchange="updateInfantFields()">
                                                                            <option value="0"
                                                                                <?php echo e($combo['infants'] == 0 ? 'selected' : ''); ?>>
                                                                                0</option>
                                                                            <option value="1"
                                                                                <?php echo e($combo['infants'] == 1 ? 'selected' : ''); ?>>
                                                                                1</option>
                                                                            <option value="2"
                                                                                <?php echo e($combo['infants'] == 2 ? 'selected' : ''); ?>>
                                                                                2</option>
                                                                            <option value="3"
                                                                                <?php echo e($combo['infants'] == 3 ? 'selected' : ''); ?>>
                                                                                3</option>
                                                                            <option value="4"
                                                                                <?php echo e($combo['infants'] == 4 ? 'selected' : ''); ?>>
                                                                                4</option>
                                                                            <option value="5"
                                                                                <?php echo e($combo['infants'] == 5 ? 'selected' : ''); ?>>
                                                                                5</option>
                                                                            <option value="6"
                                                                                <?php echo e($combo['infants'] == 6 ? 'selected' : ''); ?>>
                                                                                6</option>
                                                                            <option value="7"
                                                                                <?php echo e($combo['infants'] == 7 ? 'selected' : ''); ?>>
                                                                                7</option>
                                                                            <option value="8"
                                                                                <?php echo e($combo['infants'] == 8 ? 'selected' : ''); ?>>
                                                                                8</option>
                                                                            <option value="9"
                                                                                <?php echo e($combo['infants'] == 9 ? 'selected' : ''); ?>>
                                                                                9</option>
                                                                            <option value="10"
                                                                                <?php echo e($combo['infants'] == 10 ? 'selected' : ''); ?>>
                                                                                10</option>
                                                                            <option value="11"
                                                                                <?php echo e($combo['infants'] == 11 ? 'selected' : ''); ?>>
                                                                                11</option>
                                                                            <option value="12"
                                                                                <?php echo e($combo['infants'] == 12 ? 'selected' : ''); ?>>
                                                                                12</option>
                                                                            <option value="13"
                                                                                <?php echo e($combo['infants'] == 13 ? 'selected' : ''); ?>>
                                                                                13</option>
                                                                            <option value="14"
                                                                                <?php echo e($combo['infants'] == 14 ? 'selected' : ''); ?>>
                                                                                14</option>
                                                                            <option value="15"
                                                                                <?php echo e($combo['infants'] == 15 ? 'selected' : ''); ?>>
                                                                                15</option>
                                                                        </select>
                                                                    </div>
                                                                    <div id="infantFields"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="term-conditions-checkbox"><input
                                                type="checkbox" name="term_conditions" required> I have read and
                                            accept
                                            the <a target="_blank" href="">terms and conditions</a></label>
                                    </div>
                                    <div class="html_before_actions"></div>
                                    <p class="alert-text mt10 danger" style="">Term conditions is required
                                        field<br></p>
                                    <div class="form-actions"><button class="btn btn-danger">Submit
                                            <i class="fa fa-spin fa-spinner" style="display: none;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="booking-detail booking-form">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</div>

<script>
    function handleInputChange() {
        var formData = $('#form-checkout-threedata').serialize();
        $.ajax({
            url: '<?php echo e(route('auto.save.form')); ?>',
            type: 'POST',
            data: formData,
            success: function(response) {
                console.log('Data saved successfully!');
            },
            error: function(xhr, status, error) {
                console.error('An error occurred: ' + xhr.responseJSON.message);
            }
        });
    }
</script>
<script>
    document.getElementById('continueBooking').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor click behavior
        document.querySelector('.manish_unique').style.display = 'none'; // Hide Manish's div
        document.querySelector('.virat').style.display = 'block'; // Show Virat's div
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Booking/Views/frontend/combocheckout.blade.php ENDPATH**/ ?>