
<style>
    .font_manish {
        color: #ff7d01
    }

    .bravo-news .widget_category ul li span,
    .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
    .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
    .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle>i:first-child,
    .bravo-news .header .cate ul li,
    .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
    .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc,
    .bravo_wrap .bravo_detail_space .bravo_content .g-attributes h3:after,
    .bravo_wrap .bravo_form .g-button-submit button,
    .btn.btn-primary,
    .bravo_wrap .bravo_form .g-button-submit button:active,
    .btn.btn-primary:active,
    .bravo_wrap .bravo_detail_space .bravo-list-hotel-related-widget .heading:after,
    .btn-primary:not(:disabled) {
        background-color: #ff7d01;
    }

    .bravo_wrap .bravo_form .form-content .render,
    a:hover {
        color: #ff7d01;
    }

    .bravo_wrap .bravo_form .smart-search:not(.normal-control) .form-control,
    .bravo_wrap .bravo_form .smart-search:not(.normal-control) .parent_text {
        color: #ff7d01;
    }

    .bravo_wrap .select-seat-type-dropdown .dropdown-item-row .count-display input {
        color: #ff7d01;
    }

    .bravo_wrap .bravo_form .dropdown-toggle:after {
        color: #ff7d01;
    }

    .bravo_wrap .bravo_search_flight .bravo_filter .filter-title:before {
        background: #ff7d01;
    }
    .smart-search-location::placeholder {
    color: #ff7d01 !important; /* Use only if necessary */
    opacity: 1;
}
</style>
<?php
// Corrected isset condition with closing parenthesis and $_GET
$fromwhere = request('from_where', $searchData['from_where'] ?? '');
$to_where = request('to_where', $searchData['to_where'] ?? '');
$departure_date = request('date', $searchData['date'] ?? \Carbon\Carbon::now()->format('Y-m-d'));
$seatingtype = request('seating_seat', $searchData['seating_seat'] ?? '');
$adultcount = request('seat_type.0', $searchData['seat_type'][0] ?? 0); // Ensure seat_type exists in $searchData
$child_count = request('seat_type.1', $searchData['seat_type'][1] ?? 0); // Same check for seat_type[1]
$infant = request('seat_type.2', $searchData['seat_type'][2] ?? 0); // Same check for seat_type[2]
$return = '';
$oneway = 'active';
$onewaydisable = '';
$returndisable = 'disabled';
$returndepart = \Carbon\Carbon::now()->format('Y-m-d');
$returndate = \Carbon\Carbon::now()->addDays(3)->format('Y-m-d');
if (isset($_GET['return_date'])) {
    $returndate = request('return_date', $_GET['return_date'] ?? ''); // Corrected $_GET usage
    $returndepart = $departure_date;
    $return = 'active';
    $oneway = '';
    $onewaydisable = 'disabled';
    $returndisable = '';
}

?>
<?php if($onewaydisable == 'disabled'){  ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById("departureform").querySelectorAll("input, select, textarea, button").forEach(
            function(element) {
                element.disabled = true; // Disable all form elements
            });
    });
</script>
<?php  } else{  ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById("returnform").querySelectorAll("input, select, textarea, button").forEach(
            function(element) {
                element.disabled = true;
            });
    });
