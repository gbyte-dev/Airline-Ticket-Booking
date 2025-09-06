@if(!is_api())
	<div class="bravo_footer">
		<div class="mailchimp">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-10 col-lg-offset-1">
						<div class="row">
							<div class="col-xs-12  col-md-7 col-lg-6">
								<div class="media ">
									<div class="media-left hidden-xs">
										<i class="icofont-island-alt"></i>
									</div>
									<div class="media-body">
										<h4 class="media-heading">{{__("Get Updates & More")}}</h4>
										<p>{{__("Thoughtful thoughts to your inbox")}}</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-5 col-lg-6">
								<form action="{{route('newsletter.subscribe')}}" class="subcribe-form bravo-subscribe-form bravo-form">
									@csrf
									<div class="form-group">
										<input type="text" name="email" class="form-control email-input" placeholder="{{__('Your Email')}}">
										<button type="submit" class="btn-submit">{{__('Subscribe')}}
											<i class="fa fa-spinner fa-pulse fa-fw"></i>
										</button>
									</div>
									<div class="form-mess"></div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-footer">
			<div class="container">
				<div class="row">
					@if($list_widget_footers = setting_item_with_lang("list_widget_footer"))
                        <?php $list_widget_footers = json_decode($list_widget_footers); ?>
						@foreach($list_widget_footers as $key=>$item)
							<div class="col-lg-{{$item->size ?? '3'}} col-md-6">
								<div class="nav-footer">
									<div class="title">
										{{$item->title}}
									</div>
									<div class="context">
										{!! $item->content  !!}
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
		<div class="copy-right">
			<div class="container context">
				<div class="row">
					<div class="col-md-12">
						{!! clean(setting_item_with_lang("footer_text_lefst"))  !!}
						<div class="f-visa">
							{!! clean(setting_item_with_lang("footer_text_right"))  !!}
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right">
			<div class="container context">
				<div class="row">
					<div class="col-md-12" style="word-break: break-word;font-size: 11px;">
						Lowest Fare Guarantee - We are so sure that our bulk private fares are unbeatable that we will give you a Low Fare Guarantee! As long as you call us within 24 hours from the purchase of your ticket and you provide us with a copy of the itinerary from any of our competitors which will include identical itinerary, including the fare basis and fare calculation information, we will match the price and send you $50 voucher to use towards your next purchase of any bulk private fares.<br/><br/>

All the advertised promos on top page 'Banners' are subject to individual rules. Please, click on each banner to learn all the advertised promo details. Savings of up to 30% off are indicated off the full un-restricted (i.e. refundable) published “Y” class airfares of major scheduled airlines. Savings may vary based on availability, advance purchase, minimum stay, travel dates, and blackout dates and may change without notice. To claim “Advertised Fare” and “Lowest Fare Guarantee” please, first, talk to your travel agent or email us at<a> info@tripgare.com</a> or call us at  <a style="color:blue" href="tel:+1 855-522-3344"  class="no-decoration"    >855-522-3344</a>. For more details check the website ‘Terms & Conditions’.
<br/><br/>

Advertised Fare Guarantee: All the fares advertised on this website are guaranteed to be reasonably available within the specified travel period in the fare restrictions. If the fare is not available, Tripgare will honor the advertised fare and sell the fare at the advertised level. To claim “Advertised Fare” and “Lowest Fare” Guarantee” please, first, talk to your travel agent or email us at <a> info@tripgare.com</a> or call us at <a style="color:blue" href="tel:+1 855-522-3344" class="no-decoration">855-522-3344</a>. For more details check the website 'Terms & Conditions'.
<br/><br/>

The C$30 off Flight Voucher entitles the customer to a discount of C$30 on air ticket purchases made with Tripgare. The discount is applied when making a booking by calling Tripgare. To redeem the voucher code [TRIPGARE30], the customer is required to provide it to the Travel Agent before the booking is made. Tripgare reserves the right to modify or terminate this promotion at any time without prior notice. Other terms and conditions may apply.
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@include('Layout::parts.login-register-modal')
@include('Popup::frontend.popup')
@if(Auth::check() and !empty($is_user_page))
	@include('Media::browser')
@endif

