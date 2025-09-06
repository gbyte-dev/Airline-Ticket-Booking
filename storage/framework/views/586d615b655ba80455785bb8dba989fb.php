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

    .transfertype {
        width: 40px;
        border-radius: 50%;
        background: #dbdfe3;

    }
.bravo_wrap .bravo_form .smart-search .bravo-autocomplete .item {
    cursor: pointer;
    padding: 10px 5px;
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
            left: -11% !important;
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
            color: #5191fa;
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
        left: 13%;
        top:25%;
        cursor: pointer;
    }

    .webvire2 {
        position: absolute;
        left: 20.5%;
        cursor: pointer;
    }
    @media (max-width: 1024px) {
    .transfertype {
    width: 40px;
    border-radius: 50%;
    background: #dbdfe3;
    margin-left: -3px;
}}
    @media (max-width: 768px) {

        /* Adjust this value as needed */
        .webvire {
            position: absolute;
            left: 3% !important;
            margin-top: -9% !important;
        }

        .webvire2 {
        position: absolute;
        left: 3% !important;
        bottom: 80% !important;
        border-radius: 42%;
        background: #dbdfe3;
        width: 5% !important;
        margin-top: 2% !important;
        }
        .bravo_wrap .bravo_form .form-content {
        padding: 15px 0 10px 46px;
        position: relative;
        transition: all .3s;
        } 
        .transfertype {
        width: 40px !important;
        border-radius: 42%;
        background: #dbdfe3;
        bottom: 2%;
        margin: -8px -8px;
    /* margin-bottom: -2%; */
      }
    }

@media (max-width: 425px) {
    .webvire {
            position: absolute;
            left: 3% !important;
            margin-top: -9% !important;
            /* transform: rotate(90deg) */
        }

    .webvire2 {
        position: absolute;
        left: 3% !important;
        bottom: 73% !important;
        border-radius: 42%;
        background: #dbdfe3;
        width: 10% !important;
        margin-top: 2% !important;
        transform: rotate(90deg)
    }
    .transfertype {
        width: 36px !important;
        border-radius: 42%;
        background: #dbdfe3;
        bottom: 2%;
        margin: 21px 3px;
    }
    #transfertype{
        width: 36px !important;
        border-radius: 42%;
        background: #dbdfe3;
        bottom: 2%;
        margin-top: -43px;
        transform: rotate(90deg)
    }
}   
    .daterangepicker ltr auto-apply single opensleft {
        display: block;
    }

    /* .daterangepicker.ltr.auto-apply.single.opensleft.show-calendar {
        display: none;
    }

    .daterangepicker.ltr.auto-apply.single.opensleft.show-calendar {
        display: none;
    } */
     .parent_text:hover{
        cursor: pointer;
     }
     .check-in-render:hover{
        cursor: pointer;
     }
     #seatingClassDropdown:hover{
        cursor: pointer;
     }
      .font-size-14:hover{
        cursor: pointer;
     }
     .dropdown-toggle:hover{
        cursor: pointer;
     }
