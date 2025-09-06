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
{{-- modal --}}
<link href="{{asset('css/site.custom.css').'?'.rand(111,2222)}}" rel="stylesheet">

@include('Template::frontend.blocks.form-search-all-service.subscription')
{{-- modal end --}}
<div class="bravo_header {{ setting_item('enable_header_sticky', 0) == 1 ? 'has_sticky' : '' }}" >

    <div class="{{ $container_class ?? 'container p-0' }}">

        <div class="content" style="max-height: 75px;">

            <div class="header-left" style="width:100%">

                <a href="{{ url(app_get_locale(false, '/')) }}" class="bravo-logo">

                    @php

                        $logo_id = setting_item('logo_id');

                        if (!empty($row->custom_logo)) {
                            $logo_id = $row->custom_logo;
                        }

                    @endphp

                    @if ($logo_id)
                        <?php $logo = get_file_url($logo_id, 'full'); ?>

                        <img src="{{ $logo }}" alt="{{ setting_item('site_title') }}" style="width: 75%;">
                    @endif

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
 @include('Core::frontend.currency-switcher')
 </div>
            </div>

            <div class="header-right">

                @if (!empty($header_right_menu))

                    <ul class="topbar-items">

                        @include('Core::frontend.currency-switcher')

                        @include('Language::frontend.switcher')

                        @if (!Auth::check())

                            {{-- <li class="login-item">

                                <a href="#login" data-toggle="modal" data-target="#login"
                                    class="login">{{ __('Login') }}</a>

                            </li> --}}

                            {{-- @if (is_enable_registration())
                                <li class="signup-item">

                                    <a href="#register" data-toggle="modal" data-target="#register"
                                        class="signup">{{ __('Sign Up') }}</a>

                                </li>
                            @endif --}}
                        @else
                            <li class="login-item dropdown">

                                <a href="#" data-toggle="dropdown" class="is_login">

                                    @if ($avatar_url = Auth::user()->getAvatarUrl())
                                        <img class="avatar" src="{{ $avatar_url }}"
                                            alt="{{ Auth::user()->getDisplayName() }}">
                                    @else
                                        <span
                                            class="avatar-text">{{ ucfirst(Auth::user()->getDisplayName()[0]) }}</span>
                                    @endif

                                    {{ __('Hi, :Name', ['name' => Auth::user()->getDisplayName()]) }}

                                    <i class="fa fa-angle-down"></i>

                                </a>

                                <ul class="dropdown-menu text-left">



                                    @if (Auth::user()->hasPermission('dashboard_vendor_access'))
                                        <li><a href="{{ route('vendor.dashboard') }}"><i
                                                    class="icon ion-md-analytics"></i> {{ __('Vendor Dashboard') }}</a>
                                        </li>
                                    @endif

                                    <li class="@if (Auth::user()->hasPermission('dashboard_vendor_access')) menu-hr @endif">

                                        <a href="{{ route('user.profile.index') }}"><i
                                                class="icon ion-md-construct"></i> {{ __('My profile') }}</a>

                                    </li>

                                    @if (setting_item('inbox_enable'))
                                        <li class="menu-hr"><a href="{{ route('user.chat') }}"><i
                                                    class="fa fa-comments"></i> {{ __('Messages') }}</a></li>
                                    @endif

                                    <li class="menu-hr"><a href="{{ route('user.booking_history') }}"><i
                                                class="fa fa-clock-o"></i> {{ __('Booking History') }}</a></li>

                                    <li class="menu-hr"><a href="{{ route('user.change_password') }}"><i
                                                class="fa fa-lock"></i> {{ __('Change password') }}</a></li>

                                    @if (Auth::user()->hasPermission('dashboard_access'))
                                        <li class="menu-hr"><a href="{{ route('admin.index') }}"><i
                                                    class="icon ion-ios-ribbon"></i> {{ __('Admin Dashboard') }}</a>
                                        </li>
                                    @endif

                                    <li class="menu-hr">

                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fa fa-sign-out"></i> {{ __('Logout') }}</a>

                                    </li>

                                </ul>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">

                                    {{ csrf_field() }}

                                </form>

                            </li>

                        @endif

                    </ul>

                @endif

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
		@if (Auth::check())
            <ul>

                @if (!Auth::check())

                    {{-- <li style="display:none;">

                        <a href="#login" data-toggle="modal" data-target="#login"
                            class="login">{{ __('Login') }}</a>

                    </li> --}}

                    {{-- @if (is_enable_registration())
                        <li style="display:none;">

                            <a href="#register" data-toggle="modal" data-target="#register"
                                class="signup">{{ __('Sign Up') }}</a>

                        </li>
                    @endif --}}
                @else
                    <li>

                        <a href="{{ route('user.profile.index') }}">

                            <i class="icofont-user-suited"></i>
                            {{ __('Hi, :Name', ['name' => Auth::user()->getDisplayName()]) }}

                        </a>

                    </li>

                    @if (Auth::user()->hasPermission('dashboard_vendor_access'))
                        <li><a href="{{ route('vendor.dashboard') }}"><i class="icon ion-md-analytics"></i>
                                {{ __('Vendor Dashboard') }}</a></li>
                    @endif

                    @if (Auth::user()->hasPermission('dashboard_access'))
                        <li>

                            <a href="{{ route('admin.index') }}"><i class="icon ion-ios-ribbon"></i>
                                {{ __('Admin Dashboard') }}</a>

                        </li>
                    @endif

                    <li>

                        <a href="{{ route('user.profile.index') }}">

                            <i class="icon ion-md-construct"></i> {{ __('My profile') }}

                        </a>

                    </li>

                    <li>

                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">

                            <i class="fa fa-sign-out"></i> {{ __('Logout') }}

                        </a>

                        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST"
                            style="display: none;">

                            {{ csrf_field() }}

                        </form>

                    </li>



                @endif

            </ul>
	@endif
            <ul class="multi-lang">

                @include('Core::frontend.currency-switcher')

            </ul>

            <ul class="multi-lang">

                @include('Language::frontend.switcher')

            </ul>

        </div>

        <div class="g-menu">

            <?php generate_menu('primary'); ?>

        </div>

    </div>

</div>
{{-- subscription --}}

