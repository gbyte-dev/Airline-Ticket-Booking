@extends('layouts.app')
@extends('layouts.app')

@push('css')
    
     {{-- <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" /> --}}
   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  --}}
    <!-- CSS for intl-tel-input -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endpush
<link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />

<style>
    /* .container {
    overflow-x: hidden; 
    overflow-y: hidden; 
} */
    .font_manish {
        color: #ff7d01
    }
    .bravo_wrap .bravo_topbar {
    background: #1a2b48;
    padding: 8px 0;
    position: sticky;
    top: 0;
    z-index: 99;
   }
    #fromwhere1 {
        background: transparent;
        border: 1px solid #dae1e7;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 35px;
        left: 0 !important;
        padding: 10 !important;
        position: relative;
    }

    #wherewhere1 {
        background: transparent;
        border: 1px solid #dae1e7;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 35px;
        left: 0 !important;
        padding: 10 !important;
    }

    .bravo_wrap .bravo_form .input-search .bravo-autocomplete,
    .bravo_wrap .bravo_form .smart-search .bravo-autocomplete {
        background: #fff;
        border: 1px solid #dee2e6;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        left: 60;
        margin-top: 15px;
        max-height: 200px;
        opacity: 0;
        overflow-y: auto;
        padding: 10;
        position: absolute;
        right: -15px;
        top: 100%;
        transition: all .3s;
        visibility: hidden;
        z-index: 10;
        left: -22% !important;
    }

    .bravo_wrap .bravo_form .input-search .bravo-autocomplete.show,
    .bravo_wrap .bravo_form .smart-search .bravo-autocomplete.show {
        opacity: 1;
        visibility: visible;
        width: 93%;
        /* margin-right: -41px; */
        margin: 1px 64px;
        font-size: 13px;
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
        color: black;
    }

    .bravo_wrap .bravo_form .smart-search:not(.normal-control) .form-control,
    .bravo_wrap .bravo_form .smart-search:not(.normal-control) .parent_text {
        color: black;
    }

    .bravo_wrap .select-seat-type-dropdown .dropdown-item-row .count-display input {
        color: black;
    }

    .bravo_wrap .bravo_form .dropdown-toggle:after {
        color: black;
    }

    .bravo_wrap .bravo_search_flight .bravo_filter .filter-title:before {
        background: black;
    }

    .smart-search-location::placeholder {
        color: black !important;
        /* Use only if necessary */
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
    setTimeout(() => {
        let form = document.getElementById("returnform");
        if (form) {
            form.querySelectorAll("input, select, textarea, button").forEach(
                element => element.disabled = true
            );
        } else {
            console.error("Element with ID 'returnform' not found.");
        }
    }, 100); // 100ms delay to ensure element availability
});

