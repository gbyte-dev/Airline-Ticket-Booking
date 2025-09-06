<style>
    .subscription-container {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: none !important;
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
<!-- Subscription Modal (as described above) -->
<div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="subscription-container text-center" style="box-shadow:none;">
                    <img alt="Envelope with a voucher inside" class="email-icon" height="70" src="https://storage.googleapis.com/a1aa/image/lGWDedZ5qYQJTq8vfpokUMRNd2at6xwAxs0cUSDT4D5XgirTA.jpg" width="100" />
                    <h5 class="subscription-title">Subscribe now and receive c$30 off flight voucher!</h5>
                    <p class="subscription-description">Unlock exclusive discounts on airline tickets by subscribing! Enter your email address and get a special voucher for your next flight.</p>
                    <form>
                        <input class="form-control subscription-input" placeholder="Your best email" type="email" required />
                        <p>AND / OR</p>
                        <div class="input-group mb-3">
                            <div class="custom-dropdown">
                                <div class="custom-select" id="selectedCountry">
                                    <img id="selectedFlag" class="flag-img" src="https://flagcdn.com/w320/in.png" alt="Country Flag" />
                                    <span id="countryCodeDisplay">+91</span>
                                </div>
                                <div class="custom-dropdown-content" id="countryDropdown"></div>
                            </div>
                            <input class="form-control subscription-input" placeholder="Phone" type="text" />
                        </div>
                        <div class="form-check mb-3">
                            
                            <label class="form-check-label d-flex justify-content-between" for="smsConsent">
                                <input class="form-control" id="smsConsent" type="checkbox" style="height: 17px; margin-top:3px;"/>
                                <span style="text-align: justify;">
                                    I agree to receive promotional SMS via an autodialer, and this agreement isn't a condition of purchase. I also agree to
                                    <a href="#" target="_blank">T&amp;Cs</a> and <a href="#" target="_blank">Privacy Policy</a>. 
                                    Up to 5 Msgs/month. Msg &amp; Data rates may apply.
                                </span>
                            </label>
                        </div>
                        <button class="btn btn-primary btn-lg subscription-button" type="submit">Subscribe and get a Voucher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Show the modal when the page loads
	 	  setTimeout(function() {
				$('#subscriptionModal').modal('show'); // 3 second ke delay ke baad modal open hoga
			}, 30000);
					

        // Country data for India, Canada, and the USA
        const countryData = [{
                code: "+91",
                flag: "https://flagcdn.com/w320/in.png"
            },
            {
                code: "+1",
                flag: "https://flagcdn.com/w320/ca.png"
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
