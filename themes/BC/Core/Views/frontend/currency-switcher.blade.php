<style>
    .web_manish_virat {
        color:#fff;
        font-weight:bold;
    }
    @media only screen and (max-width: 600px) {
       .web_manish_virat {
           color: #ff7d01;
          font-weight:bold;
        }
		a.currency-switcher-item:hover{
		color:#ff7d01 !important;
	}
    }
	a.currency-switcher-item:hover{
		color:#ff7d01 !important;
	}
	a.currency-switcher-item{
		text-align: start;
		margin-left: .5rem;
	}
	#currency-display{
		color:#1a2b48;
	}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
	@php 
	if(isset($_GET['currency'])){
		$curr_currency = $_GET['currency'];
	}elseif(session('currency')==''){
		$curr_currency  = $_COOKIE['currency']?? 'CAD';
	}else{
		$curr_currency  =  session('currency');
	}
    $usd = '<img src="'.asset('air_image/usd.png').'" alt="USD" style="width: 20px; height: 16px;margin-top: -3px;" >';
    $cad = '<img src="'.asset('air_image/canada.png').'" alt="CAD" style="width: 20px; height: 16px;margin-top: -3px;">';
    $ind = '<img src="'.asset('air_image/india.png').'" alt="INR" style="width: 20px; height: 16px;margin-top: -3px;">';
    $icon_flag = '';
        if ($curr_currency == 'USD') {
            $icon_flag = $usd;
        } elseif ($curr_currency == 'INR') {
            $icon_flag = $ind;
        } else {
            $icon_flag = $cad;
        }
	@endphp 
    <div style="display: flex; align-items: center; justify-content: space-between; /*gap: 15px;*/ flex-wrap: wrap;" >
        <!-- Phone Number Section -->
        {{-- <div>
            <a data-qa-phonenumber="888-333-1035" 
               class="no-decoration tw-text-label-m tw-flex tw-items-center tw-justify-center tw-rounded tw-p-[10px] bg-green tw-text-center"
               id="tw-rounded" href="tel:+1 888-333-1035" 
               style="display: flex; align-items: center; color: #fff; background-color:#ff7d01; padding: 8px 12px; border-radius: 5px; text-decoration: none;">
                <span class="l-h-1 m-r-xs" style="margin-right: 5px;">
                    <i class="fa fa-phone"></i>
                </span>
                <span id="nosmallreq3" style="white-space: nowrap;">888-333-1035</span>
            </a>
        </div> --}}
    
        <!-- Currency Switcher Section -->
        {{-- <li class="dropdown" style="list-style: none; display: flex; align-items: center;">
            <a href="#" data-toggle="dropdown" class="is_login dropdown-toggle web_manish_virat" 
               style="text-decoration: none; display: flex; align-items: center; color: #333; font-weight: bold;">
                <span id="currency-display" style="white-space: nowrap;">{!! $icon_flag !!} {{ $curr_currency }}</span>
            </a>
            <ul class="dropdown-menu text-left width-auto" 
                style="position: absolute; min-width: 120px; display: none; background-color: #fff; border: 1px solid #ddd; padding: 10px;">
                <li>
                    <a href="javascript:void(0)" data-currency="USD"
                       class="currency-switcher-item {{ $curr_currency == 'USD' ? 'active' : '' }}" 
                       onclick="changeCurrency('USD')"> {!! $usd !!} USD</a>
                    <a href="javascript:void(0)" data-currency="CAD"
                       class="currency-switcher-item {{ $curr_currency == 'CAD' ? 'active' : '' }}" 
                       onclick="changeCurrency('CAD')">{!! $cad !!} CAD</a>
                    <a href="javascript:void(0)" data-currency="INR"
                       class="currency-switcher-item {{ $curr_currency == 'INR' ? 'active' : '' }}" 
                       onclick="changeCurrency('INR')">{!! $ind !!} INR</a>
                </li>
            </ul>
        </li>
    </div>
    
    <!-- CSS to Ensure Dropdown Works -->
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    
        .currency-switcher-item {
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            color: #333;
        }
    
        .currency-switcher-item.active {
            font-weight: bold;
            color: #007bff;
        }
    </style>
     --}}