</script>
<?php } ?>
<input type="hidden" id="formopened" value="{{ $return == 'active' ? 'returnform' : 'departureform' }}">
<style>
    <style>.bravo_wrap .bravo_header .content .header-left .bravo-menu {
        padding-left: 20px;
         z-index: 1;
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

    .main-heading h5 {
        font-size: 1.5rem;
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
        height: 330px;
    }

    .deal-box h2 {
        font-size: 1.75rem;
        color: #d9534f;
        font-weight: 700;
    }

    .deal-box .price {
        font-size: 2.0rem;
        color: #333;
        font-weight: 700;
        cursor: pointer;
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

    .deal-box,
    .form-container,
    .review-item,
    .deal-item {
        margin: 1rem 0;
        /* Uniform spacing */
        padding: 1rem;
        /* Consistent padding */
    }

    .form-container .btn-primary:hover {
        background-color: #c9302c;
        /* Darker shade */
        transition: background-color 0.3s;
    }

    .airline-logos img {
        max-width: 100%;
        /* Responsive images */
        height: auto;
        /* Maintain aspect ratio */
    }

   
    @media (min-width: 993px) {
        .w3-modal-content {
            width: 900px;

        }
    }

    @media (max-width: 760px) {
        .features .feature-item {
            text-align: center;
            /* Center align for small screens */
            margin-bottom: 1rem;
            /* Add margin */
        }
    }

    .reviews .review-item {
        flex-direction: column;
        /* Stack vertically */
        align-items: center;
        /* Center align */
    }

    .review-section {
        text-align: center;
        margin: 20px 0;
    }

    .review-section h2 {
        font-size: 24px;
        font-weight: bold;
    }

    .review-section .stars {
        color: #f8d64e;
    }

    .review-section .rating {
        font-size: 18px;
        font-weight: bold;
    }

    .carousel-item {
        text-align: center;
    }

    .carousel-item img {
        max-width: 100px;
        margin: 0 auto;
    }

    .carousel-item h5 {
        font-size: 18px;
        font-weight: bold;
    }

    .carousel-item p {
        font-size: 14px;
    }

    .carousel-item .stars {
        color: #f8d64e;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000;
    }

    .content-section {
        margin: 40px 0;
    }

    .content-section h3 {
        font-size: 20px;
        font-weight: bold;
    }

    .content-section p {
        font-size: 14px;
    }

    .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
    }

    .review-section {
        text-align: center;
        padding: 50px 0;
    }

    .review-section h2 {
        font-size: 24px;
        font-weight: bold;
    }

    .review-section .stars {
        color: #f5c518;
    }

    .review-section .review-item {
        margin: 20px 0;
    }

    .review-section .review-item img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .review-section .review-item h5 {
        font-size: 18px;
        font-weight: bold;
    }

    .review-section .review-item p {
        font-size: 14px;
        color: #666;
    }

    .review-section .review-item .stars {
        margin-bottom: 10px;
    }

    .review-section .carousel-indicators button {
        background-color: #ccc;
    }

    .review-section .carousel-indicators .active {
        background-color: #007bff;
    }

    .review-section .btn-view-all {
        margin-top: 20px;
    }

    .airline-logos {
        padding: 20px;
        text-align: center;
    }

    .airline-logos img {
        height: 50px;
        width: 100px;
        margin: 10px;
    }
</style>
<style>
    .deal-card {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .deal-card:hover {
        transform: translateY(-10px);
    }

    .deal-card h5 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .deal-card img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .deal-card .price {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
    }

    .deal-card .arrow {
        font-size: 24px;
        color: #007bff;
    }

    .section-title {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .section-subtitle {
        font-size: 16px;
        text-align: center;
        margin-bottom: 50px;
        color: #666;
    }
</style>
<style>
    .offer-section {
        text-align: center;
        /* padding: 50px 0; */
    }

    .offer-section h2 {
        font-size: 24px;
        margin-bottom: 30px;
    }

    /* .offer-item {
        margin: 0 15px;
    }

    .offer-item img {
        width: 80px;
        height: 80px;
        margin-bottom: 15px;
    } */

    .offer-item p {
        font-size: 14px;
        color: #555;
    }
</style>
<style>
.subscription-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 10px;
    max-width: 500px;
    margin: auto;
}

.email-icon {
    width: 100px;
    margin-bottom: 20px;
}

.subscription-title {
    font-weight: 700;
    color: #333333;
}

.subscription-description {
    color: #666666;
    margin-bottom: 20px;
}

.subscription-input {
    margin-bottom: 10px;
    border-radius: 5px;
}

.subscription-button {
    background-color: #28a745;
    border-color: #28a745;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 700;
}

.subscription-button:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.form-check-label a {
    color: #007bff;
    text-decoration: none;
}

.form-check-label a:hover {
    text-decoration: underline;
}

.input-group-prepend select {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.custom-select {
    display: flex;
    align-items: center;
    cursor: pointer;
}

.flag-img {
    width: 20px;
    margin-right: 5px;
}

.custom-dropdown {
    position: relative;
    display: inline-block;
}

.custom-dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    border: 1px solid #ccc;
    z-index: 1;
    width: 100px;
}

.custom-dropdown-content div {
    padding: 8px;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.custom-dropdown-content div:hover {
    background-color: #f1f1f1;
}
</style>
<style>
    .virat-container {
        max-width: 720px;
        /* margin: 20px auto; */
        /* padding: 20px; */

        border-radius: 5px;
        background-color: #fff;
    }

    .virat-header-text {
        font-size: 16px;
        font-weight: bold;
        margin:0px;
    }

    .virat-price {
        font-size: 16px;
        color: #000;
    }

    .virat-highlight {
        color: #d9534f;
    }

    .virat-airline-logos img {
        max-height: 40px;
        margin: 5px;
    }

    .virat-how-it-works {
        margin-top: 20px;
    }

    .virat-how-it-works h5 {
        font-size: 13px;
        font-weight: bold;
    }

    .virat-how-it-works p {
        font-size: 13px;
    }

    .virat-contact-section {
        /* margin-top: 20px; */
        padding: 20px;
        /* border: 1px solid #ddd;
        border-radius: 5px; */
        /* background-color: #f9f9f9; */
    }

    .virat-contact-section .btn {
        background-color: #d9534f;
        color: #fff;
        font-size: 10px;
        font-weight: bold;
    }

    .virat-contact-section .btn:hover {
        background-color: #c9302c;
    }

    .virat-contact-section .form-control {
        margin-bottom: 10px;
    }

    .virat-contact-section .voucher-code {
        font-size: 14px;
        color: #5cb85c;
        font-weight: bold;
    }

    .virat-contact-section .phone-number {
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background-color: #5cb85c;
        padding: 10px;
        border-radius: 5px;
        display: inline-block;
    }

    .virat-contact-section .privacy {
        font-size: 12px;
        color: #777;
    }

    .virat-footer-logos img {
        max-height: 30px;
        margin: 5px;
    }

    .w3-button:hover {
        background-color: yellow;
    }
    .float-end{
        font-size: 35px; 
        padding: 6px -1px;
        background-color:none;
        cursor: pointer;
        margin:-12px 4px;
    }
    .bt_bg{
    background:#ff7d01;    BORDER: NONE;
    border-radius: 4px;
    font-size: 15px;padding: 4px 100px;
     }
   
      /* @media (min-width: 1400px) {
    .container {
        max-width: 100%;
    }
     } */
    @media (max-width: 760px) {
        .float-end{
        font-size: 20px; 
        /* padding: 6px -1px; */
        background-color:none
        
     }
     .bt_bg{
    background:#ff7d01;    BORDER: NONE;
    border-radius: 4px;
    padding: 9px 83px;
    font-size: 13px;

     }
     .w3-modal{
        padding-top:5px;
         overflow: scroll;
         /* padding: 100px; */
    }
    .float-end{
        font-size: 24px; 
        /* padding: 6px -1px; */
        background-color:none;
        cursor: pointer;
        margin:3px;
    }
    }
    @media (max-width: 480px) {
        .bt_bg{
    background:#ff7d01;    BORDER: NONE;
    border-radius: 4px;
    padding: 10px 58px;
    font-size: 13px;
     }
     .img_1{
       display: none;
    }
    .img_2{
        display: none;
    }
    .img_3{
        display: none;
    }
    
    }
    @media (max-width: 425px) {
    .bt_bg {
        background: #ff7d01;
        border: none; /* Use lowercase for 'border' */
        border-radius: 4px;
        padding: 5px 74px;
        font-size: 15px;
    }
    }
    .img_1{
        height:28; 
     margin-left:-20px;
    }
    .img_2{
        height:28;  
        margin-left:-24px;
    }
    .img_3{
        height:28;  
        margin-left:-17px;  
    }
    /* .w3-modal{
        padding-top:5px;
         overflow: scroll;
         padding: 100px;
    } */
    .w3-container, .w3-panel{
        padding: 0px;
    }


    .btn-outline.active {
    background-color:#ff7d01;
    color: white; /* Optional: to change the text color to white for better contrast */
  }
  .btn-success {
    background-color: #ff7d01;
    color: white; /* Optional: change text color to white for better contrast */
  }
  .custom-confirm-button {
    background-color: #ff7d01; /* Change to your desired color */
    color: #fff;               /* Text color */
}
.custom-confirm-button:hover {
    background-color: #45a049; /* Hover color */
}
.deal-box {
        /* height: 380px !important; */
        width: 350px !important;
    }
.box_vijay{
    background: white;
    border: 1px solid gainsboro;
    position: absolute;
    width: 265px !important;
    height:75px;
     margin: -45px 26px;
     font-size: 15px;
     padding-top: 17px;
}
.form_vj{
    margin: 0px 47px   
}
/* @media (min-width: 1440px) {
.dev_vijay{
        display:block;
     }
    } */
@media (min-width: 1024px) {
         /* .deal-box {
            width: 349px;
            height: 377px;
    }
    .form-container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin-left: 100px;
    }  */
      /* .dev_vijay{
        display:none;
     } */
      .box_vijay{
    background: white;
    border: 1px solid gainsboro;
    position: absolute;
    width: 230px;
    height:75px;
     margin: -51px 25px;
     font-size: 15px;
     padding-top: 17px;
     }
     .deal-box{
    height: 395px;
    width: 315px ;

   }
   .form_vj{
    margin: 0px 47px;   
}
.form-container{
    width: 485;
}
 }
 @media (max-width: 768px) {
    .form_vj {
    margin: 0px 0px !important;
   }
   .deal-box {
    /* height: 337px !important; */
    width: 320px !important;
    } 
     .box_vijay{
    background: white;
    border: 1px solid gainsboro;
    position: absolute;
    width: 245px !important;
    height:75px;
     margin: -51px 25px;
     font-size: 15px;
     padding-top: 17px;
     }
   

   
}
@media (max-width: 425px) {
    .box_vijay{
    background: white;
    border: 1px solid gainsboro;
    position: absolute;
    width: 300px;
    height:75px;
     margin: -51px 25px;
     font-size: 15px;
     padding-top: 17px;
     }
   
}
@media (max-width: 375px) {
    .box_vijay{
    background: white;
    border: 1px solid gainsboro;
    position: absolute;
    width: 250px;
    height:75px;
     margin: -51px 25px;
     font-size: 15px;
     padding-top: 17px;
     }
   
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
    setTimeout(() => {
        let form = document.getElementById("returnform");
        if (form) {
            form.querySelectorAll("input, select, textarea, button").forEach(
                element => element.disabled = true
            );
        } else {
            console.error("Element with ID 'returnform' not found.");
        }
    }, 100); // 100ms delay to ensure element availability
});

</script>
<?php } ?>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1 d-none d-xl-block d-lg-block"></div>

            <div class="col-md-6 col-lg-4 pt-4">
                <div class="main-heading">
                    <h5 style="color:#ff7d01;">
                    Cheap Flights to {{ $city }}
                    </h5><br><br>
                </div>
                <div class="deal-box">
                    <div class="box_vijay" style="">
                        <b style="color:#ff7d01;">
                                            TRIPGARE SPECIAL FARE
                                        </b>
                                        <p style="
                                        font-size: 14px;
                                    "><b>Limited-time </b>Offer! Ends {{ \Carbon\Carbon::now()->addDays(2)->format('d M') }}</p>
                    </div>
                    {{-- <h3 style="color:#ff7d01;">
                        TRIPGARE SPECIAL FARE
                    </h3> --}}
                    {{-- <p>
                        Limited-time Offer! Ends Oct 23
                    </p> --}}
                    <p style="padding-top: 35px;">
                        Save up to 30% OFF!
                        <br />
                        Lowest fares from the travel experts
                    </p>
                    <div class="price" onclick="document.getElementById('id01').style.display='block'">
                        <span>
                            @if (isset($converteddisPrice))
                                {{ str_replace(' ', '', $converteddisPrice) }}
                            @else
                                0
                            @endif
                        </span>

                        <span class="old-price">

                            @if (isset($convertedPrice))
                            {{ str_replace(' ', '', $convertedPrice) }}
                            @else
                                0
                            @endif
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
                        <span class="trustpilot" style="color:#ff7d01;">
                            Trustpilot
                        </span>
                    </p>
                    <p>
                        1 in 4 people who visit {{$city}} book with TRIPGARE Tickets
                    </p> 
                    <p>
                        Call Toll-Free for Best Fare!
                    </p>
                </div>
            </div>
            {{-- <div class="col-1"></div> --}}
            <div class="col-md-6 col-lg-5  pt-4 form_vj">
                <div class="form-container">
                    <div class="custom-header">
                        <div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <p>
                                        <b>SAVE C$30 extra: Call Toll-FREE</b>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-8">
                                    <div class="custom-voucher" style="border: 1px dotted hsl(0, 11%, 88%)">
                                        <button class="btn btn-success" style="font-size: 14px; background-color:#ff7d01;">
                                           
                                            <i class="fa fa-phone">
                                            </i>
                                            <a href="tel:+6494461709" style="color:white;"> 888-333-1035</a>
                                        </button>
                                        Code:
                                        <span class="text" style="color:#ff7d01;">
                                            TRIPGARE30
                                        </span>
                                    </div>
                                </div>
                                <p>
                                    -or fill out the request form, and we will call you back soon-
                                </p>
                            </div>
                        </div>
                        {{-- @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }} 
                        </div>
                     @endif --}}
                        <div role="tabpanel" class="tab-pane  {{ $oneway }}  " id="bravo_hotel">
                            <form action="{{ route('freequote') }}" class="form bravo_form d-block" method="post"
                                id="departureform" onsubmit="return searchwhich_form('departureform')" autocomplete="off">
                                @csrf
                                <div class="container mb-2">
                                    <div class="btn-group" role="group" style="border: 1px solid hsl(0, 11%, 88%)">
                                       
                                        <button type="button" class="btn btn-outline active"  id="oneWayBtn">One-Way</button>
                                        <button type="button" class="btn btn-outline"
                                        id="roundTripBtn">Round-Trip</button>
                                    </div>
                                    
                                    <input type="hidden" name="booking_type" id="bookingTypeInput" value="round-trip" required>
                                </div>
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col smart-search">
                                            <input type="text"
                                                class="smart-search-location parent_text form-control font-size-14"
                                                placeholder="From*" value="{{ $fromwhere }}"
                                                data-onload="Loading..." data-default="" id="fromwhere1" required>
                                            <input type="hidden" id="from1" class="child_id" name="from"
                                                value="{{ $fromwhere }}" autocomplete="off" required>
                                        </div>
                                        <div class="col smart-search">
                                            <input type="text"
                                                class="smart-search-location parent_text form-control font-size-14"
                                                placeholder="To* " value="{{ $to_where }}" data-onload="Loading..."
                                                data-default="" id="wherewhere1" required>
                                            <input type="hidden" id="where1" class="child_id" name="to"
                                                value="{{ $to_where }}" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col  pt-2 pb-2">
                                            <input class="form-control departureDate" name="start_date"  name="start_date" type="date"
                                                value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required
                                                min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
                                                <div class="invalid-feedback departureDateError " style="width:100%; text-align:left;"> </div>
                                        </div>
                                        <div class="col pt-2 pb-2">
                                            <input class="form-control returnDate" name="enddate" id="returnDate" type="date"
                                                value="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}" required
                                                min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
                                                <div class="invalid-feedback returnDateError" style="width:100%; text-align:left;"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col input-group pt-2 pb-2" >
                                            <div class="custom-dropdown">
                                                <div class="custom-select" id="selectedCountry" style="
                                                         font-size: 18px;
                                                    /* border: none; */
                                                    border-top:1px solid #dae1e7;
                                                    border-bottom: 1px solid #dae1e7;
                                                    border-left: 1px solid #dae1e7;
                                                    /* border-left: none; */
                                                    border-right: none;">
                                                    <img id="selectedFlag" class="flag-img" src="https://flagcdn.com/w320/ca.png" alt="Country Flag" />
                                                    <span id="countryCodeDisplay">+1</span>
                                                </div>
                                                <div class="custom-dropdown-content" id="countryDropdown"></div>
                                                <input type="hidden" name="phoneprefix" id="dropdowncode" value="">
                                            </div>
                                            <input class="form-control subscription-input" name="phone" placeholder="Phone" type="text" required
                                            style="    border-top: 1px solid #dae1e7;
                                            border-bottom: 1px solid #dae1e7;
                                            border-right: 1px solid #dae1e7;
                                            border-left: none;">
                                        </div>
                                        <div class="col pt-2 pb-2" >
                                            <input class="form-control" name="name" placeholder="Your Name (Optional)"
                                                type="text" />
                                        </div>
                                    </div> 
                                </div>
                                <div class="form-group  pt-2 pb-2">
                                    <input class="form-control" name="email" placeholder="E-mail*" type="email"
                                        required />
                                </div>
                                <button class="btn btn-primary" type="submit">GET A FREE QUOTE</button>
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
            </div>
            <div class="container offer-section mt-5">
                <h2>
                    Don't Miss Out on These Unbelievable Offers - Book Your Dream Getaway Today!
                </h2>
                <div class="row justify-content-center">
                    <div class="col-md-3 offer-item">
                        <img alt="24/7 Live Service Icon" height="60"
                            src="{{ asset('public/images/trip/7.png') }}"
                            width="70" />
                        <p class="justify-content-center" style="margin-right: 30px; margin-left: 30px;">
                            Live Help Anytime Before, During and After Your Trip via Phone and Email
                        </p>
                    </div>
                    <div class="col-md-3 offer-item">
                        <img alt="Lowest Airfare Guarantee Icon" height="60"
                            src="{{ asset('public/images/trip/8.png') }}"
                            width="70" />
                        <p class="justify-content-center" style="margin-right: 30px; margin-left: 30px;">
                            If You Find a Lower Price Anywhere Online, We'll Meet or Beat It!
                        </p>
                    </div>
                    <div class="col-md-3 offer-item">
                        <img alt="Personalized Expert Advice Icon" height="60"
                            src="{{ asset('public/images/trip/3.png') }}"
                            width="70" />
                        <p class="justify-content-center" style="margin-right: 30px; margin-left: 30px;">
                            Excellent Service Provided by All of Our 2100+ Live Travel Agents
                        </p>
                    </div>
                    <div class="col-md-3 offer-item">
                        <img alt="Exclusive Negotiated Discounts Icon" height="60"
                            src="{{ asset('public/images/trip/4.png') }}"
                            width="70" />
                        <p class="justify-content-center" style="margin-right: 30px; margin-left: 30px;">
                            Big Savings Unavailable Online + Children, Family and Group Travel Discounts
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container review-section">
            <h2>97% Of {{ $city }} Travelers Recommend TRIPGARE Tickets</h2>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span>4.7 out of 5. Based on 600,269 reviews</span>
            </div>
            <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="Ethiopian Airlines Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/J738nG3SLqIQDlUQgWxp8avOHK7b1tfJd0xifmllLjvYCQpTA.jpg"
                                    width="100" /> --}}
                                {{-- <h5 href="https://www.trustpilot.com/review/tripgare.com">Jass kaur <span class="stars"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i
                                            class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i
                                            class="fa fa-star checked"></i></span></h5> --}}
                                            <h5>
                                                <a href="https://www.trustpilot.com/users/673299bf9a1cd4bc08916a94" target="_blank" style="color: #000">Jass Kaur</a>
                                                <span class="stars">
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                    <i class="fa fa-star checked"></i>
                                                </span>
                                            </h5>
                                <p>Toronto - Canada</p>
                                <p>I had a great experience booking my flight with tripgare.Its so easy to talk to someone over the chat and they respond fairly quickly.
                                    The prices are cheap as compared to other 3rd party vendors.Highly recommended.</p>
                                {{-- <p>04/30/2024</p> --}}
                            </div>
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="Ethiopian Airlines Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/J738nG3SLqIQDlUQgWxp8avOHK7b1tfJd0xifmllLjvYCQpTA.jpg"
                                    width="100" /> --}}
                                    <h5>
                                        <a href="https://www.trustpilot.com/users/670762f53c7d76a85b06b666" target="_blank" style="color: #000">JP</a>
                                        <span class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </span>
                                    </h5>
                        <p>Toronto - Canada</p>
                        <p>I had a great experience with Tripgare.com, thanks to Varun Sharma! He gave us a great price and excellent customer service. Because of this, I booked all my family’s tickets with him at once. 
                            We’ll definitely be recommending Varun to friends and family as a reference for future bookings!</p>
                            </div>
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="WestJet Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/QSVMhTR8ZjLVKZjw1el4xotAm9eviRhNV9xvIlFProJbCQpTA.jpg"
                                    width="100" /> --}}
                                    <h5>
                                        <a href="https://www.trustpilot.com/users/66fa8c052a34cb463f0071b7" target="_blank" style="color: #000">
                                            Bowen Kaler</a>
                                        <span class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </h5>
                        <p>Toronto - Canada</p>
                        <p>I am beyond impressed with the exceptional service provided by Ms. Nancy Thakur, our travel adviser.
                             Not only did she secure incredibly affordable air tickets, but she also handled everything with the utmost professionalism and care. 
                            Her attention to detail and dedication to finding the best deals made the entire experience stress-free and enjoyable.

                        </p>
                            </div>
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="Air Canada Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/kqNvuR90iK5bEFEYw7xOkEtGXiS9kHfcitOv0d4X102MBo0JA.jpg"
                                    width="100" /> --}}
                                    <h5>
                                        <a href="https://www.trustpilot.com/users/66e9d1a4c9fdaf809e2b4009" target="_blank" style="color: #000">Rohit</a>
                                        <span class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </span>
                                    </h5>
                        <p>Toronto - Canada</p>
                        <p>Excellent service provided by Varun. Employee who got deep knowledge 
                            and experience is a perk for an employer to bring clients to the door. Best customer service and best rates been provided.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="Air Canada Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/kqNvuR90iK5bEFEYw7xOkEtGXiS9kHfcitOv0d4X102MBo0JA.jpg"
                                    width="100" /> --}}
                                    <h5>
                                        <a href="https://www.trustpilot.com/users/665a9c699e541931e57a8832" target="_blank" style="color: #000">
                                            Yalgar Singh</a>
                                        <span class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </span>
                                    </h5>
                        <p>Toronto - Canada</p>
                        <p>Exceptional Service By Nancy

                            From booking of the flight till my mom landed in Canada,
                             she has been a tremendous support for my mom. Its always a belief that once the sale is done,
                              the profit and loss is yours but she was even there after the tickets were booked.
                            
                            Managed almost everything, from ticket booking, to seat booking, 
                            to getting the wheelchair support and the retrieval of boarding passes also.</p>
                            </div>
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="Air Canada Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/kqNvuR90iK5bEFEYw7xOkEtGXiS9kHfcitOv0d4X102MBo0JA.jpg"
                                    width="100" /> --}}
                                    <h5>
                                        <a href="https://www.trustpilot.com/users/63541437db9e2b0013d85014" target="_blank" style="color: #000">
                                            DHAVAL</a>
                                        <span class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </span>
                                    </h5>
                        <p>Toronto - Canada</p>
                        <p>One of the best service i have received in my entire life like i travel a lot and have booked flights with variours company bu
                            t NANCY THAKUR omg i have never had personal assistant from someone this good like she was responding my 
                            calls anytime of the day then would happly do any adjustments i want anytime.
                             Just really really very happy with the service from her. Would highly recommend.</p>
                            </div>
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="Air Canada Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/kqNvuR90iK5bEFEYw7xOkEtGXiS9kHfcitOv0d4X102MBo0JA.jpg"
                                    width="100" /> --}}
                                    <h5>
                                        <a href="https://www.trustpilot.com/users/65f49aec7176b400125329c1" target="_blank" style="color: #000">
                                            
                                        Rahulkumar Patel</a>
                                        <span class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </span>
                                    </h5>
                        <p>Toronto - Canada</p>
                        <p>It's my 2nd journey with Tripgare.
                            WOW! I was skeptical. The price was a great deal, cheap from all! But, it's legit. Not scam at all! Done the internet ticketing process within minutes. Got the confirmation on my phone & on email right away. What else a traveler need?
                            Thanks to 'Nancy Thakur' for find out cheaper fare & put the special note for need wheel chair for my mother.
                            Really appriciate of you work ! well done 'Nancy Thakur'.
                            Thanks to 'Tripgare'</p>
                            </div>
                            <div class="col-md-3 col-12 review-item">
                                {{-- <img alt="Air Canada Logo" height="50"
                                    src="https://storage.googleapis.com/a1aa/image/kqNvuR90iK5bEFEYw7xOkEtGXiS9kHfcitOv0d4X102MBo0JA.jpg"
                                    width="100" /> --}}
                                    <h5>
                                        <a href="https://www.trustpilot.com/users/5e61cb3a7bb8cd860458b703" target="_blank" style="color: #000">
                                            MAX</a>
                                        <span class="stars">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </span>
                                    </h5>
                        <p>Toronto - Canada</p>
                        <p>Varun is the best travel agent I’ve ever dealt with. Very Polite, Professional, and an amazing person!!!! 
                            I’d strongly recommend him in the future dealings.
                            . Kudos to you for going above and beyond Sir!!</p>
                            </div>
                            <!-- Add more reviews here -->
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
                <div class="carousel-indicators">
                    <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                        data-bs-target="#carouselExampleIndicators" type="button"></button>
                    <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators"
                        type="button"></button>
                    <!-- Add more indicators if needed -->
                </div>
            </div>
            <button class="btn btn-primary btn-view-all"><a href="https://www.trustpilot.com/review/tripgare.com" style="color: white;">  VIEW ALL REVIEWS</a></button>
        </div>
        <div class="container">
            <div class="content-section">
                <h3>
                    Flight Tickets to {{ $city }}, Nigeria
                </h3>
                <p>
                    Finding cheap flights to {{ $city }} online can be quite challenging. TRIPGARE Tickets can do
                    all
                    the footwork for you
                    to save time and money. Our Travel Agents manually put together the best-priced airfares to the
                    {{ $city }} with
                    the most convenient itineraries to offer you cheap tickets to {{ $city }}. Fly to
                    {{ $city }} with our special
                    negotiated online and offline airfares unavailable online and save on your flight to
                    {{ $city }}. Our contracted
                    airline rates give you access to the best flight deals among hundreds of different airlines. The times
                    when
                    the travel was cheap are back! For affordable travel to {{ $city }}, call to speak to a travel
                    agent or submit a
                    callback request and well contact you back TRIPGARE.
                </p>
            </div>
            <div class="row content-section">
                <div class="col-md-6">
                    <h3>
                        Find Cheap Flights to {{ $city }}
                    </h3>
                    <p>
                        TRIPGARE Tickets Travel Agents will help you choose and book the most convenient and coordinated
                        flights
                        with smooth connections for an itinerary that suits your individual travel needs. Thanks to our
                        extensive variety of private, specially negotiated contracts with the airlines, cheap airfares to
                        {{ $city }}
                        are available during any travel season. Currently TRIPGARE Tickets is offering sale on airline
                        tickets
                        to
                        {{ $city }} for a limited time only. Contact our agents to learn more about all our
                        unpublished flight deals
                        and take advantage of these special bargains by booking now!
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>
                        About {{ $city }} Travel
                    </h3>
                    <p>
                        TRIPGARE Tickets is a unique fusion of an airline ticket consolidator (wholesaler) with a travel
                        agency
                        (retailer). Our unprecedented business model was created so that our customers get the best of both
                        worlds: discounted airfares negotiated at wholesale prices and a personalized approach for every
                        single
                        request! We are committed to providing our valued customers with only the best and reasonably-priced
                        tickets to {{ $city }} and other destinations. Through over a decade of industry
                        experience, we have partnered
                        with more than 500 major airlines to offer our clients various travel options to the
                        {{ $city }} and beyond.
                        Needless to say, TRIPGARE Tickets is among the first to receive exclusive promotions and limited
                        deals
                        to
                        {{ $city }}. Feel free to browse through our website and stay connected through our
                        newsletter and social
                        media accounts to be the first to know about the best available {{ $city }} flight deals.
                    </p>
                </div>
            </div>
        </div>
        {{-- modal --}}
        <div id="id01" class="w3-modal" style="z-index:99 !important;;">
            <div class="w3-modal-content" style="width:750px;">
                <div class="w3-container" style="padding: 0px;">
                    <span onclick="document.getElementById('id01').style.display='none'"
                        class="float-end "
                        style=";
                        active:hover{
                            background-color: yellow;
                            padding:0px;
                        }">&times;</span>
                    {{-- Some text. Some text. Some text. --}}
                    <div class="virat-container" style="font-size: 14px; " >
                        <div class="row" id="popup">
                            <div class="d-none d-md-block col-md-5  pt-1" style="font-size: 14px;background-color:   #f7f6f6;">
                                <p class="virat-header-text">
                                    Want it lower than
                                    <span class="virat-highlight">

                                        <span class="virat-price">
                                            @if (isset($converteddisPrice))
                                            {{ str_replace(' ', '', $converteddisPrice) }}
                                        @else
                                            0
                                        @endif
                                        </span>
                                    </span>
                                    ?
                                </p>
                                <p>
                                    Round-trip, Total
                                </p>
                                <p>
                                    Some of our deals are so good and so exclusive that we aren't allowed to publish them
                                    online. Get all details, more unpublished airline offers and
                                    <strong>
                                        phone-only deals
                                    </strong>
                                    via a
                                    <strong>
                                        FREE quote now!
                                    </strong>
                                </p>

                                <div class="virat-how-it-works">
                                    <h5>
                                        How does it work?
                                    </h5>
                                    <p>
                                        <strong>
                                            1. Call to speak to one of our Travel Agents
                                        </strong>
                                        to get the cheapest deal of submit your inquiry.
                                    </p>
                                    <p>
                                        <strong>
                                            2. Your agent will reply with a free personalized travel quote via phone/email.
                                        </strong>
                                    </p>
                                    <p>
                                        <strong>
                                            3. Confirm and book securely online, get e-tickets and fly for less saving
                                            hundreds!
                                        </strong>
                                    </p>
                                </div>
                             
                                    <div class="row">
                                        <div class="col-4"><img alt="20+ Languages logo" class="img_1"
                                            src="https://cdn-asaptickets-com.s3.us-east-1.amazonaws.com/default/0001/06/32f9e569aa12b3d349d01f0a851836afb4c06736.svg"
                                            width="100" /></div>
                                        <div class="col-4"><img alt="BBB Accredited Business logo" class="img_2" 
                                            src="https://www.asaptickets.ca/static/img/airlinePage/ASAP_badge_BBB_A_plus.svg"
                                            width="100" /></div>
                                        <div class="col-4"> <img alt="97% of Clients Recommend Us logo" class="img_3" 
                                            src="https://www.asaptickets.ca/static/img/airlinePage/ASAP_badge_97_clients_recommend.svg"
                                            width="100" /></div>
                                    </div>
                                    
                                    
                              
                               
                            </div>
                            <div class="col-md-7" style="font-size:14px;">
                                <div class="virat-contact-section">
                                    <div class="row" style="font-size: 14px;">
                                        <div class="col-sm-6 col-md-4" style="font-size: 12px;">
                                            <p>
                                                <b>SAVE C$30 extra: Call Toll-FREE</b>
                                            </p>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="custom-voucher" style="padding:3px 0px; font-size: 14px; ">
                                                <button class=" " style="background: #ff7d01;
                                                border-radius: 5px;
                                                border: none;
                                                color:white;
                                                padding: 4px 4px;">
                                                    <i class="fa fa-phone-alt">
                                                    </i>
                                                    888-333-1035
                                                </button>

                                            </div>

                                        </div>
                                        <div class="col-6 col-md-4" style="font-size:13px; padding:4px 0px;"><span
                                                class="coded"> Code:</span>
                                            <span class="text" style="color: #ff7d01;">
                                                TRIPGARE30
                                            </span>
                                        </div>
                                        <p>
                                            -or fill out the request form, and we will call you back soon-
                                        </p>
                                    </div>
                                    {{-- @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif --}}
                                    <form action="{{ route('freequote') }}" class="form bravo_form d-block"
                                        method="post" id="departureform"
                                        onsubmit="return searchwhich_form('departureform')" style="box-shadow:none;" autocomplete="off">
                                        @csrf
                                        <input type="hidden" name="booking_type" id="bookingTypeInput" value="round-trip" required>
                                        <div class="row">
                                            <div class="col smart-search">
                                                <input type="text"
                                                    class="smart-search-location parent_text form-control font-size-14"
                                                    placeholder="From*" value="{{ $fromwhere }}"
                                                    data-onload="Loading..." data-default="" id="fromwhere1" required>
                                                <input type="hidden" id="from1" class="child_id" name="from"
                                                    value="{{ $fromwhere }}" autocomplete="off" required>
                                            </div>
                                            <div class="col smart-search">
                                                <input type="text"
                                                    class="smart-search-location parent_text form-control font-size-14"
                                                    placeholder="To*" value="{{ $to_where }}"
                                                    data-onload="Loading..." data-default="" id="wherewhere1" required>
                                                <input type="hidden" id="where1" class="child_id" name="to"
                                                    value="{{ $to_where }}" autocomplete="off" required>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input class="form-control departureDateR" placeholder="Departure Date" name="start_date" required=""
                                                    type="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"  min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"/>
                                                    <div class="invalid-feedback departureDateErrorR" style="width:100%; text-align:left;"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control returnDateR" placeholder="Return Date" name="enddate" required=""
                                                    type="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"  />
                                                    <div class="invalid-feedback returnDateErrorR" style="width:100%; text-align:left;"> </div>
                                            </div>
                                        </div>
                                        <input class="form-control" placeholder="E-mail*"  name="email"
                                            type="email" />
  
                                        <div class="input-group pt-2 pb-2" style="padding: 0;">
                                            <div class="custom-dropdown">
                                                <div class="custom-select" id="selectedCountry2" style="
                                                     font-size: 17px;">
                                                    <img id="selectedFlag2" class="flag-img" src="https://flagcdn.com/w320/ca.png" alt="Country Flag" />
                                                    <span id="countryCodeDisplay2">+1</span>
                                                </div>
                                                <div class="custom-dropdown-content" id="countryDropdown2"></div>
                                                <input type="hidden" name="phoneprefix" id="dropdowncote" value="">
                                            </div>
                                            <input class="form-control subscription-input" name="phone" placeholder="Phone" type="text" required/>
                                        </div>
                                        <input class="form-control" name="name" placeholder="Your Name (Optional)" type="text" />
                                        <button class="bt_bg" type="submit" style="color:white; ">
                                            GET A FREE QUOTE 
                                        </button>
                                    </form>
                                    <p class="privacy">
                                        By providing my contact details and clicking on "GET A FREE QUOTE" I agree to be
                                        contacted for travel information via phone, text messages and email. No purchase
                                        necessary. We respect your
                                        <a href="#">
                                            privacy
                                        </a>
                                        .
                                    </p>
                                </div>
                            </div>
                            <div class="d-block d-sm-none col-md-5 pt-1" style="font-size: 14px;background-color:  #f9f9f9;" >
                                <p class="virat-header-text">
                                    Want it lower than
                                    <span class="virat-highlight">

                                        <span class="virat-price">
                                            @if (isset($converteddisPrice))
                                            {{ str_replace(' ', '', $converteddisPrice) }}
                                        @else
                                            0
                                        @endif
                                        </span>
                                    </span>
                                    ?
                                </p>
                                <p>
                                    Round-trip, Total
                                </p>
                                <p>
                                    Some of our deals are so good and so exclusive that we aren't allowed to publish them
                                    online. Get all details, more unpublished airline offers and
                                    <strong>
                                        phone-only deals
                                    </strong>
                                    via a
                                    <strong>
                                        FREE quote now!
                                    </strong>
                                </p>

                                <div class="virat-how-it-works">
                                    <h5>
                                        How does it work?
                                    </h5>
                                    <p>
                                        <strong>
                                            1. Call to speak to one of our Travel Agents
                                        </strong>
                                        to get the cheapest deal of submit your inquiry.
                                    </p>
                                    <p>
                                        <strong>
                                            2. Your agent will reply with a free personalized travel quote via phone/email.
                                        </strong>
                                    </p>
                                    <p>
                                        <strong>
                                            3. Confirm and book securely online, get e-tickets and fly for less saving
                                            hundreds!
                                        </strong>
                                    </p>
                                </div>
                             
                                    <div class="row">
                                        <div class="col-4"><img alt="20+ Languages logo" class="img_1"
                                            src="https://cdn-asaptickets-com.s3.us-east-1.amazonaws.com/default/0001/06/32f9e569aa12b3d349d01f0a851836afb4c06736.svg"
                                            width="100" /></div>
                                        <div class="col-4"><img alt="BBB Accredited Business logo" class="img_2" 
                                            src="https://www.asaptickets.ca/static/img/airlinePage/ASAP_badge_BBB_A_plus.svg"
                                            width="100" /></div>
                                        <div class="col-4"> <img alt="97% of Clients Recommend Us logo" class="img_3" 
                                            src="https://www.asaptickets.ca/static/img/airlinePage/ASAP_badge_97_clients_recommend.svg"
                                            width="100" /></div>
                                    </div>
                                    
                                    
                              
                               
                            </div>
                        </div>
                    </div>
                    {{-- Some text. Some text. Some text. --}}
                </div>
            </div>
        </div>
    </div>
    {{-- modal end --}}
