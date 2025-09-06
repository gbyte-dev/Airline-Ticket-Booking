

<?php $__env->startSection('content'); ?>
<style>
    .modal2 {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
   @media (max-width: 1024px) {
    .modal2 {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 105%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
   }

   @media (max-width: 768px) {
.img-fluid {
    max-width: 95%;
    height: auto;
    padding: 23px 10px;
}
.h-100 {
           height: 100% !important;
        /* height: 350px !important; */
        width: 100% !important;
}
.modal-text {
        width: 100%;
    padding: 0px 32px !important;
    text-align: left;
}

   }


 @media (max-width: 425px) {
    .modal-content2 {
    display: flex;
    background-color: #fff;
    width: 95% !important;
    max-width: 900px;
    border-radius: 4px;
    overflow: hidden;
    margin-top: 20px;
}
    .modal2 {
        display: none;
        position: fixed;
        top: 0px;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
.h-100 {
               height:100% !important;
        text-align: center;
        margin: 3px 7px;
        width: 100% !important;
        padding-top: 40px;
    }
    .modal-text {
    width: 100% !important;
/*    padding-bottom: 90px !important;*/
    padding: 20px 30px !important;
    text-align: center;
    box-sizing: border-box;
}
 }



    /* Modal Content */
    .modal-content2 {
        display: flex;
        background-color: #fff;
        width: 70%;
        max-width: 900px;
        border-radius: 8px;
        overflow: hidden;
    }

    /* Left Side Image */
    .modal-image {
        width: 50%;
        background-size: cover;
        background-position: center;
    }

    /* Right Side Content */
    .modal-text {
        width: 50%;
        padding: 20px;
        text-align: left;
        box-sizing: border-box;
    }

    .modal-text h2 {
        margin-top: 0;
        font-size: 24px;
    }

    .modal-text ul {
        list-style: none;
        padding: 0;
    }

    .modal-text ul li {
        margin: 10px 0;
        font-size: 16px;
    }

    /* Close Button */
.close-btn {
    position: absolute;
    top: 10px; 
    right: 15px; 
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    color: #333;
    z-index: 10;
}

.close-btn:hover {
    color: red;
}
 
        
        .cta-heading {
            text-align: center;
           
        }
        
        .cta-heading .call-text {
            color: #ff7d01;
            font-weight: bold;
        }
        
        .cta-heading .save-text {
            color: #000;
            font-weight: normal;
        }
        
        .divider {
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }
        
        .or-text {
            text-align: center;
            margin: 15px 0;
            color: #555;
        }
        
        .request-link {
            text-align: center;
        }
        
        .request-link a {
            color: #006600;
            text-decoration: none;
        }
        
        .request-link a:hover {
            text-decoration: underline;
        }
</style>
<style>
    .subscription-container {
        background-color: #ffffff;
        border-radius: 10px;
         box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1) !important; 
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
        background-color:#ff7d01 !important;
        border-color: #28a745;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 700;
    }

    .subscription-button:hover {
        background-color: #1a2b48 !important;
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

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    .form-check {
    position: relative;
    display: block;
    /* padding-left: 1.25rem; */
}
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if(session('success')): ?>
<script>

    Swal.fire({
        title: "Thankyou!",
        text:"<?php echo e(session('success')); ?>",
        icon: "success"
      });
    </script>
<?php endif; ?>




<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- Swiper CSS -->
 <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
   <style>
.airplane-badge {
    background: url("<?php echo e(asset('images/multi/airplane.png')); ?>") no-repeat;
    width: 24px;
    height: 20px;
        margin-top: 4px;
}
.location-badge {
    background: url("<?php echo e(asset('images/multi/location.png')); ?>") no-repeat;
    width: 20px;
    height: 20px;
        margin-top: 4px;
}
.wallet-badge {
    background: url("<?php echo e(asset('images/multi/wallet.png')); ?>") no-repeat;
    width: 20px;
    height: 20px;
        margin-top: 4px;
}
.wrap-0-10 {
        padding: 0px 8px;
        color: rgb(255, 255, 255);
}

      .slider-container {
      width: 90%;
      margin: auto;
      overflow: hidden;
      position: relative;
    }

    .slider-wrapper {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      box-sizing: border-box;
    padding: 36px 35px;
    text-align: left;
    }



    .navigation {
      position: absolute;
      top: 40%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    h3 {
      margin: 10px 0 5px;
    }

    p {
      margin: 5px 0;
    }

    @media (max-width: 768px) {
      .slide {
        flex: 0 0 33.33%; /* Show 3 slides on tablets */
      }
    }

    @media (max-width: 425px) {
      .slide {
        flex: 0 0 100%; /* Show 1 slide on mobile */
      }
    }

    @media (min-width: 769px) {
      .slide {
        flex: 0 0 25%; /* Show 4 slides on larger screens */
      }
    }
    #slidersec{
            padding: 10px 10px !important;

    }
	.carousel-control-prev, .carousel-control-next{
		background:none;
	}
</style>
 <style>

            /* .font_manish {
                color: #ff7d01
            }
            .bravo_wrap .bravo_topbar {
            background: #1a2b48;
            padding: 8px 0;
            position: sticky;
            top: 0;
            z-index: 99;
           } */
            #fromwhere1 {
                background: transparent;
                border: 1px solid #ff7d01;
                box-shadow: none;
                color: black;
                font-size: 16px;
                height: 35px;
                left: 0 !important;
                padding: 6 !important;
                position: relative;
            }
        
            #wherewhere1 {
                background: transparent;
                border: 1px solid #ff7d01;
                box-shadow: none;
                color: black;
                font-size: 16px;
                height: 35px;
                left: 0 !important;
                padding: 6 !important;
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
            .bravo-autocomplete {
    display: none;
}

.bravo-autocomplete.show {
    display: block;
    overflow-y: scroll;
    height: 332px !important;
    /* overflow-y: hidden; */
    padding: 0 0 0 0.5rem;
    position: absolute;
    background: #ffffff;
     right: 4px; 
    z-index: 20;
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
            .bravo-autocomplete.show {
    display: block;
    overflow-y: scroll;
    height: 150px;
	    border: 1px solid #ff7d01;
}

/* .item {
    
    border: 1px solid #ddd;
  
} */
        </style>

<style type="text/css">
  #customPassengerButton{
     height: 41px !important;
    /*width: 189px !important;
    margin-left: -8px;*/
    padding: 6px;
}
#customTravelClassButton {
    height: 41px !important;
    width: 189px !important;
    padding: 6px;
}
      /*  #fromwhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
    width: 189px;
        border-radius: inherit;
        left: 0 !important;
        padding: 6 !important;
        position: relative;
    }*/

   /* #wherewhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
        left: 0 !important;
    width: 190px;
        border-radius: inherit;
    padding: 0px -9px;
    margin-left: -22px;
    }*/
  #wherewhere12 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    left: 0 !important;
    width: 177px;
    padding: 0px -9px;
    margin-left: -22px;
}

#fromwhere12 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    width: 176px;
    left: 0 !important;
    padding:6 !important;
    position: relative;
}
.w3-container, .w3-panel{
        padding: 0px;
    }
  .bt_bg{
    background:#ff7d01;    BORDER: NONE;
    border-radius: 4px;
    font-size: 15px;padding: 4px 100px;
     }
   .sc-3653c982-0 .iEMgxW .tw-relative .tw-cursor-pointer.active {
    color: white;
     border: 1px solid rgb(0, 91, 168);
           background-color: #ff7d01;
}
.iEMgxW.active {
    color: white !important;
       background-color: #ff7d01;
}
.tw-relative {
    position: relative;
    font-size: 15px;
}
#roundTripBtn:hover{
  border: 1px solid rgb(0, 91, 168);
    background:#1a2b48;
    color:white;
}
#oneWayBtn:hover{
  border: 1px solid rgb(0, 91, 168);
     background:#1a2b48;
color:white;
}
/* Ensure the active radio button updates the label styling */
input[type="radio"]:checked + span {
  /* border: 1px solid rgb(0, 91, 168); */
  color: white;  /* Text color when active */
}
/* input.form-control {
    height: 55px !important;
} */
.btn-submit{
  background: #1a2b48;
border: none;
border-radius: 0 5px 5px 0;
color: #fff;
font-weight: 600;
height: 41px;
line-height: 41px;
padding-left: 25px;
padding-right: 25px;
position: absolute;
right: 0;
text-transform: uppercase;
top: 0;
}
.form-select{
	border: 1px solid #ff7d01;
	border-radius: 0;
	color: var(--bs-body-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: var(--bs-body-bg);
    background-image: var(--bs-form-select-bg-img), var(--bs-form-select-bg-icon, none);
    background-repeat: no-repeat;
    background-position: right .75rem center;
    background-size: 16px 12px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
	background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
}
.custom-dropdown-content div {
    padding: 10px;
    cursor: pointer;
    border-bottom: 1px solid #dae1e7;
}

.custom-dropdown-content div:hover {
    background-color: #f1f1f1; /* Highlight effect on hover */
}
/*#phoneplace{
  border-top: 1px solid #ff7d01;
  border-bottom: 1px solid #ff7d01;
  border-right: 1px solid #ff7d01;
  border-left: none;
  height:43px;
  padding-left: 4px;
  width: 94px;
}*/
#phoneplace2 {
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-right: 1px solid #ff7d01;
    border-left: none;
    height: 43px;
    padding-left: 1px;
    width: 71.5%;
}
#btn-primary{
      margin-left: 600px;
    margin-top: 20px;
      }
      #fromwhere11 {
        height: 41px !important;
        width: 157px;
        padding: 6px;
		border: 1px solid #ff7d01;
		border-radius : 0;
        }
        #wherewhere11 {
        height: 41px !important;
        width: 157px;
        margin-left: -21px;
        padding: 6px;
		border: 1px solid #ff7d01;
		border-radius : 0;
        }
       /*   #fromwhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 35px;
        left: 0 !important;
        padding: 6 !important;
        position: relative;
      }
    */
     /* #wherewhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 35px;
        left: 0 !important;
        padding: 6 !important;
      }*/
</style>

    <style>
    .klckwT {
      background: linear-gradient(rgb(227, 239, 250) 0px, white 100%) center center / cover no-repeat;
      height: 460px;
    }
    .fa-pulse{
      display: none !important;
    }
@media screen and (min-width: 700px) {
    #modelssss {
        width: 768px !important;
        height: 500px !important;
    }
}

@media screen and (max-width: 699px) {
    #modelssss {
        width: 100% !important;
        height: 500px !important;
    }

#nosmallreq{
    display:none;
}

}

.bg-green {
    background-color: #ff7d01 !important;
    color: #fff;
}
.bg-green:hover {
    
    color:#1a2b48 !important;
}
.block-wrapper {
    padding: 47px 10px;
}
      .list-item .item{
           line-height: 1.2rem;
    padding-bottom: 6px;
    cursor: pointer;
    border-bottom: solid 1px #d9c6c6;
    margin-top: 10px;
      }

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
 
    padding-top: 8px !important;
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
     /* #fromwhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
    width: 189px;
        border-radius: inherit;
        left: 0 !important;
        padding: 6 !important;
        position: relative;
    }*/

   /* #wherewhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
        left: 0 !important;
    width: 190px;
        border-radius: inherit;
    padding: 0px -9px;
    margin-left: -22px;
    }*/
  #wherewhere12 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    left: 0 !important;
    width: 177px;
    padding: 0px -9px;
    margin-left: -22px;
}

#fromwhere12 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    width: 176px;
    left: 0 !important;
    padding:6 !important;
    position: relative;
}
  .img_1{
        height:28px; 
     margin-left:-20px;
    }
    .img_2{
    margin-left: -20px;
    margin-top: 4px;
    width: 85px;
    }
    .img_3{
        height:28;  
        margin-left:-17px;  
    }
  @media (min-width: 993px) {
        .w3-modal-content {
            width: 900px;

        }
    }
  .w3-container, .w3-panel{
        padding: 0px;
    }
  .bt_bg{
    background:#ff7d01;    BORDER: NONE;
    border-radius: 4px;
    font-size: 15px;padding: 4px 100px;
     }
   .sc-3653c982-0 .iEMgxW .tw-relative .tw-cursor-pointer.active {
    color: white;
     border: 1px solid rgb(0, 91, 168);
           background-color: #ff7d01;
}
.iEMgxW.active {
    color: white !important;
       background-color: #ff7d01;
}
.tw-relative {
    position: relative;
    font-size: 15px;
}
#roundTripBtn:hover{
  border: 1px solid rgb(0, 91, 168);
    background:#1a2b48;
    color:white;
}
#oneWayBtn:hover{
  border: 1px solid rgb(0, 91, 168);
     background:#1a2b48;
color:white;
}
/* Ensure the active radio button updates the label styling */
input[type="radio"]:checked + span {
  /* border: 1px solid rgb(0, 91, 168); */
  color: white;  /* Text color when active */
}
/* input.form-control {
    height: 55px !important;
} */
.btn-submit{
  background: #1a2b48;
border: none;
border-radius: 0 5px 5px 0;
color: #fff;
font-weight: 600;
height: 41px;
line-height: 41px;
padding-left: 25px;
padding-right: 25px;
position: absolute;
right: 0;
text-transform: uppercase;
top: 0;
}
#vj_price {
    font-size: 35px;
    font-weight: 600;
    padding: 10px 0px;
    color: #ff7d01;
cursor: pointer;
}
#vj_price:hover{
color:#1a2b48;
}
#vj_price2{
  font-size: 35px;
    font-weight: 600;
    padding: 10px 0px;
} 
.custom-dropdown-content {
    display: none; /* Hidden by default */
    position: absolute;
    background-color: #ffffff;
    border: 1px solid #dae1e7;
    z-index: 1000; /* Ensures it appears above other elements */
    width: 100%; /* Match the dropdown width */
}

.custom-dropdown-content div {
    padding: 10px;
    cursor: pointer;
    border-bottom: 1px solid #dae1e7;
}

