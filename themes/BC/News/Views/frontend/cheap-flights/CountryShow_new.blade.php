@extends('layouts.app')
@push('css')
    
     {{-- <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" /> --}}
   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  --}}
    <!-- CSS for intl-tel-input -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endpush
@php

    if (isset($_GET['currency'])) {
        $selectedCurrency = $_GET['currency'];
        setcookie('currency', $selectedCurrency, time() + 86400 * 30, '/');
        session(['currency' => $selectedCurrency]);
    }

    if (session('currency') == '') {
        $curr_currency = $_COOKIES['currency'] ?? 'CAD';
    } else {
        $curr_currency = session('currency');
    }

@endphp
<link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
	{{-- <head> --}}

		<meta name="next-head-count" content="34"/>
	
		<noscript data-n-css=""></noscript>
        <style>
		 #customPassengerButton{
     height: 41px !important;
   /* width: 189px !important;
    margin-left: -8px;*/
    padding: 6px;
}
#customTravelClassButton {
    height: 41px !important;
    width: 189px !important;
    padding: 6px; 
}
		.header-normal{
			    font-family: Poppins, sans-serif !important;
		}

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
        height: 100% !important; 
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
		width: 190px;
    padding: 0px -9px;
    margin-left: -22px;
    border-radius: inherit;
    }
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
    padding: 10 !important;
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
		color: white;
		
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
	font-size: 25px;
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
	width: 56%;
}
#phoneplace2 {
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-right: 1px solid #ff7d01;
    border-left: none;
    height: 43px;
    padding-left: 1px;
    width: 92px;
}
.wrap-40-30 {
    padding: 40px 35px !important; 
	width:100% !important;
}
.custom-select {
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
.tw-font-normal {
				font-weight: 400;
				font-family: 'Poppins',sans-serif  !important;
			}
			body h2,h3,p,h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
				font-family: 'Poppins',sans-serif  !important;
			}
        </style>

		<style>
			.subscription-container {
				background-color: #ffffff;
				border-radius: 10px;
				
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
			/* .fvTlzg {
					width:100% !important;
					
			
				} */

				#img_s{
					margin: 1px 50px;
					}
			#btn-primary{
				margin-left: 420px;
			}
			#fromwhere11 {
				height: 41px !important;
				width: 176px;
				padding: 6px;
				border: 1px solid #ff7d01;
				border-radius : 0;
				}
				#wherewhere11 {
				height: 41px !important;
				width: 176px;
				margin-left: -10px;
				padding: 6px;
				border: 1px solid #ff7d01;
				border-radius : 0;
				}
				.deals-section {
        max-width: 600px;
    }

    .deals-section h2 {
        font-size: 24px;
        margin: 0 0 5px 0;
    }

    .deals-section p {
        font-size: 18px;
        color: #555;
    }

    .deals-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 6px;
        margin: 1px 0;
    }
/* .bravo-list-news{
  padding-top:65px;
} */
.deal-box,
    .form-container,
    .review-item,
    .deal-item {
        margin: 0rem 0;
        /* Uniform spacing */
        padding: 1rem;
		margin-top: 10px;
        /* Consistent padding */
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
	.deal-link {
        display: block;
        text-decoration: none;
        color: inherit;
    }

    .deal-item {
        padding: 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
        /* Add any other styles for the item here */
    }
    .bravo_wrap .bravo_form .form-content .render, a:hover {
    color: #ff7d01;
    text-decoration: none;
}
  
    .deal-item:hover {
            background-color:#ff7d01;
         
            cursor: pointer;
            color:white;
            text-decoration: none;

        }
        .deal-item:hover .currencyvalue {
    color: white;
    background-color: #ff7d01; /* Optional, if you want a similar background */
    cursor: pointer;
    text-decoration: none;
}
.deal-item span {
        font-weight: bold;
        color: #333;
    }


    .view-deals-button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        /* text-decoration: none; */
    }

    .view-deals-button:hover {

        background-color: #0056b3;
    }

    .deal-link {
        display: block;
        text-decoration: none;
        color: inherit;
    }

.deal-item {
    margin: 0rem;
    padding: 1rem;
    background: #fff;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.deal-item {
        padding: 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
        /* Add any other styles for the item here */
    }
    .bravo_wrap .bravo_form .form-content .render, a:hover {
    color: #ff7d01;
    text-decoration: none;
}
/*   
    .deal-item:hover {
            background-color:#ff7d01;
         
            cursor: pointer;
            color:white;
            text-decoration: none;

        }
        .deal-item:hover .currencyvalue {
    color: white;
    background-color: #ff7d01; /* Optional, if you want a similar background */
    /* cursor: pointer;
    text-decoration: none; */
/* } */
			@media (max-width: 1024px) {
					#phoneplace{
	border-top: 1px solid #ff7d01;
	border-bottom: 1px solid #ff7d01;
	border-right: 1px solid #ff7d01;
	border-left: none;
	height:43px;
	width: 171px;
}
				.custom-container {
            width: 100% !important;
            max-width: 100% !important;
            padding-left: 15px;
            padding-right: 15px;
        }
		.deals-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 6px;
        margin: 1px 0 !important;
    }
				#vj {
					width:59% ;
					margin: 10px 0px ;
			
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
        width: 144px;
        margin-left: -23px;
		border: 1px solid #ff7d01;
		border-radius : 0;
    }
				#nosmallreq{
					display: none;
				}
				.tw-p-\[10px\] {
					padding: 7px;
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
		width: 261px;
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
		width: 263px;
    padding: 0px -9px;
    margin-left: -22px;
    }
	.text-green {
    color: #ff7d01 !important;
    padding: 2px;
}
.l-h-1 {
    line-height: 1;
    padding: 2px 4px;
}
			}


			@media (max-width: 768px) {
				#fromwhere11 {
        height: 41px !important;
        width: 155px;
		border: 1px solid #ff7d01;
		border-radius : 0;
    }
        #wherewhere11 {
        height: 41px !important;
        width: 144px;
        margin-left: -23px;
		border: 1px solid #ff7d01;
		border-radius : 0;
    }
    #selectedCountry2 {
    padding-left: 6px;  
    width: 84px !important;
    font-size: 13px;
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-left: 1px solid #ff7d01;
    border-redius: none;
    border-right: none;
    height: 43px;
    padding-top: 10px;
} #selectedCountry3 {
    padding-left: 6px;  
    width: 84px !important;
    font-size: 13px;
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-left: 1px solid #ff7d01;
    border-redius: none;
    border-right: none;
    height: 43px;
    padding-top: 10px;
}
	#phoneplace{
	border-top: 1px solid #ff7d01;
	border-bottom: 1px solid #ff7d01;
	border-right: 1px solid #ff7d01;
	border-left: none;
	height:43px;
	width: 59px;
}
#phoneplace2 {
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-right: 1px solid #ff7d01;
    border-left: none;
    height: 43px;
    padding-left: 4px;
    width: 77.5%;
}
				#c768{
padding-top: 50px;
				}
				#font{
					font-size: 11px;
				}
			#vj {
				width:356px ; 
					/* margin: 10px 0px !important; */
			
				}
				#btn-primary{
				margin-left: 285px;
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
			height: 35px;
			left: 0 !important;
			padding: 10 !important;
			position: relative;
			width: 109%;
			}
			#wherewhere1 {
			background: transparent;
			border: 1px solid #ff7d01;
			box-shadow: none;
			color: black;
			font-size: 16px;
			height: 41px !important;
			left: 0 !important;
			width: 151px;
			padding: 0px -9px;
			margin-left: -10px;
			}
			#nosmallreq2{
				display: none;
			}
			/* #table-heading{
		padding-top: 75px;
	    } */
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
.deals-grid {
		grid-template-columns: repeat(2, 1fr) !important;
    }
		}
		#vj_425 {
    display: none; /* Default hidden */
  }

  @media (max-width: 425px) {
  	#selectedCountry2 {
    padding-left: 6px;
    width: 84px !important;
    font-size: 13px;
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-left: 1px solid #ff7d01;
    border-redius: none;
    border-right: none;
    height: 43px;
    padding-top: 10px;
}#selectedCountry3 {
    padding-left: 6px;
    width: 84px !important;
    font-size: 13px;
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-left: 1px solid #ff7d01;
    border-redius: none;
    border-right: none;
    height: 43px;
    padding-top: 10px;
}
  	  #phoneplace {
        border-top: 1px solid #ff7d01;
        border-bottom: 1px solid #ff7d01;
        border-right: 1px solid #ff7d01;
        border-left: none;
        height: 43px;
        width: 231px;
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
			padding: 10 !important;
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
.wrap-10-0 {
    padding: 10px 15px !important;
}
#nosmallreq{
	display: none;
	width:88px;
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
  }
  @media (max-width: 375px) {
	#c768{
padding-top: 52px;
				}
				#vj_price2 {
    font-size: 23px !important;
    font-weight: 600;
    padding: 10px 0px;
}
	#fromwhere11 {
			background: transparent;
			border: 1px solid #ff7d01;
			box-shadow: none;
			color: black;
			font-size: 16px;
			height: 41px;
			left: 0 !important;
			padding: 10 !important;
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
			width: 144px;
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
.wrap-10-0 {
    padding: 40px 20px !important;
}
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
}	 */
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
  #selectedCountry2 {
    padding-left: 6px;
    width: 84px !important;
    font-size: 13px;
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-left: 1px solid #ff7d01;
    border-redius: none;
    border-right: none;
    height: 43px;
    padding-top: 10px;
}
#selectedCountry3 {
    padding-left: 6px;
    width: 84px !important;
    font-size: 13px;
    border-top: 1px solid #ff7d01;
    border-bottom: 1px solid #ff7d01;
    border-left: 1px solid #ff7d01;
    border-redius: none;
    border-right: none;
    height: 43px;
    padding-top: 10px;
}
</style>
				