</style>
<style>
    .font_manish {
        color: #ff7d01;
    }

    .bravo_wrap .bravo_form .dropdown-toggle:after {
        color: #ff7d01;
    }

    .bravo_wrap .bravo_form .g-button-submit button,
    .btn.btn-primary {
        background-color: #ff7d01;
    }

    .bravo_wrap .page-template-content .bravo-form-search-all .g-form-control .nav-tabs li a.active {
        color: #ff7d01;
    }

    .bravo_wrap .page-template-content .bravo-form-search-all .g-form-control .nav-tabs li a.active {
        background-color: #ff7d01;
        border-color: #CDDC39;
        color: #fff;
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

    .smart-search-location::placeholder {
        color: #ff7d01 !important;
        /* Use only if necessary */
        opacity: 1;
    }
</style>
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


<?php echo $__env->make('Template::frontend.blocks.form-search-all-service.subscription', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="g-form-control">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="bravo_hotel font_manish">
                        <a href="#bravo_hotel" class=" active " aria-controls="bravo_hotel" role="tab"
                            data-toggle="tab">
                            <i class="fa fa-building-o"></i>
                            ONE WAY
                        </a>
                    </li>
                    <li role="bravo_space font_manish">
                        <a href="#bravo_space" class="" aria-controls="bravo_space" role="tab"
                            data-toggle="tab">
                            <i class="icofont-building-alt"></i>
                            ROUND TRIP
                        </a>
                    </li>
                    
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane  active " id="bravo_hotel">
                        <form action="<?php echo e(route('flight.search')); ?>" class="form bravo_form" method="get">
                            <div class="g-field-search">
                                <div class="row ">
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon "></i>
                                            <div class="form-content">
                                                <label>From where</label>
                                                <div class="smart-search ">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14 "
                                                        placeholder="City or airport" value=""
                                                        style="color:#ff7d01;" data-onload="Loading..." data-default=""
                                                        id="fromwhere1" required autocomplete="off">
                                                    <input type="hidden" id="from1" class="child_id"
                                                        name="from_where" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div  onclick="swapdata(1)"> <img src="<?php echo e(url('images/swap.png')); ?>" onclick="swapdata(3)"
                                            class="mt-4 transfertype webvire2"></img></div>
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search ">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14 "
                                                        placeholder="City or airport" value=""
                                                        style="color:#ff7d01;" data-onload="Loading..." data-default=""
                                                        id="wherewhere1" required autocomplete="off">
                                                    <input type="hidden" id="where1" class="child_id"
                                                        name="to_where" value="" required>
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
                                                                <?php echo e(\Carbon\Carbon::now()->format('d/m/Y')); ?></div>
                                                        </div>
                                                    </div>
                                                    
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
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
                                                        
                                                        <option value="any">ANY</option>
                                                        <option value="economy">ECONOMY</option>
                                                        <option value="premium_economy">PREMIUM ECONOMY</option>
                                                        <option value="business">BUSINESS</option>
                                                        <option value="first">Firts</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-select-seat-type">
                                            <div class="form-group">
                                                <span style="color:#ff7d01;"><i
                                                        class="field-icon icofont-ticket left_icon"></i></span>
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
                                                                    type="number" name="seat_type[]" value="0"
                                                                    min="0" required></span>
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
                                                                    type="number" name="seat_type[]" value="0"
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
                                                                    type="number" name="seat_type[]" value="0"
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
                                value="<?php echo e($curr_currency); ?>">
                            <div class="g-button-submit">
                                <button class="btn btn-primary btn-search" type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                    <div role="tabpanel" class="tab-pane " id="bravo_space">
                        <form action="<?php echo e(route('flight.search')); ?>" class="form bravo_form" id="myForm"
                            method="get">
                            <div class="g-field-search">
                                <input type="hidden" name="currency" class="currencyvalue"
                                    value="<?php echo e($curr_currency); ?>">
                                <div class="row ">
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <span style="color:#ff7d01;"><i
                                                    class="field-icon icofont-ticket left_icon"></i></span>
                                            <div class="form-content">
                                                <label>From where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="City or airport" value=""
                                                        data-onload="Loading..." data-default="" id="fromwhere2"
                                                        required autocomplete="off">
                                                    <input type="hidden" class="child_id" name="from_where"
                                                        id="from2" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="webvire responsive-image">
                                        <img src="<?php echo e(url('images/swap.png')); ?>" onclick="swapdata(2)"
                                            class=" transfertype" id="transfertype">
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="City or airport" value=""
                                                        data-onload="Loading..." data-default="" id="wherewhere2"
                                                        required autocomplete="off">
                                                    <input type="hidden" class="child_id" name="to_where"
                                                        id="where2" value="" required>
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
                                                                <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?>

                                                                <div class="invalid-feedback departureDateErrorHome"
                                                                    style="width:100%; text-align:left;"> </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <input type="hidden" class="check-in-input" value=""
                                                        id="hidden-depart" name="date">
                                                    <input type="text" class="check-in-out" name="date"
                                                        id="depart-input" value="">
                                                    
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
                                                            <div class="render check-in-render" id="return-date">
                                                                <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <input type="hidden" class="check-in-input" value=""
                                                        id="hidden-return" name="return_date">
                                                    <input type="text" id="return-input" class="check-in-out"
                                                        name="return_date" value="">
                                                    
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
                                                        
                                                        <option value="any">ANY</option>
                                                        <option value="economy">ECONOMY</option>
                                                        <option value="premium_economy">PREMIUM ECONOMY</option>
                                                        <option value="business">BUSINESS</option>
                                                        <option value="first">Firts</option>
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
                                                                    type="number" name="seat_type[]" value="0"
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
                                                                    type="number" name="seat_type[]" value="0"
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
                                                                    type="number" name="seat_type[]" value="0"
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
                            <div class="g-button-submit">
                                <button class="btn btn-primary btn-search" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="bravo_tour">
                        <form action="" class="form bravo_form" method="get">
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
                                                        placeholder="City or airport" value=""
                                                        data-onload="Loading..." data-default="">
                                                    <input type="hidden" class="child_id" name="from_where"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane left_icon"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="City or airport" value=""
                                                        data-onload="Loading..." data-default="">
                                                    <input type="hidden" class="child_id" name="to_where"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock left_icon"></i>
                                            <div class="form-content">
                                                <div class="form-date-search is_single_picker">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render">
                                                                <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?></div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="return_datet">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
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
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        placeholder="Seating Class" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; ANY&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; ECONOMY&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; PREMIUM_ECONOMY&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; BUSINESS&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; FIRST&quot;}]">
                                                    <input type="hidden" class="child_id" name="seating_seat"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 border-right">
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
                                                                    type="number" name="seat_type[vip]"
                                                                    value="0" min="0"></span>
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
                                                                    type="number" name="seat_type[vip]"
                                                                    value="0" min="0"></span>
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
                                                                    type="number" name="seat_type[eco]"
                                                                    value="0" min="0"></span>
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

                                <div id="dynamic-fields">
                                    <hr>
                                    <div class="row ">
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>From where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="from_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>To where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="to_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-wall-clock left_icon"></i>
                                                <div class="form-content">
                                                    <div class="form-date-search is_single_picker">
                                                        <div class="date-wrapper">
                                                            <div class="check-in-wrapper">
                                                                <label>Depart</label>
                                                                <div class="render check-in-render">
                                                                    <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?></div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="check-in-input" value=""
                                                            name="start">
                                                        <input type="text" class="check-in-out" name="date"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer1" style="display:none " class="form-container">
                                    <hr>
                                    <div class="row ">
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>From where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="from_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>To where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="to_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-wall-clock left_icon"></i>
                                                <div class="form-content">
                                                    <div class="form-date-search is_single_picker">
                                                        <div class="date-wrapper">
                                                            <div class="check-in-wrapper">
                                                                <label>Depart</label>
                                                                <div class="render check-in-render">
                                                                    <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?></div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="check-in-input" value=""
                                                            name="start">
                                                        <input type="text" class="check-in-out" name="date"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-5 border-right" style="margin-top: 20px;">
                                            <button type="button" id="SightremoveButton" class="btn btn-danger"
                                                style="display: none;">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer2" style="display:none " class="form-container">
                                    <hr>
                                    <div class="row ">
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>From where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="from_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>To where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="to_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-wall-clock left_icon"></i>
                                                <div class="form-content">
                                                    <div class="form-date-search is_single_picker">
                                                        <div class="date-wrapper">
                                                            <div class="check-in-wrapper">
                                                                <label>Depart</label>
                                                                <div class="render check-in-render">
                                                                    <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?></div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="check-in-input" value=""
                                                            name="start">
                                                        <input type="text" class="check-in-out" name="date"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-5 border-right" style="margin-top: 20px;">
                                            <button type="button" id="SightremoveButton"
                                                class="btn btn-danger">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer3" style="display:none " class="form-container">
                                    <hr>
                                    <div class="row ">
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>From where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="from_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>To where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="to_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-wall-clock left_icon"></i>
                                                <div class="form-content">
                                                    <div class="form-date-search is_single_picker">
                                                        <div class="date-wrapper">
                                                            <div class="check-in-wrapper">
                                                                <label>Depart</label>
                                                                <div class="render check-in-render">
                                                                    <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?></div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="check-in-input" value=""
                                                            name="start">
                                                        <input type="text" class="check-in-out" name="date"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-5 border-right" style="margin-top: 20px;">
                                            <button type="button" id="SightremoveButton"
                                                class="btn btn-danger">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer4" style="display:none " class="form-container">
                                    <hr>
                                    <div class="row ">
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>From where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="from_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-paper-plane left_icon"></i>
                                                <div class="form-content">
                                                    <label>To where</label>
                                                    <div class="smart-search">
                                                        <input type="text"
                                                            class="smart-search-location parent_text form-control font-size-14"
                                                            placeholder="City or airport" value=""
                                                            data-onload="Loading..." data-default="">
                                                        <input type="hidden" class="child_id" name="to_where"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 border-right">
                                            <div class="form-group">
                                                <i class="field-icon icofont-wall-clock left_icon"></i>
                                                <div class="form-content">
                                                    <div class="form-date-search is_single_picker">
                                                        <div class="date-wrapper">
                                                            <div class="check-in-wrapper">
                                                                <label>Depart</label>
                                                                <div class="render check-in-render">
                                                                    <?php echo e(\Carbon\Carbon::now()->format('m/d/Y')); ?></div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="check-in-input" value=""
                                                            name="start">
                                                        <input type="text" class="check-in-out" name="date"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-5 border-right" style="margin-top: 20px;">
                                            <button type="button" id="SightremoveButton"
                                                class="btn btn-danger">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Button -->
                                <div class="col-md-5 border-right" style="margin-top: 20px;">
                                    <!-- Button container -->
                                    <div class="button-container">
                                        
                                        &nbsp;<button type="button" id="SightaddButton"
                                            class="btn btn-success float-end">Add</button>
                                        &nbsp;<button class="btn btn-primary btn-search" type="submit"
                                            style="max-height: 68px;margin-top:0%;">Search</button>
                                    </div>
                                </div>

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
    function swapdata(text) {
        var v1 = document.getElementById('from' + text).value;
        var v2 = document.getElementById('where' + text).value;
        document.getElementById('where' + text).value = v1;
        document.getElementById('from' + text).value = v2;

        var v1 = document.getElementById('fromwhere' + text).value;
        var v2 = document.getElementById('wherewhere' + text).value;

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
</script>


<script>
    $(document).ready(function() {
        function checkDatesR() {
            var checkInDate = $('#depart-date').text().trim();
            var returnDate = $('#return-date').text().trim();
            
            if (!checkInDate || !returnDate) {
                return true; // Allow submission if either date is empty
            }

            var today = "<?php echo e(\Carbon\Carbon::now()->format('YYYY-MM-DD')); ?>";
            var checkInDateObj = new Date(checkInDate);
            var returnDateObj = new Date(returnDate);
            var todayDateObj = new Date(today);

            // Compare return date with today's date
            if (returnDateObj.getTime() === todayDateObj.getTime()) {
                return true; // Allow submission for the same day
            }

            // Ensure return date is after or on the same day as depart date
            if (returnDateObj < checkInDateObj) {
                // alert("Return Date Must be Greater than or Equal to Depart Date.");
                return false;
            }

            return true;
        }

        function checkDates() {
            var checkInDate = $('#depart-date').text().trim();
            var returnDate = $('#return-date').text().trim();

            if (!checkInDate || !returnDate) {
                return true; // Allow submission if either date is empty
            }

            var checkInDateObj = new Date(checkInDate);
            var returnDateObj = new Date(returnDate);

            // Ensure return date is after or on the same day as depart date
            if (returnDateObj < checkInDateObj) {
                alert("Return Date Must be Greater than or Equal to Depart Date.");
                return false;
            }

            return true;
        }

        // Bind change events to date inputs
        $('input[name="date"]').on('change', function() {
            checkDatesR();
        });

        $('input[name="return_date"]').on('change', function() {
            checkDates();
        });

        // Bind the form submit event
        $('#myForm').on('submit', function(event) {
            if (!checkDates()) {
                event.preventDefault(); // Prevent submission if dates are invalid
            }
        });
    });
</script>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/Base/Template/Views/frontend/blocks/form-search-all-service/form-search.blade.php ENDPATH**/ ?>