
    <style>
        /* body,
    html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    }  */

        /* .container {
        display: flex;
        padding: 20px;
    } */
    /* @media (min-width: 10240px) {
    .image-section img {
        width: 300px;
        height: 285px;
        border-radius: 10px;
        margin-right: 20px;
    }
   } */
        .image-section img {
            width: 335px;
            height: 285px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .image-section img:hover{
            transform: scale(1.05);
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
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin: 20px 0;
        }

        .deal-item {
            background: #fff;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            text-decoration: none;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .deal-item span {
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .bravo_wrap .bravo_form .form-content .render, a:hover {
    color: #ff7d01;
    text-decoration: none;
}
        .view-deals-button {
            background-color:#ff7d01;
           
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .view-deals-button:hover {

            background-color: #1a2b48;
            color:white;
            text-decoration: none;
        }

        .deal-link {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .deal-item {
            padding: 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-decoration: none;
            /* Add any other styles for the item here */
        }

        .deal-item:hover {
            background-color:#ff7d01

;
            /* Light background on hover */
            /* color: orange; */
            /* Change text color on hover */
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
        @media (max-width: 1024px) {
            .custom-container {
                width: 100% !important;
                max-width: 100% !important;
                padding-left: 15px;
                padding-right: 15px;
            }

            container .vijay_change {
                padding: 0;
                margin-left: 25px;
            }
            .image-section img {
        width: 310px;
        height: 285px;
        border-radius: 10px;
        margin-right: 20px;
    }
        }

        @media(min-width: 992px) {
            .d-lg-flex {
                display: -ms-flexbox !important;
                display: flex !important;
                padding-top: 32px;
                padding-bottom: 32px;
            }
        }

        @media (max-width: 768px) {

            /* Adjust the grid to have 2 columns on smaller screens */
            .deals-grid {
                grid-template-columns: repeat(2, 1fr);
            }



            .image-section img {
                width: 100%;
                height: 285px;
                border-radius: 10px;
                /* margin-right: 20px; */
                margin-top:15px;
            }

            /* Adjust text sizes */
            .deals-section h2 {
                font-size: 22px;
            }

            .deals-section p {
                font-size: 16px;
            }

            .image-section_one {
                display: block;
                /* Remove flexbox on smaller screens */
            }

            .image-section_one {
                width: 100%;
                /* Make the image full width */
                margin-right: 0;
                /* Remove right margin */
            }
        }

        /* For extra small screens (mobile) */
        @media (max-width: 480px) {

            /* Adjust the grid to have 1 column on mobile screens */
            .deals-grid {
                grid-template-columns: 1fr;
            }

            /* Make sure the image takes full width */
            .image-section img {
                width: 100%;
                margin-right: 0;
                margin-top: 15px;
            }

            /* Adjust text sizes further for mobile */
            .deals-section h2 {
                font-size: 20px;
            }

            .deals-section p {
                font-size: 14px;
            }

            .image-section_one {
                display: block;
                /* Remove flexbox on smaller screens */
            }

            .image-section_one {
                width: 100%;
                /* Make the image full width */
                margin-right: 0;


                /* Remove right margin */
            }
            .title{
                    padding-top: 15px;
              }
        }
    </style>
      <style>
  @media (max-width: 1024px) {
.contact-btn {
    background-color: #28a745;
    color: #fff;
    font-weight: bold;
    border-radius: 10px;
    padding-top: 10px;
    /* width: 100%; */
    padding: 16px 1px;
}
}
   @media (max-width: 425px) {
.step {
    padding-left: 0px !important;
    padding-right: 5px;
}
.deal-card {
  background-image: url("<?php echo e(asset('images/today/delhi2.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}
.deal-card1 {
  background-image: url("<?php echo e(asset('images/today/mumbai2.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
    margin-top: 15px;
}
.deal-card2 {
  background-image: url("<?php echo e(asset('images/today/bangalore2.jpeg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
    margin-top: 15px;
}

.deal-card3 {
  background-image: url("<?php echo e(asset('images/today/hyderabad.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}

.deal-card4 {
  background-image:url("<?php echo e(asset('images/today/ahmedabad.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
    margin-top: 15px;
  overflow: hidden;
}
//.contact-section {
//    background: #f8f9fa;
//    border-radius: 8px;
//    height: 100%;
//    padding: 20px;
//    margin-top: 15px;
//    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
//    text-align: center;
//}
}
    .deal-card:hover {
      transform: scale(1.05);
    }
    .deal-card1:hover {
      transform: scale(1.05);
    }
     .deal-card2:hover {
      transform: scale(1.05);
    }
     .deal-card3:hover {
      transform: scale(1.05);
    }
     .deal-card4:hover {
      transform: scale(1.05);
    }
   /* .deal-card img {
      height: 100%;
      object-fit: cover;
    }*/
    .deal-price {
      font-size: 1.2rem;
      font-weight: bold;
    }
    .contact-section {
    padding: 20px;
      background: #f8f9fa;
      border-radius: 8px;
     height: 100%;
     display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .contact-section h3 {
      font-weight: bold;
      padding-top: 10px;
     font-size:16px;
    }
    .contact-btn {
      background-color: #ff7d01;
      color: #fff;
      font-weight: bold;
      border-radius: 10px;
      padding-top: 10px;
    }
    .contact-btn:hover {
      background-color: #1a2b48;
    color: #fff;
    }

    /* Styling for the deal card */
.deal-card {
  background-image: url("<?php echo e(asset('images/today/delhi2.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}
.deal-card1 {
  background-image: url("<?php echo e(asset('images/today/mumbai2.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}
.deal-card2 {
  background-image: url("<?php echo e(asset('images/today/Bangalore.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}

.deal-card3 {
  background-image: url("<?php echo e(asset('images/today/Hyderabad.webp')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}

.deal-card4 {
  background-image:url("<?php echo e(asset('images/today/ahmedabad0.jpg')); ?>");
  background-size: cover;
  background-position: center;
  height: 245px;
  position: relative;
  border-radius: 8px;
  overflow: hidden;
}


/* Styling for the content overlay */
.deal-content {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
/*  background: rgba(0, 0, 0, 0.6);*/
  color: #fff;
  padding: 15px;
}

/* Aligning the price and button horizontally */
.deal-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Optional button customization */
.btn-sm {
  font-size: 0.875rem;
  padding: 5px 10px;
}
#btn-primary{
text-decoration: none;
}
#btn-primary:hover{
background: #1a2b48;
}
  </style>
<style>
    /* Step Number Styling */
.step-number {
  width: 50px;
  height: 50px;
  line-height: 50px;
  margin: 0 0 15px;
  background-color: #eaf3ff;
  color: #000;
  font-size: 20px;
  font-weight: bold;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;

}
.step{
    padding-left: 30px;
    padding-right: 30px;
}
#step{
 border-right: solid 0.5px gray;   
}
#step_second{
 border-right: solid 0.5px gray;   
}
/* Step Title Styling */
.step-title {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 10px;
}

/* Step Description Styling */
.step-description {
  font-size: 14px;
  color: #555;
  line-height:1.75rem;
}
#contact-btn{
    text-decoration: none;
}
</style>
<?php 

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
// dd($curr_currency);

?> 
  <!-- today deals -->
         <div class="container custom-container">
             <div class="container my-5">
    <h2 class="mb-4">Today's Top Deals</h2>
    <div class="row">
      <!-- Deals Section -->
      <div class="col-lg-9 col-md-12">
        <div class="row g-4">
          <!-- Deal Card 1 -->
         <div class="col-md-4">
          <div class="deal-card">
            <div class="deal-content">
              <h5 style="color:white;">Delhi</h5>
              <div class="deal-info">
                <p class="deal-price mb-0">from <span class='currencyvalue' >300</span></p>
                <a href="<?php echo e(route('CountryShowDeals')); ?>" class="btn btn-primary btn-sm" id="btn-primary">View</a>
              </div>
            </div>
          </div>
        </div>
          <!-- Deal Card 2 -->

         <div class="col-md-4">
          <div class="deal-card1">
            <div class="deal-content">
              <h5 style="color:white;">Mumbai</h5>
              <div class="deal-info">
                <p class="deal-price mb-0">from <span class='currencyvalue' >300</span></p>
                <a href="<?php echo e(route('CountryShowDeals')); ?>" class="btn btn-primary btn-sm" id="btn-primary">View</a>
              </div>
            </div>
          </div>
        </div>
          <!-- Deal Card 3 -->
          <div class="col-md-4">
          <div class="deal-card2">
            <div class="deal-content">
              <h5 style="color:white;">Bangalore</h5>
              <div class="deal-info"> 
                <p class="deal-price mb-0">from <span class='currencyvalue' >300</span></p>
                <a href="<?php echo e(route('CountryShowDeals')); ?>" class="btn btn-primary btn-sm" id="btn-primary">View</a>
              </div>
            </div>
          </div>
        </div>
    </div>
           <div class="row pt-4 ">
          <!-- Additional Cards (example) -->
          <div class="col-md-8">
            <div class="deal-card3">
            <div class="deal-content">
              <h5 style="color:white;">Hyderabad</h5>
              <div class="deal-info">
                <p class="deal-price mb-0">from <span class='currencyvalue' >300</span></p>
                <a href="<?php echo e(route('CountryShowDeals')); ?>" class="btn btn-primary btn-sm" id="btn-primary">View</a>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="deal-card4">
            <div class="deal-content">
              <h5 style="color:white;">Ahmedabad</h5>
              <div class="deal-info">
                <p class="deal-price mb-0">from <span class='currencyvalue' >300</span></p>
                <a href="<?php echo e(route('CountryShowDeals')); ?>" class="btn btn-primary btn-sm" id="btn-primary">View</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- Contact Section -->
      <div class="col-lg-3 col-md-12">
        <div class="contact-section">
          <img src="<?php echo e(asset('images/today/dp.png')); ?>" class="rounded-circle mb-3" alt="Agent">
          <h3>Want to get deals up to  <br/><span class='currencyvalue'>300</span> lower?</h5>
          <p>Call our travel agents directly and get free quotes</p>
         <a class="btn contact-btn w-100" href="tel:+18555223344" id="contact-btn">Toll Free +1 855 522 3344</a>

        </div>
      </div>
    </div>
  </div>
        </div>

    <!-- today deals end -->
   <div class="bravo-list-news">

        <div class="container custom-container">
            

            
            
            <?php
                $country_detail = getcontrys();
                //print_r($country_detail);
            ?>

            <h1>Top Round-Trip Flight Deals For You</h1>
            
            <?php $__currentLoopData = $country_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="d-lg-flex d-block col-12 pl-0 pr-0 ">
                    <div class="image-section col-12 col-lg-4 col-md-12 p-0">
                        <img src="<?php echo e(url('uploads/country_images/' . $user->country_image)); ?>" alt="Africa Image">

                    </div>


                    <div class="container">

                        <h2><?php echo e($user->country_name); ?></h2>

                        <h5 class="currencyvalue"><?php echo e(str_replace(' ', '', $user->from_price)); ?></h5>
                        <?php
                            $countryId = $user->id;
                            $city_detail = getCountriesWithCities($countryId);

                            //   print_r($city_detail);

                        ?>

                        <div class="deals-grid">
                            <?php $__currentLoopData = $city_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('cheap-flight', str_replace(' ', '-', $city->city))); ?>"
                                    class="deal-link">
                                    <div class="deal-item" ><?php echo e($city->city); ?> 
                                    <span class='currencyvalue' ><?php echo e(str_replace(' ', '', $city->discount_price)); ?>></span></div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <a href="<?php echo e(route('showallCountry', ['city'=> $user->country_name])); ?>" class="view-deals-button">
                    View all <?php echo e($user->country_name); ?> Deals
                    </a> 
                        

                    </div>

                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            

            <?php if($title): ?>

               <!--  <div class="title">

                    <?php echo e($title); ?>


                    <?php if(!empty($desc)): ?>
                        <div class="sub-title">

                            <?php echo e($desc); ?>


                        </div>
                    <?php endif; ?>

                </div> -->

            <?php endif; ?>

            <div class="list-item">

                <div class="row">

                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6">

                            <?php echo $__env->make('News::frontend.blocks.list-news.loop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

        </div>
        

    </div>
    <!-- How work it start -->
     <div class="container custom-container">
        <div class="container py-5">
  <h1 class="text-left mb-4" style="font-size: 30px;">How it works</h1>
  <div class="row text-left">
    <!-- Step 1 -->
    <div class="col-md-4 " id="step">
      <div class="step">
        <div class="step-number text-left">1</div>
        <h5 class="step-title text-left">Call for Cheap Flights</h5>
        <p class="step-description text-left">
          Tripgare has unique contracts with Airlines and access to unpublished fares unavailable online. 
          Uncover the best deals to top destinations around the world by calling your Travel Agent.
        </p>
      </div>
    </div>
    <!-- Step 2 -->
    <div class="col-md-4" id="step_second">
      <div class="step">
        <div class="step-number text-left">2</div>
        <h5 class="step-title text-left">Get FREE Quotes</h5>
        <p class="step-description text-left">
          Free trip planning and personalized itineraries available 24/7. Discuss travel plans with your personal travel agent 
          and get as many details as you need.
        </p>
      </div>
    </div>
    <!-- Step 3 -->
    <div class="col-md-4" id="step_third">
      <div class="step">
        <div class="step-number text-left">3</div>
        <h5 class="step-title text-left">Pay Securely</h5>
        <p class="step-description text-left">
          Confirm your travel and book securely online. Tripgare offer a variety of payment solutions, and we want you 
          to feel confident by protecting your data and sensitive details.
        </p>
      </div>
    </div>
  </div>
</div>

     </div>
    
<script>
      async function fetchExchangeRates(baseCurrency = 'INR') {
        let storedRates = localStorage.getItem('exchangeRates');
        let lastFetchTime = localStorage.getItem('lastFetchTime');

        // Check if data is available and if it was fetched within the last 24 hours
        let now = new Date().getTime();
        let hours24 = 24 * 60 * 60 * 1000; // 24 hours in milliseconds

        if (storedRates && lastFetchTime && now - lastFetchTime < hours24) {
            console.log("Using cached exchange rates.");
            return JSON.parse(storedRates);
        }

        try {
            let response = await fetch(`https://v6.exchangerate-api.com/v6/0ef81d74b9132500f5c9a4fe/latest/${baseCurrency}`);
            let data = await response.json();

            if (data.result === "success") {
                localStorage.setItem('exchangeRates', JSON.stringify(data.conversion_rates));
                localStorage.setItem('lastFetchTime', now);
                console.log("Fetched new exchange rates from API.");
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

    function changeCurrency(selectedCurrency) {
        localStorage.setItem('currency', selectedCurrency);
        var currentUrl = new URL(window.location.href);
        currentUrl.searchParams.set('currency', selectedCurrency);
        window.location.href = currentUrl.href;
    }

    var initialCurrency = '<?php echo e($curr_currency); ?>';

    async function updateTotalPrice_change(pr) {
        let conversionRates = JSON.parse(localStorage.getItem('exchangeRates'));

        // Agar rates available nahi hain to API se fetch karenge
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
            let totalPrice = parseFloat(el.innerHTML.replace(/[^\d.-]/g, '')) || 0;
            let convertedPrice = totalPrice * conversionRates[pr];
            el.innerHTML = getCurrencyIcon_change(pr) + ` ${convertedPrice.toFixed(2).toLocaleString()}`;
        });
    }

    function getCurrencyIcon_change(selectedCurrency) {
        let icon;
        switch (selectedCurrency) {
            case 'USD':
                icon = '<i class="fa fa-dollar"></i>';
                break;
            case 'INR':
                icon = '<i class="fa fa-rupee"></i>';
                break;
            case 'CAD':
                icon = 'C<i class="fa fa-dollar"></i>';
                break;
            default:
                icon = selectedCurrency;
                break;
        }
        return icon;
    }

    document.addEventListener('DOMContentLoaded', async () => {
        await fetchExchangeRates(); // Ensure latest exchange rates are available
        updateTotalPrice_change(initialCurrency);
    });
</script>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/News/Views/frontend/blocks/list-news/index.blade.php ENDPATH**/ ?>