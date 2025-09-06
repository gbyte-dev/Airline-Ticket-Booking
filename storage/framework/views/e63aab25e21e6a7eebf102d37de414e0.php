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

<?php
$selectedCurrency = isset($curr_currency) ? $curr_currency : 'CAD';

$icon = match ($selectedCurrency) {
    'USD' => '<i class="fa fa-usd"></i>', // Dollar icon
    'INR' => '<i class="fa fa-inr"></i>', // Rupee icon
    'CAD' => 'C<i class="fa fa-dollar"></i>', // Canadian Dollar icon
    default => $selectedCurrency, // Fallback to the currency code
};
?>


<?php
// dd($godata);
$getdata = [];
$returndata = [];
$i = 1;
foreach ($godata as $go) {
    if (is_array($go)) {
        $getdata[$i]['airCode'] = isset($go['fD']['aI']['code']) ? $go['fD']['aI']['code'] : ' ';
        $getdata[$i]['code'] = isset($go['fD']['aI']['name']) ? $go['fD']['aI']['name'] : ' ';
        $getdata[$i]['airName'] = isset($go['fD']['aI']['name']) ? $go['fD']['aI']['name'] : ' ';
        $getdata[$i]['flightNumbers'] = isset($go['fD']['fN']) ? $go['fD']['fN'] : ' ';
        $getdata[$i]['departureTimes'] = isset($go['dt']) ? date('H:i', strtotime($go['dt'])) : '';
        $getdata[$i]['arrivalTimes'] = isset($go['at']) ? date('H:i', strtotime($go['at'])) : '';
        $getdata[$i]['departureDate'] = isset($go['dt']) ? date('D,j M Y', strtotime($go['dt'])) : '';
        $getdata[$i]['arrivalDate'] = isset($go['at']) ? date('D,j M Y', strtotime($go['at'])) : '';
        $start = new DateTime($go['dt']);
        $end = new DateTime($go['at']);
        $interval = $start->diff($end);
        $hours = $interval->h;
        $minutes = $interval->i;
        $hours += $interval->days * 24;
        $getdata[$i]['durationText'] = $hours . 'hours  ' . $minutes . '  minutes';
        $sto = count($godata) > 1 ? count($godata) - 1 : 0;
        $stopText = $sto > 0 ? "$sto stops" : 'Direct';
        $getdata[$i]['departureLocation'] = htmlspecialchars($go['da']['city'] . ' (' . $go['da']['code'] . ')');
        $getdata[$i]['arrivalLocation'] = htmlspecialchars($go['aa']['city'] . ' (' . $go['aa']['code'] . ')');
        $getdata[$i]['departureLocations'] = isset($go['da']) ? htmlspecialchars($go['da']['name'] . $go['da']['city'] . ' (' . $go['da']['code'] . ') ' . $go['da']['country']) : ' ';
        $getdata[$i]['arrivalLocations'] = isset($go['aa']) ? htmlspecialchars($go['aa']['name'] . $go['aa']['city'] . ' (' . $go['aa']['code'] . ') ' . $go['aa']['country']) : ' ';

        $getdata[$i]['way'] = 'departure';

        $i++;
    }
}
$from = $getdata[1]['departureLocation'];
$flightDetails['adults'] = $getdata['adults'] = $godata['adult'];
$flightDetails['children'] = $getdata['children'] = $godata['children'];
$flightDetails['infants'] = $getdata['infants'] = $godata['infants'];
$flightDetails['totalBaseFare'] = $getdata['totalBaseFare'] = $godata['totalBaseFare'];
$flightDetails['totalTaxes'] = $getdata['totalTaxes'] = $godata['totalTaxes'];
$flightDetails['totalDiscount'] = $getdata['totalDiscount'] = $godata['totalDiscount'];
$flightDetails['totalFare'] = $getdata['totalFare'] = $godata['totalFare'];
$flightDetails['currency'] = $getdata['currency'] = $curr_currency;
// dd($flightDetails);
$departure = Crypt::encrypt($getdata);

$i = 0;

