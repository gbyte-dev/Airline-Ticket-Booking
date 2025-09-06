<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('dist/frontend/module/location/css/location.css?_ver=' . config('app.asset_version'))); ?>"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css')); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/fotorama/fotorama.css')); ?>" />
<?php $__env->stopPush(); ?>
<style>
    .subscription-container {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px;
        max-width: 500px;
        margin: auto;
    }

    .email-icon {
        width: 100px;
        margin-bottom: 20px;
    }

    .subscription-title {
        font-weight: 700;
        color: #333333;
    }

    .subscription-description {
        color: #666666;
        margin-bottom: 20px;
    }

    .subscription-input {
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .subscription-button {
        background-color: #28a745;
        border-color: #28a745;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 700;
    }

    .subscription-button:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .form-check-label a {
        color: #007bff;
        text-decoration: none;
    }

    .form-check-label a:hover {
        text-decoration: underline;
    }

    .input-group-prepend select {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .custom-select {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .flag-img {
        width: 20px;
        margin-right: 5px;
    }

    .custom-dropdown {
        position: relative;
        display: inline-block;
    }

    .custom-dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        border: 1px solid #ccc;
        z-index: 1;
        width: 100px;
    }

    .custom-dropdown-content div {
        padding: 8px;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .custom-dropdown-content div:hover {
        background-color: #f1f1f1;
    }

    .btn-group > .btn:not(:last-child):not(.dropdown-toggle), .btn-group > .btn-group:not(:last-child) > .btn {
    width: 164px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; 
    border: -0.5px solid #dae1e7;
   }
.btn-group > .btn:not(:first-child), .btn-group > .btn-group:not(:first-child) > .btn {
    /* width: 1%; */
    width: 195px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border: -0.5px solid #dae1e7;
}
.btn-outline.active {
    background-color:#ff7d01;
    color: white; /* Optional: to change the text color to white for better contrast */
  }
  .btn-success {
    background-color: #ff7d01;
    color: white; /* Optional: change text color to white for better contrast */
  }
  .custom-confirm-button {
    background-color: #ff7d01; /* Change to your desired color */
    color: #fff;               /* Text color */
}
</style>
<style>
    /* body {
             background-color: #e0c3fc;
             background-image: linear-gradient(315deg, #e0c3fc 0%, #8ec5fc 74%);
             height: 100vh;
             display: flex;
             justify-content: center;
             align-items: center;
         } */
    .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    .form-container h1 {
        color: red;
        font-size: 24px;
        text-align: center;
    }

    .form-container h2 {
        font-size: 16px;
        text-align: center;
        margin: 10px 0;
    }

    .form-container .form-group {
        margin-bottom: 15px;
    }

    .form-container .btn-primary {
        background-color: red;
        border: none;
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }

    .form-container .btn-primary:hover {
        background-color: darkred;
    }

    .form-container .form-text {
        font-size: 12px;
        text-align: center;
    }

    .form-container .form-text a {
        color: blue;
    }
</style>


<style>

  
    .font_manish {
        color: #ff7d01
    }

    #fromwhere1 {
        background: transparent;
        border: 1px solid #dae1e7;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 35px;
        left: 0 !important;
        padding: 10 !important;
        position: relative;
    }

    #wherewhere1 {
        background: transparent;
        border: 1px solid #dae1e7;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 35px;
        left: 0 !important;
        padding: 10 !important;
    }

    .bravo_wrap .bravo_form .input-search .bravo-autocomplete,
    .bravo_wrap .bravo_form .smart-search .bravo-autocomplete {
        background: #fff;
        border: 1px solid #dee2e6;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        left: 60;
        margin-top: 15px;
        max-height: 200px;
        opacity: 0;
        overflow-y: auto;
        padding: 10;
        position: absolute;
        right: -15px;
        top: 100%;
        transition: all .3s;
        visibility: hidden;
        z-index: 10;
        left: -22% !important;
    }

    .bravo_wrap .bravo_form .input-search .bravo-autocomplete.show,
    .bravo_wrap .bravo_form .smart-search .bravo-autocomplete.show {
        opacity: 1;
        visibility: visible;
        width: 93%;
        /* margin-right: -41px; */
        margin: 1px 64px;
        font-size: 13px;
    }

    .bravo-news .widget_category ul li span,
    .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
    .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle>i:first-child,
    .bravo-news .header .cate ul li,
    .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
    .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc,
    .bravo_wrap .bravo_detail_space .bravo_content .g-attributes h3:after,
    .bravo_wrap .bravo_form .g-button-submit button,
    .btn.btn-primary,
    .bravo_wrap .bravo_form .g-button-submit button:active,
    .btn.btn-primary:active,
    .bravo_wrap .bravo_detail_space .bravo-list-hotel-related-widget .heading:after,
    .btn-primary:not(:disabled) {
        background-color: #ff7d01;
    }

    .bravo_wrap .bravo_form .form-content .render,
    a:hover {
        color: black;
    }

    .bravo_wrap .bravo_form .smart-search:not(.normal-control) .form-control,
    .bravo_wrap .bravo_form .smart-search:not(.normal-control) .parent_text {
        color: black;
    }

    .bravo_wrap .select-seat-type-dropdown .dropdown-item-row .count-display input {
        color: black;
    }

    .bravo_wrap .bravo_form .dropdown-toggle:after {
        color: black;
    }

    .bravo_wrap .bravo_search_flight .bravo_filter .filter-title:before {
        background: black;
    }

    .smart-search-location::placeholder {
        color: black !important;
        /* Use only if necessary */
        opacity: 1;
    }
</style>
<?php
// Corrected isset condition with closing parenthesis and $_GET
$fromwhere = request('from_where', $searchData['from_where'] ?? '');
$to_where = request('to_where', $searchData['to_where'] ?? '');
$departure_date = request('date', $searchData['date'] ?? \Carbon\Carbon::now()->format('Y-m-d'));
$seatingtype = request('seating_seat', $searchData['seating_seat'] ?? '');
$adultcount = request('seat_type.0', $searchData['seat_type'][0] ?? 0); // Ensure seat_type exists in $searchData
$child_count = request('seat_type.1', $searchData['seat_type'][1] ?? 0); // Same check for seat_type[1]
$infant = request('seat_type.2', $searchData['seat_type'][2] ?? 0); // Same check for seat_type[2]
$return = '';
$oneway = 'active';
$onewaydisable = '';
$returndisable = 'disabled';
$returndepart = \Carbon\Carbon::now()->format('Y-m-d');
$returndate = \Carbon\Carbon::now()->addDays(3)->format('Y-m-d');
if (isset($_GET['return_date'])) {
    $returndate = request('return_date', $_GET['return_date'] ?? ''); // Corrected $_GET usage
    $returndepart = $departure_date;
    $return = 'active';
    $oneway = '';
    $onewaydisable = 'disabled';
    $returndisable = '';
}

?>
<?php if($onewaydisable == 'disabled'){  ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById("departureform").querySelectorAll("input, select, textarea, button").forEach(
            function(element) {
                element.disabled = true; // Disable all form elements
            });
    });
