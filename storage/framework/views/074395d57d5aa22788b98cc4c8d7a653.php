<style>
.bravo_wrap .bravo_header .bravo-menu-mobile .user-profile ul li a {
    color: #1a2b48;
    text-decoration: none;
    margin-right: 15px;
}
.bravo_wrap .bravo_header .bravo-menu-mobile .user-profile ul {
    list-style: none;
    padding: 33px;
}
.bravo_wrap .bravo_header .content .header-left .bravo-menu {

    z-index: unset !important;
}
.bravo-menu{
padding-left: 260px !important;


}
@media (max-width: 1023px) {
    .bravo_wrap .bravo_header .content .header-right {
        width: 50% !important;
    }
	.bravo_wrap .bravo_header .bravo-menu-mobile .user-profile .avatar {
    background: #1a2b48;
    color: #fff;
    padding: 20px 48px !important;
    text-align: center;
}
}
body h2,h3,p,h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
				font-family: 'Poppins',sans-serif  !important;
			}
a.currency-switcher-item {
    display: block;
    padding: 1px;
    text-align: center;
    text-decoration: none;
}
li::marker {
    color: transparent; 
}
h1, h2, h3, h4, h5, h6
{
	margin:0px 0px;
}
.web_manish_virat
{
	color:black !important; 
	text-decoration:none;
}

h2 {
    font: 700 28px/39px Open Sans,sans-serif;
}

.dropdown-menu
{
	min-width:6rem;
}
 
.bravo_wrap .bravo_header .content .header-left .bravo-menu
{
	padding-left:260px !important;
}

@media (max-width: 1024px) {
    .bravo-menu {
        padding-left: 398px !important; 

    }

	
} 
@media(max-width: 768px){
	.show_phone_div{
		display:none;
	}
.dropdown-menu {
    position: absolute;
    top: 100%; 
    left: 0;
    padding: 0px !important;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 4rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}
}
</style>

<link href="<?php echo e(asset('css/site.custom.css').'?'.rand(111,2222)); ?>" rel="stylesheet">