foreach ($datareturn as $go) {
    if (is_array($go)) {
        // dd( $go);
        $returndata[$i]['airCode'] = isset($go['fD']['aI']['code']) ? $go['fD']['aI']['code'] : ' ';
        $returndata[$i]['code'] = isset($go['fD']['aI']['name']) ? $go['fD']['aI']['name'] : ' ';
        $returndata[$i]['airName'] = isset($go['fD']['aI']['name']) ? $go['fD']['aI']['name'] : ' ';
        $returndata[$i]['flightNumbers'] = isset($go['fD']['fN']) ? $go['fD']['fN'] : ' ';
        $returndata[$i]['departureTimes'] = isset($go['dt']) ? date('H:i', strtotime($go['dt'])) : '';
        $returndata[$i]['arrivalTimes'] = isset($go['at']) ? date('H:i', strtotime($go['at'])) : '';
        $returndata[$i]['departureDate'] = isset($go['dt']) ? date('D,j M Y', strtotime($go['dt'])) : '';
        $returndata[$i]['arrivalDate'] = isset($go['at']) ? date('D,j M Y', strtotime($go['at'])) : '';
        $start = new DateTime($go['dt']);
        $end = new DateTime($go['at']);
        $interval = $start->diff($end);
        $hours = $interval->h;
        $minutes = $interval->i;
        $hours += $interval->days * 24;
        $returndata[$i]['durationText'] = $hours . 'hours  ' . $minutes . '  minutes';
        $sto = count($datareturn) > 1 ? count($datareturn) - 1 : 0;
        $stopText = $sto > 0 ? "$sto stops" : 'Direct';
        $returndata[$i]['departureLocation'] = htmlspecialchars($go['da']['city'] . ' (' . $go['da']['code'] . ')');
        $returndata[$i]['arrivalLocation'] = htmlspecialchars($go['aa']['city'] . ' (' . $go['aa']['code'] . ')');
        $returndata[$i]['departureLocations'] = isset($go['da']) ? htmlspecialchars($go['da']['name'] . $go['da']['city'] . ' (' . $go['da']['code'] . ') ' . $go['da']['country']) : ' ';
        $returndata[$i]['arrivalLocations'] = isset($go['aa']) ? htmlspecialchars($go['aa']['name'] . $go['aa']['city'] . ' (' . $go['aa']['code'] . ') ' . $go['aa']['country']) : ' ';
        $returndata[$i]['way'] = 'return';

        $i++;
    }
}

$returndata['adult'] = $datareturn['adult'];
$returndata['children'] = $datareturn['children'];
$returndata['infants'] = $datareturn['infants'];
$returndata['totalBaseFare'] = $datareturn['totalBaseFare'];
$returndata['totalTaxes'] = $datareturn['totalTaxes'];
$returndata['totalDiscount'] = $datareturn['totalDiscount'];
$returndata['totalFare'] = $datareturn['totalFare'];
$returndata['currency'] = $curr_currency;
// dd($returndata);
// echo "<pre>";
// print_r($returndata);
$return = Crypt::encrypt($returndata);

$types = ['getdata', 'returndata'];

?>

