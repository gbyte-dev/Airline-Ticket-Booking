<?php

$groups = \Modules\Core\Helpers\AdminMenuManager::groups_with_children();

?>

<ul class="main-menu pb-5">

    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group_id=>$group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        

        

            <?php $menus = $group['menus'] ?>

        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php $menuItem['class'] .= " ".str_ireplace("/","_",$menuItem['url']) ?>

            <li class="menu-item pos-<?php echo e($menuItem['position'] ?? 0); ?> <?php echo e($menuItem['class']); ?>">

                <a href="<?php echo e(url($menuItem['url'])); ?>">

                <?php if(!empty($menuItem['icon'])): ?>

                    <span class="icon text-center"><i class="<?php echo e($menuItem['icon']); ?>"></i></span>

                <?php endif; ?>

                <?php echo clean($menuItem['title'],[

                    'Attr.AllowedClasses'=>null

                ]); ?>


            </a>

            <?php if(!empty($menuItem['children'])): ?>

                <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>

                <ul class="children">

                    <?php $__currentLoopData = $menuItem['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li class="<?php echo e($menuItem['class']); ?>"><a href="<?php echo e(url($menuItem2['url'])); ?>">

                                <?php if(!empty($menuItem2['icon'])): ?>

                                    <i class="<?php echo e($menuItem2['icon']); ?>"></i>

                                <?php endif; ?>

                                <?php echo clean($menuItem2['title'],[

                                    'Attr.AllowedClasses'=>null

                                ]); ?></a>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            <?php endif; ?>

        </li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

<?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Layout/admin/parts/sidebar.blade.php ENDPATH**/ ?>