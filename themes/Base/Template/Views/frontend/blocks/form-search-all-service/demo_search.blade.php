<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="g-form-control">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="bravo_hotel">
                        <a href="#bravo_hotel" class=" active " aria-controls="bravo_hotel" role="tab"
                            data-toggle="tab">
                            <i class="fa fa-building-o"></i>
                            ONE WAY
                        </a>
                    </li>
                    <li role="bravo_space">
                        <a href="#bravo_space" class="" aria-controls="bravo_space" role="tab"
                            data-toggle="tab">
                            <i class="icofont-building-alt"></i>
                            ROUND TRIP
                        </a>
                    </li>
                    <li role="bravo_tour">
                        <a href="#bravo_tour" class="" aria-controls="bravo_tour" role="tab"
                            data-toggle="tab">
                            <i class="icofont-island-alt"></i>
                            MULTI CITY
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane  active " id="bravo_hotel">
                        <form action="" class="form bravo_form" method="get">
                            <div class="g-field-search">
                                <div class="row ">
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>From where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="from_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="to_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock"></i>
                                            <div class="form-content">
                                                <div class="form-date-search">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render font-size-14">
                                                            </div>
                                                            <span> </span>
                                                            <div class="render check-out-render font-size-14">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="start">
                                                    <input type="hidden" class="check-out-input" value=""
                                                        name="end">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock"></i>
                                            <div class="form-content">
                                                <div class="form-date-search">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render font-size-14">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="date">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>Seating Class</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="Seating Class" value=""
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
                                                <i class="field-icon icofont-ticket"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <div class="wrapper-more">
                                                        <label> Travelers </label>
                                                        <div class="render font-size-14">
                                                            <span class="" id="seat_type_vip_render">
                                                                <span class="one">Passenger</span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count ">Passenger</span>
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
                            </div>
                            <div class="g-button-submit">
                                <button class="btn btn-primary btn-search" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="bravo_space">
                        <form action="" class="form bravo_form" method="get">
                            <div class="g-field-search">
                                <div class="row ">
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>From where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="from_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                            <div class="item" data-id="2"
                                                                data-text=" New York, United States"> <i
                                                                    class="icofont-location-pin"></i> New York, United
                                                                States </div>
                                                            <div class="item" data-id="3"
                                                                data-text=" California"> <i
                                                                    class="icofont-location-pin"></i> California </div>
                                                            <div class="item" data-id="4"
                                                                data-text=" United States"> <i
                                                                    class="icofont-location-pin"></i> United States
                                                            </div>
                                                            <div class="item" data-id="5"
                                                                data-text=" Los Angeles"> <i
                                                                    class="icofont-location-pin"></i> Los Angeles
                                                            </div>
                                                            <div class="item" data-id="6"
                                                                data-text=" New Jersey"> <i
                                                                    class="icofont-location-pin"></i> New Jersey </div>
                                                            <div class="item" data-id="7"
                                                                data-text=" San Francisco"> <i
                                                                    class="icofont-location-pin"></i> San Francisco
                                                            </div>
                                                            <div class="item" data-id="8" data-text=" Virginia">
                                                                <i class="icofont-location-pin"></i> Virginia
                                                            </div>
                                                            <div class="item" data-id="9" data-text=" London">
                                                                <i class="icofont-location-pin"></i> London
                                                            </div>
                                                            <div class="item" data-id="10" data-text=" Germany">
                                                                <i class="icofont-location-pin"></i> Germany
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="to_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock"></i>
                                            <div class="form-content">
                                                <div class="form-date-search">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render font-size-14">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="date">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock"></i>
                                            <div class="form-content">
                                                <div class="form-date-search">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Return</label>
                                                            <div class="render check-in-render font-size-14">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="date">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>Seating Class</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="Seating Class" value=""
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
                                    <div class="col-md-2 border-right">
                                        <div class="form-select-seat-type">
                                            <div class="form-group">
                                                <i class="field-icon icofont-ticket"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <div class="wrapper-more">
                                                        <label> Travelers </label>
                                                        <div class="render font-size-14">
                                                            <span class="" id="seat_type_vip_render">
                                                                <span class="one">Passenger</span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count Vip">Vip</span>
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
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>From where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="from_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="to_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock"></i>
                                            <div class="form-content">
                                                <div class="form-date-search">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render font-size-14">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="date">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>Seating Class</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="Seating Class" value=""
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
                                                <i class="field-icon icofont-ticket"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <div class="wrapper-more">
                                                        <label> Travelers </label>
                                                        <div class="render font-size-14">
                                                            <span class="" id="seat_type_vip_render">
                                                                <span class="one">Passenger</span>
                                                                <span class=" d-none  multi"
                                                                    data-html=":count ">Passenger</span>
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
                                {{-- <div class="row ">
                                    <div class="col-md-4 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>From where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="from_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-paper-plane"></i>
                                            <div class="form-content">
                                                <label>To where</label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                        class="smart-search-location parent_text form-control font-size-14"
                                                        readonly="" placeholder="City or airport" value=""
                                                        data-onload="Loading..."
                                                        data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;}]">
                                                    <input type="hidden" class="child_id" name="to_where"
                                                        value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"> <i
                                                                    class="icofont-location-pin"></i> Paris </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock"></i>
                                            <div class="form-content">
                                                <div class="form-date-search">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>Depart</label>
                                                            <div class="render check-in-render font-size-14">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value=""
                                                        name="date">
                                                    <input type="text" class="check-in-out" name="date"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 30px;" class="col-md-1 border-right">
                                        <p> Add</p>
                                    </div>
                                </div> --}}
                                    {{-- <div id="dynamic-fields">
                                        <div class="row field-group">
                                            <div class="col-md-3 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-paper-plane"></i>
                                                    <div class="form-content">
                                                        <label>From where</label>
                                                        <div class="smart-search">
                                                            <input type="text" class="smart-search-location parent_text form-control font-size-14" readonly
                                                                placeholder="City or airport" value="">
                                                            <input type="hidden" class="child_id" name="from_where[]" value="">
                                                            <div class="bravo-autocomplete">
                                                                <div class="list-item">
                                                                    <div class="item" data-id="1" data-text="Paris"><i class="icofont-location-pin"></i> Paris</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-paper-plane"></i>
                                                    <div class="form-content">
                                                        <label>To where</label>
                                                        <div class="smart-search">
                                                            <input type="text" class="smart-search-location parent_text form-control font-size-14" readonly
                                                                placeholder="City or airport" value="">
                                                            <input type="hidden" class="child_id" name="to_where[]" value="">
                                                            <div class="bravo-autocomplete">
                                                                <div class="list-item">
                                                                    <div class="item" data-id="1" data-text="Paris"><i class="icofont-location-pin"></i> Paris</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 border-right">
                                                <div class="form-group">
                                                    <i class="field-icon icofont-wall-clock"></i>
                                                    <div class="form-content">
                                                        <div class="form-date-search">
                                                            <div class="date-wrapper">
                                                                <div class="check-in-wrapper">
                                                                    <label>Depart</label>
                                                                    <input type="text" class="check-in-out" name="date[]" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 border-right" style="margin-top: 20px; display: flex; justify-content: space-between;">
                                                <button type="button" class="btn btn-danger removeField" style="">&times;</button>
                                                <button type="button" id="addField" class="btn btn-success">Add</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                    Copy code
<div id="dynamic-fields">
    <div class="row field-group">
        <div class="col-md-3 border-right">
            <div class="form-group">
                <i class="field-icon icofont-paper-plane"></i>
                <div class="form-content">
                    <label>From where</label>
                    <div class="smart-search">
                        <input type="text" class="smart-search-location parent_text form-control font-size-14" readonly
                               placeholder="City or airport" value="">
                        <input type="hidden" class="child_id" name="from_where[]" value="">
                        <div class="bravo-autocomplete">
                            <div class="list-item">
                                <div class="item" data-id="1" data-text="Paris"><i class="icofont-location-pin"></i> Paris</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 border-right">
            <div class="form-group">
                <i class="field-icon icofont-paper-plane"></i>
                <div class="form-content">
                    <label>To where</label>
                    <div class="smart-search">
                        <input type="text" class="smart-search-location parent_text form-control font-size-14" readonly
                               placeholder="City or airport" value="">
                        <input type="hidden" class="child_id" name="to_where[]" value="">
                        <div class="bravo-autocomplete">
                            <div class="list-item">
                                <div class="item" data-id="1" data-text="Paris"><i class="icofont-location-pin"></i> Paris</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 border-right">
            <div class="form-group">
                <i class="field-icon icofont-wall-clock"></i>
                <div class="form-content">
                    <div class="form-date-search">
                        <div class="date-wrapper">
                            <div class="check-in-wrapper">
                                <label>Depart</label>
                                <input type="text" class="check-in-out" name="date[]" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 border-right" style="margin-top: 20px; display: flex; justify-content: space-between;">
            <button type="button" class="btn btn-danger removeField" style="display: none;">&times;</button>
            <button type="button" id="addField" class="btn btn-success">Add</button>
        </div>
    </div>
</div>


                                <!-- Add Button -->

                            </div>
                            <div class="g-button-submit">
                                <button class="btn btn-primary btn-search" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addFieldButton = document.getElementById('addField');
        const dynamicFieldsContainer = document.getElementById('dynamic-fields');

        function updateButtons() {
            const fieldGroups = dynamicFieldsContainer.querySelectorAll('.field-group');
            const removeButtons = dynamicFieldsContainer.querySelectorAll('.removeField');

            if (fieldGroups.length > 1) {
                removeButtons.forEach(btn => btn.style.display = 'inline');
            } else {
                removeButtons.forEach(btn => btn.style.display = 'none');
            }

            if (fieldGroups.length >= 6) {
                addFieldButton.style.display = 'none';
            } else {
                addFieldButton.style.display = 'inline';
            }
        }

        addFieldButton.addEventListener('click', function() {
            const newFieldGroup = document.querySelector('.field-group').cloneNode(true);
            newFieldGroup.querySelectorAll('input').forEach(input => input.value = ''); // Clear inputs
            dynamicFieldsContainer.appendChild(newFieldGroup);
            updateButtons(); // Update buttons visibility
        });

        dynamicFieldsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('removeField')) {
                event.target.closest('.field-group').remove();
                updateButtons(); // Update buttons visibility
            }
        });

        updateButtons(); // Initial call to set the correct visibility of buttons
    });
    </script>