<?php echo $__env->make('Template::frontend.blocks.form-search-all-service.subscription', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="bravo_header <?php echo e(setting_item('enable_header_sticky', 0) == 1 ? 'has_sticky' : ''); ?>" >

    <div class="<?php echo e($container_class ?? 'container p-0'); ?>">

        <div class="content" style="max-height: 75px;">

            <div class="header-left" style="width:100%">

                <a href="<?php echo e(url(app_get_locale(false, '/'))); ?>" class="bravo-logo">

                    <?php

                        $logo_id = setting_item('logo_id');

                        if (!empty($row->custom_logo)) {
                            $logo_id = $row->custom_logo;
                        }

                    ?>

                    <?php if($logo_id): ?>
                        <?php $logo = get_file_url($logo_id, 'full'); ?>

                        <img src="<?php echo e($logo); ?>" alt="<?php echo e(setting_item('site_title')); ?>" style="width: 75%;">
                    <?php endif; ?>

                </a>

                <div class="bravo-menu " style="">

                    <?php
                    
                    generate_menu('primary', [
                        'walker' => \Themes\BC\Core\Walkers\MenuWalker::class,
                    
                        'custom_class' => '',
                    ]);
                    
                    ?>

                </div>
				<div class="show_phone_div">
 <?php echo $__env->make('Core::frontend.currency-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
            </div>

            <div class="header-right">

                <?php if(!empty($header_right_menu)): ?>

                    <ul class="topbar-items">

                        <?php echo $__env->make('Core::frontend.currency-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo $__env->make('Language::frontend.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php if(!Auth::check()): ?>

                            

                            
                        <?php else: ?>
                            <li class="login-item dropdown">

                                <a href="#" data-toggle="dropdown" class="is_login">

                                    <?php if($avatar_url = Auth::user()->getAvatarUrl()): ?>
                                        <img class="avatar" src="<?php echo e($avatar_url); ?>"
                                            alt="<?php echo e(Auth::user()->getDisplayName()); ?>">
                                    <?php else: ?>
                                        <span
                                            class="avatar-text"><?php echo e(ucfirst(Auth::user()->getDisplayName()[0])); ?></span>
                                    <?php endif; ?>

                                    <?php echo e(__('Hi, :Name', ['name' => Auth::user()->getDisplayName()])); ?>


                                    <i class="fa fa-angle-down"></i>

                                </a>

                                <ul class="dropdown-menu text-left">



                                    <?php if(Auth::user()->hasPermission('dashboard_vendor_access')): ?>
                                        <li><a href="<?php echo e(route('vendor.dashboard')); ?>"><i
                                                    class="icon ion-md-analytics"></i> <?php echo e(__('Vendor Dashboard')); ?></a>
                                        </li>
                                    <?php endif; ?>

                                    <li class="<?php if(Auth::user()->hasPermission('dashboard_vendor_access')): ?> menu-hr <?php endif; ?>">

                                        <a href="<?php echo e(route('user.profile.index')); ?>"><i
                                                class="icon ion-md-construct"></i> <?php echo e(__('My profile')); ?></a>

                                    </li>

                                    <?php if(setting_item('inbox_enable')): ?>
                                        <li class="menu-hr"><a href="<?php echo e(route('user.chat')); ?>"><i
                                                    class="fa fa-comments"></i> <?php echo e(__('Messages')); ?></a></li>
                                    <?php endif; ?>

                                    <li class="menu-hr"><a href="<?php echo e(route('user.booking_history')); ?>"><i
                                                class="fa fa-clock-o"></i> <?php echo e(__('Booking History')); ?></a></li>

                                    <li class="menu-hr"><a href="<?php echo e(route('user.change_password')); ?>"><i
                                                class="fa fa-lock"></i> <?php echo e(__('Change password')); ?></a></li>

                                    <?php if(Auth::user()->hasPermission('dashboard_access')): ?>
                                        <li class="menu-hr"><a href="<?php echo e(route('admin.index')); ?>"><i
                                                    class="icon ion-ios-ribbon"></i> <?php echo e(__('Admin Dashboard')); ?></a>
                                        </li>
                                    <?php endif; ?>

                                    <li class="menu-hr">

                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?></a>

                                    </li>

                                </ul>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">

                                    <?php echo e(csrf_field()); ?>


                                </form>

                            </li>

                        <?php endif; ?>

                    </ul>

                <?php endif; ?>

                <button class="bravo-more-menu">

                    <i class="fa fa-bars"></i>
					

                </button>
				
				

            </div>

        </div>

    </div>

    <div class="bravo-menu-mobile" style="display:none;">

        <div class="user-profile">

            <div class="b-close"><i class="icofont-scroll-left"></i></div>

            <div class="avatar">Get Best Deals Upto 80% off</div>
		<?php if(Auth::check()): ?>
            <ul>

                <?php if(!Auth::check()): ?>

                    

                    
                <?php else: ?>
                    <li>

                        <a href="<?php echo e(route('user.profile.index')); ?>">

                            <i class="icofont-user-suited"></i>
                            <?php echo e(__('Hi, :Name', ['name' => Auth::user()->getDisplayName()])); ?>


                        </a>

                    </li>

                    <?php if(Auth::user()->hasPermission('dashboard_vendor_access')): ?>
                        <li><a href="<?php echo e(route('vendor.dashboard')); ?>"><i class="icon ion-md-analytics"></i>
                                <?php echo e(__('Vendor Dashboard')); ?></a></li>
                    <?php endif; ?>

                    <?php if(Auth::user()->hasPermission('dashboard_access')): ?>
                        <li>

                            <a href="<?php echo e(route('admin.index')); ?>"><i class="icon ion-ios-ribbon"></i>
                                <?php echo e(__('Admin Dashboard')); ?></a>

                        </li>
                    <?php endif; ?>

                    <li>

                        <a href="<?php echo e(route('user.profile.index')); ?>">

                            <i class="icon ion-md-construct"></i> <?php echo e(__('My profile')); ?>


                        </a>

                    </li>

                    <li>

                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">

                            <i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?>


                        </a>

                        <form id="logout-form-mobile" action="<?php echo e(route('logout')); ?>" method="POST"
                            style="display: none;">

                            <?php echo e(csrf_field()); ?>


                        </form>

                    </li>



                <?php endif; ?>

            </ul>
	<?php endif; ?>
            <ul class="multi-lang">

                <?php echo $__env->make('Core::frontend.currency-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </ul>

            <ul class="multi-lang">

                <?php echo $__env->make('Language::frontend.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </ul>

        </div>

        <div class="g-menu">

            <?php generate_menu('primary'); ?>

        </div>

    </div>

</div>


<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Layout/parts/header.blade.php ENDPATH**/ ?>