@endsection
<script>
    document.querySelector('.w3-button').addEventListener('click', function() {
        document.getElementById('id01').style.display = 'none';
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>


<script>
    function changeCurrency(selectedCurrency) {
        // Update the displayed currency
        document.getElementById('currency-display').textContent = selectedCurrency;

        // Update currency values in elements with the class 'currencyvalue'
        let el = document.querySelectorAll('.currencyvalue');
        el.forEach(function(el) {
            el.value = selectedCurrency;
        });

        // Redirect to the same route with the selected currency as a query parameter
        const url = new URL(window.location.href);
        url.searchParams.set('currency', selectedCurrency); // Set or update the currency parameter
        window.location.href = url.toString(); // Redirect to the new URL
    }

    // Call the function on page load with initial currency
    document.addEventListener('DOMContentLoaded', () => {
        changeCurrency(initialCurrency);
    });





    $(document).ready(function() {
        $('.carousel-control-next').click(function() {
            $('#carouselExampleIndicators').carousel('next');
        });
        $('.carousel-control-prev').click(function() {
            $('#carouselExampleIndicators').carousel('prev');
        });
        setInterval(function() {
            $('#carouselExampleIndicators').carousel('next');
        }, 5000);
    });
</script>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const roundTripBtn = document.getElementById('roundTripBtn');
    //     const oneWayBtn = document.getElementById('oneWayBtn');
    //     const returnDateInput = document.getElementById('returnDate');

    //     // Function to update the state of the return date input
    //     function updateReturnDateState() {
    //         if (oneWayBtn.classList.contains('active')) {
    //             returnDateInput.disabled = true;
    //             returnDateInput.value = ''; // Clear the return date if One-Way is selected
    //         } else {
    //             returnDateInput.disabled = false;
    //         }
    //     }

    //     // Event listeners for button clicks
    //     roundTripBtn.addEventListener('click', function() {
    //         roundTripBtn.classList.add('active');
    //         oneWayBtn.classList.remove('active');
    //         updateReturnDateState();
    //     });

    //     oneWayBtn.addEventListener('click', function() {
    //         oneWayBtn.classList.add('active');
    //         roundTripBtn.classList.remove('active');
    //         updateReturnDateState();
    //     });

    //     // Initial state setup
    //     updateReturnDateState();
    // });

    document.addEventListener('DOMContentLoaded', function() {
    const roundTripBtn = document.getElementById('roundTripBtn');
    const oneWayBtn = document.getElementById('oneWayBtn');
    const returnDateInput = document.getElementById('returnDate');
    const bookingTypeInput = document.getElementById('bookingTypeInput');

    // Function to update the state of the return date input and booking type
    function updateReturnDateState() {
        if (oneWayBtn.classList.contains('active')) {
            returnDateInput.disabled = true;
            returnDateInput.value = ''; // Clear the return date if One-Way is selected
            bookingTypeInput.value = 'oneway'; // Set booking type to 'oneway'
        } else {
            returnDateInput.disabled = false;
            bookingTypeInput.value = 'round-trip'; // Set booking type to 'round-trip'
        }
    }

    // Event listeners for button clicks
    roundTripBtn.addEventListener('click', function() {
        roundTripBtn.classList.add('active');
        oneWayBtn.classList.remove('active');
        updateReturnDateState();
    });

    oneWayBtn.addEventListener('click', function() {
        oneWayBtn.classList.add('active');
        roundTripBtn.classList.remove('active');
        updateReturnDateState();
    });

    // Initial state setup
    updateReturnDateState();
});


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
<script>
    $(document).ready(function() {
        // Show the modal when the page loads
        $('#subscriptionModal').modal('show');

        // Country data for India, Canada, and the USA
        const countryData = [
            {
                code: "+1",
                flag: "https://flagcdn.com/w320/ca.png"
            },
            {
                code: "+91",
                flag: "https://flagcdn.com/w320/in.png"
            },
           
            {
                code: "+1",
                flag: "https://flagcdn.com/w320/us.png"
            },
        ];

        // Populate the dropdown
        const $countryDropdown = $('#countryDropdown');
        countryData.forEach(country => {
            $countryDropdown.append(`
                <div data-code="${country.code}">
                    <img src="${country.flag}" class="flag-img" /> ${country.code}
                </div>
            `);
        });

        // Default selection to India
        const defaultCountry = countryData[0];
        $('#countryCodeDisplay').text(defaultCountry.code);
        $('#dropdowncode').val(defaultCountry.code);
        $('#selectedFlag').attr('src', defaultCountry.flag).show();

        // Show dropdown on click
        $('#selectedCountry').on('click', function() {
            $('#countryDropdown').toggle();
        });

        // Select a country
        $countryDropdown.on('click', 'div', function() {
            const code = $(this).data('code');
            const flag = $(this).find('img').attr('src');
            $('#countryCodeDisplay').text(code);
            $('#dropdowncode').val(code);
            $('#selectedFlag').attr('src', flag).show();
            $('#countryDropdown').hide();
        });

        // Close dropdown when clicking outside
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.custom-dropdown').length) {
                $('#countryDropdown').hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Show the modal when the page loads
        $('#subscriptionModal').modal('show');

        // Country data for India, Canada, and the USA
        const countryData = [
            {
                code: "+1",
                flag: "https://flagcdn.com/w320/ca.png"
            },
            {
                code: "+91",
                flag: "https://flagcdn.com/w320/in.png"
            },
           
            {
                code: "+1",
                flag: "https://flagcdn.com/w320/us.png"
            },
        ];

        // Populate the dropdown
        const $countryDropdown = $('#countryDropdown2');
        countryData.forEach(country => {
            $countryDropdown.append(`
                <div data-code="${country.code}">
                    <img src="${country.flag}" class="flag-img" /> ${country.code}
                </div>
            `);
        });

        // Default selection to India
        const defaultCountry = countryData[0];
        $('#countryCodeDisplay2').text(defaultCountry.code);
        $('#dropdowncote').val(defaultCountry.code);
        $('#selectedFlag2').attr('src', defaultCountry.flag).show();

        // Show dropdown on click
        $('#selectedCountry2').on('click', function() {
            $('#countryDropdown2').toggle();
        });

        // Select a country
        $countryDropdown.on('click', 'div', function() {
            const code = $(this).data('code');
            const flag = $(this).find('img').attr('src');
            $('#countryCodeDisplay2').text(code);
            $('#dropdowncote').val(code);
            $('#selectedFlag2').attr('src', flag).show();
            $('#countryDropdown2').hide();
        });

        // Close dropdown when clicking outside
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.custom-dropdown').length) {
                $('#countryDropdown2').hide();
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- @if(session('success')) --}}
{{-- <script>

    Swal.fire({
        title: "Thankyou!",
        text:"{{ session('success') }}",
        icon: "success"
      });
    </script>
@endif --}}
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        function validateReturnDate() {
            var startDate = $('.departureDate').val();
            var returnDate = $('.returnDate').val();

            if (returnDate < startDate) {
                $('.returnDate')[0].setCustomValidity("Return date must be greater than or equal to the departure date.");
                $('.returnDateError').text("Return date must be greater than or equal to the departure date.");
            } else {
                $('.returnDate')[0].setCustomValidity("");
                $('.returnDateError').text("");
            }
        }
        $('.departureDate, .returnDate').on('change', function() {
            validateReturnDate();
        });
        validateReturnDate();
    });
</script>
<script>
    $(document).ready(function() {
        function validateReturnDate() {
            var startDate = $('.departureDateR').val();
            var returnDate = $('.returnDateR').val();

            if (returnDate < startDate) {
                $('.returnDateR')[0].setCustomValidity("Return date must be greater than or equal to the departure date.");
                $('.returnDateErrorR').text("Return date must be greater than or equal to the departure date.");
            } else {
                $('.returnDateR')[0].setCustomValidity("");
                $('.returnDateErrorR').text("");
            }
        }
        $('.departureDateR, .returnDateR').on('change', function() {
            validateReturnDate();
        });
        validateReturnDate();
    });
</script>