<script defer="" src="public/dist/frontend/trip_js/9133.34704a93524610f7.js"></script>
<script defer="" src="public/dist/frontend/trip_js/3970.f0faae89f50c757c.js"></script>
<script defer="" src="public/dist/frontend/trip_js/4830.853c25bdc88ac79c.js"></script>
<script defer="" src="public/dist/frontend/trip_js/2178.dc331125f4224798.js"></script>
<script src="public/dist/frontend/trip_js/webpack-431fe920f5891177.js" defer=""></script>
<script src="public/dist/frontend/trip_js/framework-d666bfb82396c10d.js" defer=""></script>
<script src="public/dist/frontend/trip_js/_app-30003914a6a157e2.js" defer=""></script>
<script src="public/dist/frontend/trip_js/fec483df-9848bbcb08fec39e.js" defer=""></script>
<script src="public/dist/frontend/trip_js/6959-f4239c96fbb4826b.js" defer=""></script>
<script src="public/dist/frontend/trip_js/5675-367ff5900a5d1947.js" defer=""></script>
<script src="public/dist/frontend/trip_js/4484-a8415e0f973fbb19.js" defer=""></script>
<script src="public/dist/frontend/trip_js/9521-6fc9e287118f5194.js" defer=""></script>
<script src="public/dist/frontend/trip_js/7779-49fd39efd8e4632d.js" defer=""></script>
<script src="public/dist/frontend/trip_js/7536-3c5f5da4f0e3a34f.js" defer=""></script>
<script src="public/dist/frontend/trip_js/5764-229239efd5336269.js" defer=""></script>
<script src="public/dist/frontend/trip_js/4617-11b3f41de18deecb.js" defer=""></script>
<script src="public/dist/frontend/trip_js/4598-7e289686036d8667.js" defer=""></script>
<script src="public/dist/frontend/trip_js/543-e304c31e3054cf42.js" defer=""></script>
<script src="public/dist/frontend/trip_js/1050-c58213cadef1a841.js" defer=""></script>
<script src="public/dist/frontend/trip_js/5226-abde2366afc3a4be.js" defer=""></script>
<script src="public/dist/frontend/trip_js/8946-e82717a3e03f11d8.js" defer=""></script>
<script src="public/dist/frontend/trip_js/4305-19590abfc3c27204.js" defer=""></script>
<script src="public/dist/frontend/trip_js/9706-10acf23129ca8f77.js" defer=""></script>
<script src="public/dist/frontend/trip_js/4789-aaed7a733ea1a12e.js" defer=""></script>
<script src="public/dist/frontend/trip_js/7895-e77b1545418dbf61.js" defer=""></script>
<script src="public/dist/frontend/trip_js/8548-bf1f000645e9e762.js" defer=""></script>
<script src="public/dist/frontend/trip_js/2107-44c8469ff5df1005.js" defer=""></script>
<script src="public/dist/frontend/trip_js/7018-c62745af93b7e239.js" defer=""></script>
<script src="public/dist/frontend/trip_js/6997-db66c6b70b66ff80.js" defer=""></script>
<script src="public/dist/frontend/trip_js/1259-fdbd859091792bf4.js" defer=""></script>
<script src="public/dist/frontend/trip_js/8359-ab9ae95d632d1430.js" defer=""></script>
<script src="public/dist/frontend/trip_js/6553-ac13d7d2fc01bfd6.js" defer=""></script>
<script src="public/dist/frontend/trip_js/toCity-cabec13942026e54.js" defer=""></script>
<script src="public/dist/frontend/trip_js/_buildManifest.js" defer=""></script>
<script src="public/dist/frontend/trip_js/_ssgManifest.js" defer=""></script>
		<style id="jss-server-side">html {
			box-sizing: border-box;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			}
			*, *::before, *::after {
			box-sizing: inherit;
			}
            .checked{
                color:gold;
            }
			strong, b {
			font-weight: 700;
			}
            .offer-item p {
        font-size: 14px;
        color: #555;
    }
			body {
			color: #3b3536;
			margin: 0;
			font-size: 14px;
			font-family: Open Sans,-apple-system,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
			font-weight: 400;
			line-height: 1.5;
			background-color: #fff;
			}
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
			padding: 18.5px 7px;
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
			 .cta-heading {
            text-align: center;
           
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
			 .carousel-inner {
				display: flex;
				flex-wrap: nowrap;
			}


			.carousel-item .row {
				display: flex;
				flex-wrap: nowrap;
				width: 100%;
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
			@media (min-width:1025px){.fvTlzg{max-width:435px;}}/*!sc*/
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
			.cPjMDN{/*margin:12px 0;*/font-size:14px;padding:10px 0;}/*!sc*/
			.cPjMDN::after{content:'';position:absolute;top:50%;left:0;width:100%;height:1px;background:#e5e5e5;}/*!sc*/
			data-styled.g68[id="sc-7dd87981-0"]{content:"cPjMDN,"}/*!sc*/
			.blkuwI{inline-size:max-content;}/*!sc*/
			data-styled.g69[id="sc-7dd87981-1"]{content:"blkuwI,"}/*!sc*/
			.bRnzcj br{display:none;}/*!sc*/
			@media (min-width:1025px){.bRnzcj br{display:block;}}/*!sc*/
			data-styled.g70[id="sc-60606cb-0"]{content:"bRnzcj,"}/*!sc*/
			.kEJRcn .divider-wrapper{margin-bottom:5px !important;}/*!sc*/
			data-styled.g71[id="sc-60606cb-1"]{content:"kEJRcn,"}/*!sc*/
			.hvPFkN{border:1px dashed #24844d;border-left:0;border: 1px dashed #ff7d01;border-left: 0;}/*!sc*/
			@media (min-width:1025px){.hvPFkN{padding:5px 5px 5px 5px !important;border-left: 0px !important;
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
			@media (min-width:768px){.czRoLU .asap-input-wrapper,.czRoLU .MuiTextField-root{margin:8px 0 0;}}/*!sc*/
			.czRoLU .MuiInputBase-root,.czRoLU .MuiFormLabel-root{font-size:14px;font-family:'Open sans',sans-serif;}/*!sc*/
			.czRoLU .MuiInputBase-root > fieldset,.czRoLU .MuiFormLabel-root > fieldset{border-color:#ff7d01;}/*!sc*/
			.czRoLU .MuiInputBase-root:hover > fieldset,.czRoLU .MuiFormLabel-root:hover > fieldset{border-color:#2472bb;}/*!sc*/
			.czRoLU .MuiOutlinedInput-root{border-radius:0;}/*!sc*/
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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
		<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
		
	</head>
	<body>
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBXRHTX"
				height="0" width="0" style="display:none;visibility:hidden"/>
		</noscript>

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
	    border: 1px solid #ff7d01;
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
		/*	.bravo-autocomplete.show {
    display: block;
    overflow-y: scroll;
    height: 150px;
}*/
/* .item {
    
    border: 1px solid #ddd;
  
} */
		</style>

<style>
	.modal {
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

	/* Modal Content */
	.modal-content {
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
    top: 10px; /* Distance from the top */
    right: 15px; /* Distance from the right */
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    color: #333;
    z-index: 10; /* Ensure it's above other content */
}

.close-btn:hover {
    color: red;
}
.review-item{
	height:200px;
}
.review-item p {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Adjust based on required number of lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 4.5em; /* Adjust height to fit approximately 50 words */
    line-height: 1.5em; /* Adjust for better readability */
    position: relative;
}

.review-item p::after {
  
    position: absolute;
    bottom: 0;
    right: 0;
    background: white;
    padding-left: 5px;
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
@section('content')
<div id="__next">
	<div class="tw-fixed tw-bottom-[35px] tw-left-[20px] tw-z-2000"></div>
	<div class="tw-flex tw-min-h-[100vh] tw-flex-col">
		<div class="tw-shrink-0 tw-grow tw-basis-auto">
			<section>
			<div class="tw-relative tw-min-h-[460px]">
				<div class="sc-9aebc19c-0 klckwT hid-sm hid-md tw-absolute tw-left-0 tw-top-0 tw-w-full">
					<div class="sc-dce924a1-0 hMQlEw"></div>
				</div>
				<div class="block-wrapper tw-relative !tw-mt-0 tw-flex tw-flex-col tw-justify-between !tw-pt-0 klckwT">
					<div class="tw-mt-[10px]">
						{{-- <div class="hide-scrollbar tw-relative tw-z-100 tw-flex tw-h-20 tw-overflow-x-auto">
							<div class="tw-flex tw-items-center">
								<a href="/" class="tw-no-underline hover:tw-text-text-link-focus focus:tw-outline-none focus-visible:tw-text-text-link-focus active:tw-text-text-link-action tw-text-text-layout-strong "><label class="tw-text-label-s tw-h-20 tw-cursor-pointer tw-whitespace-nowrap tw-px-0 tw-text-inherit">Home</label></a>
								<svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" class="tw-fill-text-layout-strong" xmlns="http://www.w3.org/2000/svg">
									<path d="M7.43099 4.24349C7.10698 4.56751 7.10624 5.09261 7.42935 5.41754L12.0524 10.0657L7.46241 14.6511C7.13755 14.9757 7.1374 15.5021 7.46209 15.8268C7.7864 16.1511 8.3121 16.1514 8.63677 15.8275L13.7032 10.7717C14.094 10.3817 14.0949 9.74883 13.7051 9.3578L8.60764 4.24445C8.28314 3.91889 7.75603 3.91846 7.43099 4.24349Z"></path>
								</svg>
							</div>
							<div class="tw-flex tw-items-center">
								<a href="/cheap-flights" class="tw-no-underline hover:tw-text-text-link-focus focus:tw-outline-none focus-visible:tw-text-text-link-focus active:tw-text-text-link-action tw-text-text-layout-strong "><label class="tw-text-label-s tw-h-20 tw-cursor-pointer tw-whitespace-nowrap tw-px-0 tw-text-inherit">Cheap Flights</label></a>
								<svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" class="tw-fill-text-layout-strong" xmlns="http://www.w3.org/2000/svg">
									<path d="M7.43099 4.24349C7.10698 4.56751 7.10624 5.09261 7.42935 5.41754L12.0524 10.0657L7.46241 14.6511C7.13755 14.9757 7.1374 15.5021 7.46209 15.8268C7.7864 16.1511 8.3121 16.1514 8.63677 15.8275L13.7032 10.7717C14.094 10.3817 14.0949 9.74883 13.7051 9.3578L8.60764 4.24445C8.28314 3.91889 7.75603 3.91846 7.43099 4.24349Z"></path>
								</svg>
							</div>
							<div class="tw-flex tw-items-center">
								<a href="/cheap-flights-to-africa" class="tw-no-underline hover:tw-text-text-link-focus focus:tw-outline-none focus-visible:tw-text-text-link-focus active:tw-text-text-link-action tw-text-text-layout-strong "><label class="tw-text-label-s tw-h-20 tw-cursor-pointer tw-whitespace-nowrap tw-px-0 tw-text-inherit">Flights to Africa</label></a>
								<svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" class="tw-fill-text-layout-strong" xmlns="http://www.w3.org/2000/svg">
									<path d="M7.43099 4.24349C7.10698 4.56751 7.10624 5.09261 7.42935 5.41754L12.0524 10.0657L7.46241 14.6511C7.13755 14.9757 7.1374 15.5021 7.46209 15.8268C7.7864 16.1511 8.3121 16.1514 8.63677 15.8275L13.7032 10.7717C14.094 10.3817 14.0949 9.74883 13.7051 9.3578L8.60764 4.24445C8.28314 3.91889 7.75603 3.91846 7.43099 4.24349Z"></path>
								</svg>
							</div>
							<div class="tw-flex tw-items-center">
								<a href="/flights/nigeria" class="tw-no-underline hover:tw-text-text-link-focus focus:tw-outline-none focus-visible:tw-text-text-link-focus active:tw-text-text-link-action tw-text-text-layout-strong "><label class="tw-text-label-s tw-h-20 tw-cursor-pointer tw-whitespace-nowrap tw-px-0 tw-text-inherit">Flights Nigeria</label></a>
								<svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" class="tw-fill-text-layout-strong" xmlns="http://www.w3.org/2000/svg">
									<path d="M7.43099 4.24349C7.10698 4.56751 7.10624 5.09261 7.42935 5.41754L12.0524 10.0657L7.46241 14.6511C7.13755 14.9757 7.1374 15.5021 7.46209 15.8268C7.7864 16.1511 8.3121 16.1514 8.63677 15.8275L13.7032 10.7717C14.094 10.3817 14.0949 9.74883 13.7051 9.3578L8.60764 4.24445C8.28314 3.91889 7.75603 3.91846 7.43099 4.24349Z"></path>
								</svg>
							</div>
							<div class="tw-flex tw-items-center"><a href="/cheap-flights-to-lagos" class="tw-no-underline hover:tw-text-text-link-focus focus:tw-outline-none focus-visible:tw-text-text-link-focus active:tw-text-text-link-action tw-text-text-layout-powerful tw-pointer-events-none"><label class="tw-text-label-s tw-h-20 tw-cursor-pointer tw-whitespace-nowrap tw-px-0 tw-text-inherit tw-underline">Lagos Flights</label></a></div>
						</div> --}}
					</div>
					<div class="tw-flex">
						<div class="tw-w-full">
							<h1 class="sc-156dc327-0 jDJjAw bold tw-text-center">Cheap Flights to {{ $country_detail->country_name }}</h1>
							<div class="sc-3467c668-0 gcANnz">
								<div class="flights-landing-desktop">
									<div class="tw-relative tw-mr-[50px] ">
										<article class="m-t-xs tw-relative tw-my-0 ">
											<div class="">
												<div class="pos-rltg">
													<div class="sc-8dbeeb99-1 OnGsy dashed tw-relative tw-bg-background">
														<article class="tw-mx-auto tw-my-0">
															<div style="padding:15px 20px 12px">
																<div class="tw-whitespace-nowrap tw-rounded tw-text-center ">
																	<h3 class="f-size-1 bold  up-case tw-m-0  tw-whitespace-pre-wrap" style="font-size: 17px;color:#ff7d01;">Tripgare SPECIAL FARE</h3>
																</div>
																<div class="offer-ends text-sm tw-text-center
																	tw-justify-center m-t-xs tw-flex">
																	<div class="m-r-xs"><strong>Limited-time Offer!</strong></div>
																	<div>
																		ENDS<!-- --> <!-- Nov 18  --> {{ \Carbon\Carbon::now()->addDays(2)->format('d M') }}<!-- --> 
																	</div>
																</div>
															</div>
														</article>
													</div>
													<div class="sc-8dbeeb99-2 cddXbx tw-bg-background tw-text-center">
														<div class="dashed">
															<div class="tw-pt-[60px]"><strong>Save up to 30% OFF!</strong><br/>Lowest fares from the travel experts</div>
															<div class="tw-flex tw-justify-center">
																<div class="sc-8dbeeb99-0 cRBmzu">
																	<div class="tw-mx-auto tw-my-0">
																		<div class="tw-relative tw-flex">
																			<div>
																				<div class="sc-7db9dc4a-1 sc-4a157c09-1 cFxbBP emGeLi tw-flex price-label ">
																					<div class="l-h-1 tw-flex" onclick="document.getElementById('id01').style.display='block'">
																				{{-- <span class="price-label-currency ">c$</span> --}}
																				<span class="currencyvalue" id="vj_price" data-qa-quote-form="special-fare">
																					@if (isset($country_detail))
																					{{ str_replace(' ', '', $country_detail->from_price) }}
																				@else
																					0
																				@endif
																				</span>
																				<span class="price-label-asterisk tw-cursor-pointer ">*</span></div>
																				</div>
																			</div>
																			<div class="semibold tw-text-left" style="margin-left:10px">
																				<div class="" style="    color: #ff7d01;font-size:18px">
																					{{-- <s>
																						@if (isset($convertedPrice))
																						{{ str_replace(' ', '', $convertedPrice) }}
																						@else
																							0
																						@endif
																					</s> --}}
																				</div>
																				<div style="font-size:12px; padding-top:20px;">
																					<b>All In</b> |<!-- -->Round Trip
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sc-bb40cbc0-0 dqNszg tw-justify-center">
																<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5deaa92a03ae1b0001a87252" data-style-height="24px" data-style-width="100%" data-min-review-count="0" data-style-alignment="center">
  <a href="https://www.trustpilot.com/review/tripgare.com" target="_blank" rel="noopener">Trustpilot</a>
</div>
															</div>
															<div class="sc-bb40cbc0-2 bHqbKo text-sm">
<strong>Call Toll-Free for Best Fare!</strong></div>
														</div>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>
								<div class="flights-landing-mob">
									<article class="m-t-xs tw-relative tw-my-0 wrap-15 tw-bg-background" style="text-align:center">
										<div class="dashed tw-bg-background" style="padding-top:10px">
											<div class="shadow tw-w-full tw-max-w-[270px] tw-rounded tw-bg-background dashed wrap-15-20 abt-center-landing tw-w-[240px]">
												<h3 class="f-size-18
													bold  up-case wrap-0-0 l-h-1 tw-m-0" style="color:#ff7d01;">Tripgare SPECIAL FARE</h3>
												<div class="offer-ends text-sm tw-text-center
													tw-justify-center m-t-xs tw-flex tw-justify-center">
													<div class="m-r-xs"><strong>Limited-time Offer!</strong></div>
													<div>
														ENDS<!-- --> <!-- --> {{ \Carbon\Carbon::now()->addDays(2)->format('d M') }}<!-- --> 
													</div>
												</div>
											</div>
											<div class="pos-rltg">
												<div class="m-t-xl"></div>
												<div class="tw-relative tw-mb-8 tw-mt-48">
													<div class="tw-px-20">
														<strong>Save up to 30% OFF!</strong><br/>Lowest fares from the travel experts
														<div class="tw-mt-20 tw-flex tw-justify-center">
															<div class="sc-7db9dc4a-1 sc-4a157c09-1 cFxbBP emGeLi tw-flex price-label ">
																<div class="l-h-1 tw-flex" onclick="document.getElementById('id01').style.display='block'">
																	
														<span class="currencyvalue" id="vj_price2" data-qa-quote-form="special-fare"> @if (isset($country_detail))
																	{{ str_replace(' ', '', $country_detail->from_price) }}
																@else
																	0
																@endif</span><span class="price-label-asterisk  ">*</span></div>
															</div>
															<div class="tw-ml-8 tw-text-left">
																<div class="" style="font-size:27px;color:#ff7d01;;font-weight:600">
																	{{-- <s>
																		C$<!-- -->1175
																	</s> --}}
																</div>
																<div class="text-sm" style="padding-top: 14px">
																	<b>All-In</b> |<!-- -->Round-trip<!-- -->.
																</div>
															</div>
														</div>
														<div class="sc-bb40cbc0-0 dqNszg tw-justify-center">
															<div class="trustpilot-widget mobile:tw-px-20 desktop:tw-px-0" data-locale="en-CA" data-template-id="5419b637fa0340045cd0c936" data-businessunit-id="48fbe895000064000503d2ca" data-style-height="24px" data-style-width="100%" data-theme="light" data-stars="4,5" data-review-languages="en"><a href="https://www.trustpilot.com/review/tripgare.com" target="_blank" rel="noopener noreferrer">Trustpilot</a></div>
														</div>
														<div class="sc-bb40cbc0-2 bHqbKo text-sm"><strong>Call Toll-Free for Best Fare!</strong></div>
													</div>
												</div>
												<div class="laptop:tw-text-left tw-text-center">
													<div class="quote-button tw-mx-auto" style="width:227px;margin-top:25px;margin-bottom:25px"><button class="sc-423e4b6d-0 dNpNeP bold wrap-10 tw-cursor-pointer tw-rounded tw-text-text-layout-fixed-light  tw-w-full f-size-16" style="padding:13px;background:#ff7d01;" data-qa-quote-form="request-bottom-first-screen" onclick="document.getElementById('id01').style.display='block'">GET A FREE QUOTE</button></div>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						<div class="sc-eab16c56-0 fvTlzg hid-sm tw-float-right tw-mt-5 tw-shrink-0 " id="vj">
							<div class="sc-eab16c56-0 fvTlzg panel tw-relative 2">
								<div class="sc-df89a08f-0 bbYFkS">
									<div class="spinner tw-relative ">
										<form data-qa-tel-placement="quote-form" class="sc-3b6e3d2a-0 czRoLU tw-relative" action="{{ route('freequote') }}" method="post"
										id="departureform" onsubmit="return searchwhich_form('departureform')" autocomplete="off">
										@csrf
											<input type="hidden" name="page_url" value="{{ url()->current() }}"/>
											<div>
												<div class="m-b-sm">
													{{-- <div class="tw-flex tw-justify-between">
                                                                <div class="tw-flex tw-items-center">
                                                                    <div class="sc-60606cb-0 bRnzcj tw-text-footnote-regular tw-mb-8 tw-font-bold tablet:tw-mb-0">SAVE C$30 extra: Call <br/> Toll-FREE</div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="tw-flex">
                                                                        <div class="">
                                                                            <a data-qa-phonenumber="" class="no-decoration  tw-text-label-m tw-flex tw-h-full tw-items-center tw-justify-center tw-rounded tw-p-[10px] bg-green tw-w-full tw-text-center" id="tw-rounded" href="tel:+1 855 522 3344">
                                                                                <i class="fa fa-phone" style=""></i>
                                                                                <span id="nosmallreq2">+1 855 522 3344  </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="">
                                                                            <div class="sc-60606cb-2 hvPFkN tw-w-full">
                                                                                <div class="text-xs l-h-1">Voucher Code:</div>
                                                                                <div class="tw-text-label-m text-green" style=" color: #ff7d01 !important;">TRIPGARE30</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
														</div> --}}
														<div class="container cta-container">
															<div class="cta-heading">
																<h2><a  href="tel:+1 855 522 3344" class="no-decoration"><span class="call-text">CALL US Toll-FREE</span></a> <span class="save-text">to Save More</span></h2>
															</div>
															{{--	<div class="divider"></div> --}}
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
												{{-- <fieldset class="sc-b292eaf3-0 wpbiR destinations-ac" > --}}
													{{-- <div class="tw-w-full">
														<div class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon  {{ $oneway }}"  id="bravo_hotel" role="combobox" aria-expanded="false" style="width:100%" data-qa-sf-input-type="departureCity">
															<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth"> --}}
																{{-- <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false" id="undefined-label">From*</label> --}}
																{{-- <div placeholder="from**" class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense"> --}}
																	{{-- <input aria-invalid="false" autoComplete="off" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" aria-autocomplete="both" autoCapitalize="none" spellcheck="false" value=""/> --}}
																	{{-- <input type="text"
																	class="smart-search-location parent_text form-control font-size-14"
																	placeholder="From*" value="{{ $fromwhere }}"
																	data-onload="" data-default="" id="fromwhere1" required>
																<input type="hidden" id="from1" class="child_id" name="from"
																	value="{{ $fromwhere }}" autocomplete="off" required>
																	<div class="sc-16fbf88b-0 fDvdbE"></div> --}}
																	{{-- <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
																		<legend class="jss3"><span>From*</span></legend>
																	</fieldset> --}}
																{{-- </div>
															</div>
														</div>
													</div> --}}
													{{-- <div class="routing-spacing tw-shrink-0"></div>
													<div class="tw-w-full">
														<div class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" style="width:100%" data-qa-sf-input-type="destinationCity">
															<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth"> --}}
																{{-- //<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false" id="undefined-label">To*</label> --}}
																{{-- <div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
																	<input aria-invalid="false" autoComplete="off" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" aria-autocomplete="both" autoCapitalize="none" spellcheck="false" value=""/>
																	<div class="sc-16fbf88b-1 hASXcI"></div>
																	<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
																		<legend class="jss3"><span>To*</span></legend>
																	</fieldset>
																</div>
															</div>
														</div>
													</div> --}}
												{{-- </fieldset> --}}
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
															placeholder="From*" value="{{ $fromwhere }}"
															data-onload="" data-default="" id="fromwhere1" required>
															<div class="input-loader" style="width: 19px;height: 20px;border-width: 4px;border-style: solid;border-color: #ff7d01 rgb(243, 243, 243) rgb(243, 243, 243);border-image: initial;border-radius: 50%;animation: 1s linear 0s infinite normal none running spin;position: absolute;right: 21px;top: 30%;transform: translateY(-50%); display: none;"></div>
														<input type="hidden" id="from1" class="child_id" name="from"
															value="{{ $fromwhere }}" autocomplete="off" required>
													</div>
													<div class="col smart-search">
														<input type="text"
															class="smart-search-location parent_text form-control font-size-14"
															placeholder="To*" value="{{ $to_where }}"
															data-onload="" data-default="" id="wherewhere1" required>
															<div class="input-loader" style="width: 19px;height: 20px;border-width: 4px;border-style: solid;border-color: #ff7d01 rgb(243, 243, 243) rgb(243, 243, 243);border-image: initial;border-radius: 50%;animation: 1s linear 0s infinite normal none running spin;position: absolute;right: 21px;top: 30%;transform: translateY(-50%); display: none;"></div>
														<input type="hidden" id="where1" class="child_id" name="to"
															value="{{ $to_where }}" autocomplete="off" required>
													</div>
												   
												</div>
												<fieldset class="sc-b292eaf3-0 wpbiR dates-ac tw-flex" style="border: none;    
margin: 0px;
padding: 0px;">
													<div class="date-picker-wrapper">
														<div>
															<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth" style="">
																<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false"></label>
																<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense" id="departed" 
">
																	<input class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense departureDate "  name="start_date"  id="returnd" type="date" style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;"onclick="this.showPicker()"
																	value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
																	min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
																	{{-- <span class="text-muted f-size-18 date-prefix tw-block tw-h-[20px] tw-cursor-pointer">
																		<svg width="1.15em" height="1em" viewBox="0 0 23 20" fill="currentColor">
																			<path d="M21.162 18.05a.573.573 0 0 1-.573.573H2.37a.573.573 0 0 1-.572-.572V7.585 h19.365zM1.797 4.084c0-.315.256-.572.572-.572h2.368v.379c0 1 .814 1.814 1.814 1.814 1.001 0 1.815-.813 1.815-1.814v-.38h5.977v.38c0 1 .814 1.814 1.814 1.814s1.815-.813 1.815-1.814v-.38h2.617c.316 0 .573.258.573.573v2.184H1.797zM6.55 1.317c.275 0 .498.223.498.497V3.89a.498.498 0 0 1-.995 0V1.815c0-.275.223-.498.497-.498 zm9.606 0c.274 0 .497.223.497.497V3.89a.498.498 0 0 1-.994 0V1.815c0-.275.223-.498.497-.498 zm1.815.877v-.38c0-1-.814-1.814-1.815-1.814-1 0-1.814.814-1.814 1.815v.379H8.366v-.38 C8.366.815 7.552 0 6.55 0c-1 0-1.814.814-1.814 1.815v.379H2.369c-1.042 0-1.89.847-1.89 1.89V18.05c0 1.042.848 1.89 1.89 1.89h18.22c1.042 0 1.89-.848 1.89-1.89 V4.083c0-1.042-.848-1.89-1.89-1.89z"></path>
																			<path d="M4.586 10.982h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.307z"></path>
																			<path d="M10.191 10.982h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																			<path d="M15.797 10.982h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																			<path d="M4.586 13.76h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.306z"></path>
																			<path d="M10.191 13.76h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																			<path d="M15.797 13.76h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																			<path d="M4.586 16.536h2.53a.653.653 0 1 0 0-1.306h-2.53a.653.653 0 1 0 0 1.306z"></path>
																			<path d="M10.191 16.536h2.531a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																			<path d="M15.797 16.536h2.53a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																		</svg>
																	</span> --}}
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
																{{-- <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false"></label> --}}
																<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
																	<input  class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense returnDate" name="enddate" id="returnDate" type="date" style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;"onclick="this.showPicker()"
																	value="" required
																	min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
																	{{-- <span class="text-muted f-size-18 date-prefix tw-block tw-h-[20px] tw-cursor-pointer">
																		<svg width="1.15em" height="1em" viewBox="0 0 23 20" fill="currentColor">
																			<path d="M21.162 18.05a.573.573 0 0 1-.573.573H2.37a.573.573 0 0 1-.572-.572V7.585 h19.365zM1.797 4.084c0-.315.256-.572.572-.572h2.368v.379c0 1 .814 1.814 1.814 1.814 1.001 0 1.815-.813 1.815-1.814v-.38h5.977v.38c0 1 .814 1.814 1.814 1.814s1.815-.813 1.815-1.814v-.38h2.617c.316 0 .573.258.573.573v2.184H1.797zM6.55 1.317c.275 0 .498.223.498.497V3.89a.498.498 0 0 1-.995 0V1.815c0-.275.223-.498.497-.498 zm9.606 0c.274 0 .497.223.497.497V3.89a.498.498 0 0 1-.994 0V1.815c0-.275.223-.498.497-.498 zm1.815.877v-.38c0-1-.814-1.814-1.815-1.814-1 0-1.814.814-1.814 1.815v.379H8.366v-.38 C8.366.815 7.552 0 6.55 0c-1 0-1.814.814-1.814 1.815v.379H2.369c-1.042 0-1.89.847-1.89 1.89V18.05c0 1.042.848 1.89 1.89 1.89h18.22c1.042 0 1.89-.848 1.89-1.89 V4.083c0-1.042-.848-1.89-1.89-1.89z"></path>
																			<path d="M4.586 10.982h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.307z"></path>
																			<path d="M10.191 10.982h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																			<path d="M15.797 10.982h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																			<path d="M4.586 13.76h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.306z"></path>
																			<path d="M10.191 13.76h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																			<path d="M15.797 13.76h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																			<path d="M4.586 16.536h2.53a.653.653 0 1 0 0-1.306h-2.53a.653.653 0 1 0 0 1.306z"></path>
																			<path d="M10.191 16.536h2.531a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																			<path d="M15.797 16.536h2.53a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																		</svg>
																	</span> --}}
																	<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
																		<legend class="jss3"><span>Return Date3</span></legend>
																	</fieldset>
																</div>
															</div>
														</div>
													</div>
												</fieldset>
												<div class="row mt-1"><div class="col-md-12"><input name="email" aria-invalid="false" id="emailremo" autocomplete="off" type="email" class="smart-search-location parent_text form-control font-size-14" placeholder="Email*" style="padding-left: 4px;width: 100%;border-radius : 0;border: 1px solid #ff7d01;" value="" required=""></div></div>
												<div>
												<!--<div class="sc-a323ead3-1 izYqwl row-input">
                                                                <div class="sc-a323ead3-0 grcZqr !tw-w-full tw-text-body-regular">
                                                                    <div class="mui-email-ac">
                                                                        <div class="MuiAutocomplete-root email-ac MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" style="width:100%">
                                                                            <div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth" data-qa-email-input="true">
                                                                            
                                                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
                                                                                    <input name="email" aria-invalid="false"  id="emailremo" autoComplete="off" type="email" class="smart-search-location  font-size-14"
                                                                    placeholder="Email*" style="padding-left: 4px;width: 100%;"  value="" required />
                                                                                    {{-- <div class="MuiAutocomplete-endAdornment">
                                                                                        <button class="MuiButtonBase-root MuiIconButton-root MuiAutocomplete-clearIndicator MuiAutocomplete-clearIndicatorDirty" tabindex="-1" type="button" aria-label="Clear" title="Clear" onclick="$('#emailremo').val('')">
                                                                                            <span class="MuiIconButton-label">
                                                                                            <i class="fa fa-times"></i>

                                                                                            </span>
                                                                                        </button>
                                                                                    </div> --}}
                                                                                    <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
                                                                                        <legend class="jss3"><span>E-mail*</span></legend>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>-->


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
																	<input aria-invalid="false" name="name" type="text"  placeholder="Your Name (Optional)" class="smart-search-location  font-size-14" placeholder="Your Name (Optional)" style="padding-left:8px;padding-bottom: 6px;" value=""/>
																	<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
																		<legend class="jss3"><span>Your Name (Optional)</span></legend>
																	</fieldset>
																</div>
															</div>
														</div>
													</div>
												</div>
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
                                                                  <li><a class="dropdown-item custom-passenger-item"data-value="1">1 Passenger</a></li>
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
													<div class="tw-w-[49%]"><button class="sc-423e4b6d-0 dNpNeP bold wrap-10 tw-cursor-pointer tw-rounded tw-text-text-layout-fixed-light  tw-w-full" style="background:#ff7d01;">GET A FREE QUOTE</button></div>
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
			</div>
			{{-- 425 --}}

			<div class="sc-eab16c56-0 fvTlzg hid-sm tw-float-right tw-mt-5 tw-shrink-0 " id="vj_425" style="    padding-bottom: 25px;
padding-left: 38px;
padding-right: 36px;
">
				<div class="sc-eab16c56-0 fvTlzg panel tw-relative ">
					<div class="sc-df89a08f-0 bbYFkS">
						<div class="spinner tw-relative ">
							<form data-qa-tel-placement="quote-form" class="sc-3b6e3d2a-0 czRoLU tw-relative" action="{{ route('freequote') }}" method="post"
							id="departureform" onsubmit="return searchwhich_form('departureform')" autocomplete="off">
							@csrf
								<input type="hidden" name="page_url" value="{{ url()->current() }}"/>
								<div>
									<div class="m-b-sm">
										<div class="tw-flex tw-justify-between">
											<div class="tw-flex tw-items-center">
												<div class="sc-60606cb-0 bRnzcj tw-text-footnote-regular tw-mb-8 tw-font-bold tablet:tw-mb-0">SAVE C$30 extra: Call <br/> Toll-FREE</div>
											</div>
											<div class="">
												<div class="tw-flex">
													<div class="">
														<a data-qa-phonenumber="" class="no-decoration  tw-text-label-m tw-flex tw-h-full tw-items-center tw-justify-center tw-rounded tw-p-[10px] bg-green tw-w-full tw-text-center" id="tw-rounded" href="tel:+1  855 522 3344">
															<span class="l-h-1 m-r-xs">
																<svg class="icon-phone" viewBox="0 0 21 21" width="1em" height="1em" fill="currentColor">
																	<path d="M20.4,16.5c0-0.2-0.4-0.4-1.1-0.8 c-0.5-0.3-1.1-0.6-1.7-0.9l-0.8-0.4l-0.4-0.2     c-0.2-0.1-0.4-0.2-0.5-0.3c-0.1-0.1-0.3-0.1-0.4-0.1c-0.2,0-0.4,0.1-0.7,0.4     c-0.3,0.3-0.5,0.6-0.8,0.9s-0.5,0.6-0.8,0.9     c-0.3,0.3-0.5,0.4-0.6,0.4c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.6-0.3-0.9-0.5     c-1.2-0.7-2.3-1.5-3.3-2.5c-1.1-1.1-1.9-2.3-2.6-3.6     c-0.1-0.2-0.2-0.4-0.3-0.6c0-0.1-0.1-0.2-0.1-0.3c0-0.2,0.1-0.4,0.4-0.7     c0.3-0.3,0.6-0.5,0.9-0.8c0.3-0.2,0.6-0.5,0.9-0.8     c0.3-0.3,0.4-0.5,0.4-0.7c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.3-0.3-0.5     l-0.2-0.4c-0.3-0.5-0.6-1.1-0.9-1.7l-0.4-0.8     c-0.3-0.7-0.6-1-0.8-1.1c-0.1,0-0.2,0-0.3,0c-0.7,0-1.3,0.2-2,0.4     c-0.5,0.2-1,0.8-1.5,1.7c-0.6,1-0.8,2.2-0.7,3.4     c0,0.2,0.1,0.5,0.2,0.8c0.1,0.5,0.3,1,0.5,1.5l0.2,0.7     c0.3,0.9,0.7,1.8,1.2,2.5c0.9,1.4,1.9,2.6,3.1,3.8c1.3,1.3,2.5,2.3,3.8,3.1     c0.7,0.5,1.5,0.8,2.5,1.2c0.5,0.2,1,0.3,1.5,0.5c0.5,0.2,1,0.3,1.5,0.4     c1.2,0.1,2.4-0.1,3.4-0.7c1-0.5,1.5-1,1.7-1.5     C20.3,18,20.5,17.3,20.4,16.5L20.4,16.5z"></path>
																</svg>
															</span>
														</a>
													</div>
													<div class="">
														<div class="sc-60606cb-2 hvPFkN tw-w-full">
															<div class="text-xs l-h-1">Voucher Code:</div>
															<div class="tw-text-label-m text-green" style="color: #ff7d01 !important;">TRIPGARE30</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="sc-60606cb-1 kEJRcn">
											<div class="sc-7dd87981-0 cPjMDN divider-wrapper tw-relative tw-flex tw-justify-center tw-mb-4" color="#e5e5e5">
												<div class="sc-7dd87981-1 blkuwI wrap-0-10 l-h-1 z-i-1 tw-relative tw-bg-background tw-text-center">
													<div class="text-sm tw-whitespace-normal">or fill out the request form, and we will call you back soon</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tw-flex tw-w-full"><label class="sc-3653c982-0 iEMgxW tw-relative tw-cursor-pointer active" id="roundTripBtn"><input type="radio" name="direction" class="sc-ba6d346a-0 dSTkjJ" checked="true" value="round-trip"/>
										
									
									<span>Round-Trip</span></label><label class="sc-3653c982-0 iEMgxW tw-relative tw-cursor-pointer" id="oneWayBtn">
									<input type="radio" name="direction" class="sc-ba6d346a-0 dSTkjJ" value="one-way"/>
									<span>One-Way</span></label>

</div>
									{{-- <fieldset class="sc-b292eaf3-0 wpbiR destinations-ac" > --}}
										{{-- <div class="tw-w-full">
											<div class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon  {{ $oneway }}"  id="bravo_hotel" role="combobox" aria-expanded="false" style="width:100%" data-qa-sf-input-type="departureCity">
												<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth"> --}}
													{{-- <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false" id="undefined-label">From*</label> --}}
													{{-- <div placeholder="from**" class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense"> --}}
														{{-- <input aria-invalid="false" autoComplete="off" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" aria-autocomplete="both" autoCapitalize="none" spellcheck="false" value=""/> --}}
														{{-- <input type="text"
														class="smart-search-location parent_text form-control font-size-14"
														placeholder="From*" value="{{ $fromwhere }}"
														data-onload="" data-default="" id="fromwhere1" required>
													<input type="hidden" id="from1" class="child_id" name="from"
														value="{{ $fromwhere }}" autocomplete="off" required>
														<div class="sc-16fbf88b-0 fDvdbE"></div> --}}
														{{-- <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
															<legend class="jss3"><span>From*</span></legend>
														</fieldset> --}}
													{{-- </div>
												</div>
											</div>
										</div> --}}
										{{-- <div class="routing-spacing tw-shrink-0"></div>
										<div class="tw-w-full">
											<div class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" style="width:100%" data-qa-sf-input-type="destinationCity">
												<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth"> --}}
													{{-- //<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false" id="undefined-label">To*</label> --}}
													{{-- <div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input aria-invalid="false" autoComplete="off" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" aria-autocomplete="both" autoCapitalize="none" spellcheck="false" value=""/>
														<div class="sc-16fbf88b-1 hASXcI"></div>
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
															<legend class="jss3"><span>To*</span></legend>
														</fieldset>
													</div>
												</div>
											</div>
										</div> --}}
									{{-- </fieldset> --}}
									<div class="row">
										<div class="col smart-search">
											<input type="text"
												class="smart-search-location parent_text form-control font-size-14"
												placeholder="From*" value="{{ $fromwhere }}"
												data-onload="" data-default="" id="fromwhere1" required>
											<input type="hidden" id="from1" class="child_id" name="from"
												value="{{ $fromwhere }}" autocomplete="off" required>
										</div>
										<div class="col smart-search">
											<input type="text"
												class="smart-search-location parent_text form-control font-size-14"
												placeholder="To*" value="{{ $to_where }}"
												data-onload="" data-default="" id="wherewhere1" required>
											<input type="hidden" id="where1" class="child_id" name="to"
												value="{{ $to_where }}" autocomplete="off" required>
										</div>
									   
									</div>
									<fieldset class="sc-b292eaf3-0 wpbiR dates-ac tw-flex" style="border: none; margin:0px; padding:0px;">
										<div class="date-picker-wrapper">
											<div>
												<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
													<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false"></label>
													<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input name="start_date" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense departureDate"  name="start_date" type="date" style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;" onclick="this.showPicker()"
														value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
														min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
														{{-- <span class="text-muted f-size-18 date-prefix tw-block tw-h-[20px] tw-cursor-pointer">
															<svg width="1.15em" height="1em" viewBox="0 0 23 20" fill="currentColor">
																<path d="M21.162 18.05a.573.573 0 0 1-.573.573H2.37a.573.573 0 0 1-.572-.572V7.585 h19.365zM1.797 4.084c0-.315.256-.572.572-.572h2.368v.379c0 1 .814 1.814 1.814 1.814 1.001 0 1.815-.813 1.815-1.814v-.38h5.977v.38c0 1 .814 1.814 1.814 1.814s1.815-.813 1.815-1.814v-.38h2.617c.316 0 .573.258.573.573v2.184H1.797zM6.55 1.317c.275 0 .498.223.498.497V3.89a.498.498 0 0 1-.995 0V1.815c0-.275.223-.498.497-.498 zm9.606 0c.274 0 .497.223.497.497V3.89a.498.498 0 0 1-.994 0V1.815c0-.275.223-.498.497-.498 zm1.815.877v-.38c0-1-.814-1.814-1.815-1.814-1 0-1.814.814-1.814 1.815v.379H8.366v-.38 C8.366.815 7.552 0 6.55 0c-1 0-1.814.814-1.814 1.815v.379H2.369c-1.042 0-1.89.847-1.89 1.89V18.05c0 1.042.848 1.89 1.89 1.89h18.22c1.042 0 1.89-.848 1.89-1.89 V4.083c0-1.042-.848-1.89-1.89-1.89z"></path>
																<path d="M4.586 10.982h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.307z"></path>
																<path d="M10.191 10.982h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																<path d="M15.797 10.982h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																<path d="M4.586 13.76h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.306z"></path>
																<path d="M10.191 13.76h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																<path d="M15.797 13.76h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																<path d="M4.586 16.536h2.53a.653.653 0 1 0 0-1.306h-2.53a.653.653 0 1 0 0 1.306z"></path>
																<path d="M10.191 16.536h2.531a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																<path d="M15.797 16.536h2.53a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
															</svg>
														</span> --}}
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
													{{-- <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false"></label> --}}
													<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input  class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense returnDate" name="enddate" id="returnDate" style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;"onclick="this.showPicker()" type="date"
														value="" required
														min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
														{{-- <span class="text-muted f-size-18 date-prefix tw-block tw-h-[20px] tw-cursor-pointer">
															<svg width="1.15em" height="1em" viewBox="0 0 23 20" fill="currentColor">
																<path d="M21.162 18.05a.573.573 0 0 1-.573.573H2.37a.573.573 0 0 1-.572-.572V7.585 h19.365zM1.797 4.084c0-.315.256-.572.572-.572h2.368v.379c0 1 .814 1.814 1.814 1.814 1.001 0 1.815-.813 1.815-1.814v-.38h5.977v.38c0 1 .814 1.814 1.814 1.814s1.815-.813 1.815-1.814v-.38h2.617c.316 0 .573.258.573.573v2.184H1.797zM6.55 1.317c.275 0 .498.223.498.497V3.89a.498.498 0 0 1-.995 0V1.815c0-.275.223-.498.497-.498 zm9.606 0c.274 0 .497.223.497.497V3.89a.498.498 0 0 1-.994 0V1.815c0-.275.223-.498.497-.498 zm1.815.877v-.38c0-1-.814-1.814-1.815-1.814-1 0-1.814.814-1.814 1.815v.379H8.366v-.38 C8.366.815 7.552 0 6.55 0c-1 0-1.814.814-1.814 1.815v.379H2.369c-1.042 0-1.89.847-1.89 1.89V18.05c0 1.042.848 1.89 1.89 1.89h18.22c1.042 0 1.89-.848 1.89-1.89 V4.083c0-1.042-.848-1.89-1.89-1.89z"></path>
																<path d="M4.586 10.982h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.307z"></path>
																<path d="M10.191 10.982h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																<path d="M15.797 10.982h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																<path d="M4.586 13.76h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.306z"></path>
																<path d="M10.191 13.76h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																<path d="M15.797 13.76h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																<path d="M4.586 16.536h2.53a.653.653 0 1 0 0-1.306h-2.53a.653.653 0 1 0 0 1.306z"></path>
																<path d="M10.191 16.536h2.531a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																<path d="M15.797 16.536h2.53a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
															</svg>
														</span> --}}
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
															<legend class="jss3"><span>Return Date3</span></legend>
														</fieldset>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div>
										<div class="sc-a323ead3-1 izYqwl row-input">
											<div class="sc-a323ead3-0 grcZqr !tw-w-full tw-text-body-regular">
												<div class="mui-email-ac">
													<div class="MuiAutocomplete-root email-ac MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" style="width:100%">
														<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth" data-qa-email-input="true">
															<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false" id="undefined-label">E-mail*</label>
															<div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
																<input name="email" aria-invalid="false" autoComplete="off" type="email" class="MuiInputBase-input MuiOutlinedInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" aria-autocomplete="both" autoCapitalize="none" spellcheck="false" value=""/>
																{{-- <div class="MuiAutocomplete-endAdornment">
																	<button class="MuiButtonBase-root MuiIconButton-root MuiAutocomplete-clearIndicator MuiAutocomplete-clearIndicatorDirty" tabindex="-1" type="button" aria-label="Clear" title="Clear">
																		<span class="MuiIconButton-label">
																			<svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
																				<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
																			</svg>
																		</span>
																	</button>
																</div> --}}
																<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
																	<legend class="jss3"><span>E-mail*</span></legend>
																</fieldset>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tw-flex  tw-flex-wrap tw-justify-between">
											<div class="sc-a323ead3-0 grcZqr customer-input tw-text-body-regular">
												<div class=" input-group pt-1 pb-2" >
													<div class="custom-dropdown">
														<div class="custom-select" id="selectedCountry" style="
																 font-size: 18px;
															/* border: none; */
															border-top:1px solid #ff7d01;
															border-bottom: 1px solid #ff7d01;
															border-left: 1px solid #ff7d01;
															border-redius: none;
															border-right: none;
															height:43px; 
															">
															<img id="selectedFlag" class="flag-img" src="https://flagcdn.com/w320/ca.png" alt="Country Flag" />
															<span id="countryCodeDisplay">+1</span>
														</div>
														<div class="custom-dropdown-content" id="countryDropdown"></div>
														<input type="hidden" name="phoneprefix" id="dropdowncode" value="">
													</div>
													<input    autocomplete="off"  class="asap-input form-control subscription-input" name="phone" placeholder="Phone" type="text" required
													style="    border-top: 1px solid #ff7d01;
													border-bottom: 1px solid #ff7d01;
													border-right: 1px solid #ff7d01;
													border-left: none;height:43px;">
												</div>
											</div>
											<div class="sc-a323ead3-0 grcZqr customer-input">
												<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
													<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false">Your Name (Optional)</label>
													<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input aria-invalid="false" name="name" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value=""/>
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
															<legend class="jss3"><span>Your Name (Optional)</span></legend>
														</fieldset>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="m-t-sm tw-flex tw-w-full tw-items-center tw-text-center">
										<div class="tw-w-[49%]"><button class="sc-423e4b6d-0 dNpNeP bold wrap-10 tw-cursor-pointer tw-rounded tw-text-text-layout-fixed-light  tw-w-full" style="background:#ff7d01;">GET A FREE QUOTE</button></div>
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
			{{-- popup --}}
<div class="modal" id="popupModal">
    <div class="modal-content position-relative">
        <!-- Close Button -->
        <span class="close-btn" id="closeModal">&times;</span>
        <div class="row g-0">
            <!-- Left Image -->
            <div class="col-md-6">
                <img src="{{ asset('public/images/trip_new/howItWorksBG.jpg')}}" 
                     class="img-fluid h-100" alt="How It Works" style="width: inherit;height: auto; max-height: 100vh; object-fit: cover;">
            </div>
            <!-- Right Text Content -->
            <div class="modal-text col-md-6 d-flex flex-column justify-content-center p-4">
                <h2>How it Works?</h2>
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

{{-- popup --}}
			{{-- 425 --}}
			{{-- <section class="sc-858472aa-0 eMUhHp block-wrapper"><div class="title"><h2 class="bold xs-center m-b-m ">Fly with:</h2></div><div class="sc-eb7203b3-0 jmXMHI airlines-wrapper tw-flex tw-w-full tw-flex-wrap tw-justify-between"><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[78px]" src="https://airline-logo.asaptickets.com/newColor_SVG/02.svg" alt="Sky Team" data-qa-quote-form="airline-logo"><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[78px]" src="https://airline-logo.asaptickets.com/newColor_SVG/tk.svg" alt="Turkish Airlines" data-qa-quote-form="airline-logo"><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[78px]" src="https://airline-logo.asaptickets.com/newColor_SVG/qr.svg" alt="Qatar Airways" data-qa-quote-form="airline-logo"><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[78px]" src="https://airline-logo.asaptickets.com/newColor_SVG/sn.svg" alt="Brussels Airlines" data-qa-quote-form="airline-logo"><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[78px]" src="https://airline-logo.asaptickets.com/newColor_SVG/ac.svg" alt="Air Canada" data-qa-quote-form="airline-logo"><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[78px]" src="https://airline-logo.asaptickets.com/newColor_SVG/et.svg" alt="Ethiopian Airlines" data-qa-quote-form="airline-logo"></div></section>
			<div data-qa-resultpage-deals="true" class="sc-c5c2e7fb-0 kJjDls">
				<section class="block-wrapper">
					<h2 class="bold m-b xs-center">More Cheap Canada Flight Deals - Call Us to Find More! </h2>
					<div class="tw-flex tw-flex-wrap tw-justify-between">
						<div class="sc-74b7ee07-0 FDRgi tw-w-full" data-qa-resultpage-deal="1" data-qa-quote-form="search-dw">
							<div class="sc-e0900bb7-0 gcjNgK">
								<article class="clearfix wrapper-smaller tw-cursor-pointer false tw-mb-8">
									<div class="pull-left">
										<p>Deal of the Week</p>
										<img class="SinglePriceItem-airline-logo tw-w-[110px]" src="https://airline-logo.asaptickets.com/newColor_SVG/tk.svg" alt="Top US Airline" data-qa-quote-form="airline-logo"/>
									</div>
									<div class="pull-right m-t-m priceBlock">
										<div class="bold tw-relative" style="padding-right:30px">
											<div class="sc-7db9dc4a-0 sc-df0b2076-0 llDkAI cQeKdx price-label "><span class="price-label-currency ">c$</span><span class="price-label-price">1129</span><span class="price-label-asterisk tw-cursor-pointer ">*</span></div>
											<div class="sc-786a014e-0 sc-786a014e-2 gdZpkb igAuVc ico-angle ico-angle-right tw-inline ico-2x" style="border-color:#d7d7d7;height:14px;width:14px"></div>
										</div>
									</div>
								</article>
							</div>
						</div>
						<div class="sc-74b7ee07-0 FDRgi tw-w-full" data-qa-resultpage-deal="2" data-qa-quote-form="search-bs">
							<div class="sc-e0900bb7-0 gcjNgK">
								<article class="clearfix wrapper-smaller tw-cursor-pointer false tw-mb-8">
									<div class="pull-left">
										<p>Best Seller</p>
										<img class="SinglePriceItem-airline-logo tw-w-[110px]" src="https://airline-logo.asaptickets.com/newColor_SVG/at.svg" alt="Royal Air Maroc" data-qa-quote-form="airline-logo"/>
									</div>
									<div class="pull-right m-t-m priceBlock">
										<div class="bold tw-relative" style="padding-right:30px">
											<div class="sc-7db9dc4a-0 sc-df0b2076-0 llDkAI cQeKdx price-label "><span class="price-label-currency ">c$</span><span class="price-label-price">1145</span><span class="price-label-asterisk tw-cursor-pointer ">*</span></div>
											<div class="sc-786a014e-0 sc-786a014e-2 gdZpkb igAuVc ico-angle ico-angle-right tw-inline ico-2x" style="border-color:#d7d7d7;height:14px;width:14px"></div>
										</div>
									</div>
								</article>
							</div>
						</div>
						<div class="sc-74b7ee07-0 FDRgi tw-w-full" data-qa-resultpage-deal="3" data-qa-quote-form="search-pp">
							<div class="sc-e0900bb7-0 gcjNgK">
								<article class="clearfix wrapper-smaller tw-cursor-pointer false tw-mb-8">
									<div class="pull-left">
										<p>Popular</p>
										<img class="SinglePriceItem-airline-logo tw-w-[110px]" src="https://airline-logo.asaptickets.com/newColor_SVG/af.svg" alt="Air France" data-qa-quote-form="airline-logo"/>
									</div>
									<div class="pull-right m-t-m priceBlock">
										<div class="bold tw-relative" style="padding-right:30px">
											<div class="sc-7db9dc4a-0 sc-df0b2076-0 llDkAI cQeKdx price-label "><span class="price-label-currency ">c$</span><span class="price-label-price">1169</span><span class="price-label-asterisk tw-cursor-pointer ">*</span></div>
											<div class="sc-786a014e-0 sc-786a014e-2 gdZpkb igAuVc ico-angle ico-angle-right tw-inline ico-2x" style="border-color:#d7d7d7;height:14px;width:14px"></div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>
			</div> --}}
			{{-- <section class="tw-mx-[auto] tw-overflow-hidden tw-py-32 tw-container tw-max-w-[1172px] tw-px-16  !tw-max-w-[1024px] tw-py-[0] block-wrapper" data-qa-app-section="PromoBanner">


				<div style="width:100%;height:100%;position:relative">
					<img alt="Promo banner" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" style="color:transparent;width:0;height:0;margin:0" sizes="100vw" srcSet="https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=640&amp;q=75 640w, https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=750&amp;q=75 750w, https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=828&amp;q=75 828w, https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=1080&amp;q=75 1080w, https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=1200&amp;q=75 1200w, https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=1920&amp;q=75 1920w, https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=2048&amp;q=75 2048w, https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=3840&amp;q=75 3840w" src="https://www.asaptickets.ca/_next/image?url=%2Fstatic%2Fimg%2Fplaceholder.png&amp;w=3840&amp;q=75"/>
				</div>
			</section> --}}
			
			<section class="block-wrapper mt-5"></section>
				<section class="sc-1bde11e9-0 BXSXe tw-relative" style="text-align:center">
				
					<div class="container offer-section mt-5">
						<h2 id="table-heading" style="font-size: 19px;">
							Don't Miss Out on These Unbelievable Offers - Book Your Dream Getaway Today!
						</h2>
						<div class="row justify-content-center" style="margin-top: 30px;">
							<div class="col-md-3 offer-item ">
								<!--<img alt="24/7 Live Service Icon" height="80" class="img_s" id="img_s"
                                            src="{{ asset('public/images/trip/7.png') }}"
                                            width="90" >-->
											<i class="fa fas fa-phone" style="font-size: 80px; width: 90px; display: inline-block; text-align: center;color:#555;"></i>
							
								<p class="justify-content-center" style=" margin-left: 30px;">
									Live Help Anytime Before, During and After Your Trip via Phone and Email
								</p>
							</div>
							<div class="col-md-3 offer-item">
								<!--<img alt="Lowest Airfare Guarantee Icon" height="80" class="img_s" id="img_s"
                                            src="{{ asset('public/images/trip/8.png') }}"
                                            width="90" />-->
											<i class="fa fas fa-check-circle" style="font-size: 80px; width: 90px; display: inline-block; text-align: center;color:#555;"></i>
								<p class="justify-content-center" style=" margin-left: 30px;">
									If You Find a Lower Price Anywhere Online, We'll Meet or Beat It!
								</p>
							</div>
							<div class="col-md-3 offer-item">
								<!--<img alt="Personalized Expert Advice Icon" height="80" class="img_s" id="img_s"
                                            src="{{ asset('public/images/trip/3.png') }}"
                                            width="90"  />-->
											<i class="fa fas fa-user" style="font-size: 80px; width: 90px; display: inline-block; text-align: center;color:#555;"></i>
								<p class="justify-content-center" style=" margin-left: 30px;">
									Excellent Service Provided by All of Our 2100+ Live Travel Agents
								</p>
							</div>
							<div class="col-md-3 offer-item">
								<!-- <img alt="Exclusive Negotiated Discounts Icon" height="80" class="img_s" id="img_s"
                                            src="{{ asset('public/images/trip/4.png') }}"
                                            width="90" />-->
											<i class="fa fas fa-percent" style="font-size: 80px; width: 90px; display: inline-block; text-align: center;color:#555;"></i>
								<p class="justify-content-center" style=" margin-left: 30px;">
									Big Savings Unavailable Online + Children, Family and Group Travel Discounts
								</p>
							</div>
						</div>
					</div>
				</section>
			</section>
			
			<!-- reviews show part -->
			<section class="block-wrapper">
			 @include('News::frontend.blocks.staticreviews')
			<!-- reviews show part over -->
			</section>
			
			<section class="block-wrapper m-t-lg">
				<div>
					<div class="tw-mb-32 desktop:tw-mb-16">
						<h2 class="tw-mb-[15px] tw-text-center tw-text-[20px] tw-leading-[21px] desktop:tw-text-left desktop:tw-leading-[31px]">Flight Tickets to {{ $country_detail->country_name }}, Nigeria</h2>
						<p class="tw-text-justify tw-font-normal tw-leading-[21px]">Finding cheap flights to Canada online can be quite challenging. Tripgare Tickets can do all the footwork for you to save time and money. Our Travel Agents manually put together the best-priced airfares to the Canada with the most convenient itineraries to offer you cheap tickets to Canada. Fly to Canada with our special negotiated online and offline airfares unavailable online and save on your flight to Canada. Our contracted airline rates give you access to the best flight deals among hundreds of different airlines. The times when the travel was cheap are back! For affordable travel to Canada, call to speak to a travel agent or submit a callback request and well contact you back asap.</p>
					</div>
					<div class="tw-block tablet:tw-flex desktop:-tw-mx-24">
						<div class="tw-w-full tablet:tw-w-1/2 desktop:tw-px-24">
							<div class="tw-mb-32 desktop:tw-mb-16">
								<h2 class="tw-mb-[15px] tw-text-center tw-text-[20px] tw-leading-[21px] desktop:tw-text-left desktop:tw-leading-[31px]">Find Cheap Flights to {{ $country_detail->country_name }}</h2>
								<p class="tw-text-justify tw-font-normal tw-leading-[21px]">Tripgare Tickets Travel Agents will help you choose and book the most convenient and coordinated flights with smooth connections for an itinerary that suits your individual travel needs. Thanks to our extensive variety of private, specially negotiated contracts with the airlines, cheap airfares to Canada are available during any travel season. Currently Tripgare Tickets is offering sale on airline tickets to Canada for a limited time only. Contact our agents to learn more about all our unpublished flight deals and take advantage of these special bargains by booking now!			</p>
							</div>
						</div>
						<div class="tw-w-full tablet:tw-w-1/2 desktop:tw-px-24">
							<div class="tw-mb-32 desktop:tw-mb-16">
								<h2 class="tw-mb-[15px] tw-text-center tw-text-[20px] tw-leading-[21px] desktop:tw-text-left desktop:tw-leading-[31px]">About {{ $country_detail->country_name }} Travel</h2>
								<p class="tw-text-justify tw-font-normal tw-leading-[21px]">Tripgare Tickets is a unique fusion of an airline ticket consolidator (wholesaler) with a travel agency (retailer). Our unprecedented business model was created so that our customers get the best of both worlds: discounted airfares negotiated at wholesale prices and a personalized approach for every single request! We are committed to providing our valued customers with only the best and reasonably-priced tickets to Canada and other destinations. Through over a decade of industry experience, we have partnered with more than 500 major airlines to offer our clients various travel options to the Canada and beyond. Needless to say, Tripgare Tickets is among the first to receive exclusive promotions and limited deals to Canada. Feel free to browse through our website and stay connected through our newsletter and social media accounts to be the first to know about the best available Canada flight deals.</p>
							</div>
						</div>
					</div>
				</div>
					{{-- new --}}
				<div class="bravo-list-news">

					<div class="container custom-container" style="padding: 0;margin:0; ">
					
	
						<h4 id="c768">Lowest All-in Round-trip Airfares to<b> {{$country_detail->country_name}}</b></h4>
					
						<div class="d-lg-flex d-block col-12  " style="padding-top:0px;">
							
	
							<div class="container">
	
							
								@php
									
								@endphp
	
								<div class="deals-grid">
									@foreach ($cities as $city)
										<a href="{{ route('cheap-flight', str_replace(' ', '-', $city->city)) }}"
											class="deal-link">
											<div class="deal-item">{{$city->city}}<span
													class='currencyvalue'>{{ str_replace(' ', '', $city->discount_price) }}
													></span></div>
										</a>
									@endforeach
								</div>
	
	
							</div>
	
							
						</div>
						
	
						<div class="list-item">
	
							<div class="row">
	
								
	
							</div>
	
						</div>
	
					</div>
	
				</div>
					{{-- newdata --}}
			</section>
		
			

		
			<div class="sc-c843fdcb-1 htXZgM wrap-40-0 ">
				 
			</div>
		</div>
	</div>
	<div id="id01" class="w3-modal" style="z-index:99 !important;">
		<div class="w3-modal-content" style="width:750px;margin-top:40px;">
			<div class="w3-container" style="padding: 0px; display:none;">
				<span onclick="document.getElementById('id01').style.display='none'"
					class="float-end "
					style="    font-size: 30px;
margin: -6px 3px;
cursor: pointer;
					active:hover{
						background-color: yellow;
						/* padding:0px; */
							font-size: 29px !important;
cursor: pointer;
					}">&times;</span></div>
				{{-- Some text. Some text. Some text. --}}
				<div class="tw-fixed tw-inset-0 tw-z-1301 tw-flex tw-items-center tw-justify-center" role="dialog" aria-modal="true">
					<div class="tw-relative tw-z-2 tw-h-full tw-max-h-full tw-min-h-[169px] tw-max-w-full tw-overflow-auto tw-bg-starlit tw-shadow-lg tablet:tw-h-auto max-tablet:tw-w-full tablet:tw-min-w-[768px]">
					   <button aria-label="close" class="tw-absolute tw-right-12 tw-top-12 tw-flex tw-cursor-pointer tw-border-0 tw-bg-transparent-full focus-visible:tw-glow-focus">
						  <svg width="24" height="24" viewBox="0 0 20 20" fill="currentColor" class="tw-z-1 tw-bg-transparent-full tw-fill-text-layout-fixed-dark tablet:hover:tw-fill-text-layout-accent "  onclick="document.getElementById('id01').style.display='none'" xmlns="http://www.w3.org/2000/svg">
							 <path d="M15.5617 4.24764C15.2367 3.92264 14.7117 3.92264 14.3867 4.24764L9.90064 8.72541L5.41866 4.24364C5.09366 3.91864 4.56866 3.91864 4.24366 4.24364C3.91866 4.56864 3.91866 5.09364 4.24366 5.41864L8.72564 9.90041L4.24377 14.3823C3.91877 14.7073 3.91877 15.2323 4.24377 15.5573C4.56877 15.8823 5.09378 15.8823 5.41877 15.5573L9.90064 11.0754L14.3825 15.5572C14.7075 15.8822 15.2325 15.8822 15.5575 15.5572C15.8825 15.2322 15.8825 14.7072 15.5575 14.3822L11.0756 9.90041L15.5617 5.4143C15.8784 5.09764 15.8784 4.5643 15.5617 4.24764Z"></path>
						  </svg>
					   </button>
					   
<!-- style="width:768px;height:575px;"  -->

					   <section class="tw-relative" data-qa-tel-placement="modal-quote-form">
						  <div class="tw-flex tw-justify-between" id="modelssss" >   
							 <div class="sc-13e2464d-0 itcjuQ hid-sm wrap-40-30 tw-relative" id="wrap_vj" >
								<div class="b-b-grey tw-relative">
								   <span class="text-lg bold">
									  <div class="tw-relative">
										 Want it lower than 
										 <div class="tw-inline-block tw-align-middle">
											<div class="sc-7db9dc4a-0 sc-df0b2076-0 llDkAI cQeKdx price-label ">
										<span class="currencyvalue" style="font-size:19px;"> @if (isset($country_detail))
											{{ str_replace(' ', '', $country_detail->from_price) }}
											@else
												0
											@endif</span><span class="price-label-asterisk  ">*</span></div>
										 </div>
										 ?
									  </div>
									  <div class="normal text-normal tw-whitespace-nowrap">Round-trip, Total</div>
								   </span>
								   <div class="small tw-mt-16">Some of our deals are so good and so exclusive that we aren't allowed to publish them online. Get all details, more unpublished airline offers and <b>phone-only</b> deals via a <b>FREE quote now</b>!</div>
								   <div class="tw-mb-28 tw-mt-8">
									  <div class="tw-asap-grid tw-relative tw-justify-items-center tw-gap-0 tw-grid-cols-3">
										 {{-- <div><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[110px] tablet:tw-w-[80px] " src="{{ asset('public/images/trip_new/1.svg') }}" alt="Sky Team" data-qa-quote-form="airline-logo"></div>
										 <div><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[110px] tablet:tw-w-[80px] " src="{{ asset('public/images/trip_new/2.svg') }}" alt="Turkish Airlines" data-qa-quote-form="airline-logo"></div>
										 <div><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[110px] tablet:tw-w-[80px] " src="{{ asset('public/images/trip_new/3.svg') }}" alt="Qatar Airways" data-qa-quote-form="airline-logo"></div>
										 <div><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[110px] tablet:tw-w-[80px] " src="{{ asset('public/images/trip_new/4.svg') }}" alt="Brussels Airlines" data-qa-quote-form="airline-logo"></div>
										 <div><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[110px] tablet:tw-w-[80px] " src="{{ asset('public/images/trip_new/5.svg') }}" alt="Air Canada" data-qa-quote-form="airline-logo"></div>
										 <div><img class="logo-wrapper tw-flex tw-justify-center tw-text-center max-tablet:tw-mb-8 max-tablet:tw-px-16 tw-h-40 tw-w-[110px] tablet:tw-w-[80px] " src="{{ asset('public/images/trip_new/2.svg') }}" alt="Ethiopian Airlines" data-qa-quote-form="airline-logo"></div> --}}
									  </div>
								   </div>
								</div>
								<div class="small wrap-10-0">
								   <h3 class="small wrap-10-0 bold">How does it work?</h3>
								   <ul>
									  <li class="wrap-5-0 tw-block">1. <strong>Call to speak to one of our Travel Agents</strong> to get the cheapest deal of submit your inquiry.</li>
									  <li class="wrap-5-0 tw-block">2.  Your agent will reply with a free personalized travel quote via phone/email.</li>
									  <li class="wrap-5-0 tw-block">3. Confirm and book securely online, get e-tickets and fly for less saving hundreds!</li>
								   </ul>
								</div>
								<div class="m-t-lg">
								   <div class="logo-partners tw-flex tw-items-center tw-justify-between ">
									{{-- <img alt="20+ languages" loading="lazy" width="60" height="24" decoding="async" data-nimg="1" src="{{ asset('public/images/trip_new/01.svg') }}" style="color: transparent;">
									<img alt="BBB Accredited business" loading="lazy" width="89" height="24" decoding="async" data-nimg="1" src="{{ asset('public/images/trip_new/02.svg') }}" style="color: transparent;">
									<img alt="97% clients recommend" loading="lazy" width="92" height="24" decoding="async" data-nimg="1" src="{{ asset('public/images/trip_new/03.svg') }}" style="color: transparent;"> --}}
								</div>
								</div>
							 </div>
							 <div class="sc-13e2464d-1 cKmIUY block-center wrap-40-30">
								<div class="wrap-10-0">
								   <div class="tw-flex tw-justify-between">
									  <div class="tw-flex tw-items-center">
										 <div class="sc-60606cb-0 bRnzcj tw-text-footnote-regular tw-mb-8 tw-font-bold tablet:tw-mb-0">SAVE C$30 extra: Call <br> Toll-FREE</div>
									  </div>
									  <div class="">
										 <div class="tw-flex">
											<div class="">
											   <a data-qa-phonenumber="+1 855 522 3344" class="no-decoration  tw-text-label-m tw-flex tw-h-full tw-items-center tw-justify-center tw-rounded tw-p-[0px] bg-green tw-w-full tw-text-center" id="tw-rounded" href="tel:+1  855 522 3344">
												  <span class="l-h-1 m-r-xs" style="margin:0px;padding-left:5px;">
													<i class="fa fa-phone"></i>
												  </span>
											  <span id="nosmallreq">+1 855 522 3344  </span>
											   </a>
											</div>
											<div class="">
											   <div class="sc-60606cb-2 hvPFkN tw-w-full">
												  <div class="text-xs l-h-1" style="font-size: 13px;">Voucher Code:</div>
												  <div class="tw-text-label-m text-green" style="font-size: 17px;color: #ff7d01 !important;">TRIPGARE30</div>
											   </div>
											</div>
										 </div>
									  </div>
								   </div>
								   <div class="sc-60606cb-1 kEJRcn">
									  <div class="sc-7dd87981-0 cPjMDN divider-wrapper tw-relative tw-flex tw-justify-center tw-mb-4" color="#e5e5e5">
										 <div class="sc-7dd87981-1 blkuwI wrap-0-10 l-h-1 z-i-1 tw-relative tw-bg-background tw-text-center">
											<div class="text-sm tw-whitespace-normal">or fill out the request form, and we will call you back soon</div>
										 </div>
									  </div>
								   </div>
								   <div class="spinner tw-relative ">
									<form data-qa-tel-placement="quote-form" class="sc-3b6e3d2a-0 czRoLU tw-relative" action="{{ route('freequote') }}" method="post"
									id="departureform" onsubmit="return searchwhich_form('departureform')" autocomplete="off">
								<input type="hidden" name="page_url" value="{{ url()->current() }}"/>
										
										 {{-- <fieldset class="sc-b292eaf3-0 wpbiR destinations-ac">
											<div class="tw-w-full">
											   <div class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" data-qa-sf-input-type="departureCity" style="width: 100%;">
												  <div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
													 <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false" id="mui-90844-label" for="mui-90844">From*</label>
													 <div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input aria-invalid="false" autocomplete="off" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" aria-autocomplete="both" autocapitalize="none" spellcheck="false" value="" id="mui-90844">
														<div class="sc-16fbf88b-0 fDvdbE"></div>
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
														   <legend class="jss3"><span>From2*</span></legend>
														</fieldset>
													 </div>
												  </div>
											   </div>
											</div>
											<div class="routing-spacing tw-shrink-0"></div>
											<div class="tw-w-full"> 
											  <div class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" data-qa-sf-input-type="destinationCity" style="width: 100%;">
												  <div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
											
												 <div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input aria-invalid="false" autocomplete="off" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" autocapitalize="none" spellcheck="false" placeholder="To*" id="mui-56116">
														<div class="MuiAutocomplete-endAdornment">
														   <button class="MuiButtonBase-root MuiIconButton-root MuiAutocomplete-clearIndicator MuiAutocomplete-clearIndicatorDirty" tabindex="-1" type="button" aria-label="Clear" title="Clear">
															  <span class="MuiIconButton-label">
																 <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
																	<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
																 </svg>
															  </span>
														   </button>
														</div>
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
														   <legend class="jss3 jss4"><span>To*</span></legend>
														</fieldset>
													 </div>
												  </div>
											   </div>
											</div>
										 </fieldset>  --}}
<input type="hidden" name="booking_type"  value="round-trip">
										 <div class="row">
											<div class="col-6 smart-search">

												<input type="text"
													class="smart-search-location parent_text form-control font-size-14"
													placeholder="From*" value="{{ $fromwhere }}"
													data-onload="" data-default="" id="fromwhere11" required>
												<input type="hidden" id="from1" class="child_id" name="from"
													value="{{ $fromwhere }}" autocomplete="off" required>
											</div>
											<div class="col-6 smart-search">
												<input type="text"
													class="smart-search-location parent_text form-control font-size-14"
													placeholder="To*" value="{{ $to_where }}"
													data-onload="" data-default="" id="wherewhere11" required>
												<input type="hidden" id="where1" class="child_id" name="to"
													value="{{ $to_where }}" autocomplete="off" required>
											</div>
										   
										</div>
										<fieldset class="sc-b292eaf3-0 wpbiR dates-ac tw-flex" style="    border: none;
margin: 0px;
padding: 0px;">
											<div class="date-picker-wrapper">
												<div>
													<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
														<label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false"></label>
														<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
															<input name="start_date" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense departureDat" id="departureDat" name="start_date" style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;" onclick="this.showPicker()" type="date"
															<input name="start_date" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense departureDat" id="departureDat" name="start_date" style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;" onclick="this.showPicker()" type="date"
															value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
															min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
															{{-- <span class="text-muted f-size-18 date-prefix tw-block tw-h-[20px] tw-cursor-pointer">
																<svg width="1.15em" height="1em" viewBox="0 0 23 20" fill="currentColor">
																	<path d="M21.162 18.05a.573.573 0 0 1-.573.573H2.37a.573.573 0 0 1-.572-.572V7.585 h19.365zM1.797 4.084c0-.315.256-.572.572-.572h2.368v.379c0 1 .814 1.814 1.814 1.814 1.001 0 1.815-.813 1.815-1.814v-.38h5.977v.38c0 1 .814 1.814 1.814 1.814s1.815-.813 1.815-1.814v-.38h2.617c.316 0 .573.258.573.573v2.184H1.797zM6.55 1.317c.275 0 .498.223.498.497V3.89a.498.498 0 0 1-.995 0V1.815c0-.275.223-.498.497-.498 zm9.606 0c.274 0 .497.223.497.497V3.89a.498.498 0 0 1-.994 0V1.815c0-.275.223-.498.497-.498 zm1.815.877v-.38c0-1-.814-1.814-1.815-1.814-1 0-1.814.814-1.814 1.815v.379H8.366v-.38 C8.366.815 7.552 0 6.55 0c-1 0-1.814.814-1.814 1.815v.379H2.369c-1.042 0-1.89.847-1.89 1.89V18.05c0 1.042.848 1.89 1.89 1.89h18.22c1.042 0 1.89-.848 1.89-1.89 V4.083c0-1.042-.848-1.89-1.89-1.89z"></path>
																	<path d="M4.586 10.982h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.307z"></path>
																	<path d="M10.191 10.982h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																	<path d="M15.797 10.982h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
																	<path d="M4.586 13.76h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.306z"></path>
																	<path d="M10.191 13.76h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																	<path d="M15.797 13.76h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
																	<path d="M4.586 16.536h2.53a.653.653 0 1 0 0-1.306h-2.53a.653.653 0 1 0 0 1.306z"></path>
																	<path d="M10.191 16.536h2.531a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																	<path d="M15.797 16.536h2.53a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
																</svg>
															</span> --}}
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
														{{-- <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-marginDense MuiInputLabel-outlined" data-shrink="false"></label> --}}
														<div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
															<input  id="returnDat" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense returnDate" name="enddate" id="returnDat" style="cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none;" onclick="this.showPicker()" type="date"
															value="" required
															min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required />
														
															<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
																<legend class="jss3"><span>Return Date3</span></legend>
															</fieldset>
														</div>
													</div>
												</div>
											</div>
										</fieldset>
										 {{-- <fieldset class="sc-b292eaf3-0 wpbiR dates-ac tw-flex">
											 <div class="date-picker-wrapper">
											   <div>
												  <div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth"> 
													
													 <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input aria-invalid="false" placeholder="" readonly="" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="11/23/2024">
														<span class="text-muted f-size-18 date-prefix tw-block tw-h-[20px] tw-cursor-pointer">
														   <svg width="1.15em" height="1em" viewBox="0 0 23 20" fill="currentColor">
															  <path d="M21.162 18.05a.573.573 0 0 1-.573.573H2.37a.573.573 0 0 1-.572-.572V7.585 h19.365zM1.797 4.084c0-.315.256-.572.572-.572h2.368v.379c0 1 .814 1.814 1.814 1.814 1.001 0 1.815-.813 1.815-1.814v-.38h5.977v.38c0 1 .814 1.814 1.814 1.814s1.815-.813 1.815-1.814v-.38h2.617c.316 0 .573.258.573.573v2.184H1.797zM6.55 1.317c.275 0 .498.223.498.497V3.89a.498.498 0 0 1-.995 0V1.815c0-.275.223-.498.497-.498 zm9.606 0c.274 0 .497.223.497.497V3.89a.498.498 0 0 1-.994 0V1.815c0-.275.223-.498.497-.498 zm1.815.877v-.38c0-1-.814-1.814-1.815-1.814-1 0-1.814.814-1.814 1.815v.379H8.366v-.38 C8.366.815 7.552 0 6.55 0c-1 0-1.814.814-1.814 1.815v.379H2.369c-1.042 0-1.89.847-1.89 1.89V18.05c0 1.042.848 1.89 1.89 1.89h18.22c1.042 0 1.89-.848 1.89-1.89 V4.083c0-1.042-.848-1.89-1.89-1.89z"></path>
															  <path d="M4.586 10.982h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.307z"></path>
															  <path d="M10.191 10.982h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
															  <path d="M15.797 10.982h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
															  <path d="M4.586 13.76h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.306z"></path>
															  <path d="M10.191 13.76h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
															  <path d="M15.797 13.76h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
															  <path d="M4.586 16.536h2.53a.653.653 0 1 0 0-1.306h-2.53a.653.653 0 1 0 0 1.306z"></path>
															  <path d="M10.191 16.536h2.531a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
															  <path d="M15.797 16.536h2.53a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
														   </svg>
														</span>
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
														   <legend class="jss3 jss4"><span></span></legend>
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
														<input aria-invalid="false" placeholder="Return Date2" readonly="" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="11/30/2024">
														<span class="text-muted f-size-18 date-prefix tw-block tw-h-[20px] tw-cursor-pointer">
														   <svg width="1.15em" height="1em" viewBox="0 0 23 20" fill="currentColor">
															  <path d="M21.162 18.05a.573.573 0 0 1-.573.573H2.37a.573.573 0 0 1-.572-.572V7.585 h19.365zM1.797 4.084c0-.315.256-.572.572-.572h2.368v.379c0 1 .814 1.814 1.814 1.814 1.001 0 1.815-.813 1.815-1.814v-.38h5.977v.38c0 1 .814 1.814 1.814 1.814s1.815-.813 1.815-1.814v-.38h2.617c.316 0 .573.258.573.573v2.184H1.797zM6.55 1.317c.275 0 .498.223.498.497V3.89a.498.498 0 0 1-.995 0V1.815c0-.275.223-.498.497-.498 zm9.606 0c.274 0 .497.223.497.497V3.89a.498.498 0 0 1-.994 0V1.815c0-.275.223-.498.497-.498 zm1.815.877v-.38c0-1-.814-1.814-1.815-1.814-1 0-1.814.814-1.814 1.815v.379H8.366v-.38 C8.366.815 7.552 0 6.55 0c-1 0-1.814.814-1.814 1.815v.379H2.369c-1.042 0-1.89.847-1.89 1.89V18.05c0 1.042.848 1.89 1.89 1.89h18.22c1.042 0 1.89-.848 1.89-1.89 V4.083c0-1.042-.848-1.89-1.89-1.89z"></path>
															  <path d="M4.586 10.982h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.307z"></path>
															  <path d="M10.191 10.982h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
															  <path d="M15.797 10.982h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.307z"></path>
															  <path d="M4.586 13.76h2.53a.653.653 0 1 0 0-1.307h-2.53a.653.653 0 1 0 0 1.306z"></path>
															  <path d="M10.191 13.76h2.531a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
															  <path d="M15.797 13.76h2.53a.653.653 0 0 0 0-1.307h-2.53a.653.653 0 0 0 0 1.306z"></path>
															  <path d="M4.586 16.536h2.53a.653.653 0 1 0 0-1.306h-2.53a.653.653 0 1 0 0 1.306z"></path>
															  <path d="M10.191 16.536h2.531a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
															  <path d="M15.797 16.536h2.53a.653.653 0 0 0 0-1.306h-2.53a.653.653 0 0 0 0 1.306z"></path>
														   </svg>
														</span>
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
														   <legend class="jss3 jss4"><span>Return1</span></legend>
														</fieldset>
													 </div>
												  </div>
											   </div>
											</div>
										 </fieldset> --}}
										 <div>
<div class="row mt-1">
<div class="col-md-12">
<input name="email2" aria-invalid="false" id="mui-42424" autocomplete="off" type="email" class="smart-search-location parent_text form-control font-size-14" placeholder="Email*" style="padding-left: 4px;width: 100%;border-radius : 0;border: 1px solid #ff7d01;" value="" required="">
</div>
</div>
											<!--<div class="sc-a323ead3-1 izYqwl row-input">
											   <div class="sc-a323ead3-0 grcZqr !tw-w-full tw-text-body-regular">
												  <div class="mui-email-ac">
													 <div class="MuiAutocomplete-root email-ac MuiAutocomplete-hasClearIcon" role="combobox" aria-expanded="false" style="width: 100%;">
														<div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth" data-qa-email-input="true">
												  
														   <div class="MuiInputBase-root MuiOutlinedInput-root MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd MuiInputBase-marginDense MuiOutlinedInput-marginDense">
															  <input aria-invalid="false" autocomplete="off" type="email"  name="email2" class="smart-search-location  font-size-14"
																	placeholder="Email*"  value="" id="mui-42424">
															  {{-- <div class="MuiAutocomplete-endAdornment">
																 <button class="MuiButtonBase-root MuiIconButton-root MuiAutocomplete-clearIndicator MuiAutocomplete-clearIndicatorDirty" tabindex="-1" type="button" aria-label="Clear" title="Clear">
																	<span class="MuiIconButton-label">
																	   <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
																		  <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
																	   </svg>
																	</span>
																 </button>
															  </div> --}}

															  <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
																 <legend class="jss3"><span>E-mail*</span></legend>
															  </fieldset>
														   </div>
														</div>
													 </div>
												  </div>
											   </div>
											</div>-->
											<div class="tw-flex  tw-flex-wrap tw-justify-between">
												<div class="sc-a323ead3-0 grcZqr customer-input tw-text-body-regular">
													<div class=" input-group pt-2 pb-2" >
														<div class="custom-dropdown">
															<div class="custom-select" id="selectedCountry2" style="
																">
																<img id="selectedFlag2" class="flag-img" src="https://flagcdn.com/w320/ca.png" alt="Country Flag" />
																<span id="countryCodeDisplay2">+1</span>
															</div>
															<div class="custom-dropdown-content" id="countryDropdown2"></div>
															<input type="hidden" name="phoneprefix" id="dropdowncote" value="">
														</div>
														<input    autocomplete="off" class="smart-search-location  font-size-14" name="phone" placeholder="Phone" type="text" id="phoneplace2">
													</div>
												</div>
											   <div class="sc-a323ead3-0 grcZqr customer-input" style="padding-top:5px;">
												  <div class="MuiFormControl-root MuiTextField-root sc-4c54e0fb-0 fikMym tw-bg-background MuiFormControl-fullWidth">
												
													 <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-marginDense MuiOutlinedInput-marginDense">
														<input aria-invalid="false" name="name" type="text" class="smart-search-location  font-size-14" placeholder="Your Name (Optional)" style="padding-left:8px; height: 38px;">
														<fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
														   <legend class="jss3"><span>Your Name (Optional)</span></legend>
														</fieldset>
													 </div>
												  </div>
											   </div>
											</div>
										 </div>
									
										 <input type="submit" class="sc-423e4b6d-0 dNpNeP bold wrap-10 tw-cursor-pointer tw-rounded tw-text-text-layout-fixed-light  tw-rounded m-t-sm m-b-sm tw-w-full" style="background:#ff7d01;" value="GET A FREE QUOTE">
								   </div>
								   <div class="m-t-xs l-h-1-8 text-xs">By providing my contact details and clicking on "GET A FREE QUOTE" I agree to be contacted for travel information via phone, text messages and email. No purchase necessary. We respect your <a href=" https://flight.Tripgare.com/page/privacy-policy" class="" target="_blank">privacy</a></div>
								</div>
							 </div>
						  </div>
					   </section>
					</div>
					<div class="tw-absolute tw-z-1 tw-h-full tw-w-full tw-bg-adjustmentLayer-midnight"></div>
				 </div>
				{{-- Some text. Some text. Some text. --}}
			
		</div>
	</div>
</div>
@endsection
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
        <script>
            // document.querySelector('.w3-button').addEventListener('click', function() {
                // document.getElementById('id01').style.display = 'none';//pop js
            // });
			//form one or round trip
		
			
        </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script> 
            $(document).ready(function() {
                // Show the modal when the page loads
               // $('#subscriptionModal').modal('show');
        
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
			// function changeCurrency(selectedCurrency) {
			// 	// Update the displayed currency
			// 	document.getElementById('currency-display').textContent = selectedCurrency;
		
			// 	// Update currency values in elements with the class 'currencyvalue'
			// 	let el = document.querySelectorAll('.currencyvalue');
			// 	el.forEach(function(el) {
			// 		el.value = selectedCurrency;
			// 	});
		
			// 	// Redirect to the same route with the selected currency as a query parameter
			// 	const url = new URL(window.location.href);
			// 	url.searchParams.set('currency', selectedCurrency); // Set or update the currency parameter
			// 	window.location.href = url.toString(); // Redirect to the new URL
			// }
		
			// // Call the function on page load with initial currency
			// document.addEventListener('DOMContentLoaded', () => {
			// 	changeCurrency(initialCurrency);
			// });
		
		
		
		
		
			// $(document).ready(function() {
			// 	$('.carousel-control-next').click(function() {
			// 		$('#carouselExampleIndicators').carousel('next');
			// 	});
			// 	$('.carousel-control-prev').click(function() {
			// 		$('#carouselExampleIndicators').carousel('prev');
			// 	});
			// 	setInterval(function() {
			// 		$('#carouselExampleIndicators').carousel('next');
			// 	}, 5000);
			// });
		</script>
		<script>
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
		<script> 
    async function fetchExchangeRates(baseCurrency = 'INR') {
        try {
            let response = await fetch(`https://v6.exchangerate-api.com/v6/0ef81d74b9132500f5c9a4fe/latest/${baseCurrency}`);
            let data = await response.json();
            
            if (data.result === "success") {
                localStorage.setItem('exchangeRates', JSON.stringify(data.conversion_rates));
                return data.conversion_rates;
            } else {
                console.error("Error fetching exchange rates:", data);
                return null;
            }
        } catch (error) {
            console.error("API fetch error:", error);
            return null;
        }
    }
</script>


        <script>
            function changeCurrency(selectedCurrency) {
                localStorage.setItem('currency', selectedCurrency);
                var currentUrl = new URL(window.location.href);
        
                // Set or update the 'currency' query parameter
                currentUrl.searchParams.set('currency', selectedCurrency);
        
                // Reload the page with the new currency in the URL
                window.location.href = currentUrl.href;
            }
        
        
            var initialCurrency = '{{ $curr_currency }}';
        
            async function updateTotalPrice_change(pr) {
        let conversionRates = JSON.parse(localStorage.getItem('exchangeRates'));

        // Fetch new rates if not available in localStorage
        if (!conversionRates) {
            conversionRates = await fetchExchangeRates();
        }

        if (!conversionRates || !conversionRates[pr]) {
            console.error("Conversion rate not available for", pr);
            return;
        }

        localStorage.setItem('currency', pr);
        
        let el = document.querySelectorAll('.currencyvalue');
        el.forEach(function(el) {
            let totalPrice = 0;
            let totalprice = parseFloat(el.innerHTML.replace(/[^\d.-]/g, '')) || 0;
            totalPrice = totalprice * conversionRates[pr];
             el.innerHTML = getCurrencyIcon_change(pr) + ` ${totalPrice.toFixed(2).toLocaleString()}`;
        });
    }
        
            function getCurrencyIcon_change(selectedCurrency) {
                let icon;
                switch (selectedCurrency) {
                    case 'USD':
                        icon = '<i class="fa fa-dollar"></i>'; // Dollar icon
                        break;
                    case 'INR':
                        icon = '<i class="fa fa-rupee"></i>'; // Rupee icon
                        break;
                    case 'CAD':
                        icon = 'C<i class="fa fa-dollar"></i>'; // Dollar icon (you can choose a different one if needed)
                        break;
                    default:
                        icon = selectedCurrency; // Fallback to the currency code
                        break;
                }
        
                return icon;
        
            }
        
            // Call the function on page load with initial currency
            document.addEventListener('DOMContentLoaded', async () => {
        await fetchExchangeRates(); // Ensure latest exchange rates are available
        updateTotalPrice_change(initialCurrency);
    });
    
        </script>
			
		</script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
		<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

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
