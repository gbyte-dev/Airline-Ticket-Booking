<script>
    
    var sessionCurrency = <?php echo json_encode(session('currency', 'CAD'), 512) ?>; 
    storelocal(sessionCurrency);

    function storelocal(currency) {
        localStorage.setItem("currency", currency);
    }
</script>


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
        background-color:#ff7d01;
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
    height: 35px;
    padding-right: 10px;
    }

    .flight-info-card .price {
        font-size: 14px !important;
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
    /* Custom alert box styles */
    .alert-box {
        padding: 15px;
        border: 1px solid #f8d7da;
        background-color: #f8d7da;
        color: #721c24;
        border-radius: 5px;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 16px;
    }

    .alert-box .close-btn {
        float: right;
        background: none;
        border: none;
        color: #721c24;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
    }

    .alert-box .close-btn:hover {
        color: #f5c6cb;
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
// @dd($selectedCurrency);
switch ($selectedCurrency) {
    case 'USD':
        $icon = '<i class="fa fa-usd"></i>'; // Dollar icon
        break;
    case 'INR':
        $icon = '<i class="fa fa-inr"></i>'; // Rupee icon
        break;
    case 'CAD':
        $icon = 'C<i class="fa fa-dollar"></i>'; // Canadian Dollar icon
        break;
    default:
        $icon = $selectedCurrency; // Fallback to the currency code
        break;
}

$a=1;
echo ' <div  id="messageDiv"></div>';
if (isset($flight_data['searchResult']['tripInfos']['ONWARD']) && empty($flight_data['searchResult']['tripInfos']['RETURN']) && empty($flight_data['searchResult']['tripInfos']['COMBO'])) {
?>
<?php echo $__env->make('Flight.Views.frontend.ajax.onward', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php     
} elseif (isset($flight_data['searchResult']['tripInfos']['RETURN']) && count($flight_data['searchResult']['tripInfos']['RETURN']) > 0 && isset($flight_data['searchResult']['tripInfos']['ONWARD']) && count($flight_data['searchResult']['tripInfos']['ONWARD']) > 0) {       
        $a = 1;
        ?>
<?php echo $__env->make('Flight.Views.frontend.ajax.return', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php 
    }elseif(isset($flight_data['searchResult']['tripInfos']['COMBO'])  && ($flight_data['searchResult']['tripInfos']['RETURN']) ) {
        ?>
<?php echo $__env->make('Flight.Views.frontend.ajax.combo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    }else{
        if (!empty($error_message)) {
            echo '<div class="alert alert-danger" id="messageDiv">' . $error_message . '</div>';
        } else {
            echo '<p>No flight information available.</p>';
        }
    }

        ?>
        
<?php

    $codereq = ['type' => 'Round Trip'];
    $msg = Crypt::encrypt($codereq);

?>


<!-- <form  id="flightalldetails" action="<?php echo e(route('booking.checkout', ['code' => $msg])); ?>" method="post"> -->
<form id="flightalldetails" action="<?php echo e(route('booking.checkout.post', ['code' => $msg])); ?>" method="post" onsubmit="return checkvalues()">
    <?php echo csrf_field(); ?>
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
    /*   var conversionRates = {
                            'USD': 0.012, // 1 INR = 0.012 USD
                            'CAD': 0.015, // 1 INR = 0.015 CAD
                            'INR': 1 // 1 INR = 1 INR
                        };
        				*/

    var conversionRates = {
        'USD': 1, // 1 INR = 0.012 USD
        'CAD': 1, // 1 INR = 0.015 CAD
        'INR': 1 // 1 INR = 1 INR
    };
    <?php
        if (session('currency') == '') {
            $curr_currency = $_COOKIE['currency'] ?? 'CAD';
        } else {
            $curr_currency = session('currency');
        }

    ?>
    var initialCurrency = '<?php echo e($curr_currency); ?>';


    function changeCurrency(selectedCurrency) {
        document.getElementById('loader-modal').style.display = 'block';
        // Update the currency display
        document.getElementById('currency-display').textContent = selectedCurrency;
        let el = document.querySelectorAll('.currencyvalue');
        // Loop through each element and append 'pqr'
        el.forEach(function(el) {
            el.value = selectedCurrency; // Append 'pqr' to the current content
        });
        var formid = document.getElementById('formopened').value;
        if (initialCurrency != selectedCurrency) {
            document.getElementById(formid).submit();
        }
        var avalue = document.getElementById('avalue');
        if (avalue) {
            var a = avalue.value;
        } else {
            var a = <?= $a - 1 ?>;
        }
        // Update prices
        /*  for (let i = 1; i <= a; i++) {
              const priceElement = document.getElementById(`price-${i}`);
              const fareInINR = window[`totalFareInr${i}`]; // Get total fare in INR
              const convertedFare = fareInINR * conversionRates[selectedCurrency];
              priceElement.innerHTML = getCurrencyIcon(selectedCurrency) + '  ' + `  ${convertedFare.toFixed(2)}`;
          }
             */
        document.addEventListener('DOMContentLoaded', () => {
            changeCurrency(initialCurrency);
        });
        window.addEventListener('load', () => {
            // Hide loader modal when data is loaded
            document.getElementById('loader-modal').style.display = 'none';
        });
    }
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
        document.getElementById('arrivalAirports').textContent = selectedFlight.departureLocations;


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
        var pr = document.getElementById('currency-display').textContent.trim();;
        totalPrice = totalPrice * conversionRates[pr];
        $('#totalmoneyall').val(totalPrice);

        document.getElementById('total_price').innerHTML = getCurrencyIcon(pr) + ' ' + `${totalPrice.toLocaleString()}`;

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
        inputFields += '<input type="hidden" name="' + divId + '" value="' + selectedReturnFlight + '">';

        // Append the generated input fields to the div using innerHTML
        div.innerHTML = inputFields;
    }


    function bookthisnow() {
        $('#flightalldetails').submit();
        var form = document.getElementById('flightalldetails');
    }
  
</script>
<script>
   function checkvalues() {
       // Get the values of the div elements
       var flightDataGo = document.getElementById('flightdatago').innerHTML.trim();
       var flightDataReturn = document.getElementById('flightdatareturn').innerHTML.trim();

       // Get the div where we want to display the message
       var messageDiv = document.getElementById('messageDiv');

       // Clear previous message
       messageDiv.innerHTML = '';

       // Check if both fields have values
       if (flightDataGo === '' || flightDataReturn === '') {
           // Show a custom error alert inside the div
           messageDiv.innerHTML = `
               <div class="alert-box">
                   <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
                   Please select Departure and return flights required..
               </div>
           `;
           return false; // Prevent form submission
       }


       // Both fields are filled, allow form submission
       return true;
   }
</script>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Flight/Views/frontend/ajax/search-result.blade.php ENDPATH**/ ?>