<div class="">
    <a data-qa-phonenumber="+1 855 522 3344" 
   class="no-decoration tw-text-label-m tw-flex tw-h-full tw-items-center tw-justify-center tw-rounded tw-p-[10px] bg-green tw-w-full tw-text-center" 
   id="tw-rounded" href="tel:+1 855 522 3344" 
   style="display: flex; align-items: center; background-color: #ff7d01; text-decoration: none; color: #fff; padding: 8px 12px; border-radius: 5px;">
    <!-- Image Instead of Icon -->
    <span class="l-h-1 m-r-xs" >
      
															
															{{--<img  src ="	https://flight.tripgare.com/public/images/trip_new/call-unscreen.gif" style="height:21px; filter: invert(1);"/>--}}
															<img  src ="	https://flight.tripgare.com/public/images/trip_new/icons8-phone.gif" style="height:21px; filter: invert(1);"/>
														
    </span>
    <!-- Phone Number -->
    <span id="nosmallreq3" style="white-space: nowrap;">+1 855 522 3344</span>
</a>
 </div>
<li class="dropdown">
    <a href="#" data-toggle="dropdown" class="is_login dropdown-toggle web_manish_virat">
        <span id="currency-display" >{!! $icon_flag !!} {{ $curr_currency }}</span>
    </a>

    <ul class="dropdown-menu text-left width-auto">
        <li>
            <a href="javascript:void(0)" data-currency="USD"
                class="currency-switcher-item {{ $curr_currency == 'USD' ? 'active' : '' }} text-dark" onclick="changeCurrency('USD')"> {!! $usd !!} USD</a>
            <a href="javascript:void(0)" data-currency="CAD"
                class="currency-switcher-item {{ $curr_currency == 'CAD' ? 'active' : '' }}  text-dark" onclick="changeCurrency('CAD')">{!! $cad !!} CAD</a>
            <a href="javascript:void(0)" data-currency="INR"
                class="currency-switcher-item {{ $curr_currency == 'INR' ? 'active' : '' }}  text-dark" onclick="changeCurrency('INR')">{!! $ind !!} INR</a>
        </li>
    </ul>
</li>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const currencyDisplay = document.getElementById('currency-display');
        const switcherItems = document.querySelectorAll('.currency-switcher-item');

        // Retrieve the saved currency from localStorage or default to 'INR'
        const savedCurrency = localStorage.getItem('currency') || 'CAD';
        if (!savedCurrency) {
            console.warn('Currency not found in localStorage, using default.');
        } else {
            console.log('Saved currency:', savedCurrency);
        }
        // Update the display with the saved currency and corresponding image
        updateCurrencyDisplay(savedCurrency);

        // Set the active class based on the saved currency
        switcherItems.forEach(item => {
            if (item.getAttribute('data-currency') === savedCurrency) {
                item.classList.add('active');
            }
        });

        // Handle currency switch
        switcherItems.forEach(item => {
            item.addEventListener('click', function() {
                const selectedCurrency = this.getAttribute('data-currency');

                // Update localStorage with the selected currency
                localStorage.setItem('currency', selectedCurrency);

                // Update the display with the selected currency and corresponding image
                updateCurrencyDisplay(selectedCurrency);

                // Update the active class
                switcherItems.forEach(el => el.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Function to update the currency display with the corresponding image
        function updateCurrencyDisplay(currency) {
            let iconFlag = '';
            if (currency === 'USD') {
                iconFlag = '<img src="{{ asset('air_image/usd.png') }}" alt="USD" style="width: 20px; height: 16px;">';
            } else if (currency === 'INR') {
                iconFlag = '<img src="{{ asset('air_image/india.png') }}" alt="INR" style="width: 20px; height: 16px;">';
            } else {
                iconFlag = '<img src="{{ asset('air_image/canada.png') }}" alt="CAD" style="width: 20px; height: 16px;">';
            }

            // Update both the image and currency text in the display
            currencyDisplay.innerHTML = iconFlag + ' ' + currency;
        }
    });
</script> --}}
    <script>
	function changeCurrency(selectedCurrency) {
				localStorage.setItem('currency', selectedCurrency);
				var currentUrl = new URL(window.location.href);
		
				// Set or update the 'currency' query parameter
				currentUrl.searchParams.set('currency', selectedCurrency);
		
				// Reload the page with the new currency in the URL
				window.location.href = currentUrl.href;
			}
	</script>