<div class="manish_unique">
    <div class="container">
        <div class="row pt-2">
            <div class="col-md-12">
                <div class="ca">
                    <h3><b>Review Your Journey</b></h3>
                </div>
            </div>
        </div>
        <div class="row pt-2" style="border: 2px solid  #ff7d01">
            <div class="col-md-12 col-12">
                <div class="ca">
                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typenext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card-header text-center ">
                                    <b class="font_manish ">
                                        <?php echo e($typenext == 'getdata' ? 'Departure Flight Details' : 'Return Flight Details'); ?></b>
                                    
                                </div>
                            </div>
                        </div>
                        <?php $__currentLoopData = $$typenext; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datareq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(is_array($datareq)): ?>
                                <div class="row">
                                    
                                    <div class="col-12 col-md-12">
                                        <span class="float-right font_manish ">
                                            <?php echo e($datareq['departureDate']); ?>

                                            <?php if(isset($datareq['way']) && $datareq['way'] == 'return'): ?>
                                                
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row direct-flight p-2">
                                    <div class="col-2 col-md-2">
                                        <div class="ca text-center">
                                            <img src='https://www.gstatic.com/flights/airline_logos/70px/<?php echo e(isset($datareq['airCode']) ? $datareq['airCode'] : ''); ?>.png'
                                                alt="American Airlines Logo" class="img-fluid" style="height: 30px">
                                            <h5 class="card-title"><?php echo e($datareq['airName'] ?? ''); ?></h5>
                                            <p class="card-text">
                                                (<?php echo e($datareq['airCode']); ?>-<?php echo e($datareq['flightNumbers'] ?? ''); ?>)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="ca">
                                            <h5 class="card-title"><?php echo e($datareq['departureLocation']); ?>

                                                <?php echo e($datareq['departureTimes']); ?></h5>
                                            <p class="card-text"><?php echo e($datareq['departureDate']); ?></p>
                                            <p class="card-text"><?php echo e($datareq['departureLocations']); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="ca text-center" style="padding-top: 15%;">
                                            <i class="icofont-clock-time" style="font-size: 2rem; width: 1rem;"></i>
                                            <p class="card-text"> <?php echo e($datareq['durationText']); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="ca">
                                            <h5 class="card-title"><?php echo e($datareq['arrivalTimes']); ?>

                                                <?php echo e($datareq['arrivalLocation']); ?></h5>
                                            <p class="card-text"><?php echo e($datareq['arrivalDate']); ?></p>
                                            <p class="card-text"><?php echo e($datareq['arrivalLocations']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Flight Segments -->
                                <hr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <?php if(!empty($fareRules) || !empty($fareRulesReturn)): ?>
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
                        $totalAmount = $flightDetails['totalFare'] + $returndata['totalFare'];
                        //    dd($totalAmount );
                        $noShowRules = [];
                        $dateChangeRules = [];
                        $cancellationRules = [];
                        $seatChargeableRules = [];
                        $noShowRulesR = [];
                        $dateChangeRulesR = [];
                        $cancellationRulesR = [];
                        $seatChargeableRulesR = [];
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
                        foreach ($fareRulesReturn as $route => $rules) {
                            foreach ($rules as $key => $rules_code) {
                                $store = isset($rules_code['tfr']) ? $rules_code['tfr'] : [];
                                if (isset($store)) {
                                    foreach ($store as $ruleType => $ruleDetails) {
                                        foreach ($ruleDetails as $detail) {
                                            switch ($ruleType) {
                                                case 'NO_SHOW':
                                                    $noShowRulesR[] = [
                                                        'policyInfo' => $detail['policyInfo'],
                                                        'st' => $detail['st'],
                                                        'et' => $detail['et'],
                                                    ];
                                                    break;

                                                case 'DATECHANGE':
                                                    $dateChangeRulesR[] = [
                                                        'amount' => $detail['amount'] ?? 0,
                                                        'additionalFee' => $detail['additionalFee'] ?? 0,
                                                        'policyInfo' => $detail['policyInfo'] ?? '',
                                                        'st' => $detail['st'] ?? 0,
                                                        'et' => $detail['et'] ?? 0,
                                                    ];
                                                    break;

                                                case 'CANCELLATION':
                                                    $cancellationRulesR[] = [
                                                        'amount' => $detail['amount'] ?? 0,
                                                        'additionalFee' => $detail['additionalFee'] ?? 0,
                                                        'st' => $detail['st'] ?? 0,
                                                        'et' => $detail['et'] ?? 0,
                                                    ];
                                                    break;

                                                case 'SEAT_CHARGEABLE':
                                                    $seatChargeableRulesR[] = [
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
                        // echo "No Show Rules:\n";
                        // print_r($noShowRulesR);

                        // echo "\nDate Change Rules:\n";
                        // print_r($dateChangeRulesR);

                        // echo "\nCancellation Rules:\n";
                        // print_r($cancellationRulesR);

                        // echo "\nSeat Chargeable Rules:\n";
                        // print_r($seatChargeableRulesR);
                        $hours = isset($noShowRules[0]['et']) ? $noShowRules[0]['et'] : 4;
                        $policy = isset($noShowRules[0]['policyInfo'])
                            ? $noShowRules[0]['policyInfo']
                            : 'As per airlines policy';
                        $Refamount = convertCurrency(
                            $cancellationRules[0]['amount'] + $cancellationRulesR[0]['amount'],
                            $curr_currency,
                        );
                        $additionalFee = convertCurrency(
                            $cancellationRules[0]['additionalFee'] + $cancellationRulesR[0]['additionalFee'],
                            $curr_currency,
                        );
                        $Dateamount = convertCurrency(
                            $dateChangeRules[0]['amount'] + $dateChangeRulesR[0]['amount'],
                            $curr_currency,
                        );
                        $DateadditionalFee = convertCurrency(
                            $dateChangeRules[0]['additionalFee'] + $dateChangeRulesR[0]['additionalFee'],
                            $curr_currency,
                        );
                        $agency = convertCurrency(400, $curr_currency);
                        $totalRefund = $totalAmount - ($Refamount + $additionalFee + $agency);
                        $totalDateRefund = $Dateamount + $DateadditionalFee + $agency;
                        $st = isset($cancellationRules[0]['st']) ? $cancellationRules[0]['st'] : 0;
                        $et = isset($cancellationRules[0]['et']) ? $cancellationRules[0]['et'] : 0;
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
                                                <?php echo e($godata['iB'] > 0 ? $godata['iB'] . ' /Adult' : 'No'); ?></td>
                                        </tr>
                                        <tr>
                                            <td> Cabin baggage :</td>
                                            <td class="text-right">
                                                <?php echo e($godata['cB'] > 0 ? $godata['cB'] . ' /Adult' : 'No'); ?></td>
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
                                            <td>Cancellation fee (Before <?php echo e($hours); ?> hours Departure )</td>
                                            <td class="text-right">
                                                <?php echo $icon; ?><?php echo e(number_format($Refamount + $additionalFee + $agency, 2)); ?>

                                                <div class="icon-container">
                                                    <i class="fa fa-info-circle"></i>
                                                    <span class="hover-text">
                                                        <table>
                                                            <tr>
                                                                <td>Flight Cost</td>
                                                                <td class="text-right">
                                                                    <?php echo $icon; ?><?php echo e(number_format($totalAmount, 2)); ?>

                                                                <td>
                                                            </tr>
                                                            <tr>
                                                                <td>Airline Fee</td>
                                                                <td class="text-right">
                                                                    <?php echo $icon; ?><?php echo e(number_format($Refamount + $additionalFee, 2)); ?>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Agency Fee</td>
                                                                <td class="text-right">
                                                                    <?php echo $icon; ?><?php echo e(number_format($agency, 2)); ?>

                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Amount refundable(Before <?php echo e($hours); ?> hours Departure)</td>
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
                                                <td class="text-right">
                                                    <?php echo $icon; ?><?php echo e(number_format($totalDateRefund, 2)); ?>+Fare
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
                                        <li>• Airline penalties must be reconfirmed before any cancellation or changes.
                                        </li>
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
                                        <td class="text-right">
                                            <?php echo e($godata['iB'] > 0 ? $godata['iB'] . ' /Adult' : 'No'); ?></td>
                                    </tr>
                                    <tr>
                                        <td> Cabin baggage :</td>
                                        <td class="text-right">
                                            <?php echo e($godata['cB'] > 0 ? $godata['cB'] . ' /Adult' : 'No'); ?></td>
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
                                <li>• If the ticket is not canceled within the specified time or in case of a no-show,
                                    only
                                    statutory
                                    taxes will be refunded by the respective airline.</li>
                                <li>• Infants do not have a baggage allowance.</li>
                                <li>• For certain restricted fare types, amendments and cancellations are not allowed.
                                </li>
                                <li>• Airline penalties must be reconfirmed before any cancellation or changes.</li>
                                <li>• Airline penalty charges are subject to change without prior notice.</li>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php endif; ?>
        <div class="row p-2">
            <div class="col-12 col-md-7">
            </div>
            <div class="col-md-5 col-12 offset">
                <div class="ca card-shadow">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered m-0">
                                <tr>
                                    <td class="text-right">Base Fare</td>
                                    <td class="text-right">
                                        <?= $icon ?><?php echo e(number_format($flightDetails['totalBaseFare'] + $returndata['totalBaseFare'], 2)); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">Tax</td>
                                    <td class="text-right">
                                        <?= $icon ?><?php echo e(number_format($flightDetails['totalTaxes'] + $returndata['totalTaxes'], 2)); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Total Fare</th>
                                    <th class="text-right">
                                        <?= $icon ?><?php echo e(number_format($flightDetails['totalFare'] + $returndata['totalFare'], 2)); ?>

                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 text-center mb-3 p-2">
            <div class="text-right">
                <a href="#" class="btn btn-danger px-5" id="continueBooking">Continue Booking</a>
            </div>
        </div>
    </div>

</div>

<div class="virat" style="display: none">
    <form action="<?php echo e(route('booking.flightBooking')); ?>" method="post" id="form-checkout-two">

        <?php echo csrf_field(); ?>
        <ul>

            <!-- Add Random ID Hidden Input -->
            
            <input type="hidden" name="from" id="departureLocation"
                value="<?php echo e($getdata[1]['departureLocation'] ? $getdata[1]['departureLocation'] : ''); ?>">
            <input type="hidden" name="to" id="arrivalLocation"
                value="<?php echo e($getdata[1]['arrivalLocation'] ? $getdata[1]['arrivalLocation'] : ''); ?>">
            <input type="hidden" name="on_date" id="departureDate"
                value="<?php echo e($getdata[1]['departureDate'] ? $getdata[1]['departureDate'] : ''); ?>">
            <input type="hidden" name="return_date" id="returndate"
                value="<?php echo e($returndata[1]['departureDate'] ?? ''); ?>">
            <input type="hidden" name="random_id" value="<?php echo e(rand(0000, 999999999999999999)); ?>" />
            
            <input type="hidden" name="currency_type" value="<?php echo e($icon); ?>" />
            <input type="hidden" name="departure" value="<?php echo e($departure); ?>">
            <input type="hidden" name="return" value="<?php echo e($return); ?>">
            <input type="hidden" name="flight_class" value="<?php echo e($godata['flight_class']); ?>">

            
        </ul>
        <div class="bravo-booking-page padding-content">

            <div class="container">

                <div id="bravo-checkout-page">

                    <div class="row">

                        <div class="col-md-12">

                            <h3 class="form-title">Booking Submission</h3>

                            <div class="booking-form">

                                <div class="form-checkout">


                                    <div class="form-section">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label>First Name <span
                                                            class="required">*</span></label> <input type="text"
                                                        placeholder="First Name" value="" name="first_name"
                                                        class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Last Name <span
                                                            class="required">*</span></label>
                                                    <input type="text" placeholder="Last Name" value=""
                                                        name="last_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-email">
                                                <div class="form-group"><label>Email <span
                                                            class="required">*</span></label>
                                                    <input type="email" placeholder="email@domain.com"
                                                        value="" name="email" class="form-control" required>
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
                                                <div class="form-group"><label>Address</label> <input type="text"
                                                        placeholder="Address line 1" value="" name="address"
                                                        class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6 field-city">
                                                <div class="form-group"><label>City </label> <input type="text"
                                                        value="" name="city" placeholder="Your City"
                                                        class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6 field-state">
                                                <div class="form-group"><label>State/Province/Region </label> <input
                                                        type="text" value="" name="state"
                                                        placeholder="State/Province/Region" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-zip-code">
                                                <div class="form-group"><label>ZIP code/Postal code </label> <input
                                                        type="text" value="" name="zip_code"
                                                        placeholder="ZIP code/Postal code" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-country">
                                                <div class="form-group"><label>Country <span
                                                            class="required">*</span></label>
                                                    <select name="country" class="form-control" required>
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
                                                        <option value="Bosnia And Herzegovina">Bosnia And Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean
                                                            Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
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
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, Democratic Republic">Congo, Democratic
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
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands
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
                                                        <option value="Heard Island & Mcdonald Islands">Heard Island &
                                                            Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican
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
                                                        <option value="Lao People's Democratic Republic">Lao People's
                                                            Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
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
                                                        <option value="Russian Federation">Russian Federation</option>
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
                                                        <option value="Saint Vincent And Grenadines">Saint Vincent And
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
                                                        <option value="South Georgia And Sandwich Isl.">South Georgia
                                                            And
                                                            Sandwich Isl.</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen
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
                                                        <option value="United States Outlying Islands">United States
                                                            Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                        </option>
                                                        <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6"><label>Special Requirements </label>
                                                <textarea name="customer_notes" cols="30" rows="2" placeholder="Special Requirements"
                                                    class="form-control" required></textarea>
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

                                                                    <h4 class="section-title h6">Please be careful -

                                                                        Passenger

                                                                        details must match your passport or photo ID
                                                                    </h4>

                                                                    <!-- Adults Section -->

                                                                    <div class="form-group" style="display: none">

                                                                        <label>Number of Adults</label>

                                                                        <select id="numAdults" class="form-select"
                                                                            onchange="updateAdultFields()">

                                                                            <option value="0"
                                                                                <?php echo e($flightDetails['adults'] == 0 ? 'selected' : ''); ?>>

                                                                                0</option>

                                                                            <option value="1"
                                                                                <?php echo e($flightDetails['adults'] == 1 ? 'selected' : ''); ?>>

                                                                                1</option>

                                                                            <option value="2"
                                                                                <?php echo e($flightDetails['adults'] == 2 ? 'selected' : ''); ?>>

                                                                                2</option>

                                                                            <option value="3"
                                                                                <?php echo e($flightDetails['adults'] == 3 ? 'selected' : ''); ?>>

                                                                                3</option>

                                                                            <option value="4"
                                                                                <?php echo e($flightDetails['adults'] == 4 ? 'selected' : ''); ?>>

                                                                                4</option>

                                                                            <option value="5"
                                                                                <?php echo e($flightDetails['adults'] == 5 ? 'selected' : ''); ?>>

                                                                                5</option>

                                                                            <option value="6"
                                                                                <?php echo e($flightDetails['adults'] == 6 ? 'selected' : ''); ?>>

                                                                                6</option>

                                                                            <option value="7"
                                                                                <?php echo e($flightDetails['adults'] == 7 ? 'selected' : ''); ?>>

                                                                                7</option>

                                                                            <option value="8"
                                                                                <?php echo e($flightDetails['adults'] == 8 ? 'selected' : ''); ?>>

                                                                                8</option>

                                                                            <option value="9"
                                                                                <?php echo e($flightDetails['adults'] == 9 ? 'selected' : ''); ?>>

                                                                                9</option>

                                                                            <option value="10"
                                                                                <?php echo e($flightDetails['adults'] == 10 ? 'selected' : ''); ?>>

                                                                                10</option>

                                                                            <option value="11"
                                                                                <?php echo e($flightDetails['adults'] == 11 ? 'selected' : ''); ?>>

                                                                                11</option>

                                                                            <option value="12"
                                                                                <?php echo e($flightDetails['adults'] == 12 ? 'selected' : ''); ?>>

                                                                                12</option>

                                                                            <option value="13"
                                                                                <?php echo e($flightDetails['adults'] == 13 ? 'selected' : ''); ?>>

                                                                                13</option>

                                                                            <option value="14"
                                                                                <?php echo e($flightDetails['adults'] == 14 ? 'selected' : ''); ?>>

                                                                                14</option>

                                                                            <option value="15"
                                                                                <?php echo e($flightDetails['adults'] == 15 ? 'selected' : ''); ?>>

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
                                                                                <?php echo e($flightDetails['children'] == 0 ? 'selected' : ''); ?>>

                                                                                0</option>

                                                                            <option value="1"
                                                                                <?php echo e($flightDetails['children'] == 1 ? 'selected' : ''); ?>>

                                                                                1</option>

                                                                            <option value="2"
                                                                                <?php echo e($flightDetails['children'] == 2 ? 'selected' : ''); ?>>

                                                                                2</option>

                                                                            <option value="3"
                                                                                <?php echo e($flightDetails['children'] == 3 ? 'selected' : ''); ?>>

                                                                                3</option>

                                                                            <option value="4"
                                                                                <?php echo e($flightDetails['children'] == 4 ? 'selected' : ''); ?>>

                                                                                4</option>

                                                                            <option value="5"
                                                                                <?php echo e($flightDetails['children'] == 5 ? 'selected' : ''); ?>>

                                                                                5</option>

                                                                            <option value="6"
                                                                                <?php echo e($flightDetails['children'] == 6 ? 'selected' : ''); ?>>

                                                                                6</option>

                                                                            <option value="7"
                                                                                <?php echo e($flightDetails['children'] == 7 ? 'selected' : ''); ?>>

                                                                                7</option>

                                                                            <option value="8"
                                                                                <?php echo e($flightDetails['children'] == 8 ? 'selected' : ''); ?>>

                                                                                8</option>

                                                                            <option value="9"
                                                                                <?php echo e($flightDetails['children'] == 9 ? 'selected' : ''); ?>>

                                                                                9</option>

                                                                            <option value="10"
                                                                                <?php echo e($flightDetails['children'] == 10 ? 'selected' : ''); ?>>

                                                                                10</option>

                                                                            <option value="11"
                                                                                <?php echo e($flightDetails['children'] == 11 ? 'selected' : ''); ?>>

                                                                                11</option>

                                                                            <option value="12"
                                                                                <?php echo e($flightDetails['children'] == 12 ? 'selected' : ''); ?>>

                                                                                12</option>

                                                                            <option value="13"
                                                                                <?php echo e($flightDetails['children'] == 13 ? 'selected' : ''); ?>>

                                                                                13</option>

                                                                            <option value="14"
                                                                                <?php echo e($flightDetails['children'] == 14 ? 'selected' : ''); ?>>

                                                                                14</option>

                                                                            <option value="15"
                                                                                <?php echo e($flightDetails['children'] == 15 ? 'selected' : ''); ?>>

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
                                                                                <?php echo e($flightDetails['infants'] == 0 ? 'selected' : ''); ?>>

                                                                                0</option>

                                                                            <option value="1"
                                                                                <?php echo e($flightDetails['infants'] == 1 ? 'selected' : ''); ?>>

                                                                                1</option>

                                                                            <option value="2"
                                                                                <?php echo e($flightDetails['infants'] == 2 ? 'selected' : ''); ?>>

                                                                                2</option>

                                                                            <option value="3"
                                                                                <?php echo e($flightDetails['infants'] == 3 ? 'selected' : ''); ?>>

                                                                                3</option>

                                                                            <option value="4"
                                                                                <?php echo e($flightDetails['infants'] == 4 ? 'selected' : ''); ?>>

                                                                                4</option>

                                                                            <option value="5"
                                                                                <?php echo e($flightDetails['infants'] == 5 ? 'selected' : ''); ?>>

                                                                                5</option>

                                                                            <option value="6"
                                                                                <?php echo e($flightDetails['infants'] == 6 ? 'selected' : ''); ?>>

                                                                                6</option>

                                                                            <option value="7"
                                                                                <?php echo e($flightDetails['infants'] == 7 ? 'selected' : ''); ?>>

                                                                                7</option>

                                                                            <option value="8"
                                                                                <?php echo e($flightDetails['infants'] == 8 ? 'selected' : ''); ?>>

                                                                                8</option>

                                                                            <option value="9"
                                                                                <?php echo e($flightDetails['infants'] == 9 ? 'selected' : ''); ?>>

                                                                                9</option>

                                                                            <option value="10"
                                                                                <?php echo e($flightDetails['infants'] == 10 ? 'selected' : ''); ?>>

                                                                                10</option>

                                                                            <option value="11"
                                                                                <?php echo e($flightDetails['infants'] == 11 ? 'selected' : ''); ?>>

                                                                                11</option>

                                                                            <option value="12"
                                                                                <?php echo e($flightDetails['infants'] == 12 ? 'selected' : ''); ?>>

                                                                                12</option>

                                                                            <option value="13"
                                                                                <?php echo e($flightDetails['infants'] == 13 ? 'selected' : ''); ?>>

                                                                                13</option>

                                                                            <option value="14"
                                                                                <?php echo e($flightDetails['infants'] == 14 ? 'selected' : ''); ?>>

                                                                                14</option>

                                                                            <option value="15"
                                                                                <?php echo e($flightDetails['infants'] == 15 ? 'selected' : ''); ?>>

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
                                            accept the <a target="_blank" href="">terms and
                                                conditions</a></label></div>

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

                           <!--  <div class="booking-detail booking-form">

                                <div class="booking-review">

                                    <h4 class="booking-review-title">Your Booking</h4>



                                    <div class="booking-review-content">

                                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typenext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="card">
                                                <div class="card-header text-center" style="color: #ff7d01">
                                                    <?php echo e($typenext == 'getdata' ? 'Departure Flight Details' : 'Return Flight Details'); ?>

                                                </div>
                                            </div>

                                            <?php $__currentLoopData = $$typenext; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datareq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(is_array($datareq)): ?>
                                                    <div class="review-section">

                                                        <div class="service-info row">

                                                            <div class="col-sm-3">
                                                                <img data-src="https://www.gstatic.com/flights/airline_logos/70px/<?php echo e(isset($datareq['airCode']) ? $datareq['airCode'] : ''); ?>.png"
                                                                    alt="Lake Magdalentown"
                                                                    class="img-responsive lazy">
                                                            </div>

                                                            <div class="mt-2 col-sm-9">

                                                                <h3 class="service-name">
                                                                    <?php echo e($datareq['airName'] ?? ''); ?>


                                                                    (<?php echo e($datareq['airCode']); ?>-<?php echo e($datareq['flightNumbers'] ?? ''); ?>)
                                                                </h3>



                                                                <div class="font-weight-medium  mb-3">

                                                                    <p class="mb-1">

                                                                        <?php echo e($datareq['departureLocation']); ?> &rarr;

                                                                        <?php echo e($datareq['arrivalLocation']); ?>


                                                                    </p>

                                                                    <?php echo e($datareq['durationText']); ?>


                                                                </div>

                                                            </div>



                                                            <div
                                                                class="flex-self-start justify-content-between  col-sm-12">

                                                                <div class="flex-self-start">

                                                                    <div class="mr-2"><i
                                                                            class="icofont-airplane font-size-30 font_manish "></i>

                                                                    </div>

                                                                    <div class="text-lh-sm ml-1">

                                                                        <h6
                                                                            class="font-weight-bold font-size-21 text-gray-5 mb-0">
                                                                            <?php echo e($datareq['departureDate']); ?><br>
                                                                            <?php echo e($datareq['departureTimes']); ?></h6>
                                                                        <span
                                                                            class="font-size-14 font-weight-normal text-gray-1"><?php echo e($datareq['departureLocations']); ?></span>

                                                                    </div>

                                                                </div>

                                                                <div class="text-center d-none d-md-block d-lg-none">

                                                                    <div class="mb-1">

                                                                        <h6
                                                                            class="font-size-14 font-weight-bold text-gray-5 mb-0">

                                                                            <?php echo e($datareq['durationText']); ?></h6>

                                                                    </div>

                                                                </div>

                                                                <div class="flex-self-start">

                                                                    <div class="mr-2"><i
                                                                            class="d-block rotate-90 icofont-airplane-alt font-size-30 font_manish "></i>

                                                                    </div>

                                                                    <div class="text-lh-sm ml-1">

                                                                        <h6
                                                                            class="font-weight-bold font-size-21 text-gray-5 mb-0">
                                                                            <?php echo e($datareq['arrivalDate']); ?><br>
                                                                            <?php echo e($datareq['arrivalTimes']); ?></h6> <span
                                                                            class="font-size-14 font-weight-normal text-gray-1"><?php echo e($datareq['arrivalLocations']); ?></span>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <div class="review-section total-review">
                                            <ul class="review-list">
                                                <li class="final-total d-block">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="label">BaseFare:</div>
                                                        <div class="val">
                                                            <span class="font_manish">
                                                                <?= $icon ?><?php echo e(number_format($flightDetails['totalBaseFare'] + $returndata['totalBaseFare'], 2)); ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="final-total d-block">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="label">Taxes:</div>
                                                        <div class="val">
                                                            <span class="font_manish">
                                                                <?= $icon ?><?php echo e(number_format($flightDetails['totalTaxes'] + $returndata['totalTaxes'], 2)); ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="final-total d-block">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="label">Discount:</div>
                                                        <div class="val">
                                                            <span class="font_manish">
                                                                <?= $icon ?><?php echo e(number_format($flightDetails['totalDiscount'] + $returndata['totalDiscount'], 2)); ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <hr>
                                                <li class="final-total d-block">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="label">TotalFare:</div>
                                                        <div class="val">
                                                            <?php
                                                                $total =
                                                                    $flightDetails['totalFare'] +
                                                                    $returndata['totalFare'];
                                                            ?>
                                                            <div class="val">
                                                                <span
                                                                    class="font_manish"><?= $icon ?><?php echo e(number_format($total, 2)); ?>

                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="totalFare"
                                                                value="<?php echo e($total); ?>">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#form-checkout-two input').on('change input', function() {
            // Gather form data
            //  var from = document.getElementById('departureLocation').value;
            //   var to = document.getElementById('arrivalLocation').value;
            //  var date = document.getElementById('departureDate').value;
            //   var departureTimes = document.getElementById('departureTimes').value;
            //   var returndate = document.getElementById('returndate').value;

            // Serialize form data
            var formData = $('#form-checkout-two').serialize();

            $.ajax({
                url: '<?php echo e(route('auto.save.form')); ?>',
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
<script>
    document.getElementById('continueBooking').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor click behavior
        document.querySelector('.manish_unique').style.display = 'none'; // Hide Manish's div
        document.querySelector('.virat').style.display = 'block'; // Show Virat's div
    });
</script>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Booking/Views/frontend/roundtripcheckout.blade.php ENDPATH**/ ?>