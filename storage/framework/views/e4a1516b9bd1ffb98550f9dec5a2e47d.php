<?php if(defined('BC_PRO_NOTIFY_ENABLE') && BC_PRO_NOTIFY_ENABLE): ?>

    <div class="bc-topbar-pro">

        <div class="container">

            <a href="/intro-pro "> <?php echo e(__("Upgrade to PRO to unlock unlimited access to all of our features")); ?></a>

        </div>

    </div>
 
<?php endif; ?>

<div class="bravo_topbar" style="padding: 0px 0;">

    <div class="container">
 <marquee behavior="scroll" direction="right" scrollamount="7" style="width:100%" onmouseover="this.stop();" onmouseout="this.start();">
 <h2 style="text-align:center;color:aliceblue">Get Best Deals Upto 80% off </h2>
 </marquee>
        <div class="content">

         <div class="topbar-left" style="display:none"> 
               <!-----  <?php echo clean(setting_item_with_lang("topbar_left_text")); ?> ---->
            </div>

            <div class="topbar-right" style="display:none" >

                <ul class="topbar-items">  

				<?php echo $__env->make('Core::frontend.currency-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
                <?php echo $__env->make('Language::frontend.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if(!Auth::check()): ?>

                        

                        

                    <?php else: ?>

                        <?php echo $__env->make('Layout::parts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <li class="login-item dropdown">

                            <a href="#" data-toggle="dropdown" class="login"><?php echo e(__("Hi, :name",['name'=>Auth::user()->getDisplayName()])); ?>


                                <i class="fa fa-angle-down"></i>

                            </a>

                            <ul class="dropdown-menu dropdown-menu-user text-left">

                                <?php if(empty( setting_item('wallet_module_disable') )): ?>

                                    <li class="credit_amount">

                                        <a href="<?php echo e(route('user.wallet')); ?>"><i class="fa fa-money"></i> <?php echo e(__("Credit: :amount",['amount'=>auth()->user()->balance])); ?></a>

                                    </li>

                                <?php endif; ?>

                                <?php if(is_vendor()): ?>

                                <li class="menu-hr"><a href="<?php echo e(route('vendor.dashboard')); ?>" class="menu-hr"><i class="icon ion-md-analytics"></i> <?php echo e(__("Vendor Dashboard")); ?></a></li>

                                <?php endif; ?>

                                <li class="<?php if(is_vendor()): ?> menu-hr <?php endif; ?>">

                                    <a href="<?php echo e(route('user.profile.index')); ?>"><i class="icon ion-md-construct"></i> <?php echo e(__("My profile")); ?></a>

                                </li>

                                <?php if(setting_item('inbox_enable')): ?>

                                <li class="menu-hr">

                                    <a href="<?php echo e(route('user.chat')); ?>"><i class="fa fa-comments"></i> <?php echo e(__("Messages")); ?>


                                        <?php if($count = auth()->user()->unseen_message_count): ?>

                                            <span class="badge badge-danger"><?php echo e($count); ?></span>

                                        <?php endif; ?>

                                    </a>

                                </li>

                                <?php endif; ?>

                                    <li class="menu-hr"><a href="<?php echo e(route('user.booking_history')); ?>"><i class="fa fa-clock-o"></i> <?php echo e(__("Booking History")); ?></a></li>

                                <li class="menu-hr"><a href="<?php echo e(route('user.change_password')); ?>"><i class="fa fa-lock"></i> <?php echo e(__("Change password")); ?></a></li>



                                <?php if(is_enable_plan() ): ?>

                                    <li class="menu-hr"><a href="<?php echo e(route('user.plan')); ?>"><i class="fa fa-list-alt"></i> <?php echo e(__("My plan")); ?></a></li>

                                <?php endif; ?>



                                    <?php if(isPro()): ?>

                                        <li class="menu-hr">

                                            <a href="<?php echo e(route('support.index')); ?>">

                                                <i class="fa fa-list-alt"></i> <?php echo e(__("Support Center")); ?></a>

                                        </li>

                                    <?php endif; ?>



                                <?php if(is_admin()): ?>

                                    <li class="menu-hr"><a href="<?php echo e(route('admin.index')); ?>"><i class="icon ion-ios-ribbon"></i> <?php echo e(__("Admin Dashboard")); ?></a></li>

                                <?php endif; ?>

                                <li class="menu-hr">

                                    <a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form-topbar').submit();"><i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?></a>

                                </li>

                            </ul>

                            <form id="logout-form-topbar" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">

                                <?php echo e(csrf_field()); ?>


                            </form>

                        </li>

                    <?php endif; ?>

                </ul>

            </div>

        </div>

    </div>

</div>

<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Layout/parts/topbar.blade.php ENDPATH**/ ?>