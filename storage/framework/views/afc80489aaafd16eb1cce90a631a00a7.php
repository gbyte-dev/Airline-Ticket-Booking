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
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<?php 
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
	?> 
    <div style="display: flex; align-items: center; justify-content: space-between; /*gap: 15px;*/ flex-wrap: wrap;" >
        <!-- Phone Number Section -->
        
    
        <!-- Currency Switcher Section -->
        

<div class="">
    <a data-qa-phonenumber="+1 855 522 3344" 
   class="no-decoration tw-text-label-m tw-flex tw-h-full tw-items-center tw-justify-center tw-rounded tw-p-[10px] bg-green tw-w-full tw-text-center" 
   id="tw-rounded" href="tel:+1 855 522 3344" 
   style="display: flex; align-items: center; background-color: #ff7d01; text-decoration: none; color: #fff; padding: 8px 12px; border-radius: 5px;">
    <!-- Image Instead of Icon -->
    <span class="l-h-1 m-r-xs" >
      
															
															
															<img  src ="	https://flight.tripgare.com/public/images/trip_new/icons8-phone.gif" style="height:21px; filter: invert(1);"/>
														
    </span>
    <!-- Phone Number -->
    <span id="nosmallreq3" style="white-space: nowrap;">+1 855 522 3344</span>
</a>
 </div>
<li class="dropdown">
    <a href="#" data-toggle="dropdown" class="is_login dropdown-toggle web_manish_virat">
        <span id="currency-display" ><?php echo $icon_flag; ?> <?php echo e($curr_currency); ?></span>
    </a>

    <ul class="dropdown-menu text-left width-auto">
        <li>
            <a href="javascript:void(0)" data-currency="USD"
                class="currency-switcher-item <?php echo e($curr_currency == 'USD' ? 'active' : ''); ?> text-dark" onclick="changeCurrency('USD')"> <?php echo $usd; ?> USD</a>
            <a href="javascript:void(0)" data-currency="CAD"
                class="currency-switcher-item <?php echo e($curr_currency == 'CAD' ? 'active' : ''); ?>  text-dark" onclick="changeCurrency('CAD')"><?php echo $cad; ?> CAD</a>
            <a href="javascript:void(0)" data-currency="INR"
                class="currency-switcher-item <?php echo e($curr_currency == 'INR' ? 'active' : ''); ?>  text-dark" onclick="changeCurrency('INR')"><?php echo $ind; ?> INR</a>
        </li>
    </ul>
</li>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Core/Views/frontend/currency-switcher.blade.php ENDPATH**/ ?>