<style>
    .trip-header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .trip-section {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #fff;
        /* Keep trip section white for contrast */
    }

    .trip-section-header {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .flight-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .flight-details img {
        width: 40px;
        height: 40px;
    }

    .flight-info {
        flex: 1;
        margin-left: 10px;
    }

    .flight-time {
        font-size: 24px;
        font-weight: bold;
    }

    .flight-duration {
        display: flex;
        align-items: center;
    }

    .flight-duration i {
        margin-right: 5px;
    }

    .layover {
        text-align: center;
        margin: 10px 0;
        padding: 5px;
        background-color: #f8f8f8;
        border-radius: 4px;
    }

    .price-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #f8f8f8;
        border-top: 1px solid #ddd;
    }

    .price {
        font-size: 24px;
        font-weight: bold;
    }

    .book-button {
        background-color: #ff6600;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
    }

    @media (max-width: 768px) {
        .flight-details {
            flex-direction: column;
            align-items: flex-start;
        }

        .flight-time,
        .flight-duration,
        .baggage-info {
            margin-top: 10px;
        }
    }
</style>
<div class="modal fade" id="flightFormBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Details of your round trip</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                <div class="trip-section" id="detailin">
                  
                    <div class="layover">
                        Short layover 0h 35m
                    </div>
                    <div class="flight-details">
                        <img alt="Virat logo" height="40" src="https://example.com/virat-logo.png" width="40" />
                        <div class="flight-info">
                            <div>
                                Virat
                            </div>
                            <div>
                                6E-164 Economy
                            </div>
                            <div>
                                Bajpe, Mangalore
                            </div>
                        </div>
                        <div class="flight-time">
                            IXE
                            <strong>
                                20:00
                            </strong>
                        </div>
                        <div class="flight-duration">
                            <i class="far fa-clock"></i>
                            1h 35m
                        </div>
                        <div class="flight-time">
                            BOM
                            <strong>
                                21:35
                            </strong>
                        </div>
                        <div class="flight-info">
                            <div>
                                Wed, 25 Sep 2024
                            </div>
                            <div>
                                Chatrapati Shivaji Airport, Terminal 2, Mumbai
                            </div>
                        </div>
                        <div class="baggage-info">
                            <div>
                                Check-in baggage 15kg(1 piece) / adult
                            </div>
                            <div>
                                Cabin baggage 7kg / adult
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trip-section" id="detailout">
                    <div class="trip-section-header">
                        Mumbai → Bangalore Tue, 8 Oct
                    </div>
                    <div class="flight-details">
                        <img alt="Virat logo" height="40" src="https://example.com/virat-logo.png" width="40" />
                        <div class="flight-info">
                            <div>
                                Virat
                            </div>
                            <div>
                                6E-164 Economy
                            </div>
                            <div>
                                Chatrapati Shivaji Airport, Terminal 2, Mumbai
                            </div>
                        </div>
                        <div class="flight-time">
                            BOM
                            <strong>
                                14:00
                            </strong>
                        </div>
                        <div class="flight-duration">
                            <i class="far fa-clock"></i>
                            2h 5m
                        </div>
                        <div class="flight-time">
                            MAA
                            <strong>
                                16:05
                            </strong>
                        </div>
                        <div class="flight-info">
                            <div>
                                Tue, 8 Oct 2024
                            </div>
                            <div>
                                Chennai International Airport, Terminal 1, Chennai
                            </div>
                        </div>
                        <div class="baggage-info">
                            <div>
                                Check-in baggage 15kg(1 piece) / adult
                            </div>
                            <div>
                                Cabin baggage 7kg / adult
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price">
                        ₹12,647
                    </div>
                    <button class="book-button">
                        Book
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Flight/Views/frontend/layouts/search/modal-form-book.blade.php ENDPATH**/ ?>