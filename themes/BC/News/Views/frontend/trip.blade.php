@extends('layouts.app')

@push('css')
    <link href="{{ asset('dist/frontend/module/location/css/location.css?_ver=' . config('app.asset_version')) }}"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('libs/fotorama/fotorama.css') }}" />
@endpush


@section('content')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 1rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: ">";
        }

        .main-heading {
            text-align: center;
            margin-bottom: 1rem;
        }

        .main-heading h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #0056b3;
        }

        .deal-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 2rem;
            text-align: center;
            margin-bottom: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .deal-box h2 {
            font-size: 1.75rem;
            color: #d9534f;
            font-weight: 700;
        }

        .deal-box .price {
            font-size: 3.5rem;
            color: #333;
            font-weight: 700;
        }

        .deal-box .old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1.5rem;
        }

        .deal-box .rating {
            color: #f39c12;
        }

        .deal-box .trustpilot {
            color: #00b67a;
            font-weight: 500;
        }

        .form-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 2rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-box .btn {
            background-color: #d9534f;
            color: #fff;
            font-weight: 700;
        }

        .airline-logos img {
            max-height: 50px;
            margin: 0 1rem;
        }

        .more-deals {
            text-align: center;
            margin: 2rem 0;
        }

        .more-deals .deal-item {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 1rem;
            margin: 0.5rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .more-deals .deal-item h3 {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
        }

        .more-deals .deal-item .price {
            font-size: 1.75rem;
            color: #333;
            font-weight: 700;
        }

        .features {
            text-align: center;
            margin: 2rem 0;
        }

        .features .feature-item {
            margin: 1rem 0;
        }

        .features .feature-item i {
            color: #0056b3;
        }

        .reviews {
            text-align: center;
            margin: 2rem 0;
        }

        .reviews .review-item {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 1rem;
            margin: 0.5rem;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .reviews .review-item .rating {
            color: #f39c12;
        }

        .reviews .review-item .airline-logo {
            max-height: 30px;
            margin-right: 1rem;
        }

        .reviews .review-item .reviewer {
            font-weight: 700;
        }

        .reviews .review-item .location {
            color: #999;
        }

        .reviews .review-item .date {
            color: #999;
        }

        .reviews .review-item .comment {
            margin-top: 0.5rem;
        }

        .content-section {
            margin: 2rem 0;
        }

        .content-section h2 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #0056b3;
        }

        .content-section p {
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .footer-section {
            margin: 2rem 0;
        }

        .footer-section h2 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #0056b3;
        }

        .footer-section .footer-item {
            margin: 0.5rem 0;
        }
    </style>
    <style>
        /* body {
                 background-color: #e0c3fc;
                 background-image: linear-gradient(315deg, #e0c3fc 0%, #8ec5fc 74%);
                 height: 100vh;
                 display: flex;
                 justify-content: center;
                 align-items: center;
             } */
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
    
        .form-container h1 {
            color: red;
            font-size: 24px;
            text-align: center;
        }
    
        .form-container h2 {
            font-size: 16px;
            text-align: center;
            margin: 10px 0;
        }
    
        .form-container .form-group {
            margin-bottom: 15px;
        }
    
        .form-container .btn-primary {
            background-color: red;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
    
        .form-container .btn-primary:hover {
            background-color: darkred;
        }
    
        .form-container .form-text {
            font-size: 12px;
            text-align: center;
        }
    
        .form-container .form-text a {
            color: blue;
        }
    </style>
    <div class="container">
        <div class="main-heading">
            <h1>
                Cheap Flights to Lagos
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="deal-box">
                    <h2>
                        ASAP SPECIAL FARE
                    </h2>
                    <p>
                        Limited-time Offer! Ends Oct 23
                    </p>
                    <p>
                        Save up to 50% OFF!
                        <br />
                        Lowest fares from the travel experts
                    </p>
                    <div class="price">
                        C$1145
                        <span class="old-price">
                            C$1195
                        </span>
                    </div>
                    <p>
                        All in | Round Trip
                    </p>
                    <p>
                        Excellent
                        <span class="rating">
                            4.9 out of 5
                        </span>
                        <span class="trustpilot">
                            Trustpilot
                        </span>
                    </p>
                    <p>
                        1 in 4 people who visit Lagos book with ASAP Tickets
                    </p>
                    <p>
                        Call Toll-Free for Best Fare!
                    </p>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-box">
                    <h2>
                        SAVE C$30 extra: Call Toll-FREE
                    </h2>
                    <p>
                        <strong>
                            888-333-1035
                        </strong>
                    </p>
                    <p>
                        Voucher Code:
                        <strong>
                            ASAP30
                        </strong>
                    </p>
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="tripType">
                                Trip Type
                            </label>
                            <select class="form-select" id="tripType">
                                <option>
                                    Round-Trip
                                </option>
                                <option>
                                    One-Way
                                </option>
                                <option>
                                    Multi-City
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="from">
                                From
                            </label>
                            <input class="form-control" id="from" placeholder="From*" type="text" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="to">
                                To
                            </label>
                            <input class="form-control" id="to" placeholder="Lagos (LOS)" type="text" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="depart">
                                Depart
                            </label>
                            <input class="form-control" id="depart" type="date" value="2024-10-29" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="return">
                                Return
                            </label>
                            <input class="form-control" id="return" type="date" value="2024-11-05" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">
                                Phone
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    +1
                                </span>
                                <input class="form-control" id="phone" placeholder="Phone*" type="text" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">
                                Email
                            </label>
                            <input class="form-control" id="email" placeholder="Your Email (Optional)" type="email" />
                        </div>
                        <button class="btn btn-danger w-100" type="submit">
                            GET A FREE QUOTE
                        </button>
                        <p class="mt-2">
                            <a href="#">
                                How it Works?
                            </a>
                        </p>
                    </form>
                </div>
            </div> --}}
            <div class="col-md-12 col-lg-4">
                <div class="form-container">
                    <h1>
                        CALL US Toll-FREE
                    </h1>
                    <h2>
                        or
                    </h2>
                    <h2>
                        submit a request
                    </h2>
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select">
                                        <option>
                                            Round-Trip
                                        </option>
                                        <option>
                                            One-Way
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select">
                                        <option>
                                            Economy
                                        </option>
                                        <option>
                                            Business
                                        </option>
                                        <option>
                                            First Class
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select">
                                        <option>
                                            Travelers 1
                                        </option>
                                        <option>
                                            Travelers 2
                                        </option>
                                        <option>
                                            Travelers 3
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" placeholder="From*" type="text" />
                                </div>
                                <div class="col">
                                    <input class="form-control" placeholder="To*" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="date" value="2024-10-19" />
                                </div>
                                <div class="col">
                                    <input class="form-control" type="date" value="2024-10-26" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail*" type="email" />
                        </div>
                        <div class="form-group">
                            <div class="row">
                                {{-- <div class="col-2">
                        <img alt="Canadian flag" height="20" src="https://storage.googleapis.com/a1aa/image/X4gldzgbEP4VDdFBn0ueUoAIxs2ntLu3LcqBfPsoYibUCulTA.jpg" width="20"/>
                       </div> --}}
                                {{-- <div class="col-4">
                        <input class="form-control" placeholder="+1" type="text"/>
                       </div> --}}
                                <div class="col">
                                    <input class="form-control" placeholder="Phone*" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Your Name (Optional)" type="text" />
                        </div>
                        <button class="btn btn-primary" type="submit">
                            GET A FREE QUOTE
                        </button>
                        <p class="form-text">
                            By providing my contact details and clicking on "GET A FREE QUOTE" I agree to be
                            contacted for travel information via phone, text messages and email. No purchase
                            necessary. We respect your
                            <a href="#">
                                privacy
                            </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
        <div class="airline-logos text-center my-4">
            <img alt="SkyTeam Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/Hy7VUL7bZsruLxFn0YwMoUFgqWo9F6j2P5FxMPBs1xGINQ6E.jpg"
                width="100" />
            <img alt="Turkish Airlines Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/fpAYqfA3EyrPfoxQvkEU0UldrCTsqaGkHcpzFfMjSxevkGIdC.jpg"
                width="100" />
            <img alt="Qatar Airways Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/4xEVeN87pdQVDqjmh3A6mcRrWNDmNoHNgFl3NjOgTQ8Rag0JA.jpg"
                width="100" />
            <img alt="Lufthansa Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/P6dHqya0RvIef01X01PfROsNibwXXWIw4zdsdwOP6LU9oBSnA.jpg"
                width="100" />
            <img alt="Air Canada Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/iRKzgYmZYgaHPdpoAY78nKxQn1ZleMpF7BlEyczhqlCRag0JA.jpg"
                width="100" />
            <img alt="Ethiopian Airlines Logo" height="50"
                src="https://storage.googleapis.com/a1aa/image/bN8FZilsliYQDp2cuYr63dgfxGGew7e9ZnoZSSvngnZeRDkOB.jpg"
                width="100" />
        </div>
        <div class="more-deals">
            <h2>
                More Cheap Lagos Flight Deals - Call Us to Find More!
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="deal-item">
                        <h3>
                            Deal of the Week
                        </h3>
                        <p class="price">
                            C$1149
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="deal-item">
                        <h3>
                            Best Seller
                        </h3>
                        <p class="price">
                            C$1175
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="deal-item">
                        <h3>
                            Popular
                        </h3>
                        <p class="price">
                            C$1179
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="features">
            <h2>
                Don't Miss Out on These Unbelievable Offers - Book Your Dream Getaway Today!
            </h2>
            <div class="row">
                <div class="col-md-3 feature-item">
                    <i class="fas fa-headset fa-3x">
                    </i>
                    <p>
                        Live Help Anytime Before, During and After Your Trip via Phone and Email
                    </p>
                </div>
                <div class="col-md-3 feature-item">
                    <i class="fas fa-dollar-sign fa-3x">
                    </i>
                    <p>
                        If You Find a Lower Price Anywhere Online, We'll Meet or Beat It!
                    </p>
                </div>
                <div class="col-md-3 feature-item">
                    <i class="fas fa-star fa-3x">
                    </i>
                    <p>
                        Excellent Service Provided by All of Our 2100+ Live Travel Agents
                    </p>
                </div>
                <div class="col-md-3 feature-item">
                    <i class="fas fa-users fa-3x">
                    </i>
                    <p>
                        Big Savings Unavailable Online + Children, Family and Group Travel Discounts
                    </p>
                </div>
            </div>
        </div>
        <div class="reviews">
            <h2>
                97% Of Lagos Travelers Recommend ASAP Tickets
            </h2>
            <p>
                4.7 out of 5, Based on 602056 reviews
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="d-flex align-items-center">
                            <img alt="EgyptAir Logo" class="airline-logo" height="30"
                                src="https://storage.googleapis.com/a1aa/image/JMRbCcJlYIbfUKnLGYFs2iemVLz8b68rv0y2FO5jKQ8b0ApTA.jpg"
                                width="30" />
                            <div>
                                <div class="reviewer">
                                    Gaynor
                                </div>
                                <div class="location">
                                    Toronto - Lagos
                                </div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                        </div>
                        <div class="date">
                            09/27/2024
                        </div>
                        <div class="comment">
                            Jubilee is the most patient agent I have ever come across. He's amazing !!!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="d-flex align-items-center">
                            <img alt="KLM Logo" class="airline-logo" height="30"
                                src="https://storage.googleapis.com/a1aa/image/GJp7N5pDr2befkAx6MUM4WfAIoCNx8MkYUZyOxJe7BJxRDkOB.jpg"
                                width="30" />
                            <div>
                                <div class="reviewer">
                                    Edith
                                </div>
                                <div class="location">
                                    Winnipeg - Lagos
                                </div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                        </div>
                        <div class="date">
                            08/12/2024
                        </div>
                        <div class="comment">
                            My Agent was awesome. She was one of the most patient persons in the world. She is good fit
                            for customer service, her position is justified.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="d-flex align-items-center">
                            <img alt="Ethiopian Airlines Logo" class="airline-logo" height="30"
                                src="https://storage.googleapis.com/a1aa/image/bN8FZilsliYQDp2cuYr63dgfxGGew7e9ZnoZSSvngnZeRDkOB.jpg"
                                width="30" />
                            <div>
                                <div class="reviewer">
                                    Kelly
                                </div>
                                <div class="location">
                                    Toronto - Lagos
                                </div>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                            <i class="fas fa-star">
                            </i>
                        </div>
                        <div class="date">
                            07/10/2024
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript" src="{{ asset('libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('libs/fotorama/fotorama.js') }}"></script>

    <script type="text/javascript" src="{{ asset('libs/sticky/jquery.sticky.js') }}"></script>
@endpush
