<style>
    .subscription-container {
        background-color: #ffffff;
        border-radius: 10px;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
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
        height: 40px;
        border-right: none;
        border-radius: 0;
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


<!-- Subscription Modal (as described above) -->
<div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="subscription-container text-center">
                    <img alt="Envelope with a voucher inside" class="email-icon" 
                        src="<?php echo e(asset('public/images/trip/aaa.png')); ?>"
                        width="100" />
                    <h5 class="subscription-title">Subscribe now and receive C$30 off flight voucher!</h5>
                    <p class="subscription-description">Unlock exclusive discounts on airline tickets by subscribing!
                        Enter your email address and get a special voucher for your next flight.</p>
                    <form action="<?php echo e(route('subscribe')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="phone" id="fullPhoneNumber" />
                        <input class="form-control subscription-input" placeholder="Your email" type="email"
                            name="email" style="border-radius: 0;" required />
                        <div class="input-group mb-3">
                            <div class="custom-dropdown">
                                <div class="custom-select" id="selectedCountry">
                                    <img id="selectedFlag" class="flag-img" src="https://flagcdn.com/w320/in.png"
                                        alt="Country Flag" />
                                    <span id="countryCodeDisplay" name="countryCode">+1</span>
                                </div>
                                <div class="custom-dropdown-content" id="countryDropdown"></div>
                            </div>
                            <input class="form-control subscription-input subscription-input_phone" placeholder="Phone" type="number" style="border-left:none;border-radius:0;" 
                                  required/>
                        </div>
                        <div class="">
                            <label class="form-check-label d-flex justify-content-between" for="smsConsent">
                                <input class="form-control" id="smsConsent" type="checkbox"
                                    style="height: 17px; margin-top:3px;" name="smsConsent" required />
                                <span style="text-align: justify;">
                                    I agree to receive promotional SMS via an autodialer, and this agreement isn't a
                                    condition of purchase. I also agree to
                                    <a href="<?php echo e(route('page.detail',['slug' => 'privacy-policy'])); ?>">T&amp;Cs</a> and <a href="<?php echo e(route('page.detail', ['slug' => 'privacy-policy'])); ?>"
                                        >Privacy Policy</a>.
                                    Up to 5 Msgs/month. Msg &amp; Data rates may apply.
                                </span>
                            </label>
                        </div>
                        <button class="btn btn-primary btn-lg subscription-button" style="margin-top: 10px;" type="submit">Subscribe and get a
                            Voucher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<script>
    $(document).ready(function() {
        // Check if the IP address exists
        $.ajax({
            url: '<?php echo e(route("subscribe.check-ip")); ?>', // Adjust to your route for checking IP
            method: 'POST', // Change to POST
            data: {
                _token: '<?php echo e(csrf_token()); ?>' // Include CSRF token for security
            },
            success: function(response) {
                if (!response.ipExists) {
					 setTimeout(function() {
						$('#subscriptionModal').modal('show'); // 3 second ke delay ke baad modal open hoga
					}, 30000);
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
</script>-->
<script>
    document.querySelector('.subscription-input_phone').addEventListener('input', function() {
     let countryCode = document.getElementById('countryCodeDisplay').textContent;
    
    let phoneNumber = this.value;
    let fullPhoneNumber = countryCode + phoneNumber;
    document.querySelector('input[name="phone"]').value = fullPhoneNumber;
});

</script>

<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/Base/Template/Views/frontend/blocks/form-search-all-service/subscription.blade.php ENDPATH**/ ?>