.custom-dropdown-content div:hover {
    background-color: #f1f1f1; /* Highlight effect on hover */
}
#phoneplace{
  border-top: 1px solid #ff7d01;
  border-bottom: 1px solid #ff7d01;
  border-right: 1px solid #ff7d01;
  border-left: none;
  height:43px;
  padding-left: 4px;
  width: 54%;
}
#phoneplace2 {
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-right: 1px solid #ff7d01;
    border-left: none;
    height: 43px;
    padding-left: 1px;
    width: 71.5%;
}
.wrap-40-30 { 
    padding: 40px 35px !important; 
	width:100%;
}
#fromwhere1 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    width: 189px;
    border-radius: inherit;
    left: 0 !important;
    padding: 6 !important;
    position: relative;
}
#wherewhere1 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    left: 0 !important;
    width: 190px;
    border-radius: inherit;
    padding: 0px -9px;
    margin-left: -22px;
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
            border-radius: 0px !important;
 
    padding-top: 8px !important;
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
   .fvTlzg {
         margin-top: 0;
/*         margin-left: 100px;*/
          
      
        } 

        #img_s{
          margin: 1px 50px;
          }
     /* #btn-primary{
        margin-left: 420px;
      }*/
      #fromwhere11 {
        height: 41px !important;
        width: 157px;
        padding: 6px;
		border: 1px solid #ff7d01;
		border-radius : 0;
        }
        #wherewhere11 {
        height: 41px !important;
        width: 157px;
        margin-left: -21px;
        padding: 6px;
		border: 1px solid #ff7d01;
		border-radius : 0;
        }
        .sm-wrap-0-40{
                padding: 0 40px;
        }
#rowid{
    padding: 35px 20px;
}
#rowid2{
    padding: 0px 20px;
}
 .why-book-section {
      padding: 0px 15px !important;
    }
        .tablet\:tw-w-\[534px\] {
        width: 444px;
       
    }
      @media (max-width: 1024px) {
        #btn-primary {
    margin-left: 390px;
    
}
         #slidersec{
            padding: 10px 0px !important;

    }
         .why-book-section {
      padding: 0px 15px !important;
    }
    .why-book-section1 {
     padding: 0px 15px !important; 
    background-color: #f8f9fa;
}
      .wrap-40-0 {
     padding: 0px 0 !important; 
} 
.why-book-section1 h2 {
    align-self: center;
    font-size: 30px;
    /* font-weight: bold; */
    text-align: center !important;
    margin-bottom: 0px;
}
        .sm-wrap-30-20 {
    padding: 30px 64px;
}
        .tablet\:tw-w-\[534px\] {
        width: 450px !important;
    }
        .sm-wrap-30-30{
            padding:0px !important;
        } 
        .wrap-20-20 {
     padding: 0px; 
}
        .fvTlzg {
         margin-top: 0px;
         margin-left: 0px !important;
          
      
        } 
        .mobile-slider-text {
        padding: 0px 0px !important;
    }
         .sm-wrap-0-40{
                padding: 0 0px !important;
        }
         .info {
      flex: 1;
          padding: 0px 0px !important;
       }
       .con_text{
     padding-top:50px;
       }
        #phoneplace{
  border-top: 1px solid #ff7d01;
  border-bottom: 1px solid #ff7d01;
  border-right: 1px solid #ff7d01;
  border-left: none;
  height:43px;
  width: 103px;
}
        .deals-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 6px;
        margin: 1px 0 !important;
    }
        #vj {
          width:100% ;
          margin: 10px -12px ;
      
        }
        .flights-landing-desktop{
          width:420px !important;
        }
        #fromwhere11 {
        height: 41px !important;
        width: 157px;
		border: 1px solid #ff7d01;
		border-radius : 0;
        }
        #wherewhere11 {
                    height: 41px !important;
                    width: 157px;
                    margin-left: -21px;
					border-color: ipx solid #ff7d01;
					border-radius : 0;
                }
        #nosmallreq{
          display: none;
        }
        .tw-p-\[10px\] {
          padding: 3px;
        }
        .l-h-1 {
          line-height: 1;
          padding-top: 6px;
        }
        #fromwhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
    width: 197px;
        left: 0 !important;
        padding: 10 !important;
        position: relative;
    }

    #wherewhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
        left: 0 !important;
    width: 197px;
    padding: 0px -9px;
    margin-left: -22px;
    padding: 6px;
    }
  .text-green { 
    color:#ff7d01 !important;
    padding: 2px;
}
.l-h-1 {
    line-height: 1;
    padding: 2px 4px;
}
      }


      @media (max-width: 768px) {
        .why-book-section1 h2 {
    align-self: center;
    font-size: 30px;
    text-align: center;
    padding-top: 14px !important;
}
        .text-right {
    text-align: center !important;
    
}
#containermaindiv{
		display:block  !important;
		}
    .sm-wrap-30-20 {
        padding: 30px 0 !important;
    }
        .tablet\:tw-w-\[534px\] {
        width: 100% !important;
        height: 310px !important;
    }
        /* #departed {
        margin: 1px -11px !important;
        width: 144px !important;
    } */
    #phoneplace{
  border-top: 1px solid #ff7d01;
  border-bottom: 1px solid #ff7d01;
  border-right: 1px solid #ff7d01;
  border-left: none;
  height:43px;
  width: 56px;
}
#phoneplace2 {
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-right: 1px solid #ff7d01;
    border-left: none;
    height: 43px;
    padding-left: 4px;
    width: 71.5%;
}
   #fromwhere11 {
        height: 41px !important;
        width: 155px;
		border: 1px solid #ff7d01;
		border-radius : 0;
        }
        #wherewhere11 {
			height: 41px !important;
			width: 157px;
			margin-left: -23px;
			border: 1px solid #ff7d01;
			border-radius : 0;
		}
  .deals-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    }
        #font{
          font-size: 11px;
        }
      #vj {
        width:100% ; 
           margin: 10px 0px !important; 
      
        }
        #btn-primary{
        margin-left: 260px;
      }
      .bHqbKo {
    padding: 24px 55px 22px !important;
}

     #fromwhere1 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    width: 150px;
    border-radius: inherit;
    left: 0 !important;
    padding: 6 !important;
    position: relative;
}
     #wherewhere1 {
    background: transparent;
    border: 1px solid #ff7d01;
    box-shadow: none;
    color: black;
    font-size: 16px;
    height: 41px !important;
    left: 0 !important;
    width: 150px;
    border-radius: inherit;
    padding: 0px -9px;
    margin-left: -22px;
}
      #nosmallreq2{
        display: none;
        font-size: 13px;
      }
      #table-heading{
    padding-top: 75px;
      }
    .text-green {
    color: #ff7d01 !important;
    padding: 1px 5px;
    font-size: 17px !important;
} 
.l-h-1 {
    line-height: 1;
    padding-left: 6px !important;
}
.tw-px-20 {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
}
 

    }
    #vj_425 {
    display: none; /* Default hidden */
  }

  @media (max-width: 425px) {
h1, h2, h3, h4, h5, h6 {
    margin: 10px 0px;
}
#containermaindiv{
		display:block  !important;
		}
    #vj {
        width: 100% !important;
    }
    .why-book-section1 h2 {
    align-self: center;
    font-size: 30px;
    text-align: center;
    padding-top: 14px !important;
}
   #content1 {
        background: url(https://flight.tripgare.com/images/multi/content-image.png) right center / contain no-repeat;
        margin-right: 90px;
        width: 390px !important;
        height: 385px !important;
    }
    .why-book-section {
      padding: 20px 0px !important;
      background-color: #f8f9fa;
    }
    .mobile-slider-text {
    padding: 0px 17px !important;
}
    .tablet\:tw-w-\[534px\] {
        width: 357px !important;
         background: center;
    }
        #phoneplace {
        border-top: 1px solid #ff7d01;
        border-bottom: 1px solid #ff7d01;
        border-right: 1px solid #ff7d01;
        border-left: none;
        height: 43px;
        width: 67%;
    }
    #phoneplace2 {
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-right: 1px solid #ff7d01;
    border-left: none;
    height: 43px;
    padding-left: 4px;
    width: 71.5%;
}
  #c768{
padding-top: 25px;
        }
  .deals-grid {
                   grid-template-columns: repeat(1, 1fr) !important;
        }
  #fromwhere11 {
      background: transparent;
      border: 1px solid #ff7d01;
      box-shadow: none;
      color: black;
      font-size: 16px;
      height: 41px;
      left: 0 !important;
      padding: 6px !important;
      position: relative;
      width: 109%;
      }
      #wherewhere11 {
      background: transparent;
      border: 1px solid #ff7d01;
      box-shadow: none;
      color: black;
      font-size: 16px;
      height: 41px !important;
      left: 0 !important;
      width: 144px;
      padding: 0px -9px;
      margin-left: -10px;
      }
  .smart-search{

  }
  .tw-px-20 {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
}
  #vj_425{
    /*  display: block;   Show only for screens <= 425px */
    }
  /* #img_s{
  margin: 1px 156px;
  } */
  #table-heading{
    padding-top: 1px;
  }
  #btn-primary {
        margin-left: 108px;
    }
  #wrap_vj{
  padding: 40px 58px !important;
}
/*.wrap-10-0 {
    padding: 10px 15px !important;
}*/
#nosmallreq{
  display: none;
  width:88px;
}
#rowid{
    padding: 20px 0px !important;
}
#rowid2{
    padding: 0px 0px !important;
}
#tw-rounded {
    border-radius: 6px 0px 0px 6px !important;
}
.text-green {
    color: #ff7d01 !important;
    padding: 1px 5px;
    font-size: 17px !important;
}
.l-h-1 {
    line-height: 1;
    padding-left: 6px !important;
}
.bHqbKo {
    padding: 16px 20px 0px !important;
}
.sm-wrap-30-20 {
        padding: 0px 10px;
    }
    #fromwhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
        width: 108%;
        border-radius: inherit;
        left: 0 !important;
        padding: 6 !important;
        position: relative;
    }
        #wherewhere1 {
        background: transparent;
        border: 1px solid #ff7d01;
        box-shadow: none;
        color: black;
        font-size: 16px;
        height: 41px !important;
        left: 0 !important;
        width: 107%;
        border-radius: inherit;
        padding: 0px -9px;
        margin-left: -11px;
    }
  }
  @media (max-width: 375px) {
        #phoneplace {
        border-top: 1px solid #ff7d01;
        border-bottom: 1px solid #ff7d01;
        border-right: 1px solid #ff7d01;
        border-left: none;
        height: 43px;
        width: 60%;
    }
        #vj {
        width: 100%;
        margin: 10px 0px !important;
    }
    .sm-wrap-30-20 {
        padding: 0px 0px;
    }
	#containermaindiv{
		display:block !important;
		}
     #content1 { 
    background: url(https://flight.tripgare.com/images/multi/content-image.png) right center / contain no-repeat;
    margin-right: 90px;
    width: 355px !important;
    height: 481px;
}
        .tablet\:tw-w-\[534px\] {
        width: 344px !important;
        background: center;
    }
  #fromwhere11 {
      background: transparent;
      border: 1px solid #ff7d01;
      box-shadow: none;
      color: black;
      font-size: 16px;
      height: 41px;
      left: 0 !important;
      padding: 6px !important;
      position: relative;
      width: 107%;
      }
      #wherewhere11 {
      background: transparent;
      border: 1px solid #ff7d01;
      box-shadow: none;
      color: black;
      font-size: 16px;
      height: 41px !important;
      left: 0 !important;
      width: 157px;
      padding: 0px -9px;
      margin-left: -10px;
      }
  .tw-px-20 {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
}
#table-heading{
    padding-top: 21px;
  }
