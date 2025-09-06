<?php if(empty($hideMap)): ?>

<div class="item">

    <a href="<?php echo e(route($routeName,['_layout'=>'map'])); ?>"><?php echo e(__("Show on the map")); ?></a>
</div>

<?php endif; ?>

<div class="item orderby">

    <?php
        $param = request()->input();
        $orderby =  request()->input("orderby");

    ?>

    <div class="item-title">

        <?php echo e(__("Sort by:")); ?>


    </div>

    <input type="hidden" name="sort" value="<?php echo e($orderby); ?>">

    <div class="dropdown ">

        <span class=" dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <?php switch($orderby):

                case ("asc"): ?>

                <?php echo e(__("Price (Low to high)")); ?>


                <?php break; ?>

                <?php case ("desc"): ?>

                <?php echo e(__("Price (High to low)")); ?>


                <?php break; ?>

                <?php case ("duration_asc"): ?>

                <?php echo e(__("Shortest Duration")); ?>


                <?php break; ?>
                <?php case ("duration_desc"): ?>

                <?php echo e(__("Longest  Duration")); ?>


                <?php break; ?>
                <?php case ("stops_asc"): ?>

                <?php echo e(__("Fewest Stops | Direct")); ?>


                <?php break; ?>
                <?php case ("stops_desc"): ?>

                <?php echo e(__("Most Stops")); ?>


                <?php break; ?>
                <?php default: ?>
                <?php echo e(__("Recommended")); ?>

            <?php endswitch; ?>

        </span>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="" data-value=""><?php echo e(__("Recommended")); ?></a>
            <a class="dropdown-item" href="" data-value="asc"><?php echo e(__("Price (Low to high)")); ?></a>
            <a class="dropdown-item" href="" data-value="desc"><?php echo e(__("Price (High to low)")); ?></a>
            
            <a class="dropdown-item" href="" data-value="stops_asc"><?php echo e(__("Fewest Stops | Direct")); ?></a>
            <a class="dropdown-item" href="" data-value="stops_desc"><?php echo e(__("Most Stops")); ?></a>
            

        </div>

    </div>

</div>

<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Layout/global/search/orderby.blade.php ENDPATH**/ ?>