</script>
<?php } ?>
<input type="hidden" id="formopened" value="{{ $return == 'active' ? 'returnform' : 'departureform' }}">
<style>
    /* Global styles (if any) */
    .bravo_wrap .page-template-content .bravo-form-search-all .g-form-control .tab-content #bravo_car,
    .bravo_wrap .page-template-content .bravo-form-search-all .g-form-control .tab-content #bravo_event,
    .bravo_wrap .page-template-content .bravo-form-search-all .g-form-control .tab-content #bravo_tour {
        max-width: 100%;
        width: 100%;
        padding: 0 15px;
        margin: 0;
    }

    .g-form-control .nav-tabs li a {
        background-color: #1a2b47;
        border-color: #1a2b47;
        border-radius: 3px 3px 0 0;
        color: #fff;
        display: block;
        font-size: 14px;
        margin-right: 1px;
        padding: 7px 25px;
        text-decoration: none;
    }

    .bravo_wrap .select-guests-dropdown,
    .bravo_wrap .select-seat-type-dropdown {
        right: auto !important;
    }

    .g-form-control .nav-tabs li a.active {
        background-color: #ff7d01;
        border-color: #ff7d01;
    }

    .transfertype {
        width: 40px;
        border-radius: 50%;
        background: #dbdfe3;
    }

    .transfertype:hover {
        background: #f7f7f7;

    }



    /* Media Query */
    @media (min-width: 900px) {

        .bravo_wrap .bravo_form .input-search .bravo-autocomplete,
        .bravo_wrap .bravo_form .smart-search .bravo-autocomplete {
            background: #fff;
            border: 1px solid #dee2e6;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            left: 0;
            margin-top: 15px;
            max-height: 300px;
            opacity: 0;
            overflow-y: auto;
            padding: 0;
            position: absolute;
            right: -15px;
            top: 100%;
            transition: all .3s;
            visibility: hidden;
            z-index: 20;
            left: -22% !important;
        }

        .daterangepicker {
            position: absolute;
            background-color: #fff;
            border-radius: 4px;
            border: 10px solid #ddd;
            max-width: 317px;
            padding: 0;
            margin-top: 7px;
            top: 100px;
            left: 0px;
            z-index: 3001;
            display: none;
            font-family: arial;
            font-size: 15px;
            line-height: 1em;
            right: 48% !important;
        }

        .bravo_wrap .bravo_form .input-search:after,
        .bravo_wrap .bravo_form .smart-search:after {
            border-top: .4em solid;
            color: #ff7d01;
            content: "";
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .button-container {
            display: flex;
        }

        .bravo_wrap .bravo_form .form-content {
            padding: 20px 0 10px 10px;
            position: relative;
            transition: all .3s;
        }

        .left_icon {
            left: 2px !important;
            display: none;
        }

        .bravo_wrap .bravo_form .g-field-search {
            flex: 0 0 90%;
            flex-grow: 1;
            max-width: 100%;
            padding: 0 10px;
        }

    }

    .webvire {
        position: absolute;
        left: 13.5%;
    }

    .webvire2 {
        position: absolute;
        left: 21.1%;
    }
@media(max-width:1024){
    .webvire {
        position: absolute;
        left: 13%;
    } 
}
    @media (max-width: 768px) {
        #transfertype {
    width: 33px;
    /* margin-top: 24px; */
    border-radius: 50%;
    background: #dbdfe3;
    margin: -28px 1px;
  
   }
   .transfertype {
    width: 33px;
    /* margin-top: 24px; */
    border-radius: 50%;
    background: #dbdfe3;
    margin: -28px 21px;
  
   }
   .webvire {
            position: absolute;
            max-width: 30px;
            left: 4% !important;
            margin-top: 3% !important;
        }
        /* Adjust this value as needed */
       
        .webvire2 {
        position: absolute;
        left: 1% !important;
        bottom: 78%;
        /* font-size: 15px; */
        width: 5%;
        margin-top: 2% !important;
        }
        .bravo_wrap .bravo_form .form-content {
        padding: 15px 0 0px 46px;
        position: relative;
        transition: all .3s;
        } 
    }
    @media(max-width: 425px){
        .webvire {
            position: absolute;
            max-width: 30px;
            left: 6% !important;
            margin-top: 6% !important;
        }

    }
.parent_text:hover{
        cursor: pointer;
}
.check-in-wrapper:hover{
cursor:pointer;
}
.border-right:hover{
cursor:pointer;
}
#seatingClassDropdown:hover{
cursor:pointer;
}
.dropdown:hover{
cursor:pointer;
}
.webvire:hover{
cursor:pointer;
}
.webvire2:hover{
cursor:pointer;
}
</style>
@php
    if (session('currency') == '') {
        $curr_currency = $_COOKIE['currency'] ?? 'CAD';
    } else {
        $curr_currency = session('currency');
    }
    if (isset($_GET['currency'])) {
        $curr_currency = $_GET['currency'];
    }