.bHqbKo {
        padding: 24px 38px 0px !important;
    }
  .wrap-40-30 {
    padding: 0px 4px !important;
	width:100%;
}
    #vj_425{
    /*  display: block;   Show only for screens <= 425px */
    }
  #img_s{
  margin: 1px 125px;
  }
  #vj_price2 {
    font-size: 29px;
    font-weight: 600;
    padding: 10px 0px;
  
}
#tw-rounded {
    border-radius: 6px 0px 0px 6px !important;
}
.text-green {
        color: #ff7d01 !important;
    padding: 1px 5px;
    font-size: 17px !important;
}
.l-h-1 {
    line-height: 1;
    padding-left: 2px;
}
#nosmallreq{
  display: none;
  width:88px;
}
.blue-block {
    color: white;
    width: 129px !important;
    height: 364px;
    max-width: 234px;
    margin-top: 48px;
    padding: 35px 0px 28px 6px !important;
    background-color: rgb(9, 46, 116);
    box-shadow: rgba(0, 0, 0, 0.18) 20px 40px 40px;
}
/*.wrap-10-0 {
    padding: 40px 20px !important;
}*/
  #btn-primary {
        margin-left: 79px;
    }

  }
  .custom-confirm-button {
    background-color: #ff7d01; /* Change to your desired color */
    color: #fff;               /* Text color */
}
/* .wrap-40-30 {
    padding: 37px 10px;
}  */
#nosmallreq{
  /* display: none; */
  width:120px;
  font-size: 15px;

}
/* #departed{
  margin: 1px -11px;
  width: 188px;
}
#returnd{
  width: 186px;
  margin: 0px 14px;
} */
.custom-select {
    height: 43px !important;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e) no-repeat right 0.75rem center / 8px 10px;
    background-color: #fff;
    border: 1px solid #ced4da;
     border-radius: none !important; 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding-top: 11px;
}
</style>
 
    <style id="jss-server-side">
     
      @media print {
      body {
      background-color: #fff;
      }
      }
      body::backdrop {
      background-color: #fff;
      }
      @keyframes mui-auto-fill {}
      @keyframes mui-auto-fill-cancel {}
      .MuiInputBase-root {
      color: #3b3536;
      cursor: text;
      display: inline-flex;
      position: relative;
      font-size: 14px;
      box-sizing: border-box;
      align-items: center;
      font-family: Open Sans,-apple-system,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
      font-weight: 400;
      line-height: 1.1876em;
      }
      .MuiInputBase-root.Mui-disabled {
      color: rgba(0, 0, 0, 0.38);
      cursor: default;
      }
      .MuiInputBase-root > fieldset {
      border-color: #e5e5e5;
      }
      .MuiInputBase-root:hover > fieldset {
      border-color: #2472bb;
      }
      .MuiInputBase-multiline {
      padding: 6px 0 7px;
      }
      .MuiInputBase-multiline.MuiInputBase-marginDense {
      padding-top: 3px;
      }
      .MuiInputBase-fullWidth {
      width: 100%;
      }
      .MuiInputBase-input {
      font: inherit;
      /*color: currentColor;*/
      width: 100%;
      border: 0;
      height: 1.1876em;
      margin: 0;
      display: block;
      padding: 6px 0 7px;
      font-size: 14px;
      min-width: 0;
      background: none;
      box-sizing: content-box;
      animation-name: mui-auto-fill-cancel;
      letter-spacing: inherit;
      animation-duration: 10ms;
      -webkit-tap-highlight-color: transparent;
      }
      .MuiInputBase-input::-webkit-input-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .MuiInputBase-input::-moz-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .MuiInputBase-input:-ms-input-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .MuiInputBase-input::-ms-input-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .MuiInputBase-input:focus {
      outline: 0;
      }
      .MuiInputBase-input:invalid {
      box-shadow: none;
      }
      .MuiInputBase-input::-webkit-search-decoration {
      -webkit-appearance: none;
      }
      .MuiInputBase-input.Mui-disabled {
      opacity: 1;
      }
      .MuiInputBase-input:-webkit-autofill {
      animation-name: mui-auto-fill;
      animation-duration: 5000s;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
      opacity: 0 !important;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
      opacity: 0 !important;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
      opacity: 0 !important;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
      opacity: 0 !important;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
      opacity: 0.42;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
      opacity: 0.42;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
      opacity: 0.42;
      }
      label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
      opacity: 0.42;
      }
      .MuiInputBase-inputMarginDense {
      padding-top: 3px;
      }
      .MuiInputBase-inputMultiline {
      height: auto;
      resize: none;
      padding: 0;
      }
      .MuiInputBase-inputTypeSearch {
      -moz-appearance: textfield;
      -webkit-appearance: textfield;
      }
      .jss1 {
      top: -5px;
      left: 0;
      right: 0;
      bottom: 0;
      margin: 0;
      padding: 0 8px;
      overflow: hidden;
      position: absolute;
      border-style: solid;
      border-width: 1px;
      border-radius: inherit;
      pointer-events: none;
      }
      .jss2 {
      padding: 0;
      text-align: left;
      transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
      line-height: 11px;
      }
      .jss3 {
      width: auto;
      height: 11px;
      display: block;
      padding: 0;
      font-size: 0.75em;
      max-width: 0.01px;
      text-align: left;
      transition: max-width 50ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
      visibility: hidden;
      }
      .jss3 > span {
      display: inline-block;
      padding-left: 5px;
      padding-right: 5px;
      }
      .jss4 {
      max-width: 1000px;
      transition: max-width 100ms cubic-bezier(0.0, 0, 0.2, 1) 50ms;
      }
      .MuiOutlinedInput-root {
      position: relative;
      border-radius: 4px;
      }
      .MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {
      border-color: #3b3536;
      }
      @media (hover: none) {
      .MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {
      border-color: rgba(0, 0, 0, 0.23);
      }
      }
      .MuiOutlinedInput-root.Mui-focused .MuiOutlinedInput-notchedOutline {
      border-color: #3f51b5;
      border-width: 2px;
      }
      .MuiOutlinedInput-root.Mui-error .MuiOutlinedInput-notchedOutline {
      border-color: #f44336;
      }
      .MuiOutlinedInput-root.Mui-disabled .MuiOutlinedInput-notchedOutline {
      border-color: rgba(0, 0, 0, 0.26);
      }
      .MuiOutlinedInput-colorSecondary.Mui-focused .MuiOutlinedInput-notchedOutline {
      border-color: #f50057;
      }
      .MuiOutlinedInput-adornedStart {
      padding-left: 14px;
      }
      .MuiOutlinedInput-adornedEnd {
      padding-right: 14px;
      }
      .MuiOutlinedInput-multiline {
      padding: 18.5px 14px;
      }
      .MuiOutlinedInput-multiline.MuiOutlinedInput-marginDense {
      padding-top: 10.5px;
      padding-bottom: 10.5px;
      }
      .MuiOutlinedInput-notchedOutline {
      border-color: rgba(0, 0, 0, 0.23);
      }
      .MuiOutlinedInput-input {
      padding: 18.5px 6px;
      }
      .MuiOutlinedInput-input:-webkit-autofill {
      border-radius: inherit;
      }
      .MuiOutlinedInput-inputMarginDense {
      padding-top: 10.5px;
      padding-bottom: 10.5px;
      }
      .MuiOutlinedInput-inputMultiline {
      padding: 0;
      }
      .MuiOutlinedInput-inputAdornedStart {
      padding-left: 0;
      }
      .MuiOutlinedInput-inputAdornedEnd {
      padding-right: 0;
      }
      .MuiFormLabel-root {
      color: rgba(0, 0, 0, 0.54);
      padding: 0;
      font-size: 14px;
      font-family: Open Sans,-apple-system,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
      font-weight: 400;
      line-height: 1;
      }
      .MuiFormLabel-root.Mui-focused {
      color: #3f51b5;
      }
      .MuiFormLabel-root.Mui-disabled {
      color: rgba(0, 0, 0, 0.38);
      }
      .MuiFormLabel-root.Mui-error {
      color: #f44336;
      }
      .MuiFormLabel-colorSecondary.Mui-focused {
      color: #f50057;
      }
      .MuiFormLabel-asterisk.Mui-error {
      color: #f44336;
      }
      .MuiInputLabel-root {
      display: block;
      transform-origin: top left;
      }
      .MuiInputLabel-formControl {
      top: 0;
      left: 0;
      position: absolute;
      transform: translate(0, 24px) scale(1);
      }
      .MuiInputLabel-marginDense {
      transform: translate(0, 21px) scale(1);
      }
      .MuiInputLabel-shrink {
      transform: translate(0, 1.5px) scale(0.75);
      transform-origin: top left;
      }
      .MuiInputLabel-animated {
      transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms,transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
      }
      .MuiInputLabel-filled {
      z-index: 1;
      transform: translate(12px, 20px) scale(1);
      pointer-events: none;
      }
      .MuiInputLabel-filled.MuiInputLabel-marginDense {
      transform: translate(12px, 17px) scale(1);
      }
      .MuiInputLabel-filled.MuiInputLabel-shrink {
      transform: translate(12px, 10px) scale(0.75);
      }
      .MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {
      transform: translate(12px, 7px) scale(0.75);
      }
      .MuiInputLabel-outlined {
      z-index: 1;
      transform: translate(14px, 20px) scale(1);
      pointer-events: none;
      }
      .MuiInputLabel-outlined.MuiInputLabel-marginDense {
      transform: translate(14px, 12px) scale(1);
      }
      .MuiInputLabel-outlined.MuiInputLabel-shrink {
      transform: translate(14px, -6px) scale(0.75);
      }
      .MuiFormControl-root {
      border: 0;
      margin: 0;
      display: inline-flex;
      padding: 0;
      position: relative;
      min-width: 0;
      flex-direction: column;
      vertical-align: top;
      }
      .MuiFormControl-marginNormal {
      margin-top: 16px;
      margin-bottom: 8px;
      }
      .MuiFormControl-marginDense {
      margin-top: 8px;
      margin-bottom: 4px;
      }
      .MuiFormControl-fullWidth {
      width: 100%;
      }
      .MuiSvgIcon-root {
      fill: currentColor;
      width: 1em;
      height: 1em;
      display: inline-block;
      font-size: 1.5rem;
      transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      flex-shrink: 0;
      user-select: none;
      }
      .MuiSvgIcon-colorPrimary {
      color: #3f51b5;
      }
      .MuiSvgIcon-colorSecondary {
      color: #f50057;
      }
      .MuiSvgIcon-colorAction {
      color: rgba(0, 0, 0, 0.54);
      }
      .MuiSvgIcon-colorError {
      color: #f44336;
      }
      .MuiSvgIcon-colorDisabled {
      color: rgba(0, 0, 0, 0.26);
      }
      .MuiSvgIcon-fontSizeInherit {
      font-size: inherit;
      }
      .MuiSvgIcon-fontSizeSmall {
      font-size: 1.25rem;
      }
      .MuiSvgIcon-fontSizeLarge {
      font-size: 2.1875rem;
      }
      .MuiButtonBase-root {
      color: inherit;
      border: 0;
      cursor: pointer;
      margin: 0;
      display: inline-flex;
      outline: 0;
      padding: 0;
      position: relative;
      align-items: center;
      user-select: none;
      border-radius: 0;
      vertical-align: middle;
      -moz-appearance: none;
      justify-content: center;
      text-decoration: none;
      background-color: transparent;
      -webkit-appearance: none;
      -webkit-tap-highlight-color: transparent;
      }
      .MuiButtonBase-root::-moz-focus-inner {
      border-style: none;
      }
      .MuiButtonBase-root.Mui-disabled {
      cursor: default;
      pointer-events: none;
      }
      @media print {
      .MuiButtonBase-root {
      color-adjust: exact;
      }
      }
      .MuiIconButton-root {
      flex: 0 0 auto;
      color: rgba(0, 0, 0, 0.54);
      padding: 12px;
      overflow: visible;
      font-size: 1.5rem;
      text-align: center;
      transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      border-radius: 50%;
      }
      .MuiIconButton-root:hover {
      background-color: rgba(0, 0, 0, 0.04);
      }
      .MuiIconButton-root.Mui-disabled {
      color: rgba(0, 0, 0, 0.26);
      background-color: transparent;
      }
      @media (hover: none) {
      .MuiIconButton-root:hover {
      background-color: transparent;
      }
      }
      .MuiIconButton-edgeStart {
      margin-left: -12px;
      }
      .MuiIconButton-sizeSmall.MuiIconButton-edgeStart {
      margin-left: -3px;
      }
      .MuiIconButton-edgeEnd {
      margin-right: -12px;
      }
      .MuiIconButton-sizeSmall.MuiIconButton-edgeEnd {
      margin-right: -3px;
      }
      .MuiIconButton-colorInherit {
      color: inherit;
      }
      .MuiIconButton-colorPrimary {
      color: #3f51b5;
      }
      .MuiIconButton-colorPrimary:hover {
      background-color: rgba(63, 81, 181, 0.04);
      }
      @media (hover: none) {
      .MuiIconButton-colorPrimary:hover {
      background-color: transparent;
      }
      }
      .MuiIconButton-colorSecondary {
      color: #f50057;
      }
      .MuiIconButton-colorSecondary:hover {
      background-color: rgba(245, 0, 87, 0.04);
      }
      @media (hover: none) {
      .MuiIconButton-colorSecondary:hover {
      background-color: transparent;
      }
      }
      .MuiIconButton-sizeSmall {
      padding: 3px;
      font-size: 1.125rem;
      }
      .MuiIconButton-label {
      width: 100%;
      display: flex;
      align-items: inherit;
      justify-content: inherit;
      }
      .MuiAutocomplete-root.Mui-focused .MuiAutocomplete-clearIndicatorDirty {
      visibility: visible;
      }
      @media (pointer: fine) {
      .MuiAutocomplete-root:hover .MuiAutocomplete-clearIndicatorDirty {
      visibility: visible;
      }
      }
      .MuiAutocomplete-fullWidth {
      width: 100%;
      }
      .MuiAutocomplete-tag {
      margin: 3px;
      max-width: calc(100% - 6px);
      }
      .MuiAutocomplete-tagSizeSmall {
      margin: 2px;
      max-width: calc(100% - 4px);
      }
      .MuiAutocomplete-inputRoot {
      flex-wrap: wrap;
      }
      .MuiAutocomplete-hasPopupIcon .MuiAutocomplete-inputRoot, .MuiAutocomplete-hasClearIcon .MuiAutocomplete-inputRoot {
      padding-right: 30px;
      }
      .MuiAutocomplete-hasPopupIcon.MuiAutocomplete-hasClearIcon .MuiAutocomplete-inputRoot {
      padding-right: 56px;
      }
      .MuiAutocomplete-inputRoot .MuiAutocomplete-input {
      width: 0;
      min-width: 30px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiInput-root"] {
      padding-bottom: 1px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"] {
      padding: 9px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"][class*="MuiOutlinedInput-marginDense"] {
      padding: 6px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"] {
      padding-top: 19px;
      padding-left: 8px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"][class*="MuiFilledInput-marginDense"] {
      padding-bottom: 1px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"][class*="MuiFilledInput-marginDense"] .MuiAutocomplete-input {
      padding: 4.5px 4px;
      }
      .MuiAutocomplete-hasPopupIcon .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"], .MuiAutocomplete-hasClearIcon .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"] {
      padding-right: 39px;
      }
      .MuiAutocomplete-hasPopupIcon.MuiAutocomplete-hasClearIcon .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"] {
      padding-right: 65px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"] .MuiAutocomplete-input {
      padding: 9px 4px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiFilledInput-root"] .MuiAutocomplete-endAdornment {
      right: 9px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"][class*="MuiOutlinedInput-marginDense"] .MuiAutocomplete-input {
      padding: 4.5px 4px;
      }
      .MuiAutocomplete-hasPopupIcon .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"], .MuiAutocomplete-hasClearIcon .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"] {
      padding-right: 39px;
      }
      .MuiAutocomplete-hasPopupIcon.MuiAutocomplete-hasClearIcon .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"] {
      padding-right: 65px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"] .MuiAutocomplete-input {
      padding: 9.5px 4px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"] .MuiAutocomplete-input:first-child {
      padding-left: 6px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiOutlinedInput-root"] .MuiAutocomplete-endAdornment {
      right: 9px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiInput-root"][class*="MuiInput-marginDense"] .MuiAutocomplete-input {
      padding: 4px 4px 5px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiInput-root"][class*="MuiInput-marginDense"] .MuiAutocomplete-input:first-child {
      padding: 3px 0 6px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiInput-root"] .MuiAutocomplete-input {
      padding: 4px;
      }
      .MuiAutocomplete-inputRoot[class*="MuiInput-root"] .MuiAutocomplete-input:first-child {
      padding: 6px 0;
      }
      .MuiAutocomplete-input {
      opacity: 0;
      flex-grow: 1;
      text-overflow: ellipsis;
      }
      .MuiAutocomplete-inputFocused {
      opacity: 1;
      }
      .MuiAutocomplete-endAdornment {
      top: calc(50% - 14px);
      right: 0;
      position: absolute;
      }
      .MuiAutocomplete-clearIndicator {
      padding: 4px;
      visibility: hidden;
      margin-right: -2px;
      }
      .MuiAutocomplete-popupIndicator {
      padding: 2px;
      margin-right: -2px;
      }
      .MuiAutocomplete-popupIndicatorOpen {
      transform: rotate(180deg);
      }
      .MuiAutocomplete-popper {
      z-index: 1300;
      }
      .MuiAutocomplete-popperDisablePortal {
      position: absolute;
      }
      .MuiAutocomplete-paper {
      margin: 4px 0;
      overflow: hidden;
      font-size: 14px;
      font-family: Open Sans,-apple-system,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
      font-weight: 400;
      line-height: 1.5;
      }
      .MuiAutocomplete-listbox {
      margin: 0;
      padding: 8px 0;
      overflow: auto;
      list-style: none;
      max-height: 40vh;
      }
      .MuiAutocomplete-loading {
      color: rgba(0, 0, 0, 0.54);
      padding: 14px 16px;
      }
      .MuiAutocomplete-noOptions {
      color: rgba(0, 0, 0, 0.54);
      padding: 14px 16px;
      }
      .MuiAutocomplete-option {
      cursor: pointer;
      display: flex;
      outline: 0;
      box-sizing: border-box;
      min-height: 48px;
      align-items: center;
      padding-top: 6px;
      padding-left: 16px;
      padding-right: 16px;
      padding-bottom: 6px;
      justify-content: flex-start;
      -webkit-tap-highlight-color: transparent;
      }
      @media (min-width:768px) {
      .MuiAutocomplete-option {
      min-height: auto;
      }
      }
      .MuiAutocomplete-option[aria-selected="true"] {
      background-color: rgba(0, 0, 0, 0.08);
      }
      .MuiAutocomplete-option[data-focus="true"] {
      background-color: rgba(0, 0, 0, 0.04);
      }
      .MuiAutocomplete-option:active {
      background-color: rgba(0, 0, 0, 0.08);
      }
      .MuiAutocomplete-option[aria-disabled="true"] {
      opacity: 0.38;
      pointer-events: none;
      }
      .MuiAutocomplete-groupLabel {
      top: -8px;
      background-color: #fff;
      }
      .MuiAutocomplete-groupUl {
      padding: 0;
      }
      .MuiAutocomplete-groupUl .MuiAutocomplete-option {
      padding-left: 24px;
      }
	  .carousel-control-prev-icon .carousel-control-next-icon{
				position: absolute !important;
				top: 65px !important;
				left: -6px;
			}
    </style>
    <style data-styled="" data-styled-version="5.3.11">.jDJjAw{margin-top:20px;margin-bottom:20px;margin-right:50px;}/*!sc*/
      @media (max-width:767px){.jDJjAw{font-size:21px;padding:23px 0;margin:0px;}}/*!sc*/
      data-styled.g1[id="sc-156dc327-0"]{content:"jDJjAw,"}/*!sc*/
      @media (min-width:768px){.FDRgi{width:calc(50% - 5px) !important;}}/*!sc*/
      @media (min-width:1025px){.FDRgi{width:calc((100% / 3) - 10px) !important;}}/*!sc*/
      data-styled.g2[id="sc-74b7ee07-0"]{content:"FDRgi,"}/*!sc*/
      .llDkAI{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;line-height:0.7;fontsize:26px;}/*!sc*/
      .llDkAI span{display:inline-block;}/*!sc*/
      data-styled.g5[id="sc-7db9dc4a-0"]{content:"llDkAI,"}/*!sc*/
      .cFxbBP{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}/*!sc*/
      .cFxbBP span{display:inline-block;}/*!sc*/
      data-styled.g6[id="sc-7db9dc4a-1"]{content:"cFxbBP,"}/*!sc*/
      .gdZpkb{position:absolute;top:50%;z-index:1;height:10px;width:10px;border-color:#005ba8;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);}/*!sc*/
      .gdZpkb:after{position:absolute;width:inherit;height:inherit;display:block;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);content:'';}/*!sc*/
      .gdZpkb:hover:after{opacity:1;}/*!sc*/
      @media (max-width:767px){.gdZpkb{height:24px;width:24px;}.gdZpkb:after{width:inherit;height:inherit;}}/*!sc*/
      .gdZpkb.ico-2x::after{border-width:2px;}/*!sc*/
      data-styled.g7[id="sc-786a014e-0"]{content:"gdZpkb,"}/*!sc*/
      .igAuVc{right:10px;}/*!sc*/
      .igAuVc::after{border-top:1px solid;border-right:1px solid;border-color:inherit;}/*!sc*/
      @media (min-width:768px) and (max-width:1024px){.igAuVc{right:0;}}/*!sc*/
      data-styled.g9[id="sc-786a014e-2"]{content:"igAuVc,"}/*!sc*/
      .dqNszg{margin-top:5px;color:#757575;}/*!sc*/
      data-styled.g10[id="sc-bb40cbc0-0"]{content:"dqNszg,"}/*!sc*/
      .bHqbKo{padding:24px 70px 22px;}/*!sc*/
      data-styled.g12[id="sc-bb40cbc0-2"]{content:"bHqbKo,"}/*!sc*/
      .cRBmzu{padding:15px 0 0;}/*!sc*/
      .cRBmzu .price-label-price{-webkit-letter-spacing:-3px;font-weight:600;}/*!sc*/
      .cRBmzu .price-label-currency{font-size:24px;font-weight:800;}/*!sc*/
      .cRBmzu .price-label-asterisk{padding:8px 0 0 5px;}/*!sc*/
      data-styled.g13[id="sc-8dbeeb99-0"]{content:"cRBmzu,"}/*!sc*/
      .OnGsy{width:266px;margin:0 auto -53px;}/*!sc*/
      data-styled.g14[id="sc-8dbeeb99-1"]{content:"OnGsy,"}/*!sc*/
      .cddXbx{max-width:370px;margin:auto;padding:10px;box-shadow:0 3px 22px #0000001c;}/*!sc*/
      data-styled.g15[id="sc-8dbeeb99-2"]{content:"cddXbx,"}/*!sc*/
      .dNpNeP{border:none;}/*!sc*/
      .dNpNeP.bg-danger:hover{background:#D03028;}/*!sc*/
      .dNpNeP:hover{-webkit-transition:background 0.6s;transition:background 0.6s;background:#005ba8;}/*!sc*/
      .dNpNeP:disabled,.dNpNeP[disabled]{background:#bec4ce;cursor:default;}/*!sc*/
      data-styled.g16[id="sc-423e4b6d-0"]{content:"dNpNeP,"}/*!sc*/
      .ixtzht{padding-right:3px;font-size:14px;}/*!sc*/
      @media (min-width:768px){.ixtzht{font-size:16px;}}/*!sc*/
      data-styled.g31[id="sc-72908173-0"]{content:"ixtzht,"}/*!sc*/
      @media (min-width:768px){.eaYEsf{padding:0 20px;}}/*!sc*/
      data-styled.g32[id="sc-b84f1f6d-0"]{content:"eaYEsf,"}/*!sc*/
      .CXWfX{padding:0;}/*!sc*/
      .CXWfX .badge{padding-top:40px;}/*!sc*/
      @media (min-width:768px){.CXWfX .badge{padding-bottom:40px;}}/*!sc*/
      @media (min-width:1025px){.CXWfX .lg-b-l{border-left:solid #e5e5e5 1px;}}/*!sc*/
      data-styled.g37[id="sc-b3431e30-0"]{content:"CXWfX,"}/*!sc*/
      @media (min-width:1025px){.kURwqo{margin-bottom:0 !important;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}.kURwqo h3{font-size:20px !important;}}/*!sc*/
      data-styled.g38[id="sc-b3431e30-1"]{content:"kURwqo,"}/*!sc*/
      @media (min-width:1025px){.fxLYOe{padding:0 10px 5px 40px;}}/*!sc*/
      .fxLYOe .star-icon{font-size:20px;}/*!sc*/
      data-styled.g39[id="sc-b3431e30-2"]{content:"fxLYOe,"}/*!sc*/
      .dtQfWG{max-width:340px;}/*!sc*/
      @media (min-width:768px){.dtQfWG{max-width:750px;}}/*!sc*/
      data-styled.g44[id="sc-c843fdcb-0"]{content:"dtQfWG,"}/*!sc*/
      .htXZgM{background-color:#e9f2fa;}/*!sc*/
      data-styled.g45[id="sc-c843fdcb-1"]{content:"htXZgM,"}/*!sc*/
      .izkvLg{max-width:750px;}/*!sc*/
      data-styled.g46[id="sc-c843fdcb-2"]{content:"izkvLg,"}/*!sc*/
      .fXtvuo{margin-bottom:15px;margin-top:20px;}/*!sc*/
      @media (max-width:768px){.fXtvuo{margin-top:5px;margin-bottom:15px;}}/*!sc*/
      .fXtvuo .agreement-checkbox{display:block;white-space:normal;}/*!sc*/
      .fXtvuo .agreement-checkbox:before{top:0;-webkit-transform:none;-ms-transform:none;transform:none;}/*!sc*/
      .fXtvuo .agreement-checkbox:after{top:0;-webkit-transform:translate(6px,2px) rotate(38deg);-ms-transform:translate(6px,2px) rotate(38deg);transform:translate(6px,2px) rotate(38deg);}/*!sc*/
      .fXtvuo .required-highlight:before{border-color:#e74c3c;box-shadow:0 2px 6px #e74c3c1a;background-color:#fff4f4;}/*!sc*/
      data-styled.g48[id="sc-c843fdcb-4"]{content:"fXtvuo,"}/*!sc*/
      .IAXQb{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;margin-top:30px;color:#393939;font-weight:500;}/*!sc*/
      @media (min-width:768px){.IAXQb{display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;margin-top:0;padding-left:35px;}}/*!sc*/
      .IAXQb .icon{margin-right:8px;}/*!sc*/
      data-styled.g49[id="sc-c843fdcb-5"]{content:"IAXQb,"}/*!sc*/
      @media (max-width:767px){.fikMym .MuiInputBase-root{min-height:42px;}.fikMym .MuiInputLabel-root:not(.MuiInputLabel-shrink){-webkit-transform:translate(14px,14px) scale(1) !important;-ms-transform:translate(14px,14px) scale(1) !important;transform:translate(14px,14px) scale(1) !important;}}/*!sc*/
      @media (min-width:768px){.fikMym .MuiInputBase-root{min-height:38px;}}/*!sc*/
      .fikMym .MuiOutlinedInput-adornedEnd{padding-right:8px !important;}/*!sc*/
      @media (min-width:768px){.fikMym .MuiOutlinedInput-root:hover fieldset{border-color:#2472bb;}}/*!sc*/
      .fikMym .MuiOutlinedInput-root.Mui-focused fieldset{border-color:#2472bb;}/*!sc*/
      .fikMym .MuiInputBase-input{font-size:14px;border-color:rgb(59,53,54);}/*!sc*/
      .fikMym .MuiInputLabel-root{font-size:14px;font-weight:400;}/*!sc*/
      data-styled.g50[id="sc-4c54e0fb-0"]{content:"fikMym,"}/*!sc*/
      .igzVPy{padding:20px 20px 0;}/*!sc*/
      @media (max-width:768px){.igzVPy{padding-bottom:25px;}.igzVPy .subscribe-button{padding:10px 0;}}/*!sc*/
      .igzVPy.mailing-sms-enabled .sms-agreement div{margin-top:0;}/*!sc*/
      .igzVPy.mailing-sms-enabled .sms-agreement div label{margin-bottom:5px;}/*!sc*/
      @media (min-width:768px){.igzVPy.mailing-sms-enabled .sms-agreement{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}}/*!sc*/
      @media (min-width:768px){.igzVPy .subscribe-line-form{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}.igzVPy .subscribe-line-form .subscribe-button{margin-left:10px;width:135px;height:38px;}}/*!sc*/
      .igzVPy .form-divider{color:#4d4c4c;font-weight:500;margin-bottom:15px !important;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;}/*!sc*/
      @media (min-width:768px){.igzVPy .form-divider{display:block;}}/*!sc*/
      .igzVPy .form-divider .and-or{margin-right:5px;}/*!sc*/
      .igzVPy .form-divider .small{font-size:10px !important;}/*!sc*/
      .igzVPy .MuiOutlinedInput-root,.igzVPy .asap-input-wrapper,.igzVPy .asap-input{border-radius:3px;}/*!sc*/
      .igzVPy .subscribe-line-btn{padding:0;height:40px;font-size:16px;}/*!sc*/
      @media (min-width:768px){.igzVPy .subscribe-line-btn{max-width:150px;margin-left:35px;margin-bottom:0;}}/*!sc*/
      data-styled.g52[id="sc-2219f06e-0"]{content:"igzVPy,"}/*!sc*/
      @media (max-width:767px){.jmXMHI{-webkit-box-pack:center !important;-webkit-justify-content:center !important;-ms-flex-pack:center !important;justify-content:center !important;}.jmXMHI .logo-wrapper{width:33%;}}/*!sc*/
      @media (min-width:768px){.jmXMHI{padding-left:20px;}}/*!sc*/
      data-styled.g55[id="sc-eb7203b3-0"]{content:"jmXMHI,"}/*!sc*/
      @media (min-width:1025px){.eMUhHp{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}.eMUhHp h2{margin-bottom:0;}.eMUhHp .air-logo{cursor:pointer;}.eMUhHp .title{min-width:250px;}}/*!sc*/
      data-styled.g56[id="sc-858472aa-0"]{content:"eMUhHp,"}/*!sc*/
      .fvTlzg{width:100%;}/*!sc*/
      @media (min-width:1025px){.fvTlzg{max-width:435px;float:left;margin-bottom:35px}}/*!sc*/
      .fvTlzg .afrPromo{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;}/*!sc*/
      data-styled.g57[id="sc-eab16c56-0"]{content:"fvTlzg,"}/*!sc*/
      .bbYFkS{padding:15px 24px 20px;}/*!sc*/ 
      .bbYFkS h6{font-weight:400;}/*!sc*/
      data-styled.g58[id="sc-df89a08f-0"]{content:"bbYFkS,"}/*!sc*/
      .wpbiR .routing-spacing{width:8px;}/*!sc*/
      .wpbiR .date-picker-wrapper{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;width:100%;}/*!sc*/
      @media (max-width:767px){.wpbiR .date-picker-wrapper .date-prefix{right:0;height:100%;padding-right:8px;position:absolute;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-webkit-justify-content:end;-ms-flex-pack:end;justify-content:end;display:-webkit-box !important;display:-webkit-flex !important;display:-ms-flexbox !important;display:flex !important;}}/*!sc*/
      @media (min-width:768px){.wpbiR{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}}/*!sc*/
      data-styled.g59[id="sc-b292eaf3-0"]{content:"wpbiR,"}/*!sc*/
      .fDvdbE{width:20px;height:20px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;background:url(/static/img/sprites/form-sprite.png) no-repeat;background-position:0 3px;}/*!sc*/
      data-styled.g60[id="sc-16fbf88b-0"]{content:"fDvdbE,"}/*!sc*/
      .hASXcI{width:20px;height:20px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;background:url(/static/img/sprites/form-sprite.png) no-repeat;background-position:0 -25px;}/*!sc*/
      data-styled.g61[id="sc-16fbf88b-1"]{content:"hASXcI,"}/*!sc*/
      .grcZqr{width:100%;}/*!sc*/
      @media (min-width:768px){.grcZqr{width:calc(50% - 4px);}}/*!sc*/
      .grcZqr.stretch{width:100%;}/*!sc*/
      .grcZqr.email-input .email-ac{margin-bottom:0;}/*!sc*/
      @media (max-width:768px){.grcZqr.flight-class-select,.grcZqr group-size-select{margin-bottom:12px;}}/*!sc*/
      data-styled.g64[id="sc-a323ead3-0"]{content:"grcZqr,"}/*!sc*/
      @media (min-width:768px){.izYqwl{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;}}/*!sc*/
      @media (max-width:768px){.izYqwl.row-input .customer-input{width:100%;}}/*!sc*/
      data-styled.g65[id="sc-a323ead3-1"]{content:"izYqwl,"}/*!sc*/
      .iEMgxW{width:100%;height:32px;display:block;border:1px solid #e5e5e5;line-height:30px;text-align:center;color:#3b3536;background:white;text-transform:capitalize;-webkit-transition:all 0.1s linear;transition:all 0.1s linear;}/*!sc*/
      .iEMgxW:nth-of-type(2n){border-width:1px;}/*!sc*/
      .iEMgxW.africaTab :nth-of-type(2n){border-width:1px 1px 1px 0;}/*!sc*/
      .iEMgxW:hover{background-color:rgb(240,240,240);}/*!sc*/
      .iEMgxW.checked{background:white;color:#005ba8;border:solid 1px #005ba8 !important;}/*!sc*/
      .iEMgxW.checked:hover{background:white;}/*!sc*/
      data-styled.g67[id="sc-3653c982-0"]{content:"iEMgxW,"}/*!sc*/
      .cPjMDN{margin:0 0;font-size:14px;padding:10px 0;}/*!sc*/
      .cPjMDN::after{content:'';position:absolute;top:50%;left:0;width:100%;height:1px;background:#e5e5e5;}/*!sc*/
      data-styled.g68[id="sc-7dd87981-0"]{content:"cPjMDN,"}/*!sc*/
      .blkuwI{inline-size:max-content;}/*!sc*/
      data-styled.g69[id="sc-7dd87981-1"]{content:"blkuwI,"}/*!sc*/
      .bRnzcj br{display:none;}/*!sc*/
      @media (min-width:1025px){.bRnzcj br{display:block;}}/*!sc*/
      data-styled.g70[id="sc-60606cb-0"]{content:"bRnzcj,"}/*!sc*/
      .kEJRcn .divider-wrapper{margin-bottom:5px !important;}/*!sc*/
      data-styled.g71[id="sc-60606cb-1"]{content:"kEJRcn,"}/*!sc*/
      .hvPFkN{border:1px dashed #24844d;border-left:0;border-left: 0;border: 1px dashed #ff7d01;}/*!sc*/
      @media (min-width:1025px){.hvPFkN{padding:5px 5px 5px 5px !important;border-left:0px !important;
}}/*!sc*/
      data-styled.g72[id="sc-60606cb-2"]{content:"hvPFkN,"}/*!sc*/
      .hMQlEw{position:absolute;top:0;left:0;right:0;bottom:-2px;background:transparent linear-gradient(rgba(255,255,255,0) 70%,white 95%);}/*!sc*/
      data-styled.g78[id="sc-dce924a1-0"]{content:"hMQlEw,"}/*!sc*/
      .emGeLi{font-weight:bold;}/*!sc*/
      .emGeLi .price-label-price{font-size:62px;font-weight:600;}/*!sc*/
      .emGeLi .price-label-currency{font-size:24px;font-weight:800;}/*!sc*/
      .emGeLi .price-label-asterisk{padding:8px 0 0 5px;}/*!sc*/
      data-styled.g80[id="sc-4a157c09-1"]{content:"emGeLi,"}/*!sc*/
      .cQeKdx{font-size:24px;}/*!sc*/
      .cQeKdx .price-label-currency{font-size:16px;}/*!sc*/
      .cQeKdx .price-label-asterisk{font-size:12px;padding-right:0!important;}/*!sc*/
      .cQeKdx.withImage .price-label-currency{font-size:14px;}/*!sc*/
      .cQeKdx.withImage .price-label-asterisk{font-size:14px;}/*!sc*/
      .cQeKdx.withImage .price-label-price{font-size:22px;}/*!sc*/
      data-styled.g81[id="sc-df0b2076-0"]{content:"cQeKdx,"}/*!sc*/
      .klckwT{background:linear-gradient(to bottom,#e3effa 0,white 100%) no-repeat center;height:460px;background-size:cover;}/*!sc*/
      data-styled.g83[id="sc-9aebc19c-0"]{content:"klckwT,"}/*!sc*/
      .BXSXe .c-item .c-text{width:200px;}/*!sc*/
      data-styled.g89[id="sc-1bde11e9-0"]{content:"BXSXe,"}/*!sc*/
      .dwZize{border:2px solid #2472bb;height:40px;line-height:36px;}/*!sc*/
      @media (min-width:768px){.dwZize{max-width:168px;}}/*!sc*/
      @media (min-width:1025px){.dwZize{margin-top:30px;}}/*!sc*/
      data-styled.g91[id="sc-df90c960-0"]{content:"dwZize,"}/*!sc*/
      @media (min-width:768px){.dLydMR .c-item{padding-right:10px !important;}}/*!sc*/
      .dLydMR .c-item .c-text{width:250px;}/*!sc*/
      @media (min-width:768px){.dLydMR .c-item .c-text{width:auto;margin:0 !important;text-align:left;}}/*!sc*/
      data-styled.g92[id="sc-cfcb16f1-0"]{content:"dLydMR,"}/*!sc*/
      @media (max-width:768px){.ePvYOk{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;font-size:14px;font-style:italic;}.ePvYOk div:first-of-type{margin-right:5px;}}/*!sc*/
      data-styled.g94[id="sc-43842d18-0"]{content:"ePvYOk,"}/*!sc*/
      .dIFYw{margin-bottom:15px;}/*!sc*/
      data-styled.g95[id="sc-d96473cd-0"]{content:"dIFYw,"}/*!sc*/
      .dSTkjJ{position:absolute !important;top:-999px;left:-9999px;display:none !important;visibility:hidden !important;opacity:0;}/*!sc*/
      data-styled.g98[id="sc-ba6d346a-0"]{content:"dSTkjJ,"}/*!sc*/
      .gcANnz .flights-landing-mob{display:none;}/*!sc*/
      @media (max-width:768px){.gcANnz .flights-landing-desktop{display:none;}.gcANnz .flights-landing-mob{display:block;}}/*!sc*/
      data-styled.g101[id="sc-3467c668-0"]{content:"gcANnz,"}/*!sc*/
      .FIguk{margin-bottom:15px;}/*!sc*/
      .FIguk .MuiOutlinedInput-root{border-radius:0;}/*!sc*/
      data-styled.g102[id="sc-89811889-0"]{content:"FIguk,"}/*!sc*/
      .czRoLU .asap-input-wrapper,.czRoLU .MuiTextField-root{margin:12px 0 0;}/*!sc*/
      @media (min-width:768px){.czRoLU .asap-input-wrapper,.czRoLU .MuiTextField-root{margin:4px 0 0;}}/*!sc*/
      .czRoLU .MuiInputBase-root,.czRoLU .MuiFormLabel-root{font-size:14px;font-family:'Open sans',sans-serif;}/*!sc*/
      .czRoLU .MuiInputBase-root > fieldset,.czRoLU .MuiFormLabel-root > fieldset{border-color:#ff7d01;}/*!sc*/
      .czRoLU .MuiInputBase-root:hover > fieldset,.czRoLU .MuiFormLabel-root:hover > fieldset{border-color:#2472bb;}/*!sc*/
      .czRoLU .MuiOutlinedInput-root{border-radius:0; height: 43px;}/*!sc*/
      .czRoLU .quote-privacy{font-size:10px !important;color:#afafaf !important;}/*!sc*/
      data-styled.g105[id="sc-3b6e3d2a-0"]{content:"czRoLU,"}/*!sc*/
      .gcjNgK{box-shadow:0 -1px 20px rgba(0,0,0,0.15);background:#fcfdfc;-webkit-transition:background-color 0.3s,box-shadow 0.3s;transition:background-color 0.3s,box-shadow 0.3s;height:100%;}/*!sc*/
      .gcjNgK:hover{background-color:#fff;box-shadow:0 -1px 20px rgba(0,0,0,0.35);}/*!sc*/
      .gcjNgK .SinglePriceItem-airline-logo{height:32px;}/*!sc*/
      .gcjNgK .result-page{margin-bottom:0;padding:10px 15px;}/*!sc*/
      .gcjNgK .result-page:hover .disclaimerPrice{color:#cc1f16;}/*!sc*/
      .gcjNgK .result-page .priceBlock{margin-top:5px;}/*!sc*/
      .gcjNgK .result-page .disclaimerPrice{font-size:28px;color:#000;font-weight:bold;}/*!sc*/
      .gcjNgK .result-page .result-page-airline{font-size:14px;font-weight:400;max-width:150px;}/*!sc*/
      .gcjNgK .result-page p:first-of-type{font-weight:bold;color:#000;padding-bottom:5px;}/*!sc*/
      data-styled.g196[id="sc-e0900bb7-0"]{content:"gcjNgK,"}/*!sc*/
      .kJjDls{background-color:#f6f6f6;}/*!sc*/
      data-styled.g197[id="sc-c5c2e7fb-0"]{content:"kJjDls,"}/*!sc*/
    </style>

  <style>

    body {
      
     /* font-family: Arial, sans-serif;*/
	 font-family: Poppins, sans-serif !important;
	 font-weight: 400;
	 color: #3b3536 !important;
    }
	.review-text{
		color:#3b3536 !important;
	}
    #content {
     /*  background:url("<?php echo e(asset('images/group/multi.jpg')); ?>") no-repeat center center/cover; */
  background:url("<?php echo e(asset('images/multi/mainbanner2.jpg')); ?>") no-repeat;
      display: flex;
/*      align-items: center;*/
          height: auto;
      max-width: 1425px;
	  background-size:cover;
    }
    #content1 {
    background:url("<?php echo e(asset('images/multi/ci1.jpg')); ?>") right center / contain no-repeat;
        margin-right: 90px;
    width: 100%;
    height: 481px;
    }
    .info {
      flex: 1;
          padding: 80px 93px;
    }
    .form-container {
      background: white;
      color: black;
      padding: 20px;
    margin-top: 165px;
      max-width: 400px;
   /* position: relative;
    left: 125px;*/
    }
    .form-container h3 {
      font-size: 18px;
      margin-bottom: 20px;
    }
    .form-container .btn {
      background: #ff0000;
      color: white;
    }
  </style>
  <style>
    .why-book-section {
      padding: 0px 15px;
      background-color: #f8f9fa;
    }
    .why-book-section h2 {
      font-size: 30px;
/*      font-weight: bold;*/
      text-align: center;
/*      margin-bottom: 30px;*/
    }

    .why-book-section p {
          font: 400 14px / 23px Open Sans, sans-serif;
  
    }
    .why-book-section1 {
      padding: 0px 0px !important;
      background-color: #f8f9fa;
    }
    .why-book-section1 h2 {
            align-self: center;
      font-size: 30px;
    /* font-weight: bold; */
    text-align: center;
    margin-bottom: 0px;
    }
   /* .why-book-section1 p {
      font-size: 16px;
      line-height: 1.8;
      text-align: justify;
      color: white;
  
    }*/
    .blue-block p:first-of-type {
    padding-bottom: 40px;
}
        .dkDBrt .blue-block {
        width: 260px;
        max-width: 260px;
    }
    .blue-block p {
    padding-top: 10px;
    color: rgb(255, 255, 255);
}
    .dkDBrt {
        max-width: 536px;
        width: 536px;
        height: 481px;
    }
  .blue-block {
   color: white;
    width: 200px;
    height: 364px;
    max-width: 245px;
    margin-top: 48px;
    padding: 35px 0px 39px 31px;
    background-color: rgb(9, 46, 116);
    box-shadow: rgba(0, 0, 0, 0.18) 20px 40px 40px;
}
.blue-block h2 {
    font-size: 36px;
    color: rgb(255, 255, 255);
    line-height: 32px;
    text-align: left;
}

.slash {
    width: 7px;
    height: 3px;
    background-color: rgb(0, 0, 0);
    margin: 0px 10px 0px 0px;
    align-self: center;
}
.wrap-10-0 {
    padding: 10px 0;
}
a {
    color: #2e6fa9;
    text-decoration: underline;
    background-color: transparent;
    cursor: pointer;
    transition: color .3s;
}
 .mobile-slider-text {
        padding: 0px 60px;
    }
    .slider-text-block {
    align-self: center;
}
@media (min-width: 769px) {
    .tablet\:tw-h-\[560px\] {
    height: 400px;
	width:100%;
}

}
  </style>    
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <style>
    .swiper {
      width: 100%;
      height: auto;
    }
    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
    .text-content {
      padding: 20px;
    }
    .text-content h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .text-content p {
      font-size: 16px;
      color: #555;
    }
    .image-container img {
      max-width: 100%;
     
    }
    .white-block p {
    padding-top: 25px;
    color: rgb(112, 112, 112);
}
.white-block h3 {
    align-self: center;
    color: rgb(57, 57, 57);
}
h1 {
    font: 600 36px / 47px Open Sans, sans-serif;
}

/*.bravo-autocomplete.show {
    display: block;
    overflow: scroll;
    height: 150px;
}*/
.ldbciA p {
    padding-top: 20px;
    max-width: 214px;
    color: #3b3536;
}
.top-block-image_0 {
       width: 80px;
    height: 80px;
    background: url("<?php echo e(asset('images/multi/why-book-icon_0.png')); ?>") 0% 0% / contain;
}
.top-block-image_1 {
       width: 80px;
    height: 80px;

    background: url("<?php echo e(asset('images/multi/why-book-icon_1.png')); ?>") 0% 0% / contain;
}
.top-block-image_2 {
       width: 80px;
    height: 80px;
    background: url("<?php echo e(asset('images/multi/why-book-icon_2.png')); ?>") 0% 0% / contain;
}
.top-block-image_3{
       width: 80px;
    height: 80px;
    background: url("<?php echo e(asset('images/multi/why-book-icon_3.png')); ?>") 0% 0% / contain;
}
.tw-m-auto {
    margin: auto;
}
.bNFkcS .text-block {
    align-self: center;
    max-width: 403px;
}
.wrap-30-0 {
    padding: 30px 0;
}


.sc-a1d337e7-0.jvdTQz.wrap-20-20.tw-mx-auto.tw-my-0.tw-w-full.tw-bg-background.sc-d6a49a60-0.iqbzem {
    padding: 20px 40px 19px;
    border-radius: 5px;
} 
.f-size-12.tw-flex.tw-w-full {
    padding: 4px;
}
  </style>
  <?php

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
        }
    }, 100); // 100ms delay to ensure element availability
}); 
</script>
<?php } ?>

  <div class="container mb-4" id="content"  style="display:block">
		<div class="row text-center">
	   <div class="col-lg-2 col-sm-2"></div>
	   <div class="col-lg-4 col-sm-4">
 
      <h3 style="color: rgb(255, 255, 255);" ><span style="color:rgb(204, 31, 22)">Philippine Airlines Seat Sale </span>to the Philippines</h3>
      <p style="color: rgb(255, 255, 255); " >✧ Save BIG with Philippine Airlines ✧</p>
      <p style="color: rgb(255, 255, 255); ">✧ Depart to Manila or Cebu ✧</p>
      <h5 style="color: rgb(255, 255, 255);" >✧ Call Us Toll-Free to Get the Best Deal! ✧</h5>

	</div>

      <!-- old form 2-->
      <!--<div class="col-lg-6 col-md-8">--> 
    <div class="col-lg-4 col-sm-4  " >
		  <h3 style="color: rgb(255, 255, 255);"><span style="color:rgb(204, 31, 22)">CALL US NOW </span><span >and save </span><span style="color:rgb(204, 31, 22)">C$30 extra</span></h3>
		  <p style="color: rgb(255, 255, 255); " >Voucher Code <span style="color:rgb(204, 31, 22)">Tripgare30</span></p>
		  <p style="color: rgb(255, 255, 255); " >or submit a request</p>
	</div>
	 <div class="col-lg-2 col-sm-2"></div> 
	</div>
		<div class="row mt-4">
    <!-- <div class="container content" style="display: flex;"> -->
    <div class="container" id="containermaindiv" style="display: flex;"> 
    <!-- Left section --> 

    <!-- <div class="col-lg-2  d-none col-lg-block"></div> -->
    <div class="col-lg-6 col-md-6">

<div class="sc-a1d337e7-0 jvdTQz wrap-20-20 tw-mx-auto tw-my-0 tw-w-full tw-bg-background sc-d6a49a60-0 iqbzem">
  <div class="sc-a1d337e7-1 cechoD deals-wrapper tw-flex tw-flex-col tw-items-center">
    <div class="m-b-sm tw-flex tw-w-full">
      <div class="tw-w-full">
        <div class="sc-d6a49a60-1 eHSgcY b-b-grey f-size-12 l-h-1 m-b-sm tw-flex tw-w-full">
          <div class="m-b-sm tw-w-full tw-text-left">Destination</div>
          <div class="m-b-sm tw-w-full tw-text-right">From only</div>
        </div>
        <div class="f-size-12 tw-flex tw-w-full">
          <div class="sc-b809f27c-0 MNCgb tw-flex tw-w-full tw-items-center">
            <span>Vancouver &nbsp;✈ Manila</span>
          </div>
          <div class="tw-flex tw-items-center tw-justify-end">
            <div class="sc-d36cfd0e-0 iCXeCE bold tw-flex tw-shrink-0 tw-cursor-pointer tw-justify-center">
              <span class="price-label-currency ">C$</span>1105<span class="price-label-asterisk f-size-11 bold">*</span>
            </div>
          </div>
        </div>
        <div class="f-size-12 tw-flex tw-w-full">
          <div class="sc-b809f27c-0 MNCgb tw-flex tw-w-full tw-items-center">
            <span>Montreal ✈ Manila</span>
          </div>
          <div class="tw-flex tw-items-center tw-justify-end">
            <div class="sc-d36cfd0e-0 iCXeCE bold tw-flex tw-shrink-0 tw-cursor-pointer tw-justify-center">
              <span class="price-label-currency ">C$</span>1539<span class="price-label-asterisk f-size-11 bold">*</span>
            </div>
          </div>
        </div>
        <div class="f-size-12 tw-flex tw-w-full">
          <div class="sc-b809f27c-0 MNCgb tw-flex tw-w-full tw-items-center">
            <span>Toronto ✈ Manila</span>
          </div>
          <div class="tw-flex tw-items-center tw-justify-end">
            <div class="sc-d36cfd0e-0 iCXeCE bold  tw-flex tw-shrink-0 tw-cursor-pointer tw-justify-center">
              <span class="price-label-currency ">C$</span>1525<span class="price-label-asterisk f-size-11 bold">*</span>
            </div>
          </div>
        </div>
      </div>
      <div class="b-r-grey m-r-m m-l-m tw-shrink-0"></div>
      <div class="tw-w-full">
        <div class="sc-d6a49a60-1 eHSgcY b-b-grey f-size-12 l-h-1 m-b-sm tw-flex tw-w-full">
          <div class="m-b-sm tw-w-full tw-text-left">Destination</div>
          <div class="m-b-sm tw-w-full tw-text-right">From only</div>
        </div>
        <div class="f-size-12 tw-flex tw-w-full">
          <div class="sc-b809f27c-0 MNCgb tw-flex tw-w-full tw-items-center">
            <span>Vancouver ✈ Cebu &nbsp;&nbsp;</span>
          </div>
          <div class="tw-flex tw-items-center tw-justify-end">
            <div class="sc-d36cfd0e-0 iCXeCE bold tw-flex tw-shrink-0 tw-cursor-pointer tw-justify-center">
              <span class="price-label-currency ">C$</span>1145<span class="price-label-asterisk f-size-11 bold">*</span>
            </div>
          </div>
        </div>
        <div class="f-size-12 tw-flex tw-w-full">
          <div class="sc-b809f27c-0 MNCgb tw-flex tw-w-full tw-items-center">
            <span>Toronto ✈ Cebu</span>
          </div>
          <div class="tw-flex tw-items-center tw-justify-end">
            <div class="sc-d36cfd0e-0 iCXeCE bold  tw-flex tw-shrink-0 tw-cursor-pointer tw-justify-center">
              <span class="price-label-currency ">C$</span>1545<span class="price-label-asterisk f-size-11 bold">*</span>
            </div>
          </div>
        </div>
        <div class="f-size-12 tw-flex tw-w-full">
          <div class="sc-b809f27c-0 MNCgb tw-flex tw-w-full tw-items-center">
            <span>Montreal ✈ Cebu</span>
          </div>
          <div class="tw-flex tw-items-center tw-justify-end">
            <div class="sc-d36cfd0e-0 iCXeCE bold  tw-flex tw-shrink-0 tw-cursor-pointer tw-justify-center">
              <span class="price-label-currency ">C$</span>1765<span class="price-label-asterisk f-size-11 bold">*</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="" onclick="openIfreme()">How to Book?</a>
  </div>
</div>


	</div> 

      <!-- old form 2-->
    <div class="col-lg-6 col-md-6">
    <div class="sc-eab16c56-0 fvTlzg tw-float-right tw-mt-5 tw-shrink-0  " id="vj" >
		
		<div class="sc-eab16c56-0 fvTlzg panel tw-relative ">
			<div class="sc-df89a08f-0 bbYFkS">
				<div class="spinner tw-relative ">
					<form data-qa-tel-placement="quote-form" class="sc-3b6e3d2a-0 czRoLU tw-relative" action="<?php echo e(route('freequote')); ?>" method="post"
					id="departureform" onsubmit="return searchwhich_form('departureform')" autocomplete="off">
					<?php echo csrf_field(); ?>
						 <input type="hidden" name="page_url" value="<?php echo e(url()->current()); ?>"/>
						 <input type="hidden" name="source_page" value="multi_page" id="grouppage" />
						<div>
							<div class="m-b-sm">
							
							<div class="container cta-container">
								<div class="cta-heading">
									<h2><a  href="tel:+1 855 522 3344" class="no-decoration"><span class="call-text">CALL US Toll-FREE</span></a> <span class="save-text">to Save More</span></h2>
								</div>
								
							</div>
								<div class="sc-60606cb-1 kEJRcn">
									<div class="sc-7dd87981-0 cPjMDN divider-wrapper tw-relative tw-flex tw-justify-center tw-mb-4" color="#e5e5e5">
										<div class="sc-7dd87981-1 blkuwI wrap-0-10 l-h-1 z-i-1 tw-relative tw-bg-background tw-text-center">
											<div class="text-sm tw-whitespace-normal" id="font" style="color:#313334;">or </div>
										</div>

									</div>
								</div>
								<p class="text-sm tw-whitespace-normal text-center"  style="color:#313334;">fill out the request form, and we will call you back soon</p>
							</div>
							<div class="tw-flex tw-w-full"><label class="sc-3653c982-0 iEMgxW tw-relative tw-cursor-pointer active" id="roundTripBtn"><input type="radio" name="booking_type" class="sc-ba6d346a-0 dSTkjJ" checked="" value="round-trip"/>
							<span>Round-Trip</span></label><label class="sc-3653c982-0 iEMgxW tw-relative tw-cursor-pointer" id="oneWayBtn">
							<input type="radio" name="booking_type" class="sc-ba6d346a-0 dSTkjJ" value="one-way"/>
							<span>One-Way</span></label>
					</div>
<style>
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
							<div class="row">
								<div class="col smart-search">
									<input type="text"
										class="smart-search-location parent_text form-control font-size-14"
										placeholder="From*" value="<?php echo e($fromwhere); ?>"
										data-onload="" data-default="" id="fromwhere1" required>
										<div class="input-loader" style="width: 19px;height: 20px;border-width: 4px;border-style: solid;border-color: #ff7d01 rgb(243, 243, 243) rgb(243, 243, 243);border-image: initial;border-radius: 50%;animation: 1s linear 0s infinite normal none running spin;position: absolute;right: 21px;top: 30%;transform: translateY(-50%); display: none;"></div>
									<input type="hidden" id="from1" class="child_id" name="from"
										value="<?php echo e($fromwhere); ?>" autocomplete="off" required>
								</div>
								<div class="col smart-search">
									<input type="text"
										class="smart-search-location parent_text form-control font-size-14"
										placeholder="To*" value="<?php echo e($to_where); ?>"
										data-onload="" data-default="" id="wherewhere1" required>
										<div class="input-loader" style="width: 19px;height: 20px;border-width: 4px;border-style: solid;border-color: #ff7d01 rgb(243, 243, 243) rgb(243, 243, 243);border-image: initial;border-radius: 50%;animation: 1s linear 0s infinite normal none running spin;position: absolute;right: 21px;top: 30%;transform: translateY(-50%); display: none;"></div>
									<input type="hidden" id="where1" class="child_id" name="to"
										value="<?php echo e($to_where); ?>" autocomplete="off" required>
								</div>
							   
							</div>
							<fieldset class="sc-b292eaf3-0 wpbiR dates-ac tw-flex" style="border: none;    margin: 0px; padding: 0px;">
								<div class="date-picker-wrapper">
									<div>
										<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth" style="">
											<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false"></label>
											<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense" id="departed" 
">
												<input class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense departureDate "  name="start_date"  id="returnd" type="date" 
												value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" 
												min="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" required style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;"
  onclick="this.showPicker()" />
												
												<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
													<legend class="jss3"><span></span></legend>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
								<div class="routing-spacing tw-shrink-0"></div>
								<div class="date-picker-wrapper">
									<div>
										<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
											
											<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
												<input  class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense returnDate" name="enddate" id="returnDate" type="date"
												value="" required
												min="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" required style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;"
  onclick="this.showPicker()"/>
												
												<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
													<legend class="jss3"><span>Return Date3</span></legend>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<div>
							<div class="row mt-1"><div class="col-md-12"><input name="email" aria-invalid="false" id="emailremo" autocomplete="off" type="email" class="smart-search-location parent_text form-control font-size-14" placeholder="Email*" style="padding-left: 4px;width: 100%;border-radius : 0;border: 1px solid #ff7d01;" value="" required=""></div></div>
								<!--<div class="sc-a323ead3-1 izYqwl row-input">
                                                                <div class="sc-a323ead3-0 grcZqr !tw-w-full tw-text-body-regular">
                                                                    <div class="mui-email-ac">
                                                                        <div class="MuiAutocomplete-root email-ac MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" style="width:100%">
                                                                            <div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth" data-qa-email-input="true">
                                                                            
                                                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
                                                                                    <input name="email" aria-invalid="false"  id="emailremo" autoComplete="off" type="email" class="smart-search-location  font-size-14" placeholder="Email*" style="padding-left: 4px;width: 100%;"  value="" required />
                                                                                    
                                                                                    <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
                                                                                        <legend class="jss3"><span>E-mail*</span></legend>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->


								<div class="tw-flex  tw-flex-wrap tw-justify-between">
									<div class="sc-a323ead3-0 grcZqr customer-input tw-text-body-regular">
															<div class=" input-group pt-1 pb-2" >
																<div class="custom-dropdown">
																	<div class="custom-select" id="selectedCountry3" style="	width: 92;  font-size: 14px; height:43px;    padding-bottom: 5px;	padding-top: 8px;	border-top:1px solid #ff7d01;
																		border-bottom: 1px solid #ff7d01;	border-left: 1px solid #ff7d01;		border-right: none;	">
																		<img id="selectedFlag3" class="flag-img" src="https://flagcdn.com/w320/ca.png" alt="Country Flag" />
																		<span id="countryCodeDisplay3">+1</span>
																	</div>
																	<div class="custom-dropdown-content" id="countryDropdown3"></div>
																	<input type="hidden" name="phoneprefix" id="dropdowncode3" value="">
																</div>
																<input    autocomplete="off"  class="smart-search-location  font-size-14" name="phone" placeholder="Phone" type="text" id="phoneplace" required >
															</div>
														</div>
									<div class="sc-a323ead3-0 grcZqr customer-input">
										<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
										
											<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-marginDense MuiOutlinedInput-marginDense">
												<input aria-invalid="false" name="name" type="text"  placeholder="Your Name (Optional)" class="smart-search-location  font-size-14" placeholder="Your Name (Optional)" style="padding-left:8px;padding-bottom: 6px;background: no-repeat;width: 100%;" value=""/>
												<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
													<legend class="jss3"><span>Your Name (Optional)</span></legend>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</div>
							<script>
			$(document).ready(function() {
	
				// Country data for India, Canada, and the USA
				const countryData3 = [
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
				const $countryDropdown3 = $('#countryDropdown3');
				countryData3.forEach(country => {
					$countryDropdown3.append(`
						<div data-code="${country.code}">
							<img src="${country.flag}" class="flag-img" /> ${country.code}
						</div>
					`);
				});
		
				// Default selection to India
				const defaultCountry3 = countryData3[0];
				$('#countryCodeDisplay3').text(defaultCountry3.code);
				$('#dropdowncote3').val(defaultCountry3.code);
				$('#selectedFlag3').attr('src', defaultCountry3.flag).show();
		
				// Show dropdown on click
				$('#selectedCountry3').on('click', function() {
					$('#countryDropdown3').toggle();
				});
		
				// Select a country
				$countryDropdown3.on('click', 'div', function() {
					const code3 = $(this).data('code');
					const flag3 = $(this).find('img').attr('src');
					$('#countryCodeDisplay3').text(code3);
					$('#dropdowncote3').val(code3);
					$('#selectedFlag3').attr('src', flag3).show();
					$('#countryDropdown3').hide();
				});
		
				// Close dropdown when clicking outside
				$(document).on('click', function(event) {
					if (!$(event.target).closest('.custom-dropdown').length) {
						$('#countryDropdown3').hide();
					}
				});
			});
		</script>
																			<div class="row align-items-center">
                                                            <!-- Dropdown for Travel Class -->
                                                            <div class="col-md-6 col-12 mb-2">
                                                              <div class="dropdown">
                                                                <button class="form-select w-100" type="button" id="customTravelClassButton">
                                                                  Economy
                                                                </button>
                                                                <ul class="dropdown-menu" id="customTravelClassMenu">
                                                                  <li><a class="dropdown-item custom-travel-class-item">Economy</a></li>
                                                                  <li><a class="dropdown-item custom-travel-class-item">Business</a></li>
                                                                  <li><a class="dropdown-item custom-travel-class-item">Premium Economy</a></li>
                                                                  <li><a class="dropdown-item custom-travel-class-item">First</a></li>
                                                                </ul>
                                                              </div>
                                                              <input type="hidden" name="travel_class" id="customTravelClassInput" value="Economy">
                                                            </div>

                                                            <!-- Dropdown for Passengers -->
                                                            <div class="col-md-6 col-12 mb-2" style="padding-left: 3px;">
                                                              <div class="dropdown">
                                                                <button class="form-select w-100" type="button" id="customPassengerButton">
                                                                  1 Passenger
                                                                </button>
                                                                <ul class="dropdown-menu" id="customPassengerMenu">
                                                                  <li><a class="dropdown-item custom-passenger-item" data-value="1">1 Passenger</a></li>
                                                                  <li><a class="dropdown-item custom-passenger-item" data-value="2">2 Passengers</a></li>
                                                                  <li><a class="dropdown-item custom-passenger-item" data-value="3">3 Passengers</a></li>
                                                                  <li><a class="dropdown-item custom-passenger-item" data-value="4">4 Passengers</a></li>
                                                                  <li><a class="dropdown-item custom-passenger-item" data-value="5">5 Passengers</a></li>
                                                                </ul>
                                                              </div>
                                                              <input type="hidden" name="passengers" id="customPassengerInput" value="1">
                                                            </div>
                                                         </div>
														 <script>

$(document).ready(function() {
    // Toggle travel class dropdown
    $('#customTravelClassButton').on('click', function() {
        $('#customTravelClassMenu').toggle();
    });

    // Toggle passengers dropdown
    $('#customPassengerButton').on('click', function() {
        $('#customPassengerMenu').toggle();
    });

    // Close dropdowns when clicking outside
    $(document).on('click', function(event) {
        if (!$(event.target).closest('#customTravelClassButton, #customTravelClassMenu').length) {
            $('#customTravelClassMenu').hide();
        }
        if (!$(event.target).closest('#customPassengerButton, #customPassengerMenu').length) {
            $('#customPassengerMenu').hide();
        }
    });

    // Update travel class selection
    $('.custom-travel-class-item').on('click', function() {
        const travelClass = $(this).text();
        $('#customTravelClassButton').text(travelClass);
        $('#customTravelClassInput').val(travelClass);
        $('#customTravelClassMenu').hide();
    });

    // Update passenger selection
    $('.custom-passenger-item').on('click', function() {
        const passengerCount = $(this).data('value');
        const label = `${passengerCount} Passenger${passengerCount > 1 ? 's' : ''}`;
        $('#customPassengerButton').text(label);
        $('#customPassengerInput').val(passengerCount);
        $('#customPassengerMenu').hide();
    });
});

  </script>
							<div class="m-t-sm tw-flex tw-w-full tw-items-center tw-text-center">
								<div class="tw-w-[49%]"><button class="sc-423e4b6d-0 dNpNeP bold wrap-10 tw-cursor-pointer tw-rounded tw-text-text-layout-fixed-light  tw-w-full" style="background:#ff7d01 ;">GET A FREE QUOTE</button></div>
								<div class="tw-w-[50%]">
									<button type="submit" class="tw-text-label-m tw-border-0 tw-border-b tw-border-solid tw-border-layout-powerful tw-bg-transparent-full tw-p-0 tw-no-underline tw-inline-flex tw-text-text-layout-powerful hover:tw-border-text-link-focus hover:tw-text-text-link-focus active:tw-border-text-link-action active:tw-text-text-link-action focus:tw-outline-none focus-visible:tw-border-text-link-focus focus-visible:tw-text-text-link-focus focus-visible:tw-shadow-[0_0px_0px_2px_rgba(49,145,245,0.5)] tw-cursor-pointer" data-qa-button="" tabindex="0">
										
									</button>
									<button type="button" id="howItWorksBtn"  class="tw-text-label-m tw-border-0 tw-border-b tw-border-solid tw-border-layout-powerful tw-bg-transparent-full tw-p-0 tw-no-underline tw-inline-flex tw-text-text-layout-powerful hover:tw-border-text-link-focus hover:tw-text-text-link-focus active:tw-border-text-link-action active:tw-text-text-link-action focus:tw-outline-none focus-visible:tw-border-text-link-focus focus-visible:tw-text-text-link-focus focus-visible:tw-shadow-[0_0px_0px_2px_rgba(49,145,245,0.5)] tw-cursor-pointer" data-qa-button="" tabindex="0">
									<div id="howItWorksBtn" class="tw-flex tw-items-center tw-justify-center" style="visibility:visible">How it Works?</div>
									</button>
									
								</div>
							</div>
							<div class="m-t-xs l-h-1-8 text-xs">
								By providing my contact details and clicking on &quot;GET A FREE QUOTE&quot; I agree to be contacted for travel information via phone, text messages and email. No purchase necessary. We respect your<!-- --> <a href=" https://flight.Tripgare.com/page/privacy-policy" class="" target="_blank">privacy</a>
							</div>
						</div>
					</form>
				</div>
		</div>
		
		
	</div>
	</div>
		
	</div>
	</div>
						




						
                  <!--</div>-->
    <!-- end old form --> 
    </div> 
</div>


<section class="why-book-section  "   style="font-family: sans-serif;    color: rgb(112, 112, 112);padding:0px 0px !important;">
   
      <div class="row p-0" id="rowid" style="border-bottom: solid 1px gray;">
       
      <div class="col-lg-12 " style="align-self: center;">
      <div class="text-block" ><h5 class="text-center mt-2">All prices are TOTAL fares and include all taxes & fees. Other departure and destination cities available per request</h5> 
	  <h5 class="text-center" style="background-color:red; color:white; padding: 10px; margin-top: 10px;">
    SPECIAL FARE: UP TO C$300 LOWER THAN ONLINE! -> CALL 888-333-1035 AND SAVE EXTRA C$30
</h5>

	  </div>
      </div>
      </div>
</section>


     <!-- new section -->
<section class="why-book-section" id="slidersec"   style="font-family: sans-serif;    color: rgb(112, 112, 112);">
     <div class="container564"  style="border-bottom: solid 1px gray;">
	<!-- reviews show part -->
 <?php echo $__env->make('News::frontend.blocks.staticreviews_deals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- reviews show part over -->
</div>

</section>


<!-- new section -->
  <section class="why-book-section1"  style="font-family: sans-serif;    color: rgb(112, 112, 112);background-color: rgb(243 239 239);" >
    <div class="container">
        
      <div class="row">
      
     
         <div class="col-lg-6 " style="color: black;">
           <div class="why-book-features wrap-20-30 sm-wrap-30-20 tw-m-auto"><h2 class="main-title wrap-22-0 f-size-30  tw-font-normal">Why Book With Us</h2>
		     <div class="row">
			     <div class="col-lg-6">
				    <h5 class="main-title wrap-40-0 f-size-20 tw-text-center  tw-font-bold">Savings of up 50% Off</h5>
					<p class="m-0">Special negotiated fares. Unadvertised deals from over 50 partner airlines. Children, family and group travel discounts</p>
				 </div>
			     <div class="col-lg-6">
				  <h5 class="main-title wrap-40-0 f-size-20 tw-text-center">Personalized advice</h5>
				  <p class="m-0">All research & legwork handled by 2100+ dedicated live travel agents</p>
				 </div>
			     <div class="col-lg-6">
				    <h5 class="main-title wrap-40-0 f-size-20 tw-text-center">24/7 Excellent Service</h5>
					<p class="m-0">Live help anytime before, during and after your trip via phone and email</p>
				 </div>
			     <div class="col-lg-6">
				     <h5 class="main-title wrap-40-0 f-size-20 tw-text-center">Ultra Secure & Trusted</h5>
					<p class="m-0">Your privacy and data security is always our number-one priority - and we're endorsed by BBB, ARC, IATAN</p>
				 </div>
			 </div>
		   </div>
         </div>
		 
		  <div class="col-lg-6 ">
        <div class="row" id="content1" style="font-family: sans-serif;  ">
          <!-- <div class="col-lg-6 blue-block"></div> -->
          <div class="col-lg-12" ></div> 
        </div>
      </div>
		 
      </div>
    </div>   
  <section>
<!-- end section -->

 

 <!-- new section -->
<section class="why-book-section"   style="font-family: sans-serif;    color: rgb(112, 112, 112);">
   <div class="container">
      <div class="row" id="rowid" style="border-bottom: solid 1px gray;">
	   <div class="col-lg-12">
       <h2 style="text-align: left;" >How to get the cheapest deals</h2>
	   </div>
	    <div class="col-lg-1"> </div>
	    <div class="col-lg-5 ">
      <!--    <div class="tw-h-[200px] tw-w-auto tw-bg-center tw-bg-no-repeat max-tablet:tw-bg-cover tablet:tw-h-[560px] tablet:tw-w-[534px]" style="background-size: contain; background-image:url(&quot;<?php echo e(asset('images/multi/c1.webp')); ?>&quot;)" ></div> -->
       <div class="tw-h-[200px] tw-w-auto tw-bg-center tw-bg-no-repeat max-tablet:tw-bg-cover tablet:tw-h-[560px] tablet:tw-w-[534px]" style="background-size: contain; background-image:url(&quot;<?php echo e(asset('images/multi/c11.jpg')); ?>&quot;)" ></div>
         </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5" style="align-self: center;">
      <div class="text-block" ><h4 class="wrap-30-0 f-size-20 tw-font-normal" style="text-align: left;padding:14px 0px">Get Instant FREE access to unpublished hand-picked deals!</h4><h6 class="tw-text-[12px] tw-leading-[1.6] desktop:tw-text-[14px]" style="color:#3b3536;">Be the first to receive updates on exclusive offers.</h6>
	  
	<br/>
	<form action="<?php echo e(route('subscribe')); ?>" method="post">
	<?php echo csrf_field(); ?>
		<div class="row">
           <div class="col-lg-12">
				<input type="email" name="email"
					class="smart-search-location parent_text form-control font-size-14"
					placeholder="E-mail*" data-onload="" data-default="" id="emailremo" required style="border-radius : 0;border: 1px solid #ff7d01;">
			</div>
           <div class="col-lg-12">						
	   <div class=" customer-input tw-text-body-regular">
			<div class=" input-group pt-1 pb-2" >  
				<div class="custom-dropdown">
					<div class="custom-select" id="selectedCountry4" style=" width: 88px; font-size: 14px;     padding-bottom: 33px;       border-top:1px solid #ff7d01;
						border-bottom: 1px solid #ff7d01;height:43px;   border-left: 1px solid #ff7d01;     border-right: none; ">
						<img id="selectedFlag4" class="flag-img" src="https://flagcdn.com/w320/ca.png" alt="Country Flag" />
						<span id="countryCodeDisplay4">+1</span>
					</div>
					<div class="custom-dropdown-content" id="countryDropdown4"></div>
				</div>
				<input    autocomplete="off"  class="smart-search-location form-control  font-size-14" name="phone" placeholder="Phone" type="text" id="phoneplace" required style="border-radius : 0;">
			</div>
		</div>
		 <script>
    $(document).ready(function() {
        
        // Country data for India, Canada, and the USA
        const countryData = [
            { code: "+1", shortCode: "CA", flag: "https://flagcdn.com/w320/ca.png" },
            { code: "+91", shortCode: "IN", flag: "https://flagcdn.com/w320/in.png" },
           
            { code: "+1", shortCode: "US", flag: "https://flagcdn.com/w320/us.png" },
        ];

        // Populate the dropdown
        const $countryDropdown = $('#countryDropdown4');
        countryData.forEach(country => {
            $countryDropdown.append(`
                <div data-code="${country.code}" data-short="${country.shortCode}">
                    <img src="${country.flag}" class="flag-img" /> ${country.code}
                </div>
            `);
        });

        // Default selection to India
        const defaultCountry = countryData[0];
        $('#countryCodeDisplay4').text(defaultCountry.code);
        $('#selectedFlag4').attr('src', defaultCountry.flag).show();

        // Show dropdown on click
        $('#selectedCountry4').on('click', function() {
            $('#countryDropdown4').toggle();
        });

        // Select a country
        $countryDropdown.on('click', 'div', function() {
            const code = $(this).data('code');
            const shortCode = $(this).data('short');
            const flag = $(this).find('img').attr('src');
            $('#countryCodeDisplay4').text(code);
            $('#selectedFlag4').attr('src', flag).show();
            $('#countryDropdown4').hide();
        });
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.custom-dropdown').length) {
                $('#countryDropdown4').hide();
            }
        });
    });
</script>
		</div>	
<div class="col-lg-12 d-flex align-items-center">
    <input type="checkbox" name="privacy" id="privacy" required
        class="smart-search-location parent_text font-size-14 me-2 form-checkbox">
    <label class="tw-text-text-layout-powerful hover:tw-cursor-pointer hover:tw-text-text-layout-accent group-hover:tw-text-text-layout-accent peer-focus-visible/selection:tw-text-text-layout-accent tw-text-footnote-regular" for="privacy">
        I agree to receive promotional SMS via an autodialer, and this agreement isn’t a condition of purchase. 
        I also agree to <a href="/customer-service/rules-conditions">T&amp;Cs</a> and <a href="/privacy">Privacy Policy</a>. 
        Up to 5 Msgs/month. Msg &amp; Data rates may apply.
    </label>
</div>

				
	<div class="col-lg-12">
	 <div class="sc-c843fdcb-5 IAXQb safety-and-privacy safety-and-privacy "><svg class="icon" width="12" height="16" viewBox="0 0 12 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 8C12 7.17275 11.3273 6.5 10.5 6.5H9.75V4.25C9.75 2.18225 8.06775 0.5 6 0.5C3.93225 0.5 2.25 2.18225 2.25 4.25V6.5H1.5C0.67275 6.5 0 7.17275 0 8V14C0 14.8273 0.67275 15.5 1.5 15.5H10.5C11.3273 15.5 12 14.8273 12 14V8ZM3.75 4.25C3.75 3.0095 4.7595 2 6 2C7.2405 2 8.25 3.0095 8.25 4.25V6.5H3.75V4.25Z" fill="#3B3536"></path></svg><span class="f-size-12">100% Safety &amp; <a href="<?php echo e(url('page/privacy-policy')); ?>">Privacy</a> Guaranteed! Unsubscribe at any time.</span></div>
	</div>
	<div class="col-lg-12 text-right">
	<style>
    .subscribe-btn {
        background-color: #ff7d01 !important;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        transition: background-color 0.3s, color 0.3s;
    }

    .subscribe-btn:hover {
        background-color: #1a2b48 !important;
        color: white !important;
    }
</style>

<button type="submit" class="subscribe-btn sc-89ebbb59-0 dirXob wrap-10-20 bold f-size-13 tw-shrink-0 tw-rounded tw-text-text-layout-fixed-light max-desktop:tw-w-full bg-dark">
    SUBSCRIBE
</button>

	</div>		
</div>		
</form>

	
	 
	  </div>
	  
      </div>

      </div>
    </div>
</section>
    <!-- endsection -->



 <!-- new section -->
<section class="why-book-section"   style="font-family: sans-serif;    color: rgb(112, 112, 112);">
   <div class="container">
      <div class="row" id="rowid" style="border-bottom: solid 1px gray;">
       
      <div class="col-lg-6 " style="align-self: center;">
      <div class="text-block" ><h2 class="wrap-30-0 f-size-20 tw-font-normal" style="text-align: left;">Philippine Airlines to Manila & Cebu</h2><p class="tw-text-[12px] tw-leading-[1.6] desktop:tw-text-[14px]" style="color:#3b3536;">Finding cheap flights to the Philippines online can be quite challenging. Flight.tripgare Tickets can do all the footwork for you to save time and money. Our Travel Agents manually put together the best-priced airfares to the Philippines with the most convenient itineraries to offer you cheap tickets to Philippines. </p><p class="tw-text-[12px] tw-leading-[1.6] desktop:tw-text-[14px]" style="color:#3b3536;">Take advantage of our discounted promos on Philippine Airlines! Fly to the Philippines with the flag carrier with our special negotiated airfares and save huge on your flight. Enjoy the convenience of non-stop and direct flights to Manila & Cebu as well as other cities in the Philippines from Vancouver, Toronto and Montreal</p></div>
      </div>
         <div class="col-lg-6 ">
          <!-- <div class="tw-h-[200px] tw-w-auto tw-bg-center tw-bg-no-repeat max-tablet:tw-bg-cover tablet:tw-h-[560px] tablet:tw-w-[534px]" style="background-size: contain; background-image:url(&quot;<?php echo e(asset('images/multi/c1.webp')); ?>&quot;)" ></div>  -->
          <div class="tw-h-[200px] tw-w-auto tw-bg-center tw-bg-no-repeat max-tablet:tw-bg-cover tablet:tw-h-[560px] tablet:tw-w-[534px]" style="background-size: contain; background-image:url(&quot;<?php echo e(asset('images/multi/airlinedeal12.jpg')); ?>&quot;)" ></div>
         </div>
      </div>
    </div>
</section>
    <!-- endsection -->

 <!-- new section -->
<section class="why-book-section"   style="font-family: sans-serif;    color: rgb(112, 112, 112);">
   <div class="container">
      <div class="row" id="rowid" style="border-bottom: solid 1px gray;">
       
      <div class="col-lg-12 " style="align-self: center;">
      <div class="text-block" ><h2 class="wrap-30-0 f-size-20 tw-font-normal" style="text-align: left;">About Flight.tripgare.com</h2><p class="tw-text-[12px] tw-leading-[1.6] desktop:tw-text-[14px]" style="color:#3b3536;">Tripgare Tickets is a unique fusion of an airline ticket consolidator (wholesaler) with a travel agency (retailer). Our unprecedented business model was created so that our customers get the best of both worlds: that is discounted airfares negotiated at wholesale prices and a personalized approach for every single request! We are committed to provide our valued customers with only the best and reasonably-priced tickets to the Philippines and other destinations. Through over a decade of industry experience, we have partnered with more than 100 major airlines to offer our clients various travel options to the Philippines and beyond. We are available 24/7 to guarantee immediate response to any travel inquiries before, during and after your trip.</p></div>
      </div>
      </div>
    </div>
</section>
    <!-- endsection -->



<!-- trxt starting in popup last -->
    <!-- endsection -->
   <!-- Swiper JS -->
 
<div class="modal2" id="popupModal">
    <div class="modal-content2 position-relative">
        <!-- Close Button -->
        <span class="close-btn" id="closeModal">&times;</span>
        <div class="row g-0">
            <!-- Left Image -->
            <div class="col-md-6">
                <img src="<?php echo e(asset('public/images/trip_new/telecaller.webp')); ?>" 
                     class="img-fluid h-100" alt="How It Works" style="height: auto; max-height: 100vh; object-fit: cover;">
            </div>
            <!-- Right Text Content -->
            <div class="modal-text col-md-6 d-flex flex-column justify-content-center p-4">
                <h3 style="font-size:15px">How it Works?</h3>
                <ul>
                    <li>1. Fill in the form or give us a call</li>
                    <li>2. We'll find you the best-priced deal matching your requirements</li>
                    <li>3. Your personal travel agent will get in touch with the offer</li>
                    <li>4. Securely pay online or opt for payment in monthly installments</li>
                    <li>5. Enjoy your trip & our 24/7 live customer support</li>
                </ul>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="openIfreme" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
       <iframe style="height:280px" frameborder="0" allowfullscreen="" 
    src="https://www.youtube-nocookie.com/embed/6rjTMdi37Kc?rel=0&amp;showinfo=0&amp;autoplay=1&amp;modestbranding=1&amp;mute=1&amp;start=0" 
    class="z-1-2 tw-relative tw-h-full tw-w-full">
</iframe>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeIfreme()">Close</button>
      </div>
    </div>
  </div>
</div>

  <script>
    const sliderWrapper = document.getElementById('sliderWrapper');
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.getElementById('dotsContainer');

    let currentSlide = 0;

    function getSlidesPerView() {
      if (window.innerWidth <= 425) return 1; // 1 slide on mobile
      if (window.innerWidth <= 768) return 3; // 3 slides on tablets
      return 4; // 4 slides on larger screens
    }

    const updateSlider = () => {
      const slidesPerView = getSlidesPerView();
      sliderWrapper.style.transform = `translateX(-${currentSlide * (100 / slidesPerView)}%)`;

      // Update dots
      const dots = document.querySelectorAll('.dot');
      dots.forEach(dot => dot.classList.remove('active'));
      dots[Math.floor(currentSlide / slidesPerView)].classList.add('active');
    };

    const changeSlide = direction => {
      const slidesPerView = getSlidesPerView();
      const maxIndex = Math.ceil(slides.length / slidesPerView) - 1;

      currentSlide = (currentSlide + direction + slides.length) % slides.length;
      if (currentSlide > maxIndex * slidesPerView) currentSlide = 0; // Loop back to the start

      updateSlider();
    };

    const initializeDots = () => {
      const slidesPerView = getSlidesPerView();
      const totalDots = Math.ceil(slides.length / slidesPerView);

      for (let i = 0; i < totalDots; i++) {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (i === 0) dot.classList.add('active');
        dot.setAttribute('onclick', `goToSlide(${i})`);
        dotsContainer.appendChild(dot);
      }
    };

    const goToSlide = index => {
      const slidesPerView = getSlidesPerView();
      currentSlide = index * slidesPerView;
      updateSlider();
    };

    window.addEventListener('resize', () => {
      dotsContainer.innerHTML = ''; // Clear existing dots
      initializeDots();
      updateSlider();
    });

    // Initialize dots and update slider
    initializeDots();
    updateSlider();
  </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
		
		function openIfreme()
		{
			$("#openIfreme").modal('show');
		}
		
	function closeIfreme()
		{
			$("#openIfreme").modal('hide');
		}
		
		
            $(document).ready(function() {

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
			if(bookingTypeInput){
				 bookingTypeInput.value = 'round-trip'; // Set booking type to 'round-trip'
			}
           
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

          </script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php if(session('success')): ?>
        <script>
            Swal.fire({
                title: "Thank you!",
                text: "<?php echo e(session('success')); ?>",
                icon: "success",
                confirmButtonText: "OK",
                customClass: {
                    confirmButton: 'custom-confirm-button'  // Add this class to customize the button
                }
            });
        </script>
        <?php endif; ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                function validateReturnDate() {
                    var startDate = $('#departureDat').val();
                    var returnDate = $('#returnDat').val();
        
                    if (returnDate < startDate) {
                        $('#returnDat')[0].setCustomValidity("Return date must be greater than or equal to the departure date.");
                        $('.returnDateError').text("Return date must be greater than or equal to the departure date.");
                    } else {
                        $('.returnDate')[0].setCustomValidity("");
                        $('.returnDateError').text("");
                    }
                }
				function changevalidateReturnDate(startDateSelector, returnDateSelector) {
					var startDate = $(startDateSelector).val();
					var returnDate = $(returnDateSelector).val();
					if (startDate && returnDate && returnDate < startDate) {
						alert("Return date must be greater than or equal to the departure date.");
						$(returnDateSelector).val("");
					} else {
						$('.returnDateError').text("");
					}
				}
				$('#returnd, #returnDate').on('change', function() {
					changevalidateReturnDate('#returnd','#returnDate');
				});
                $('#departureDat, #returnDat').on('change', function() {
                    validateReturnDate();
					changevalidateReturnDate('#departureDat','#returnDat');
                });
                validateReturnDate();
            });
        </script>
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
                        // $('.returnDateR')[0].setCustomValidity("");
                        $('.returnDateErrorR').text("");
                    }
                }
                $('.departureDateR, .returnDateR').on('change', function() {
                    validateReturnDate();
                });
                validateReturnDate();
            });
        </script>




        <script>
    $(document).ready(function() {
        // Check if the IP address exists
        $.ajax({
            url: '<?php echo e(route("news.group")); ?>', // Adjust to your route for checking IP
            method: 'POST', // Change to POST
            data: {
                _token: '<?php echo e(csrf_token()); ?>' // Include CSRF token for security
            },
            success: function(response) {
                if (!response.ipExists) {
                    $('#subscriptionModal').modal('show'); // Show modal if IP doesn't exist
                }
            },
            error: function() {
                console.error('Failed to check IP address.');
            }
        });

        // Country data for India, Canada, and the USA
        const countryData = [
            { code: "+1", shortCode: "CA", flag: "https://flagcdn.com/w320/ca.png" },
            { code: "+91", shortCode: "IN", flag: "https://flagcdn.com/w320/in.png" },
           
            { code: "+1", shortCode: "US", flag: "https://flagcdn.com/w320/us.png" },
        ];

        // Populate the dropdown
        const $countryDropdown = $('#countryDropdown');
        countryData.forEach(country => {
            $countryDropdown.append(`
                <div data-code="${country.code}" data-short="${country.shortCode}">
                    <img src="${country.flag}" class="flag-img" /> ${country.shortCode} ${country.code}
                </div>
            `);
        });

        // Default selection to India
        const defaultCountry = countryData[0];
        $('#countryCodeDisplay').text(defaultCountry.code);
        $('#selectedFlag').attr('src', defaultCountry.flag).show();

        // Show dropdown on click
        $('#selectedCountry').on('click', function() {
            $('#countryDropdown').toggle();
        });

        // Select a country
        $countryDropdown.on('click', 'div', function() {
            const code = $(this).data('code');
            const shortCode = $(this).data('short');
            const flag = $(this).find('img').attr('src');
            $('#countryCodeDisplay').text(code);
            $('#selectedFlag').attr('src', flag).show();
            $('#countryDropdown').hide();
        });
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.custom-dropdown').length) {
                $('#countryDropdown').hide();
            }
        });
    });
</script>
<script>
    document.querySelector('.subscription-input_phone').addEventListener('input', function() {
     let countryCode = document.getElementById('countryCodeDisplay').textContent;
    
    let phoneNumber = this.value;
    let fullPhoneNumber = countryCode + phoneNumber;
    document.querySelector('input[name="phone"]').value = fullPhoneNumber;
});
$(document).on('click', '.close', function() {
    $('#subscriptionModal').modal('hide');
});

</script> 

<script>
    $(document).ready(function() {
    // Modal element
    const modal = document.getElementById("popupModal");
    const openBtn = document.getElementById("howItWorksBtn");
    const closeBtn = document.getElementById("closeModal");

    // Open modal function
    openBtn.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    // Close modal function
    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Close modal when clicking outside modal content
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});


    
    </script>

<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/News/Views/frontend/cheap-flights/CountryShow_deals.blade.php ENDPATH**/ ?>