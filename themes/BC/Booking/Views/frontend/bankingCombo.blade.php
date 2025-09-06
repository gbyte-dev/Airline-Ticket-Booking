<style>
    .unique_booking {
        font-family: Arial, sans-serif;
    }

    .unique_booking .section-title {
        font-weight: bold;
        font-size: 1.25rem;
    }

    .unique_booking .section-subtitle {
        color: #6c757d;
    }

    .unique_booking .form-section {
        margin-bottom: 2rem;
    }

    .unique_booking .form-section hr {
        margin: 1.5rem 0;
    }

    .unique_booking .form-section .form-group {
        margin-bottom: 1rem;
    }

    .unique_booking .form-section .form-group label {
        font-weight: bold;
    }

    .unique_booking .form-section .form-group .form-control {
        margin-bottom: 0.5rem;
    }

    .unique_booking .form-section .form-group .form-select {
        margin-bottom: 0.5rem;
    }

    .unique_booking .gstin-section {
        margin-bottom: 2rem;
    }

    .unique_booking .gstin-section label {
        font-weight: bold;
    }

    .unique_booking .gstin-section .form-check-label {
        font-size: 0.875rem;
    }

    .unique_booking .gstin-section .form-text {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .unique_booking .btn-continue {
        background-color: #ff6600;
        color: white;
        font-weight: bold;
    }
</style>
@extends('layouts.app')

@push('css')
    <link href="{{ asset('module/booking/css/checkout.css?_ver=' . config('app.asset_version')) }}" rel="stylesheet">
@endpush

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="animation: fadeOut 5s forwards;">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="animation: fadeOut 5s forwards;">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @push('js')
        <style>
            @keyframes fadeOut {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }
        </style>
    @endpush
	
		@php 
						if(session('currency')==''){
						$curr_currency  = $_COOKIE['currency']?? 'INR';
						}else{
							$curr_currency  =  session('currency');
						}
						
	@endphp
	
	@if(isset($flightDetails['type']))
		    @include('Booking::frontend/roundtripcheckout')
	@else
    <form action="{{ route('booking.flightBooking') }}" method="post">
        @csrf
        {{-- <h1>Flight Details</h1> --}}
		

        <ul>
            <input type="hidden" name="airCode" value="{{ $flightDetails['airCode'] }}" />
            <input type="hidden" name="code" value="{{ $flightDetails['code'] }}" />
            <input type="hidden" name="airName" value="{{ $flightDetails['airName'] }}" />
            <input type="hidden" name="flightNumbers" value="{{ $flightDetails['flightNumbers'] }}" />
            <input type="hidden" name="departureTimes" value="{{ $flightDetails['departureTimes'] }}" />
            <input type="hidden" name="arrivalTimes" value="{{ $flightDetails['arrivalTimes'] }}" />
            <input type="hidden" name="durationText" value="{{ $flightDetails['durationText'] }}" />
            <input type="hidden" name="departureDate" value="{{ $flightDetails['departureDate'] }}" />
            <input type="hidden" name="stopText" value="{{ $flightDetails['stopText'] }}" />
            <input type="hidden" name="departureLocation" value="{{ $flightDetails['departureLocation'] }}" />
            <input type="hidden" name="arrivalLocation" value="{{ $flightDetails['arrivalLocation'] }}" />
            <input type="hidden" name="adults" value="{{ $flightDetails['adults'] }}" />
            <input type="hidden" name="children" value="{{ $flightDetails['children'] }}" />
            <input type="hidden" name="infants" value="{{ $flightDetails['infants'] }}" />
            <input type="hidden" name="totalBaseFare" value="{{ $flightDetails['totalBaseFare'] }}" />
            <input type="hidden" name="totalTaxes" value="{{ $flightDetails['totalTaxes'] }}" />
            <input type="hidden" name="totalDiscount" value="{{ $flightDetails['totalDiscount'] }}" />
            <input type="hidden" name="totalFare" value="{{ $flightDetails['totalFare'] }}" />
            <input type="hidden" name="arrivalDate" value="{{ $flightDetails['arrivalDate'] }}" />
            @if (is_array($flightDetails['stopsTime']))
                <input type="hidden" name="stopsTime" value="{{ json_encode($flightDetails['stopsTime']) }}" />
            @else
                <input type="hidden" name="stopsTime" value="{{ $flightDetails['stopsTime'] }}" />
            @endif


            {{-- @dd($flightDetails['stopsTime']); --}}
        </ul>

        <div class="bravo-booking-page padding-content">
            <div class="container">
                <div id="bravo-checkout-page">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="form-title">Booking Submission</h3>
                            <div class="booking-form">
                                <div id="form-checkout" class="form-checkout">
                                    {{-- <input type="hidden" name="code"
                                        value="6b62dc3ea194690ded7a0ddf1d18404c"> --}}
                                    <div class="form-section">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label>First Name <span
                                                            class="required">*</span></label> <input type="text"
                                                        placeholder="First Name" value="System" name="first_name"
                                                        class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Last Name <span
                                                            class="required">*</span></label>
                                                    <input type="text" placeholder="Last Name" value=""
                                                        name="last_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-email">
                                                <div class="form-group"><label>Email <span
                                                            class="required">*</span></label>
                                                    <input type="email" placeholder="email@domain.com" value=""
                                                        name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Phone <span
                                                            class="required">*</span></label>
                                                    <input type="tel" placeholder="Your Phone" value=""
                                                        name="phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-address-line-1">
                                                <div class="form-group"><label>Address</label> <input type="text"
                                                        placeholder="Address line 1" value="" name="address"
                                                        class="form-control"></div>
                                            </div>
                                            <div class="col-md-6 field-city">
                                                <div class="form-group"><label>City </label> <input type="text"
                                                        value="New York" name="city" placeholder="Your City"
                                                        class="form-control"></div>
                                            </div>
                                            <div class="col-md-6 field-state">
                                                <div class="form-group"><label>State/Province/Region </label> <input
                                                        type="text" value="" name="state"
                                                        placeholder="State/Province/Region" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 field-zip-code">
                                                <div class="form-group"><label>ZIP code/Postal code </label> <input
                                                        type="text" value="" name="zip_code"
                                                        placeholder="ZIP code/Postal code" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6 field-country">
                                                <div class="form-group"><label>Country <span
                                                            class="required">*</span></label>
                                                    <select name="country" class="form-control">
                                                        <option value="">-- Select --</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia And Herzegovina">Bosnia And Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean
                                                            Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, Democratic Republic">Congo, Democratic
                                                            Republic</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                            (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island & Mcdonald Islands">Heard Island &
                                                            Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                            City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India" selected="selected">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of
                                                        </option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle Of Man">Isle Of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea">Korea</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's
                                                            Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                        </option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States Of">Micronesia,
                                                            Federated States Of</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian
                                                            Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin">Saint Martin</option>
                                                        <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon
                                                        </option>
                                                        <option value="Saint Vincent And Grenadines">Saint Vincent And
                                                            Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome And Principe">Sao Tome And Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia And Sandwich Isl.">South Georgia And
                                                            Sandwich Isl.</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks And Caicos Islands">Turks And Caicos Islands
                                                        </option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Outlying Islands">United States
                                                            Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6"><label>Special Requirements </label>
                                                <textarea name="customer_notes" cols="30" rows="2" placeholder="Special Requirements"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        {{-- <h4 class="form-section-title">DETAILS FILL PASSAENGER </h4> --}}
                                        <div id="accordionExampleform" class="gateways-table accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="mb-0">
                                                        <label data-toggle="collapse"
                                                            data-target="#gateway_offline_paymentform"
                                                            aria-expanded="true">
                                                            <input type="radio" name="payment_gateway"
                                                                value="offline_payment">
                                                            DETAILS FILL PASSENGER FORM
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="gateway_offline_paymentform" class="collapse show">
                                                    <div class="card-body">
                                                        <div class="gateway_name">
                                                            <div class="container mt-1">
                                                                <div class="form-section">
                                                                    <h4 class="section-title h6">Please be careful -
                                                                        Passenger
                                                                        details must match your passport or photo ID</h4>
                                                                    <!-- Adults Section -->
                                                                    <div class="form-group" style="display: none">
                                                                        <label>Number of Adults</label>
                                                                        <select id="numAdults" class="form-select"
                                                                            onchange="updateAdultFields()">
                                                                            <option value="0"
                                                                                {{ $flightDetails['adults'] == 0 ? 'selected' : '' }}>
                                                                                0</option>
                                                                            <option value="1"
                                                                                {{ $flightDetails['adults'] == 1 ? 'selected' : '' }}>
                                                                                1</option>
                                                                            <option value="2"
                                                                                {{ $flightDetails['adults'] == 2 ? 'selected' : '' }}>
                                                                                2</option>
                                                                            <option value="3"
                                                                                {{ $flightDetails['adults'] == 3 ? 'selected' : '' }}>
                                                                                3</option>
                                                                            <option value="4"
                                                                                {{ $flightDetails['adults'] == 4 ? 'selected' : '' }}>
                                                                                4</option>
                                                                            <option value="5"
                                                                                {{ $flightDetails['adults'] == 5 ? 'selected' : '' }}>
                                                                                5</option>
                                                                            <option value="6"
                                                                                {{ $flightDetails['adults'] == 6 ? 'selected' : '' }}>
                                                                                6</option>
                                                                            <option value="7"
                                                                                {{ $flightDetails['adults'] == 7 ? 'selected' : '' }}>
                                                                                7</option>
                                                                            <option value="8"
                                                                                {{ $flightDetails['adults'] == 8 ? 'selected' : '' }}>
                                                                                8</option>
                                                                            <option value="9"
                                                                                {{ $flightDetails['adults'] == 9 ? 'selected' : '' }}>
                                                                                9</option>
                                                                            <option value="10"
                                                                                {{ $flightDetails['adults'] == 10 ? 'selected' : '' }}>
                                                                                10</option>
                                                                            <option value="11"
                                                                                {{ $flightDetails['adults'] == 11 ? 'selected' : '' }}>
                                                                                11</option>
                                                                            <option value="12"
                                                                                {{ $flightDetails['adults'] == 12 ? 'selected' : '' }}>
                                                                                12</option>
                                                                            <option value="13"
                                                                                {{ $flightDetails['adults'] == 13 ? 'selected' : '' }}>
                                                                                13</option>
                                                                            <option value="14"
                                                                                {{ $flightDetails['adults'] == 14 ? 'selected' : '' }}>
                                                                                14</option>
                                                                            <option value="15"
                                                                                {{ $flightDetails['adults'] == 15 ? 'selected' : '' }}>
                                                                                15</option>
                                                                        </select>
                                                                    </div>

                                                                    <div id="adultFields"></div>

                                                                    <!-- Children Section -->
                                                                    <div class="form-group" style="display: none">
                                                                        <label>Number of Children</label>
                                                                        <select id="numChildren" class="form-select"
                                                                            onchange="updateChildFields()">
                                                                            <option value="0"
                                                                                {{ $flightDetails['children'] == 0 ? 'selected' : '' }}>
                                                                                0</option>
                                                                            <option value="1"
                                                                                {{ $flightDetails['children'] == 1 ? 'selected' : '' }}>
                                                                                1</option>
                                                                            <option value="2"
                                                                                {{ $flightDetails['children'] == 2 ? 'selected' : '' }}>
                                                                                2</option>
                                                                            <option value="3"
                                                                                {{ $flightDetails['children'] == 3 ? 'selected' : '' }}>
                                                                                3</option>
                                                                            <option value="4"
                                                                                {{ $flightDetails['children'] == 4 ? 'selected' : '' }}>
                                                                                4</option>
                                                                            <option value="5"
                                                                                {{ $flightDetails['children'] == 5 ? 'selected' : '' }}>
                                                                                5</option>
                                                                            <option value="6"
                                                                                {{ $flightDetails['children'] == 6 ? 'selected' : '' }}>
                                                                                6</option>
                                                                            <option value="7"
                                                                                {{ $flightDetails['children'] == 7 ? 'selected' : '' }}>
                                                                                7</option>
                                                                            <option value="8"
                                                                                {{ $flightDetails['children'] == 8 ? 'selected' : '' }}>
                                                                                8</option>
                                                                            <option value="9"
                                                                                {{ $flightDetails['children'] == 9 ? 'selected' : '' }}>
                                                                                9</option>
                                                                            <option value="10"
                                                                                {{ $flightDetails['children'] == 10 ? 'selected' : '' }}>
                                                                                10</option>
                                                                            <option value="11"
                                                                                {{ $flightDetails['children'] == 11 ? 'selected' : '' }}>
                                                                                11</option>
                                                                            <option value="12"
                                                                                {{ $flightDetails['children'] == 12 ? 'selected' : '' }}>
                                                                                12</option>
                                                                            <option value="13"
                                                                                {{ $flightDetails['children'] == 13 ? 'selected' : '' }}>
                                                                                13</option>
                                                                            <option value="14"
                                                                                {{ $flightDetails['children'] == 14 ? 'selected' : '' }}>
                                                                                14</option>
                                                                            <option value="15"
                                                                                {{ $flightDetails['children'] == 15 ? 'selected' : '' }}>
                                                                                15</option>
                                                                        </select>
                                                                    </div>

                                                                    <div id="childFields"></div>

                                                                    <!-- Infants Section -->
                                                                    <div class="form-group" style="display: none">
                                                                        <label>Number of Infants</label>
                                                                        <select id="numInfants" class="form-select"
                                                                            onchange="updateInfantFields()">
                                                                            <option value="0"
                                                                                {{ $flightDetails['infants'] == 0 ? 'selected' : '' }}>
                                                                                0</option>
                                                                            <option value="1"
                                                                                {{ $flightDetails['infants'] == 1 ? 'selected' : '' }}>
                                                                                1</option>
                                                                            <option value="2"
                                                                                {{ $flightDetails['infants'] == 2 ? 'selected' : '' }}>
                                                                                2</option>
                                                                            <option value="3"
                                                                                {{ $flightDetails['infants'] == 3 ? 'selected' : '' }}>
                                                                                3</option>
                                                                            <option value="4"
                                                                                {{ $flightDetails['infants'] == 4 ? 'selected' : '' }}>
                                                                                4</option>
                                                                            <option value="5"
                                                                                {{ $flightDetails['infants'] == 5 ? 'selected' : '' }}>
                                                                                5</option>
                                                                            <option value="6"
                                                                                {{ $flightDetails['infants'] == 6 ? 'selected' : '' }}>
                                                                                6</option>
                                                                            <option value="7"
                                                                                {{ $flightDetails['infants'] == 7 ? 'selected' : '' }}>
                                                                                7</option>
                                                                            <option value="8"
                                                                                {{ $flightDetails['infants'] == 8 ? 'selected' : '' }}>
                                                                                8</option>
                                                                            <option value="9"
                                                                                {{ $flightDetails['infants'] == 9 ? 'selected' : '' }}>
                                                                                9</option>
                                                                            <option value="10"
                                                                                {{ $flightDetails['infants'] == 10 ? 'selected' : '' }}>
                                                                                10</option>
                                                                            <option value="11"
                                                                                {{ $flightDetails['infants'] == 11 ? 'selected' : '' }}>
                                                                                11</option>
                                                                            <option value="12"
                                                                                {{ $flightDetails['infants'] == 12 ? 'selected' : '' }}>
                                                                                12</option>
                                                                            <option value="13"
                                                                                {{ $flightDetails['infants'] == 13 ? 'selected' : '' }}>
                                                                                13</option>
                                                                            <option value="14"
                                                                                {{ $flightDetails['infants'] == 14 ? 'selected' : '' }}>
                                                                                14</option>
                                                                            <option value="15"
                                                                                {{ $flightDetails['infants'] == 15 ? 'selected' : '' }}>
                                                                                15</option>
                                                                        </select>
                                                                    </div>
                                                                    <div id="infantFields"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-section">
                                    <h4 class="form-section-title">Select Payment Method</h4>
                                    <div id="accordionExample" class="gateways-table accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="mb-0"><label data-toggle="collapse"
                                                        data-target="#gateway_offline_payment" aria-expanded="true"><input
                                                            type="radio" name="payment_gateway"
                                                            value="offline_payment">
                                                        Offline Payment
                                                    </label></h4>
                                            </div>
                                            <div id="gateway_offline_payment" aria-labelledby="headingOne"
                                                data-parent="#accordionExample" class="collapse show" style="">
                                                <div class="card-body">
                                                    <div class="gateway_name">
                                                        Offline Payment
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                    <div class="form-group"><label class="term-conditions-checkbox"><input
                                                type="checkbox" name="term_conditions"> I have read and accept the <a
                                                target="_blank" href="">terms and conditions</a></label></div>
                                    <div class="html_before_actions"></div>
                                    <p class="alert-text mt10 danger" style="">Term conditions is required
                                        field<br></p>
                                    <div class="form-actions"><button class="btn btn-danger">Submit
                                            <i class="fa fa-spin fa-spinner" style="display: none;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="booking-detail booking-form">
                                <div class="booking-review">
                                    <h4 class="booking-review-title">Your Booking</h4>
                                    {{-- @dd($code); --}}
                                    <div class="booking-review-content">
                                        <div class="review-section">
                                            <div class="service-info">
                                                <div><img
                                                        data-src="https://www.gstatic.com/flights/airline_logos/70px/{{ $flightDetails['airCode'] }}.png"
                                                        alt="Lake Magdalentown" class="img-responsive lazy"></div>
                                                <div class="mt-2">
                                                    <h3 class="service-name"> {{ $flightDetails['airName'] }}
                                                        ({{ $flightDetails['airCode'] }}-{{ $flightDetails['flightNumbers'] }})
                                                    </h3>
                                                </div>
                                                <div class="font-weight-medium  mb-3">
                                                    <p class="mb-1">
                                                        {{ $flightDetails['departureLocation'] }} &rarr;
                                                        {{ $flightDetails['arrivalLocation'] }}
                                                    </p>
                                                    {{ $flightDetails['durationText'] }}
                                                </div>
                                                <div class="flex-self-start justify-content-between">
                                                    <div class="flex-self-start">
                                                        <div class="mr-2"><i
                                                                class="icofont-airplane font-size-30 text-primary"></i>
                                                        </div>
                                                        <div class="text-lh-sm ml-1">
                                                            <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">
                                                                {{ $flightDetails['departureTimes'] }}</h6> <span
                                                                class="font-size-14 font-weight-normal text-gray-1">{{ $flightDetails['departureLocations'] }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-center d-none d-md-block d-lg-none">
                                                        <div class="mb-1">
                                                            <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0">
                                                                {{ $flightDetails['durationText'] }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="flex-self-start">
                                                        <div class="mr-2"><i
                                                                class="d-block rotate-90 icofont-airplane-alt font-size-30 text-primary"></i>
                                                        </div>
                                                        <div class="text-lh-sm ml-1">
                                                            <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0">
                                                                {{ $flightDetails['arrivalTimes'] }}</h6> <span
                                                                class="font-size-14 font-weight-normal text-gray-1">{{ $flightDetails['arrivalLocations'] }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-section">
                                            <ul class="review-list">
                                                <li>
                                                    <div class="label">Start Date</div>
                                                    <div class="val">
                                                        {{ $flightDetails['departureDate'] }}
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="label">Duration</div>
                                                    <div class="val"> {{ $flightDetails['durationText'] }}</div>
                                                </li>
                                                <li>
                                                    <div class="label">Premium:</div>
                                                    <div class="val">
                                                        1
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-section total-review">
                                            <ul class="review-list">
                                               
                                                <li class="final-total d-block">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="label">Total:</div>
                                                        <div class="val">{{$curr_currency}} {{ $flightDetails['totalFare'] }}</div>
                                                    </div>
                                                </li>
                                                <hr>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
	@endif
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initially populate fields based on pre-set values
        updateAdultFields();
        updateChildFields();
        updateInfantFields();
    });

    function updateAdultFields() {
        const numAdults = document.getElementById("numAdults").value;
        const adultFieldsContainer = document.getElementById("adultFields");
        adultFieldsContainer.innerHTML = ''; // Clear existing fields

        for (let i = 1; i <= numAdults; i++) {
            adultFieldsContainer.innerHTML += `
            <div class="adult" id="adult${i}">
                <div class="section-title">Adult ${i}</div>
                <div class="form-group">
                    <label>Traveller name and gender</label>
                    <div class="row">
                        <div class="col-md-5"><input type="text" class="form-control" placeholder="First name" name="adult_fname[]" required></div>
                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Last name" name="adult_lname[]" required></div>
                        <div class="col-md-3">
                            <select class="form-select form-control" required  name="adult_gender[]">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        `;
        }
    }

    function updateChildFields() {
        const numChildren = document.getElementById("numChildren").value;
        const childFieldsContainer = document.getElementById("childFields");
        childFieldsContainer.innerHTML = ''; // Clear existing fields

        for (let i = 1; i <= numChildren; i++) {
            childFieldsContainer.innerHTML += `
            <div class="child" id="child${i}">
                <div class="section-title">Child ${i} <span class="section-subtitle">(2-12 yrs)</span></div>
                <div class="form-group">
                    <label>Traveller name, gender, and date of birth</label>
                    <div class="row">
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="First name" required name="child_fname[]"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Last name" required name="child_lname[]"></div>
                        <div class="col-md-3">
                            <select class="form-select form-control" required name="child_gender[]">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-3"><input type="date" class="form-control" required name="child_dob[]"></div>
                    </div>
                </div>
                <hr>
            </div>
        `;
        }
    }

    function updateInfantFields() {
        const numInfants = document.getElementById("numInfants").value;
        const infantFieldsContainer = document.getElementById("infantFields");
        infantFieldsContainer.innerHTML = ''; // Clear existing fields

        for (let i = 1; i <= numInfants; i++) {
            infantFieldsContainer.innerHTML += `
            <div class="infant" id="infant${i}">
                <div class="section-title">Infant ${i} <span class="section-subtitle">(below 2 yrs)</span></div>
                <div class="form-group">
                    <label>Traveller name, gender, and date of birth</label>
                    <div class="row">
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="First name" name="infant_fname[]" required></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Last name" name="infant_lname[]" ></div>
                        <div class="col-md-3">
                            <select class="form-select form-control" required name="infant_gender[]">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-3"><input type="date" class="form-control" required name="infant_dob[]"></div>
                    </div>
                </div>
                <hr>
            </div>
        `;
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        title: "Thank you!",
        text: "{{ session('success') }}",
        icon: "success",
        confirmButtonText: "OK",
        customClass: {
            confirmButton: 'custom-confirm-button'  // Add this class to customize the button
        }
    });
</script>
@endif
{{-- @push('js')
    <script src="{{ asset('module/booking/js/checkout.js') }}"></script>

    <script type="text/javascript">
        jQuery(function() {

            $.ajax({

                'url': bookingCore.url + '/booking/{{ $booking->code }}/check-status',

                'cache': false,

                'type': 'GET',

                success: function(data) {

                    if (data.redirect !== undefined && data.redirect) {

                        window.location.href = data.redirect

                    }

                }

            });

        })



        $('.deposit_amount').on('change', function() {

            checkPaynow();

        });
        $('input[type=radio][name=how_to_pay]').on('change', function() {

            checkPaynow();

        });

        function checkPaynow() {

            var credit_input = $('.deposit_amount').val();

            var how_to_pay = $("input[name=how_to_pay]:checked").val();

            var convert_to_money = credit_input * {{ setting_item('wallet_credit_exchange_rate', 1) }};


            if (how_to_pay == 'full') {

                var pay_now_need_pay = parseFloat({{ floatval($booking->total) }}) - convert_to_money;

            } else {

                var pay_now_need_pay = parseFloat(
                    {{ floatval($booking->deposit == null ? $booking->total : $booking->deposit) }}) - convert_to_money;

            }


            if (pay_now_need_pay < 0) {

                pay_now_need_pay = 0;

            }

            $('.convert_pay_now').html(bravo_format_money(pay_now_need_pay));

            $('.convert_deposit_amount').html(bravo_format_money(convert_to_money));

        }




        jQuery(function() {

            $(".bravo_apply_coupon").click(function() {

                var parent = $(this).closest('.section-coupon-form');

                parent.find(".group-form .fa-spin").removeClass("d-none");

                parent.find(".message").html('');

                $.ajax({

                    'url': bookingCore.url + '/booking/{{ $booking->code }}/apply-coupon',

                    'data': parent.find('input,textarea,select').serialize(),

                    'cache': false,

                    'method': "post",

                    success: function(res) {

                        parent.find(".group-form .fa-spin").addClass("d-none");

                        if (res.reload !== undefined) {

                            window.location.reload();

                        }

                        if (res.message && res.status === 1) {

                            parent.find('.message').html('<div class="alert alert-success">' +
                                res.message + '</div>');

                        }

                        if (res.message && res.status === 0) {

                            parent.find('.message').html('<div class="alert alert-danger">' +
                                res.message + '</div>');

                        }

                    }

                });

            });

            $(".bravo_remove_coupon").click(function(e) {

                e.preventDefault();

                var parent = $(this).closest('.section-coupon-form');
                var parentItem = $(this).closest('.item');

                parentItem.find(".fa-spin").removeClass("d-none");


                $.ajax({

                    'url': bookingCore.url + '/booking/{{ $booking->code }}/remove-coupon',

                    'data': {

                        coupon_code: $(this).attr('data-code')

                    },

                    'cache': false,

                    'method': "post",

                    success: function(res) {

                        parentItem.find(".fa-spin").addClass("d-none");

                        if (res.reload !== undefined) {

                            window.location.reload();

                        }

                        if (res.message && res.status === 0) {

                            parent.find('.message').html('<div class="alert alert-danger">' +
                                res.message + '</div>');

                        }

                    }

                });

            });

        })
    </script>
@endpush --}}