{{-- new --}}
<style>

</style>
<!-- Responsive Cookie Banner -->
{{-- <div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #f8f9fa; border-top: 1px solid #ddd; padding: 10px; z-index: 9999; box-shadow: 0px -2px 5px rgba(0,0,0,0.2);">
    <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
        <p style="margin: 0; flex: 1; min-width: 250px; font-size: 14px; color: #333; line-height: 1.4;">
            This website uses cookies to improve your experience. By clicking "Accept All", you consent to all cookies. 
            <a href="https://flight.tripgare.com/page/privacy-policy" target="_blank" style="color: #007bff; text-decoration: underline;">
                Learn more
            </a>.
        </p> --}}
        {{-- <div style="flex-shrink: 0; display: flex; gap: 10px;">
            <button id="accept-cookies" style="background-color: green; color: white; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px; font-size: 14px;">
                Accept
            </button>
            <button id="reject-cookies" style="background-color: #dc3545; color: white; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px; font-size: 14px;">
                Reject 
            </button>
        </div> --}}
		<div id="cookie-banner" style="position: fixed; bottom: 20px; left: 10px; right: 10px; padding: 10px; background: #f4f4f4; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); border-radius: 8px; display: flex; align-items: center; gap: 10px; justify-content: center; text-align: center; flex-wrap: wrap;">
    <span>This website uses cookies to improve your experience. By clicking "Accept All", you consent to all cookies.</span>
    <div id="button-container" style="display: flex; gap: 10px;">
        <button id="accept-cookies" style="background-color: green; color: white; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px; font-size: 14px;">
            Accept
        </button>
        <button id="reject-cookies" style="background-color: #dc3545; color: white; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px; font-size: 14px;">
            Reject 
        </button>
    </div>
</div>

<style>
    @media (max-width: 600px) {
        #button-container {
            
            width: 100%;
            gap: 8px;
			display: flex; gap: 10px;
        }
        button {
            width: 100%;
        }
    }
</style>


 
		
		<div id="cookie-icon" style="z-index: 999;  position: fixed; bottom: 20px; left: 20px; width: 50px; height: 50px; background: rgb(255, 125, 1); border-radius: 50%; display: none; align-items: center; justify-content: center; color: white; font-size: 24px; cursor: pointer;">
			🍪</div>
    {{-- </div>
</div> --}}

<!-- CSS for Full Responsiveness -->
{{-- <style>
    #cookie-banner {
        font-family: Arial, sans-serif;
        box-sizing: border-box;
        display: block;
    }

    /* Responsive Design for Tablet and Mobile */
    @media (max-width: 768px) {
        #cookie-banner div {
            flex-direction: column; /* Stack elements vertically */
            align-items: center; /* Center align content */
            text-align: center;
        }
        #cookie-banner p {
            font-size: 13px; /* Smaller text for mobile screens */
            margin-bottom: 10px; /* Spacing below the text */
        }
        #cookie-banner button {
            width: 90%; /* Buttons take up 90% width */
            text-align: center;
        }
    }
</style> --}}

<!-- JavaScript for Handling Cookies -->
<script>
// document.addEventListener("DOMContentLoaded", function() {
//     const banner = document.getElementById("cookie-banner");
//     const acceptBtn = document.getElementById("accept-cookies");
//     const rejectBtn = document.getElementById("reject-cookies");

//     // Accept Cookies
//     acceptBtn.addEventListener("click", function() {
//         document.cookie = "cookiesAccepted=true; path=/; max-age=" + 60 * 60 * 24 * 365;
//         banner.style.display = "none";
//     });

//     // Reject Cookies
//     rejectBtn.addEventListener("click", function() {
//         document.cookie = "cookiesAccepted=false; path=/; max-age=" + 60 * 60 * 24 * 365;
//         banner.style.display = "none";
//     });