</script>
<?php  } else{  ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById("returnform").querySelectorAll("input, select, textarea, button").forEach(
            function(element) {
                element.disabled = true;
            });
    });
</script>
<?php } ?>
<input type="hidden" id="formopened" value="<?php echo e($return == 'active' ? 'returnform' : 'departureform'); ?>">


<?php
// Corrected isset condition with closing parenthesis and $_GET
$fromwhere = request('from_where', $searchData['from_where'] ?? '');
$to_where = request('to_where', $searchData['to_where'] ?? '');
$departure_date = request('date', $searchData['date'] ?? \Carbon\Carbon::now()->format('Y-m-d'));
$seatingtype = request('seating_seat', $searchData['seating_seat'] ?? '');
$adultcount = request('seat_type.0', $searchData['seat_type'][0] ?? 0); // Ensure seat_type exists in $searchData
$child_count = request('seat_type.1', $searchData['seat_type'][1] ?? 0); // Same check for seat_type[1]
$infant = request('seat_type.2', $searchData['seat_type'][2] ?? 0); // Same check for seat_type[2]
$return = '';
$oneway = 'active';
$onewaydisable = '';
$returndisable = 'disabled';
$returndepart = \Carbon\Carbon::now()->format('Y-m-d');
$returndate = \Carbon\Carbon::now()->addDays(3)->format('Y-m-d');
if (isset($_GET['return_date'])) {
    $returndate = request('return_date', $_GET['return_date'] ?? ''); // Corrected $_GET usage
    $returndepart = $departure_date;
    $return = 'active';
    $oneway = '';
    $onewaydisable = 'disabled';
    $returndisable = '';
}

