<style>
@media (max-width: 766px) {
    
}
 @media (max-width: 425px) {
    .bravo-booking-page .form-actions {
        text-align: left !important;
    }
    .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0px !important;
    margin-top: 10px !important;
}
.flightTimer {
    position: absolute;
    right: 2px !important;
    top: 86px !important;
    font-weight: bold;
    color: #ff7d01;
}
}


    .font_manish {
        color: #ff7d01;
    }

    .depature_web {
        margin-left: 34%;
    }

    .booking-review .booking-review-content .review-list li.final-total {
        border-top: 0px solid #eaeef3 !important;
        padding-top: 10px;
        font-size: 19px;
    }


    @media (max-width: 768px) {
        .depature_web_font {
            font-size: 1rem !important;
        }

        .depature_web {
            margin-left: 0 !important;
        }

        h5,
        .h5 {
            font-size: 0.9rem !important;
        }
    }
</style>
<style>
    @keyframes fadeOut {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    .nav-tabs .nav-link.active {
        color: #007bff;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .badge {
        background-color: #28a745;
        color: white;
        font-size: 14px;
        padding: 1px 3px;
        border-radius: 5px;
    }

    .table th,
    .table td {
        border-top: none;
    }

    .table th {
        font-weight: bold;
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }
</style>
<style>
    .icon-container {
        position: relative;
        display: inline-block;
        max-width: 50px;
    }

    .hover-text {
        display: none;
        position: absolute;
        bottom: 100%;
        /* icon ke upar dikhana */
        left: 50%;
        max-width: 200px;
        transform: translateX(-50%);
        background-color: #eaf0ea;
        /* color: white; */
        padding: 5px;
        border-radius: 5px;
    }

    .icon-container:hover .hover-text {
        display: block;
    }

    .flightTimer {
        position: absolute;
        right: 20px;
        top: 61px;
        font-weight: bold;
        color: #ff7d01;
    }

    .flight_timer {
        background-color: #fff;
        padding: 5px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>
<?php
    if (session('currency') == '') {
        $curr_currency = $_COOKIE['currency'] ?? 'INR';
    } else {
        $curr_currency = session('currency');
    }
    if (isset($_GET['currency'])) {
        $curr_currency = $_GET['currency'];
    }

    // dd($curr_currency);

?>

<?php
$selectedCurrency = isset($curr_currency) ? $curr_currency : 'INR';
$icon = match ($selectedCurrency) {
    'USD' => '<i class="fa fa-usd"></i>', // Dollar icon
    'INR' => '<i class="fa fa-inr"></i>', // Rupee icon
    'CAD' => 'C<i class="fa fa-dollar"></i>', // Canadian Dollar icon
    default => $selectedCurrency, // Fallback to the currency code
};
?>


<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('module/booking/css/checkout.css?_ver=' . config('app.asset_version'))); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="animation: fadeOut 5s forwards;">
            <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php elseif(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="animation: fadeOut 5s forwards;">
            <?php echo e(session('error')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    
    <div class="flightTimer">Time left=</i> <span class="flight_timer">10:00</span></div>
    <?php if(isset($flightDetails['type'])): ?>
        <?php echo $__env->make('Booking::frontend/roundtripcheckout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif(isset($flightDetails['combo']) && !is_null($flightDetails['combo'])): ?>
        <?php echo $__env->make('Booking::frontend/combocheckout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <div class="manish_unique">
            <div class="container">
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
                            <div class="card-header text-center ">
                                <b class="font_manish  " style="color: #ff7d01">Departure Flight</b>
                                
                            </div>
                            <span class="card-title"> <?php echo e($oneWay['departureLocation'] ?? ''); ?> →<span class="font_manish">
                                    <?php echo e($oneWay['triptimeReq'] ?? ''); ?> </span>→
                                <?php echo e($oneWay['arrivalLocation']); ?></span>
                            <span
                                class="float-right font_manish depature_web"><?php echo e(date('D, d M Y', strtotime($oneWay['departureDate'] ?? ''))); ?></span>
                            <?php $__currentLoopData = $oneWay['segment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    $code_rule = $departureCode . '-' . $arrivalCode ?? '';
                                ?>
                                <div class="row direct-flight p-2">
                                    <div class="col-md-2 col-2 ">
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
                                                                'st' => $detail['st'],
                                                                'et' => $detail['et'],
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
                                                                'policyInfo' => $detail['policyInfo'],
                                                                'st' => $detail['st'],
                                                                'et' => $detail['et'],
                                                            ];
                                                            break;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                // echo '<pre>';
                                // echo "No Show Rules:\n";
                                // print_r($noShowRules);

                                // echo "\nDate Change Rules:\n";
                                // print_r($dateChangeRules);

                                // echo "\nCancellation Rules:\n";
                                // print_r($cancellationRules);

                                // echo "\nSeat Chargeable Rules:\n";
                                // print_r($seatChargeableRules);
                                $hours = isset($noShowRules[0]['et']) ? $noShowRules[0]['st'] : 4;
                                $policy = isset($noShowRules[0]['policyInfo'])
                                    ? $noShowRules[0]['policyInfo']
                                    : 'As per airlines policy';
                                $Refamount = convertCurrency($cancellationRules[0]['amount']??0, $curr_currency);
                                $crule = isset($cancellationRules[0]['additionalFee'])  ? $cancellationRules[0]['additionalFee']:0; 
                                $additionalFee = convertCurrency(   $crule,    $curr_currency );
                                $Dateamount = convertCurrency($dateChangeRules[0]['amount']??0, $curr_currency);
                                $DateadditionalFee = convertCurrency(
                                    $dateChangeRules[0]['additionalFee']??0,
                                    $curr_currency,
                                );
                                $agency = convertCurrency(400, $curr_currency);
                                $totalDateRefund = $Dateamount + $DateadditionalFee + $agency;
                                $totalRefund = $oneWay['totalFare'] - ($Refamount + $additionalFee + $agency);
                                $st = isset($cancellationRules[0]['st']) ? $cancellationRules[0]['st'] : 0;
                                $et = isset($cancellationRules[0]['et']) ? $cancellationRules[0]['et'] : 0;
                                // if(isset($cancellationRules[1]['amount']) && $cancellationRules[1]['amount'] != 0 ){
                                //     $Refamount1 = convertCurrency($cancellationRules[1]['amount'],$curr_currency);
                                //     $additionalFee1 =  convertCurrency($cancellationRules[1]['additionalFee'],$curr_currency);
                                //     $st1 = isset($cancellationRules[1]['st']) ? $cancellationRules[1]['st'] : 0;
                                //     $et1 = isset($cancellationRules[1]['et']) ? $cancellationRules[1]['et'] : 0;
                                //     $totalRefund1 = $oneWay['totalFare'] - ($Refamount1 + $additionalFee1 + $agency);
                                //  }
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
                                                    <td class="text-right">
                                                        <?php echo e($oneWay['iB'] > 0 ? $oneWay['iB'] . ' /Adult' : '15kg/Adult'); ?>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Cabin baggage :</td>
                                                    <td class="text-right">
                                                        <?php echo e($oneWay['cB'] > 0 ? $oneWay['cB'] . ' /Adult' : 'No'); ?></td>
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
                                                    <td class="text-right"><?php echo $icon; ?>

                                                        <?php echo e(number_format($Refamount + $additionalFee + $agency, 2)); ?>

                                                        <div class="icon-container">
                                                            <i class="fa fa-info-circle"></i>
                                                            <span class="hover-text">
                                                                <table>
                                                                    <tr>
                                                                        <td>Flight Cost</td>
                                                                        <td class="text-right"><?php echo $icon; ?>

                                                                            <?php echo e(number_format($oneWay['totalFare'], 2)); ?>

                                                                        <td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airline Fee</td>
                                                                        <td class="text-right"><?php echo $icon; ?>

                                                                            <?php echo e(number_format($Refamount + $additionalFee, 2)); ?>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Agency Fee</td>
                                                                        <td class="text-right"><?php echo $icon; ?>

                                                                            <?php echo e(number_format($agency, 2)); ?>

                                                                        </td>
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
                                                            <?php echo $icon; ?> <?php echo e(number_format($totalRefund, 2)); ?>

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
                                                        <td class="text-right"><?php echo $icon; ?>

                                                            <?php echo e(number_format($totalDateRefund, 2)); ?>+Fare
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
                                                <li>• Rescheduling Charges = Rescheduling/Change Penalty + Fare Difference
                                                    (if
                                                    applicable).
                                                </li>
                                                <li>• Partial cancellations are not permitted for tickets booked under
                                                    special
                                                    discounted
                                                    fares.
                                                </li>
                                                <li>• If the ticket is not canceled within the specified time or in case of
                                                    a
                                                    no-show,
                                                    only
                                                    statutory
                                                    taxes will be refunded by the respective airline.</li>
                                                <li>• Infants do not have a baggage allowance.</li>
                                                <li>• For certain restricted fare types, amendments and cancellations are
                                                    not
                                                    allowed.
                                                </li>
                                                <li>• Airline penalties must be reconfirmed before any cancellation or
                                                    changes.
                                                </li>
                                                <li>• Airline penalty charges are subject to change without prior notice.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="row mt-1">
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
                                                <td class="text-right">
                                                    <?php echo e($oneWay['iB'] > 0 ? $oneWay['iB'] . ' /Adult' : 'No'); ?></td>
                                            </tr>
                                            <tr>
                                                <td> Cabin baggage :</td>
                                                <td class="text-right">
                                                    <?php echo e($oneWay['cB'] > 0 ? $oneWay['cB'] . ' /Adult' : 'No'); ?></td>
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
                                                    <td><?php echo $icon; ?><?php echo e(convertCurrency(400, $curr_currency)); ?>

                                                    </td>
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
                                                    <td><?php echo $icon; ?><?php echo e(convertCurrency(400, $curr_currency)); ?>

                                                    </td>
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
                                        <li>• Rescheduling Charges = Rescheduling/Change Penalty + Fare Difference (if
                                            applicable).
                                        </li>
                                        <li>• Partial cancellations are not permitted for tickets booked under special
                                            discounted
                                            fares.
                                        </li>
                                        <li>• If the ticket is not canceled within the specified time or in case of a
                                            no-show, only
                                            statutory
                                            taxes will be refunded by the respective airline.</li>
                                        <li>• Infants do not have a baggage allowance.</li>
                                        <li>• For certain restricted fare types, amendments and cancellations are not
                                            allowed.</li>
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
                                            <td class="text-right">
                                                <?= $icon ?><?php echo e(number_format($oneWay['totalBaseFare'], 2)); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Tax</td>
                                            <td class="text-right">
                                                <?= $icon ?><?php echo e(number_format($oneWay['totalTaxes'], 2)); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Total Fare</th>
                                            <th class="text-right">
                                                <?= $icon ?><?php echo e(number_format($oneWay['totalFare'], 2)); ?></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 text-center m-1">
                    <div class="text-right">
                        <a href="#" class="btn btn-danger px-5 "style="text-decoration: none;" id="continueBooking">Continue
                            Booking</a>
                    </div>
                </div>
            </div>
            
        </div>
        </div>

        
        <div class="virat" style="display: none">
            <form action="<?php echo e(route('booking.flightBooking')); ?>" method="post" id="form-checkout">
                <?php echo csrf_field(); ?>
                <ul>
                    <input type="hidden" name="airCode" value="<?php echo e($oneWay['airCode']); ?>" />
                    <input type="hidden" name="code" value="<?php echo e($oneWay['code']); ?>" />
                    <input type="hidden" name="airName" value="<?php echo e($oneWay['airName']); ?>" />
                    <input type="hidden" name="flightNumbers" value="<?php echo e($oneWay['flightNumbers']); ?>" />
                    <input type="hidden" name="departureTimes" value="<?php echo e($oneWay['departureTimes']); ?>" />
                    <input type="hidden" name="arrivalTimes" value="<?php echo e($oneWay['arrivalTimes']); ?>" />
                    <input type="hidden" name="durationText" value="<?php echo e($oneWay['durationText']); ?>" />
                    <input type="hidden" id="departuredate" name="departureDate"
                        value="<?php echo e($oneWay['departureDate']); ?>" />
                    <input type="hidden" name="stopText" value="<?php echo e($oneWay['stopText']); ?>" />
                    <input type="hidden" id="departure" name="departureLocation"
                        value="<?php echo e($oneWay['departureLocation']); ?>" />
                    <input type="hidden" id="arrival" name="arrivalLocation"
                        value="<?php echo e($oneWay['arrivalLocation']); ?>" />
                    <input type="hidden" name="adults" value="<?php echo e($oneWay['adults']); ?>" />
                    <input type="hidden" name="children" value="<?php echo e($oneWay['children']); ?>" />
                    <input type="hidden" name="infants" value="<?php echo e($oneWay['infants']); ?>" />
                    <input type="hidden" name="currency_type" value="<?php echo e($icon); ?>" />
                    <input type="hidden" name="totalBaseFare" value="<?php echo e($oneWay['totalBaseFare']); ?>" />
                    <input type="hidden" name="totalTaxes" value="<?php echo e($oneWay['totalTaxes']); ?>" />
                    <input type="hidden" name="totalDiscount" value="<?php echo e($oneWay['totalDiscount']); ?>" />
                    <input type="hidden" name="totalFare" value="<?php echo e($oneWay['totalFare']); ?>" />
                    <input type="hidden" name="arrivalDate" value="<?php echo e($oneWay['arrivalDate']); ?>" />
                    <input type="hidden" name="flight_class" value="<?php echo e($oneWay['flight_class'] ?? ''); ?>" />
                    <input type="hidden" name="flight_details" value="<?php echo e(json_encode($oneWay['segment']) ?? ''); ?>" />
                    <!-- Add Random ID Hidden Input -->
                    <input type="hidden" name="random_id" value="<?php echo e(rand(0000, 999999999999999999)); ?>" />
                    <?php if(isset($oneWay['returnDate']) && $oneWay['returnDate'] != ''): ?>
                        

                        <input type="hidden" id="from" name="from" value="<?php echo e($oneWay['from'] ?? ''); ?>" />
                        <input type="hidden" id="to" name="to" value="<?php echo e($oneWay['to'] ?? ''); ?>" />
                        <input type="hidden" id="date" name="date" value="<?php echo e($oneWay['date'] ?? ''); ?>" />
                        <input type="hidden" id="returnDate" name="returnDate"
                            value="<?php echo e($oneWay['returnDate'] ?? ''); ?>" />
                    <?php endif; ?>
                    <?php if(is_array($oneWay['stopsTime'])): ?>
                        <input type="hidden" name="stopsTime" value="<?php echo e(json_encode($oneWay['stopsTime'])); ?>" />
                    <?php else: ?>
                        <input type="hidden" name="stopsTime" value="<?php echo e($oneWay['stopsTime']); ?>" />
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
                                                                    class="required">*</span></label> <input
                                                                type="text" placeholder="First Name" value=""
                                                                name="first_name" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label>Last Name <span
                                                                    class="required">*</span></label>
                                                            <input type="text" placeholder="Last Name" value=""
                                                                name="last_name" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 field-email">
                                                        <div class="form-group"><label>Email <span
                                                                    class="required">*</span></label>
                                                            <input type="email" placeholder="email@domain.com"
                                                                value="" name="email" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label>Phone <span
                                                                    class="required">*</span></label>
                                                            <input type="tel" placeholder="Your Phone" value=""
                                                                name="phone" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 field-address-line-1">
                                                        <div class="form-group"><label>Address<span
                                                                    class="required">*</span></label> <input
                                                                type="text" placeholder="Address line 1"
                                                                value="" name="address" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 field-city">
                                                        <div class="form-group"><label>City <span
                                                                    class="required">*</span></label> <input type="text"
                                                                value="" name="city" placeholder="Your City"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 field-state">
                                                        <div class="form-group"><label>State/Province/Region <span
                                                                    class="required">*</span> </label>
                                                            <input type="text" value="" name="state"
                                                                placeholder="State/Province/Region" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 field-zip-code">
                                                        <div class="form-group"><label>ZIP code/Postal code <span
                                                                    class="required">*</span></label>
                                                            <input type="text" value="" name="zip_code"
                                                                placeholder="ZIP code/Postal code" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 field-country">
                                                        <div class="form-group"><label>Country <span
                                                                    class="required">*</span></label>
                                                            <select name="country" class="form-control" required>
                                                                <option value="">-- Select --</option>
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
                                                                <option value="Central African Republic">Central
                                                                    African
                                                                    Republic
                                                                </option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island
                                                                </option>
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
                                                                <option value="French Polynesia">French Polynesia
                                                                </option>
                                                                <option value="French Southern Territories">French
                                                                    Southern
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
                                                                <option value="India" selected="selected">India
                                                                </option>
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
                                                                <option value="Marshall Islands">Marshall Islands
                                                                </option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States Of">
                                                                    Micronesia,
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
                                                                <option value="Netherlands Antilles">Netherlands
                                                                    Antilles
                                                                </option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern
                                                                    Mariana
                                                                    Islands
                                                                </option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">
                                                                    Palestinian
                                                                    Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea
                                                                </option>
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
                                                                <option value="Saint Barthelemy">Saint Barthelemy
                                                                </option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts And Nevis">Saint Kitts And
                                                                    Nevis
                                                                </option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Martin">Saint Martin</option>
                                                                <option value="Saint Pierre And Miquelon">Saint Pierre
                                                                    And
                                                                    Miquelon
                                                                </option>
                                                                <option value="Saint Vincent And Grenadines">Saint
                                                                    Vincent
                                                                    And
                                                                    Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome And Principe">Sao Tome And
                                                                    Principe
                                                                </option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands
                                                                </option>
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
                                                                <option value="Syrian Arab Republic">Syrian Arab
                                                                    Republic
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
                                                                <option value="Turks And Caicos Islands">Turks And
                                                                    Caicos
                                                                    Islands
                                                                </option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab
                                                                    Emirates
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
                                                                <option value="Virgin Islands, U.S.">Virgin Islands,
                                                                    U.S.
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
                                                    <div class="col-md-6"><label>Special Requirements <span
                                                                    class="required">*</span></label>
                                                        <textarea name="customer_notes" cols="30" rows="2" placeholder="Special Requirements"
                                                            class="form-control"></textarea>
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
                                                                        value="offline_payment">
                                                                    DETAILS FILL PASSENGER FORM
                                                                </label>
                                                            </h4>
                                                        </div>
                                                        <div id="gateway_offline_paymentform" class="collapse show">
                                                            <div class="card-body">
                                                                <div class="gateway_name">
                                                                    <div class="container mt-1">
                                                                        <div class="form-section">
                                                                            <h4 class="section-title h6">Please be
                                                                                careful
                                                                                -
                                                                                Passenger
                                                                                details must match your passport or
                                                                                photo ID
                                                                            </h4>
                                                                            <!-- Adults Section -->
                                                                            <div class="form-group" style="display: none">
                                                                                <label>Number of Adults</label>
                                                                                <select id="numAdults" class="form-select"
                                                                                    onchange="updateAdultFields()">
                                                                                    <option value="0"
                                                                                        <?php echo e($oneWay['adults'] == 0 ? 'selected' : ''); ?>>
                                                                                        0</option>
                                                                                    <option value="1"
                                                                                        <?php echo e($oneWay['adults'] == 1 ? 'selected' : ''); ?>>
                                                                                        1</option>
                                                                                    <option value="2"
                                                                                        <?php echo e($oneWay['adults'] == 2 ? 'selected' : ''); ?>>
                                                                                        2</option>
                                                                                    <option value="3"
                                                                                        <?php echo e($oneWay['adults'] == 3 ? 'selected' : ''); ?>>
                                                                                        3</option>
                                                                                    <option value="4"
                                                                                        <?php echo e($oneWay['adults'] == 4 ? 'selected' : ''); ?>>
                                                                                        4</option>
                                                                                    <option value="5"
                                                                                        <?php echo e($oneWay['adults'] == 5 ? 'selected' : ''); ?>>
                                                                                        5</option>
                                                                                    <option value="6"
                                                                                        <?php echo e($oneWay['adults'] == 6 ? 'selected' : ''); ?>>
                                                                                        6</option>
                                                                                    <option value="7"
                                                                                        <?php echo e($oneWay['adults'] == 7 ? 'selected' : ''); ?>>
                                                                                        7</option>
                                                                                    <option value="8"
                                                                                        <?php echo e($oneWay['adults'] == 8 ? 'selected' : ''); ?>>
                                                                                        8</option>
                                                                                    <option value="9"
                                                                                        <?php echo e($oneWay['adults'] == 9 ? 'selected' : ''); ?>>
                                                                                        9</option>
                                                                                    <option value="10"
                                                                                        <?php echo e($oneWay['adults'] == 10 ? 'selected' : ''); ?>>
                                                                                        10</option>
                                                                                    <option value="11"
                                                                                        <?php echo e($oneWay['adults'] == 11 ? 'selected' : ''); ?>>
                                                                                        11</option>
                                                                                    <option value="12"
                                                                                        <?php echo e($oneWay['adults'] == 12 ? 'selected' : ''); ?>>
                                                                                        12</option>
                                                                                    <option value="13"
                                                                                        <?php echo e($oneWay['adults'] == 13 ? 'selected' : ''); ?>>
                                                                                        13</option>
                                                                                    <option value="14"
                                                                                        <?php echo e($oneWay['adults'] == 14 ? 'selected' : ''); ?>>
                                                                                        14</option>
                                                                                    <option value="15"
                                                                                        <?php echo e($oneWay['adults'] == 15 ? 'selected' : ''); ?>>
                                                                                        15</option>
                                                                                </select>
                                                                            </div>

                                                                            <div id="adultFields"></div>
                                                                            <!-- Children Section -->
                                                                            <div class="form-group" style="display: none">
                                                                                <label>Number of Children</label>
                                                                                <select id="numChildren"
                                                                                    class="form-select"
                                                                                    onchange="updateChildFields()">
                                                                                    <option value="0"
                                                                                        <?php echo e($oneWay['children'] == 0 ? 'selected' : ''); ?>>
                                                                                        0</option>
                                                                                    <option value="1"
                                                                                        <?php echo e($oneWay['children'] == 1 ? 'selected' : ''); ?>>
                                                                                        1</option>
                                                                                    <option value="2"
                                                                                        <?php echo e($oneWay['children'] == 2 ? 'selected' : ''); ?>>
                                                                                        2</option>
                                                                                    <option value="3"
                                                                                        <?php echo e($oneWay['children'] == 3 ? 'selected' : ''); ?>>
                                                                                        3</option>
                                                                                    <option value="4"
                                                                                        <?php echo e($oneWay['children'] == 4 ? 'selected' : ''); ?>>
                                                                                        4</option>
                                                                                    <option value="5"
                                                                                        <?php echo e($oneWay['children'] == 5 ? 'selected' : ''); ?>>
                                                                                        5</option>
                                                                                    <option value="6"
                                                                                        <?php echo e($oneWay['children'] == 6 ? 'selected' : ''); ?>>
                                                                                        6</option>
                                                                                    <option value="7"
                                                                                        <?php echo e($oneWay['children'] == 7 ? 'selected' : ''); ?>>
                                                                                        7</option>
                                                                                    <option value="8"
                                                                                        <?php echo e($oneWay['children'] == 8 ? 'selected' : ''); ?>>
                                                                                        8</option>
                                                                                    <option value="9"
                                                                                        <?php echo e($oneWay['children'] == 9 ? 'selected' : ''); ?>>
                                                                                        9</option>
                                                                                    <option value="10"
                                                                                        <?php echo e($oneWay['children'] == 10 ? 'selected' : ''); ?>>
                                                                                        10</option>
                                                                                    <option value="11"
                                                                                        <?php echo e($oneWay['children'] == 11 ? 'selected' : ''); ?>>
                                                                                        11</option>
                                                                                    <option value="12"
                                                                                        <?php echo e($oneWay['children'] == 12 ? 'selected' : ''); ?>>
                                                                                        12</option>
                                                                                    <option value="13"
                                                                                        <?php echo e($oneWay['children'] == 13 ? 'selected' : ''); ?>>
                                                                                        13</option>
                                                                                    <option value="14"
                                                                                        <?php echo e($oneWay['children'] == 14 ? 'selected' : ''); ?>>
                                                                                        14</option>
                                                                                    <option value="15"
                                                                                        <?php echo e($oneWay['children'] == 15 ? 'selected' : ''); ?>>
                                                                                        15</option>
                                                                                </select>
                                                                            </div>

                                                                            <div id="childFields"></div>

                                                                            <!-- Infants Section -->
                                                                            <div class="form-group" style="display: none">
                                                                                <label>Number of Infants</label>
                                                                                <select id="numInfants"
                                                                                    class="form-select"
                                                                                    onchange="updateInfantFields()">
                                                                                    <option value="0"
                                                                                        <?php echo e($oneWay['infants'] == 0 ? 'selected' : ''); ?>>
                                                                                        0</option>
                                                                                    <option value="1"
                                                                                        <?php echo e($oneWay['infants'] == 1 ? 'selected' : ''); ?>>
                                                                                        1</option>
                                                                                    <option value="2"
                                                                                        <?php echo e($oneWay['infants'] == 2 ? 'selected' : ''); ?>>
                                                                                        2</option>
                                                                                    <option value="3"
                                                                                        <?php echo e($oneWay['infants'] == 3 ? 'selected' : ''); ?>>
                                                                                        3</option>
                                                                                    <option value="4"
                                                                                        <?php echo e($oneWay['infants'] == 4 ? 'selected' : ''); ?>>
                                                                                        4</option>
                                                                                    <option value="5"
                                                                                        <?php echo e($oneWay['infants'] == 5 ? 'selected' : ''); ?>>
                                                                                        5</option>
                                                                                    <option value="6"
                                                                                        <?php echo e($oneWay['infants'] == 6 ? 'selected' : ''); ?>>
                                                                                        6</option>
                                                                                    <option value="7"
                                                                                        <?php echo e($oneWay['infants'] == 7 ? 'selected' : ''); ?>>
                                                                                        7</option>
                                                                                    <option value="8"
                                                                                        <?php echo e($oneWay['infants'] == 8 ? 'selected' : ''); ?>>
                                                                                        8</option>
                                                                                    <option value="9"
                                                                                        <?php echo e($oneWay['infants'] == 9 ? 'selected' : ''); ?>>
                                                                                        9</option>
                                                                                    <option value="10"
                                                                                        <?php echo e($oneWay['infants'] == 10 ? 'selected' : ''); ?>>
                                                                                        10</option>
                                                                                    <option value="11"
                                                                                        <?php echo e($oneWay['infants'] == 11 ? 'selected' : ''); ?>>
                                                                                        11</option>
                                                                                    <option value="12"
                                                                                        <?php echo e($oneWay['infants'] == 12 ? 'selected' : ''); ?>>
                                                                                        12</option>
                                                                                    <option value="13"
                                                                                        <?php echo e($oneWay['infants'] == 13 ? 'selected' : ''); ?>>
                                                                                        13</option>
                                                                                    <option value="14"
                                                                                        <?php echo e($oneWay['infants'] == 14 ? 'selected' : ''); ?>>
                                                                                        14</option>
                                                                                    <option value="15"
                                                                                        <?php echo e($oneWay['infants'] == 15 ? 'selected' : ''); ?>>
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
                                                        type="checkbox" name="term_conditions" required> I have read
                                                    and
                                                    accept
                                                    the
                                                    <a target="_blank" href="">terms and conditions</a></label>
                                            </div>
                                            <div class="html_before_actions"></div>
                                            <p class="alert-text mt10 danger" style="">Term conditions is
                                                required
                                                field<br></p>
                                            <div class="form-actions  text-start" ><button class="btn btn-danger">Submit
                                                    <i class="fa fa-spin fa-spinner" style="display: none;"></i></button>
                                            </div>

                                        </div>
                                         <div class="form-action" id="BackBooking" style="position: absolute;left: 170px;bottom: 0px;"><button class="btn btn-warning">Back
                                                 </button>
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
            document.getElementById('continueBooking').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor click behavior
                document.querySelector('.manish_unique').style.display = 'none'; // Hide Manish's div
                document.querySelector('.virat').style.display = 'block'; // Show Virat's div
            });
        </script>
         <script>
            document.getElementById('BackBooking').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor click behavior
                document.querySelector('.manish_unique').style.display = 'block'; // Hide Manish's div
                document.querySelector('.virat').style.display = 'none'; // Show Virat's div
            });
        </script>
    <?php endif; ?>
    <script>
        var timeLimitInMinutes = 10;
        var timeLimitInSeconds = timeLimitInMinutes * 60;
        var timerElements = document.getElementsByClassName('flight_timer');
        var timerElement = timerElements[0]; // Assuming there is only one element with the class "flight_timer"

        function startTimer() {
            timeLimitInSeconds--;
            var minutes = Math.floor(timeLimitInSeconds / 60);
            var seconds = timeLimitInSeconds % 60;

            if (timeLimitInSeconds < 10) {
                timerElement.textContent = '00:00';
                clearInterval(timerInterval);
                window.location.href = 'https://flight.tripgare.com';
                return;
            }

            if (minutes < 10) {
                minutes = '0' + minutes;
            }
            if (seconds < 1) {
                seconds = '0' + seconds;
            }

            timerElement.textContent = minutes + ':' + seconds;
        }

        var timerInterval = setInterval(startTimer, 1000);
    </script>
<?php $__env->stopSection(); ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initially populate fields based on pre-set values
        updateAdultFields();
        updateChildFields();
        updateInfantFields();
    });

    function updateAdultFields() {
        const numAdults = document.getElementById("numAdults").value;
        const adultFieldsContainer = document.getElementById("adultFields");
        adultFieldsContainer.innerHTML = ''; // Clear existing fields

        for (let i = 1; i <= numAdults; i++) {
            adultFieldsContainer.innerHTML += `
            <div class="adult" id="adult${i}">
                <div class="section-title">Adult ${i}</div>
                <div class="form-group">
                    <label>Traveller name and gender</label>
                    <div class="row">
                        <div class="col-md-3 colo-12 pt-2"><input type="text" class="form-control" placeholder="First name" name="adult_fname[]" required></div>
                        <div class="col-md-3 col-12 pt-2"><input type="text" class="form-control" placeholder="Last name" name="adult_lname[]" required></div>
                        <div class="col-md-3 col-12 pt-2"><input type="date" class="form-control" placeholder="Date of birth" name="adult_date[]" required></div>
                        <div class="col-md-3 col-12 pt-2">
                            <select class="form-select form-control" required  name="adult_gender[]">
                                <option value="" selected  disabled>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        `;
        }
    }

    function updateChildFields() {
        const numChildren = document.getElementById("numChildren").value;
        const childFieldsContainer = document.getElementById("childFields");
        childFieldsContainer.innerHTML = ''; // Clear existing fields

        for (let i = 1; i <= numChildren; i++) {
            childFieldsContainer.innerHTML += `
            <div class="child" id="child${i}">
                <div class="section-title">Child ${i} <span class="section-subtitle">(2-12 yrs)</span></div>
                <div class="form-group">
                    <label>Traveller name, gender, and date of birth</label>
                    <div class="row">
                        <div class="col-md-3 col-12 pt-2"><input type="text" class="form-control" placeholder="First name" required name="child_fname[]"></div>
                        <div class="col-md-3 col-12 pt-2"><input type="text" class="form-control" placeholder="Last name" required name="child_lname[]"></div>
                        <div class="col-md-3 col-12 pt-2">
                            <select class="form-select form-control" required name="child_gender[]">
                                <option value="" selected  disabled>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-12 pt-2"><input type="date" class="form-control" required name="child_dob[]"></div>
                    </div>
                </div>
                <hr>
            </div>
        `;
        }
    }

    function updateInfantFields() {
        const numInfants = document.getElementById("numInfants").value;
        const infantFieldsContainer = document.getElementById("infantFields");
        infantFieldsContainer.innerHTML = ''; // Clear existing fields

        for (let i = 1; i <= numInfants; i++) {
            infantFieldsContainer.innerHTML += `
            <div class="infant" id="infant${i}">
                <div class="section-title">Infant ${i} <span class="section-subtitle">(below 2 yrs)</span></div>
                <div class="form-group">
                    <label>Traveller name, gender, and date of birth</label>
                    <div class="row">
                        <div class="col-md-3 col-12 pt-2"><input type="text" class="form-control" placeholder="First name" name="infant_fname[]" required></div>
                        <div class="col-md-3 col-12 pt-2"><input type="text" class="form-control" placeholder="Last name" name="infant_lname[]" ></div>
                        <div class="col-md-3 col-12 pt-2">
                            <select class="form-select form-control" required name="infant_gender[]">
                                <option value="" selected  disabled>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-12 pt-2"><input type="date" class="form-control" required name="infant_dob[]"></div>
                    </div>
                </div>
                <hr>
            </div>
        `;
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Auto-save functionality on input change
        $('#form-checkout input').on('change input', function() {
            // Gather form data
            var from = document.getElementById('departure').value;
            var to = document.getElementById('arrival').value;
            var date = document.getElementById('departuredate').value;
            // var returnDate = document.getElementById('returnDate').value;
            var returnfromElement = document.getElementById('from');
            var returnfrom = returnfromElement ? returnfromElement.value : null;
            if (returnfrom) {
                console.log('Return Flight:', returnfrom);
            } else {
                console.log('Return Flight is not available.');
            }
            var returnDateElement = document.getElementById('returnDate');
            var returnDate = returnDateElement ? returnDateElement.value : null;
            if (returnDate) {
                console.log('Return Date:', returnDate);
            } else {
                console.log('Return Date is not available.');
            }

            // Serialize form data
            var formData = $('#form-checkout').serialize();

            // Append returnDate to formData if it exists
            if (returnfrom) {
                formData += '&returnDate=' + encodeURIComponent(returnfrom);
            }

            if (returnDate) {
                formData += '&returnDate=' + encodeURIComponent(returnDate);
            }

            formData += '&from=' + encodeURIComponent(from) + '&to=' + encodeURIComponent(to) +
                '&on_date=' + encodeURIComponent(date);


            // AJAX request
            $.ajax({
                url: '<?php echo e(route('auto.save.form')); ?>', // Form action URL
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log('Data saved successfully!');
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error('An error occurred: ' + xhr.responseJSON.message);
                }
            });
        });
    });
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Booking/Views/frontend/checkout.blade.php ENDPATH**/ ?>