//     // Hide banner if cookies are already set
//     if (document.cookie.includes("cookiesAccepted")) {
//         // banner.style.display = "none";
//     }
// });
document.addEventListener("DOMContentLoaded", function() {
    const banner = document.getElementById("cookie-banner");
    const acceptBtn = document.getElementById("accept-cookies");
    const rejectBtn = document.getElementById("reject-cookies");
    const cookieIcon = document.getElementById("cookie-icon");

    const setCookie = (name, value, days) => {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        document.cookie = `${name}=${value}; path=/; expires=${date.toUTCString()}`;
    };

    const getCookie = (name) => {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        return parts.length === 2 ? parts.pop().split(";").shift() : null;
    };

    // Accept Cookies
    acceptBtn.addEventListener("click", function() {
        setCookie("cookiesAccepted", "true", 30);
        banner.style.display = "none";
        cookieIcon.style.display = "none";
    });

    // Reject Cookies
    rejectBtn.addEventListener("click", function() {
        setCookie("cookiesAccepted", "false", 30);
        banner.style.display = "none";
        cookieIcon.style.display = "flex";
    });

    // Show Cookie Banner or Icon based on Cookie State
    if (getCookie("cookiesAccepted") === "true") {
        banner.style.display = "none";
        cookieIcon.style.display = "none";
    } else if (getCookie("cookiesAccepted") === "false") {
        banner.style.display = "none";
        cookieIcon.style.display = "flex";
    } else {
        banner.style.display = "flex";
    }

    // Click on Cookie Icon to Reopen Banner
    cookieIcon.addEventListener("click", function() {
        banner.style.display = "flex";
        cookieIcon.style.display = "none";
    });
});
</script>



{{-- newkd --}}


<link rel="stylesheet" href="{{asset('libs/flags/css/flag-icon.min.css')}}">

{!! \App\Helpers\Assets::css(true) !!}

{{--Lazy Load--}}
<script src="{{asset('libs/lazy-load/intersection-observer.js')}}"></script>
<script async src="{{asset('libs/lazy-load/lazyload.min.js')}}"></script>
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);


</script>
<script src="{{ asset('libs/lodash.min.js') }}"></script>
<script src="{{ asset('libs/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('libs/vue/vue'.(!env('APP_DEBUG') ? '.min':'').'.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/bootbox/bootbox.min.js') }}"></script>
@if(Auth::check() and !empty($is_user_page))
	<script src="{{ asset('module/media/js/browser.js?_ver='.config('app.asset_version')) }}"></script>
@endif
<script src="{{ asset('libs/carousel-2/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset("libs/daterange/moment.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("libs/daterange/daterangepicker.min.js") }}"></script>
<script src="{{ asset('libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('js/functions.js?_ver='.config('app.asset_version')) }}"></script>

@if(
    setting_item('tour_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('car_location_search_style')=='autocompletePlace' || setting_item('space_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('event_location_search_style')=='autocompletePlace'
)
	{!! App\Helpers\MapEngine::scripts() !!}
@endif
<script src="{{ asset('libs/pusher.min.js') }}"></script>
<script src="{{ asset('js/home.js?_ver='.config('app.asset_version')) }}"></script>

@if(!empty($is_user_page))
	<script src="{{ asset('module/user/js/user.js?_ver='.config('app.asset_version')) }}"></script>
@endif
@if(setting_item('cookie_agreement_type')=='cookie_agreement')
    and request()->cookie('booking_cookie_agreement_enable') !=1 and !is_api()  and !isset($_COOKIE['booking_cookie_agreement_enable']))
	<div class="booking_cookie_agreement p-3 d-flex fixed-bottom">
		<div class="content-cookie">{!! clean(setting_item_with_lang('cookie_agreement_content')) !!}</div>
		<button class="btn save-cookie">{!! clean(setting_item_with_lang('cookie_agreement_button_text')) !!}</button>
	</div>
	<script>
        var save_cookie_url = '{{route('core.cookie.check')}}';
	</script>
	<script src="{{ asset('js/cookie.js?_ver='.config('app.asset_version')) }}"></script>
@endif

@includeWhen(setting_item('cookie_agreement_type')=='cookie_consent','Layout::parts.cookie-consent-init')

@if(setting_item('user_enable_2fa'))
    @include('auth.confirm-password-modal')
    <script src="{{asset('/module/user/js/2fa.js')}}"></script>
@endif

{!! \App\Helpers\Assets::js(true) !!}

@php \App\Helpers\ReCaptchaEngine::scripts() @endphp

@stack('js')