?>
<?php if($onewaydisable == 'disabled'){  ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById("departureform").querySelectorAll("input, select, textarea, button").forEach(
            function(element) {
                element.disabled = true; // Disable all form elements
            });
    });
</script>
<?php  } else{  ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById("returnform").querySelectorAll("input, select, textarea, button").forEach(
            function(element) {
                element.disabled = true;
            });
    });
   
</script>
<?php } ?>
<?php $__env->startSection('content'); ?>

    <div class="bravo_detail_location">

        <?php echo $__env->make('Location::frontend.layouts.details.location-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="bravo_content">

            <div class="container">

                <div class="row py-5">

                    <div class="col-md-12 col-lg-8">

                        <h1 class="title-location"><?php echo e($translation->name); ?></h1>

                        <?php echo $__env->make('Location::frontend.layouts.details.location-overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="form-container">
                            <div class="custom-header">
                                <div>
                                    
                                        <div class="row ">
                                         
                                          <div class="col-12">  <h1 >
                                            <div class="">
                                                CALL US Toll-FREE <br>
                                                <a data-qa-phonenumber="+1 855 522 3344" class="no-decoration  tw-text-label-m tw-flex tw-h-full tw-items-center tw-justify-center tw-rounded tw-p-[10px] bg-green tw-w-full tw-text-center" id="tw-rounded" href="tel:+1 +1 855 522 3344"
                                                style="color: #24844d;
    font-size: 22px !important;
     padding: 10px 0px !important;
    background:white;height:30px;">
                                                    <span class="l-h-1 m-r-xs">
                                                      <i class="fa fa-phone"></i>
                                                    </span>
                                                <span id="nosmallreq">
                                                    +1 855 522 3344  </span>
                                                 </a></div>
                                            </h1 >
                                        
                                            <div class="col-12">     <h2>
                                                submit a request
                                            </h2></div>
                                            
                                        </div>
                                       
                                        
                                    
                                </div>
                                <div role="tabpanel" class="tab-pane  <?php echo e($oneway); ?>  " id="bravo_hotel">
                                     <form action="<?php echo e(route('freequote')); ?>" class="form bravo_form d-block" method="post"
                                id="departureform" onsubmit="return searchwhich_form('departureform')" autocomplete="off">
                                <?php echo csrf_field(); ?>
                                <div class="container mb-2">
                                    <div class="btn-group" role="group" style="border: 1px solid hsl(0, 11%, 88%)">
                                       
                                        <button type="button" class="btn btn-outline active"  id="oneWayBtn">One-Way</button>
                                        <button type="button" class="btn btn-outline"
                                        id="roundTripBtn">Round-Trip</button>
                                    </div>
                                    
                                    <input type="hidden" name="booking_type" id="bookingTypeInput" value="round-trip" required>
                                </div>
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col smart-search">
                                            <input type="text"
                                                class="smart-search-location parent_text form-control font-size-14"
                                                placeholder="From Where" value="<?php echo e($fromwhere); ?>"
                                                data-onload="Loading..." data-default="" id="fromwhere1" required>
                                            <input type="hidden" id="from1" class="child_id" name="from"
                                                value="<?php echo e($fromwhere); ?>" autocomplete="off" required>
                                        </div>
                                        <div class="col smart-search">
                                            <input type="text"
                                                class="smart-search-location parent_text form-control font-size-14"
                                                placeholder="To Where" value="<?php echo e($to_where); ?>" data-onload="Loading..."
                                                data-default="" id="wherewhere1" required>
                                            <input type="hidden" id="where1" class="child_id" name="to"
                                                value="<?php echo e($to_where); ?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col  pt-2 pb-2">
                                            <input class="form-control departureDate" name="start_date"  name="start_date" id="departureDate" type="date"
                                                value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" required
                                                min="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" required />
                                                <div class="invalid-feedback departureDateError " style="width:100%; text-align:left;"> </div>
                                        </div>
                                        <div class="col pt-2 pb-2">
                                            <input class="form-control returnDate" name="enddate" id="returnDate" type="date"
                                                value="<?php echo e(\Carbon\Carbon::now()->addDays(2)->format('Y-m-d')); ?>" required
                                                min="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" required />
                                                <div class="invalid-feedback returnDateError" style="width:100%; text-align:left;"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="col input-group pt-2 pb-2" style="padding: 0">
                                            <div class="custom-dropdown">
                                                <div class="custom-select" id="selectedCountry" style="
                                                     font-size: 17px;">
                                                    <img id="selectedFlag" class="flag-img" src="https://flagcdn.com/w320/ca.png" alt="Country Flag" />
                                                    <span id="countryCodeDisplay">+1</span>
                                                </div>
                                                <div class="custom-dropdown-content" id="countryDropdown"></div>
                                                <input type="hidden" name="phoneprefix" id="dropdowncode" value="">
                                            </div>
                                            <input class="form-control subscription-input" name="phone" placeholder="Phone" type="text" />
                                        </div>
                                        <div class="col pt-2 pb-2" style="padding: 0">
                                            <input class="form-control" name="name" placeholder="Your Name (Optional)"
                                                type="text" />
                                        </div>
                                    
                                </div>
                                <div class="form-group  pt-2 pb-2">
                                    <input class="form-control" name="email" placeholder="E-mail*" type="email"
                                        required />
                                </div>
                                <button class="btn btn-primary" type="submit">GET A FREE QUOTE</button>
                                

                            </form>
                                </div>
                            </div>
        
                        </div>

                        <?php if($row->image_id): ?>
                            <div class="g-thumbnail m-3">

                                <img data-src="<?php echo $row->getImageUrl(); ?>" class="img-fluid lazy" alt="<?php echo e($translation->name); ?>">

                            </div>
                        <?php endif; ?>

                    </div>

                </div>
                

                <?php $types = get_bookable_services() ?>

                <?php if(!empty($types)): ?>
                    <div class="g-location-module py-5 border-top border-bottom">

                        <div class="row">

                            <div class="col-12 col-lg-5">

                                <h3><?php echo e(__('Explore the place')); ?></h3>

                            </div>

                            <div class="col-12 col-lg-7">

                                <ul class="location-module-nav nav nav-pills justify-content-lg-end">

                                    <?php
                                        $i = 0;
                                        $not_in = ['flight'];
                                    ?>

                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $moduleClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php

                                            if (!$moduleClass::isEnable() or in_array($type, $not_in) == true) {
                                                continue;
                                            }

                                            $moduleInst = new $moduleClass();

                                            $data[$type] = $moduleInst
                                                ->select($moduleInst::getTableName() . '.*')

                                                ->join('bravo_locations', function ($join) use ($row, $moduleInst) {
                                                    $join
                                                        ->on(
                                                            'bravo_locations.id',
                                                            '=',
                                                            $moduleInst::getTableName() . '.location_id',
                                                        )

                                                        ->where('bravo_locations._lft', '>=', $row->_lft)

                                                        ->where('bravo_locations._rgt', '<=', $row->_rgt);
                                                })

                                                ->where($moduleInst::getTableName() . '.status', 'publish')
                                                ->with('location')
                                                ->take(8)
                                                ->get();

                                        ?>

                                        <?php if($data[$type]->count() > 0): ?>
                                            <li>

                                                <a class="<?php echo e($i == 0 ? 'active' : ''); ?>" href="#module-<?php echo e($type); ?>"
                                                    data-toggle="tab"><?php echo e(call_user_func([$moduleClass, 'getModelName'])); ?></a>

                                            </li>

                                            <?php $i++ ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>

                            </div>

                        </div>

                        <div class="tab-content clearfix py-5">

                            <?php $i=0 ?>

                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $moduleClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    if (!$moduleClass::isEnable()) {
                                        continue;
                                    }
                                ?>

                                <?php $view = ucfirst($type).'::frontend.blocks.list-'.$type.'.index' ?>

                                <?php if(view()->exists($view)): ?>
                                    <?php if($data[$type]->count() > 0): ?>
                                        <div class="tab-pane <?php echo e($i == 0 ? 'active' : ''); ?>" id="module-<?php echo e($type); ?>">

                                            <?php echo $__env->make($view, [
                                                'title' => '',
                                                'style_list' => 'normal',
                                                'desc' => '',
                                                'rows' => $data[$type],
                                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                            <p class="text-center"><a class="btn btn-primary btn-search"
                                                    href="<?php echo e($row->getLinkForPageSearch($type)); ?>"><?php echo e(__('View More')); ?></a>
                                            </p>

                                        </div>

                                        <?php $i++ ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                    </div>
                <?php endif; ?>

                <div class="row">

                    <div class="col-12">

                        <h3 class="py-5"><?php echo e(__('The City Maps')); ?></h3>

                    </div>

                </div>

            </div>

            <?php echo $__env->make('Location::frontend.layouts.details.location-map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="container">

                <?php echo $__env->make('Location::frontend.layouts.details.location-trip-idea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startPush('js'); ?>
    <?php echo App\Helpers\MapEngine::scripts(); ?>


    <script>
        jQuery(function($) {

            <?php if($row->map_lat && $row->map_lng): ?>

                new BravoMapEngine('map_content', {

                    disableScripts: true,

                    fitBounds: true,

                    center: [<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>],

                    zoom: <?php echo e($row->map_zoom ?? '8'); ?>,

                    ready: function(engineMap) {

                        engineMap.addMarker([<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>], {

                            icon_options: {}

                        });

                    }

                });
            <?php endif; ?>

        })
    </script>



    <script type="text/javascript" src="<?php echo e(asset('libs/ion_rangeslider/js/ion.rangeSlider.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('libs/fotorama/fotorama.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('libs/sticky/jquery.sticky.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

 <script>
    $(document).ready(function() {
        // Show the modal when the page loads
        $('#subscriptionModal').modal('show');

        // Country data for India, Canada, and the USA
        const countryData = [
            {
                code: "+1",
                flag: "https://flagcdn.com/w320/ca.png"
            },
            {
                code: "+91",
                flag: "https://flagcdn.com/w320/in.png"
            },
           
            {
                code: "+1",
                flag: "https://flagcdn.com/w320/us.png"
            },
        ];

        // Populate the dropdown
        const $countryDropdown = $('#countryDropdown');
        countryData.forEach(country => {
            $countryDropdown.append(`
                <div data-code="${country.code}">
                    <img src="${country.flag}" class="flag-img" /> ${country.code}
                </div>
            `);
        });

        // Default selection to India
        const defaultCountry = countryData[0];
        $('#countryCodeDisplay').text(defaultCountry.code);
        $('#dropdowncode').val(defaultCountry.code);
        $('#selectedFlag').attr('src', defaultCountry.flag).show();

        // Show dropdown on click
        $('#selectedCountry').on('click', function() {
            $('#countryDropdown').toggle();
        });

        // Select a country
        $countryDropdown.on('click', 'div', function() {
            const code = $(this).data('code');
            const flag = $(this).find('img').attr('src');
            $('#countryCodeDisplay').text(code);
            $('#dropdowncode').val(code);
            $('#selectedFlag').attr('src', flag).show();
            $('#countryDropdown').hide();
        });

        // Close dropdown when clicking outside
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.custom-dropdown').length) {
                $('#countryDropdown').hide();
            }
        });
    });
</script>
</script>
<script>
     document.addEventListener('DOMContentLoaded', function() {
    const roundTripBtn = document.getElementById('roundTripBtn');
    const oneWayBtn = document.getElementById('oneWayBtn');
    const returnDateInput = document.getElementById('returnDate');
    const bookingTypeInput = document.getElementById('bookingTypeInput');

    // Function to update the state of the return date input and booking type
    function updateReturnDateState() {
        if (oneWayBtn.classList.contains('active')) {
            returnDateInput.disabled = true;
            returnDateInput.value = ''; // Clear the return date if One-Way is selected
            bookingTypeInput.value = 'oneway'; // Set booking type to 'oneway'
        } else {
            returnDateInput.disabled = false;
            bookingTypeInput.value = 'round-trip'; // Set booking type to 'round-trip'
        }
    }

    // Event listeners for button clicks
    roundTripBtn.addEventListener('click', function() {
        roundTripBtn.classList.add('active');
        oneWayBtn.classList.remove('active');
        updateReturnDateState();
    });

    oneWayBtn.addEventListener('click', function() {
        oneWayBtn.classList.add('active');
        roundTripBtn.classList.remove('active');
        updateReturnDateState();
    });

    // Initial state setup
    updateReturnDateState();
});


    document.addEventListener('DOMContentLoaded', () => {
        const containers = [
            document.getElementById('SightformContainer1'),
            document.getElementById('SightformContainer2'),
            document.getElementById('SightformContainer3'),
            document.getElementById('SightformContainer4')
        ];

        const addButton = document.getElementById('SightaddButton');
        const removeButtons = document.querySelectorAll('[id^="SightremoveButton"]'); // Get all remove buttons

        let visibleCount = 0; // Tracks the number of currently visible containers

        // Show next container
        addButton.addEventListener('click', () => {
            if (visibleCount < containers.length) {
                containers[visibleCount].style.display = 'block';
                removeButtons[visibleCount].style.display = 'block'; // Show corresponding remove button
                visibleCount++;
                if (visibleCount === containers.length) {
                    addButton.style.display = 'none'; // Hide add button
                }
            }
        });

        // Hide last visible container with corresponding remove button
        removeButtons.forEach((removeButton, index) => {
            removeButton.addEventListener('click', () => {
                if (visibleCount > 0) {
                    visibleCount--;
                    containers[index].style.display = 'none';
                    removeButton.style.display = 'none'; // Hide corresponding remove button
                    if (visibleCount < containers.length) {
                        addButton.style.display =
                            'block'; // Show add button again if not all containers are visible
                    }
                }
            });
        });
    });

    function changedisable(enableform, disableform) {

        $('#formopened').val(enableform);
        document.getElementById(enableform).querySelectorAll("input, select, textarea, button").forEach(function(
            element) {
            element.disabled = false; // Disable all form elements
        });

        document.getElementById(disableform).querySelectorAll("input, select, textarea, button").forEach(function(
            element) {
            element.disabled = true; // Disable all form elements
        });

    }

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if(session('success')): ?>
<script>
    Swal.fire({
        title: "Thank you!",
        text: "<?php echo e(session('success')); ?>",
        icon: "success",
        confirmButtonText: "OK",
        customClass: {
            confirmButton: 'custom-confirm-button'  // Add this class to customize the button
        }
    });
</script>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        function validateReturnDate() {
            var startDate = $('.departureDate').val();
            var returnDate = $('.returnDate').val();

            if (returnDate < startDate) {
                $('.returnDate')[0].setCustomValidity("Return date must be greater than or equal to the departure date.");
                $('.returnDateError').text("Return date must be greater than or equal to the departure date.");
            } else {
                $('.returnDate')[0].setCustomValidity("");
                $('.returnDateError').text("");
            }
        }
        $('.departureDate, .returnDate').on('change', function() {
            validateReturnDate();
        });
        validateReturnDate();
    });
</script>
<script>
    $(document).ready(function() {
        function validateReturnDate() {
            var startDate = $('.departureDateR').val();
            var returnDate = $('.returnDateR').val();

            if (returnDate < startDate) {
                $('.returnDateR')[0].setCustomValidity("Return date must be greater than or equal to the departure date.");
                $('.returnDateErrorR').text("Return date must be greater than or equal to the departure date.");
            } else {
                $('.returnDateR')[0].setCustomValidity("");
                $('.returnDateErrorR').text("");
            }
        }
        $('.departureDateR, .returnDateR').on('change', function() {
            validateReturnDate();
        });
        validateReturnDate();
    });
</script>
<script>
//     $(document).ready(function() {
//     $('#departureDate, #returnDate').on('change', function() {
//         var departDate = new Date($('#departureDate').val());
//         var returnDate = new Date($('#returnDate').val());

//         if (returnDate < departDate) {
//             alert('Return date must be greater than the departure date');
//             $('#returnDate').val(''); // Clear the invalid return date
//         }
//     });
// });

    $(document).ready(function() {
        $('#departureDate, #returnDate').on('change', function() {
            var departDate = new Date($('#departureDate').val());
            var returnDate = new Date($('#returnDate').val());

            if (departDate && returnDate) { // Only check if both dates are selected
                // Check if depart date is after return date
                if (departDate > returnDate) {
                    alert('Depart Date Must be Less than Return date');
                    $('#departureDate').val(''); // Clear the invalid depart date
                }

                // Check if return date is before depart date
                else if (returnDate < departDate) {
                    alert('Return Date Must be Greater than Depart date');
                    $('#returnDate').val(''); // Clear the invalid return date
                }
            }
        });
    });


</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Location/Views/frontend/detail.blade.php ENDPATH**/ ?>