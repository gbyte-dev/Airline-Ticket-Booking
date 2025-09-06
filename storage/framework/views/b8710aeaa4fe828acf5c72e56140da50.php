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
 
<div class="bravo_filter" style="margin-top: 30%;">
<div> <a  onclick="removeFilter('<?php echo e($curr_currency); ?>') "  class=" mx-3" style="cursor:pointer;font-size:16px; color: #ff7d01;">  <?php echo e(__(" Remove Filter")); ?> </a></div>
    <form action="<?php echo e(url(app_get_locale(false,false,'/').config('flight.flight_route_prefix'))); ?>" class="bravo_form_filter">
        <div class="filter-title">
            <?php echo e(__("FILTER BY")); ?>

        </div>
        
        <?php echo $__env->make('Layout::global.search.filters.attrs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>

<script>
                function removeFilter(selectedCurrency) { 
					var formid=  document.getElementById('formopened').value;	
					 document.getElementById(formid).submit();
                }

</script><?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Flight/Views/frontend/layouts/search/filter-search.blade.php ENDPATH**/ ?>