@endphp

<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-12">
            <div class="g-form-control">
                <ul class="nav nav-tabs" role="tablist">
                    <!--  $('#formopened').val('departureform')  -->
                    <li role="bravo_hotel" onclick="changedisable('departureform','returnform')">
                        <a href="#bravo_hotel" class="{{ $oneway }} text-white" aria-controls="bravo_hotel"
                            role="tab" data-toggle="tab">
                            <i class="fa fa-building-o"></i>
                            ONE WAY
                        </a>
                    </li>
                    <!--  $('#formopened').val('returnform') -->
                    <li role="bravo_space" onclick="changedisable('returnform','departureform')">
                        <a href="#bravo_space" class="	{{ $return }} text-white" aria-controls="bravo_space"
                            role="tab" data-toggle="tab">
                            <i class="icofont-building-alt"></i>
                            ROUND TRIP
                        </a>
                    </li>

                </ul>
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane  {{ $oneway }}  " id="bravo_hotel">
                        <form action="{{ route('flight.search') }}" class="form bravo_form" method="get"
                            id="departureform" onsubmit="return searchwhich_form('departureform')">
                            <div class="g-field-search">
                                <div class="row ">
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon "></i>
                                            <div class="form-content">
                                                <label>From where </label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="City or airport" value="{{ $fromwhere }}"
                                                        data-onload="Loading..." data-default="" id="fromwhere1"
                                                        required autocomplete="off">
                                                    <input type="hidden" id="from1" class="child_id"
                                                        name="from_where" value="{{ $fromwhere }}" required >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="webvire2" >
                                         <img src="{{ url('images/swap.png') }}" 
                                            class="mt-4 transfertype" onclick="swapdata(1)"></div>
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="City or airport" value="{{ $to_where }}"
                                                        data-onload="Loading..." data-default="" id="wherewhere1"
                                                        required autocomplete="off">
                                                    <input type="hidden" id="where1" class="child_id"
                                                        name="to_where" value="{{ $to_where }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock left_icon"></i>
                                            <div class="form-content">
                                                <div class="form-date-search is_single_picker">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render">
                                                                {{ $departure_date }}</div>
                                                        </div>
                                                    </div>

                                                    <input type="text" class="check-in-out" name="date"
                                                        value="{{ $departure_date }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>Seating Class</label>
                                                <div class="smart-search">
                                                    <select id="seatingClassDropdown" class="form-control font-size-14"
                                                        name="seating_seat" required>

                                                        <option value="any"
                                                            {{ $seatingtype == 'any' ? 'selected' : '' }}>ANY</option>
                                                        <option value="economy"
                                                            {{ $seatingtype == 'economy' ? 'selected' : '' }}>ECONOMY
                                                        </option>
                                                        <option value="premium_economy"
                                                            {{ $seatingtype == 'premium_economy' ? 'selected' : '' }}>
                                                            PREMIUM ECONOMY</option>
                                                        <option value="business"
                                                            {{ $seatingtype == 'business' ? 'selected' : '' }}>BUSINESS
                                                        </option>
                                                        <option value="first"
                                                            {{ $seatingtype == 'first' ? 'selected' : '' }}>FIRST
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-select-seat-type">
                                            <div class="form-group">
                                                <i class="field-icon icofont-ticket left_icon"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <div class="wrapper-more">
                                                        <label> Travelers </label>
                                                        <div class="render font-size-14">
                                                            <span class="" id="seat_type_vip_6_render">
                                                                <span class="one">Passenger</span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count Adults"></span>
                                                            </span>
                                                            <span class="" id="seat_type_vip_render">
                                                                <span class="one"></span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count Childs"></span>
                                                            </span>
                                                            <span class="" id="seat_type_eco_render">
                                                                <span class="one"></span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count Infants"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu select-seat-type-dropdown">

                                                    <div class="dropdown-item-row">
                                                        <div class="label">Adults</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="seat_type_vip_6"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input id="seat_type_vip_6"
                                                                    type="number" name="seat_type[]"
                                                                    value="{{ $adultcount }}" min="0"
                                                                    required></span>
                                                            <span class="btn-add" data-input="seat_type_vip_6"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Childs</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="seat_type_vip"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input id="seat_type_vip"
                                                                    type="number" name="seat_type[]"
                                                                    value="{{ $child_count }}"
                                                                    min="0"></span>
                                                            <span class="btn-add" data-input="seat_type_vip"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item-row">
                                                        <div class="label">Infants</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="seat_type_eco"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input id="seat_type_eco"
                                                                    type="number" name="seat_type[]"
                                                                    value="{{ $infant }}"
                                                                    min="0"></span>
                                                            <span class="btn-add" data-input="seat_type_eco"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="currency" class="currencyvalue"
                                value="{{ $curr_currency }}">
                            <div class="g-button-submit">
                                <button class="btn btn-danger btn-search" type="submit"
                                    {{ $onewaydisable }}>Search</button>
                            </div>
                        </form>
                    </div>

                    <div role="tabpanel" class="tab-pane {{ $return }}" id="bravo_space">
                        <form action="{{ route('flight.search') }}" class="form bravo_form myFormSpace" method="get"
                            id="returnform"  >
                            <div class="g-field-search">
                                <div class="row ">
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>From where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="City or airport" value="{{ $fromwhere }}"
                                                        data-onload="Loading..." data-default="" id="fromwhere2"
                                                        required  autocomplete="off">
                                                    <input type="hidden" class="child_id" name="from_where"
                                                        id="from2" value="{{ $fromwhere }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="currency" class="currencyvalue"
                                        value="{{ $curr_currency }}">
                                    <div class="responsive-image webvire" > <img src="{{ url('images/swap.png') }}"
                                            onclick="swapdata(2)" class="mt-4 transfertype" id="transfertype"></img></div>

                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="City or airport" value="{{ $to_where }}"
                                                        data-onload="Loading..." data-default="" id="wherewhere2"
                                                        required  autocomplete="off">
                                                    <input type="hidden" class="child_id" name="to_where"
                                                        id="where2" value="{{ $to_where }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock left_icon"></i>
                                            <div class="form-content">
                                                <div class="form-date-search is_single_picker">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render" id="depart-date">
                                                                {{ $returndepart }}
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="date">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value=" {{ $returndepart }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock left_icon"></i>
                                            <div class="form-content">
                                                <div class="form-date-search is_single_picker">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Return</label>
                                                            <div class="render check-in-render"  id="return-date">
                                                                {{ $returndate }}</div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input"
                                                        value="  {{ $returndate }}" name="return_date">
                                                    <input type="text" class="check-in-out" name="return_date"
                                                        value="  {{ $returndate }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>Seating Class</label>
                                                <div class="smart-search">
                                                    <select id="seatingClassDropdown"
                                                        class="form-control font-size-14" name="seating_seat">
                                                        <option value="any"
                                                            {{ $seatingtype == 'any' ? 'selected' : '' }}>ANY</option>
                                                        <option value="economy"
                                                            {{ $seatingtype == 'economy' ? 'selected' : '' }}>ECONOMY
                                                        </option>
                                                        <option value="premium_economy"
                                                            {{ $seatingtype == 'premium_economy' ? 'selected' : '' }}>
                                                            PREMIUM ECONOMY</option>
                                                        <option value="business"
                                                            {{ $seatingtype == 'business' ? 'selected' : '' }}>BUSINESS
                                                        </option>
                                                        <option value="first"
                                                            {{ $seatingtype == 'first' ? 'selected' : '' }}>FIRST
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-select-seat-type">
                                            <div class="form-group">
                                                <i class="field-icon icofont-ticket left_icon"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <div class="wrapper-more">
                                                        <label> Travelers </label>
                                                        <div class="render font-size-14">
                                                            <span class="" id="seat_type_vip_6_render">
                                                                <span class="one">Passenger</span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count Adults"></span>
                                                            </span>
                                                            <span class="" id="seat_type_vip_render">
                                                                <span class="one"></span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count Childs"></span>
                                                            </span>
                                                            <span class="" id="seat_type_eco_render">
                                                                <span class="one"></span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count Infants"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu select-seat-type-dropdown">

                                                    <div class="dropdown-item-row">
                                                        <div class="label">Adults</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="seat_type_vip_6"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input id="seat_type_vip_6"
                                                                    type="number" name="seat_type[]"
                                                                    value="{{ $adultcount }}"
                                                                    min="0"></span>
                                                            <span class="btn-add" data-input="seat_type_vip_6"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Childs</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="seat_type_vip"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input id="seat_type_vip"
                                                                    type="number" name="seat_type[]"
                                                                    value="{{ $child_count }}"
                                                                    min="0"></span>
                                                            <span class="btn-add" data-input="seat_type_vip"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item-row">
                                                        <div class="label">Infants</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="seat_type_eco"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input id="seat_type_eco"
                                                                    type="number" name="seat_type[]"
                                                                    value="{{ $infant }}"
                                                                    min="0"></span>
                                                            <span class="btn-add" data-input="seat_type_eco"
                                                                data-input-attr="id"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="g-button-submit ">
                                <button class="btn btn-danger btn-search" type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function searchwhich_form(formid) {
        document.getElementById(formid).submit();
        return false;
    }

    function swapdata(text) {
        var v1 = document.getElementById('from' + text).value;
        var v2 = document.getElementById('where' + text).value;
        document.getElementById('where' + text).value = v1;
        document.getElementById('from' + text).value = v2;
        document.getElementById('fromwhere' + text).value = v2;
        document.getElementById('wherewhere' + text).value = v1;

    }

    document.addEventListener('DOMContentLoaded', () => {
        const containers = [
            document.getElementById('SightformContainer1'),
            document.getElementById('SightformContainer2'),
            document.getElementById('SightformContainer3'),
            document.getElementById('SightformContainer4')
        ];

        const addButton = document.getElementById('SightaddButton');
        const removeButtons = document.querySelectorAll('[id^="SightremoveButton"]'); // Get all remove buttons

        let visibleCount = 0; // Tracks the number of currently visible containers
	if(addButton)
        // Show next container
        addButton.addEventListener('click', () => {
            if (visibleCount < containers.length) {
                containers[visibleCount].style.display = 'block';
                removeButtons[visibleCount].style.display = 'block'; // Show corresponding remove button
                visibleCount++;
                if (visibleCount === containers.length) {
                    addButton.style.display = 'none'; // Hide add button
                }
            }
        });

        // Hide last visible container with corresponding remove button
        removeButtons.forEach((removeButton, index) => {
            removeButton.addEventListener('click', () => {
                if (visibleCount > 0) {
                    visibleCount--;
                    containers[index].style.display = 'none';
                    removeButton.style.display = 'none'; // Hide corresponding remove button
                    if (visibleCount < containers.length) {
                        addButton.style.display =
                            'block'; // Show add button again if not all containers are visible
                    }
                }
            });
        });
    });

    function changedisable(enableform, disableform) {

        $('#formopened').val(enableform);
        document.getElementById(enableform).querySelectorAll("input, select, textarea, button").forEach(function(
            element) {
            element.disabled = false; // Disable all form elements
        });

        document.getElementById(disableform).querySelectorAll("input, select, textarea, button").forEach(function(
            element) {
            element.disabled = true; // Disable all form elements
        });

    }
</script>

<!-- <script>
    $(document).ready(function() {
        function checkDatesR() {
            var checkInDate = $('#depart-date').text().trim();
            var returnDate = $('#return-date').text().trim();
            if (!checkInDate || !returnDate) {
                return true;
            }
            var today = "{{ $returndate }}";
            if (returnDate === today) {
                return true;
            }
            var checkInDateObj = new Date(checkInDate);
            var returnDateObj = new Date(returnDate);
            if (returnDateObj < checkInDateObj) {
                alert("Depart Date Must be Less than Retrun date.");
                return false;
            }
            return true;
        }
        function checkDates() {
            var checkInDate = $('#depart-date').text().trim();
            var returnDate = $('#return-date').text().trim();
            if (!checkInDate || !returnDate) {
                return true;
            }
            if (returnDate < checkInDate) {
                alert("Return Date Must be Greater than or Equal to Depart date");
                return false;
            }
            return true;
        }
        $('input[name="date"]').on('change', function() {
            checkDatesR();
        });
        $('input[name="return_date"]').on('change', function() {
            checkDates();
        });
        $('.myFormSpace').on('submit', function(event) {
            if (!checkDates()) {
                event.preventDefault();
            }
        });
    });
</script> -->
<!-- <script>
    $(document).ready(function() {
        function checkDatesR() {
            var checkInDate = $('#depart-date').text().trim();
            var returnDate = $('#return-date').text().trim();
            if (!checkInDate || !returnDate) {
                return true;
            }
            var today = "{{ $returndate }}";
            if (returnDate === today) {
                return true;
            }
            var checkInDateObj = new Date(checkInDate);
            var returnDateObj = new Date(returnDate);
            if (returnDateObj < checkInDateObj) {
                alert("Depart Date Must be Less than Retrun date.");
                return false;
            }
            return true;
        }
        function checkDates() {
            var checkInDate = $('#depart-date').text().trim();
            var returnDate = $('#return-date').text().trim();
            if (!checkInDate || !returnDate) {
                return false;
            }
            if (returnDate < checkInDate) {
                alert("Return Date Must be Greater than or Equal to Depart date");
                return false;
            }
            return true;
        }
        $('input[name="date"]').on('change', function() {
            checkDatesR();
        });
        $('input[name="return_date"]').on('change', function() {
            checkDates();
        });
            $('.myFormSpace').on('submit', function(event) {
            if (!checkDates()) {
                event.preventDefault();
            }

        });
    });
</script> -->
<script>
    $(document).ready(function() {
    // Function to check if Return Date is greater than Depart Date
    function checkDatesR() {
        var checkInDate = $('#depart-date').text().trim();
        var returnDate = $('#return-date').text().trim();

        // Check if either of the dates are empty or the same, no validation needed
        if (!checkInDate || !returnDate || returnDate === checkInDate) {
            return true;
        }

        var checkInDateObj = new Date(checkInDate);
        var returnDateObj = new Date(returnDate);

        // Validate if return date is greater than or equal to depart date
        if (returnDateObj < checkInDateObj) {
            alert("Return Date must be greater than or equal to Depart Date.");
            return false;
        }
        return true;
    }

    // Function to check that the Depart Date is before Return Date
    function checkDates() {
        var checkInDate = $('#depart-date').text().trim();
        var returnDate = $('#return-date').text().trim();

        // If either date is empty, don't validate
        if (!checkInDate || !returnDate) {
            return false;
        }

        // Check if return date is after depart date
        if (new Date(returnDate) < new Date(checkInDate)) {
            alert("Return Date must be greater than or equal to Depart Date.");
            return false;
        }
        return true;
    }

    // Check validation when the input dates change
    $('input[name="date"]').on('change', function() {
        checkDatesR();
    });

    $('input[name="return_date"]').on('change', function() {
        checkDates();
    });

    // Prevent form submission if validation fails
    $('.myFormSpace').on('submit', function(event) {
        if (!checkDates() || !checkDatesR()) {
            event.preventDefault();  // Prevent form submission if validation fails
            return false;
        }
        // Allow form submission if validation passes
    });
});

</script>


