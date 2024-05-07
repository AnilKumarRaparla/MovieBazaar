<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Bazaar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles2.css">
   

</head>
<body>
    <header class="header">
        <img src="C:\Users\Anil\Desktop\Hello\OIP (8).jpeg" alt="Profile" class="profile-image">
        <div class="header-left">
            <h1 style="font-size: 60px;"><span style="color: yellow; font-size: 60px;"><strong>M</strong></span>ovie <span style="color: orangered; font-size: 60px;"><strong>B</strong></span>azaar</h1>
        </div>
        <nav class="nav">
            <a href="Movie.php" class="nav-item">Showing Movies</a>
            <a href="upcomingMovies.php" class="nav-item">Upcoming Movies</a>
            <a href="events.php" class="nav-item">Events</a>
            <a href="offers.php" class="nav-item">Offers</a>
            <a href="profile.php" class="nav-item">Profile</a>
        </nav>
    </header>
    <main> 
        <section id="movieSelection" class="section">
            <h2 class="section__title">Select a Movie</h2>
            <div class="movie-list">
                <!-- Movie cards dynamically generated with JavaScript -->
            </div>
        </section>
        <br>
        <section id="seatSelection" class="section">
            <h2 class="section__title">Select Seats</h2>
            <div class="seat-map">
                <!-- Interactive seat map with JavaScript-generated seats -->
                <section id="seatSelection" class="section">
        <div class="screen">Screen</div>
            </div>
            <p>Total Price (incl. GST): <span id="totalPrice">₹0</span></p>
            <button id="confirmSeats">Confirm Seats</button>
        </section>
        <section id="bookingDetails" class="section">
            <h2 class="section__title">Booking Details</h2>
            <div class="location-selection">
                <label for="locationDropdown">Select Location:</label>
                <select id="locationDropdown" class="form-select">
                    <option value="location1">Select</option>
                    <option value="location1">Ongole</option>
                    <option value="location2">Chennai</option>
                    <!-- Add more location options as needed -->
                </select>
            </div>
            <div class="date-selection">
                <label for="datePicker">Select Booking Date:</label>
                <input type="date" id="datePicker" class="form-control">
            </div>
            <div class="time-selection">
                <label for="timeDropdown">Select Show Timing:</label>
                <select id="timeDropdown" class="form-select">
                    <option value="10am">10:00 AM</option>
                    <option value="2pm">2:00 PM</option>
                    <option value="6pm">6:00 PM</option>
                </select>
            </div>
            <button id="confirmBookingDetails" class="btn btn--confirm">Confirm Details</button>
        </section>
        <section id="bookingSummary" class="section">
            <h2 class="section__title">Booking Summary</h2>
            <p>Movie: <span id="bookingMovie"></span></p>
            <p>Seats: <span id="bookingSeats"></span></p>
            <p class="total-price">Total Price: <span id="bookingTotalPrice"></span></p>
            <button id="confirmBooking" class="btn btn--confirm">Confirm Booking</button>
        </section>
        <section id="payment" class="section">
            <h2 class="section__title" style="text-align: center;">Payment</h2>
            <form id="paymentForm">
                <!-- Payment form fields -->
                <button id="payButton" class="btn btn--pay">Pay Now</button>
            </form>
        </section>    
    </main>
    <section id="services" class="section">
        <div class="container">
            <h2 class="section__title" style="text-align: center;">Our Services</h2>
            <div class="services-list">
                <div class="service">
                    <img src=C:\Users\Anil\Desktop\Hello\Online-Booking-696x462.jpg alt="Service Icon">
                    <h3>Online Booking</h3>
                    <p>Book your movie tickets online from the comfort of your home.</p>
                </div>
                <div class="service">
                    <img src="C:\Users\Anil\Desktop\Hello\OIP (3).jpeg" alt="Service Icon">
                    <h3>Multiple Locations</h3>
                    <p>Choose from a variety of theaters across different cities.</p>
                </div>
                <div class="service">
                    <img src="C:\Users\Anil\Desktop\Hello\OIP (4).jpeg" alt="Service Icon">
                    <h3>Flexible Timings</h3>
                    <p>Enjoy movies at various show timings throughout flexible timings the day.</p>
                </div>
                <div class="service">
                    <img src="C:\Users\Anil\Desktop\Hello\OIP (2).jpeg" alt="Service Icon">
                    <h3>Comfortable Seats</h3>
                    <p>Relax in our comfortable and spacious seating arrangements.</p>
                </div>
                <div class="service">
                    <img src="C:\Users\Anil\Desktop\Hello\download.jpeg" alt="Service Icon">
                    <h3>Concession Stands</h3>
                    <p>Indulge in a variety of snacks and beverages at our concession stands.</p>
                </div>
                <div class="service">
                    <img src="C:\Users\Anil\Desktop\Hello\OIP (5).jpeg" alt="Service Icon">
                    <h3>Friendly Staff</h3>
                    <p>Our helpful staff is ready to assist you throughout your movie.</p>
                </div>
            </div>
        </div>
    </section>
    

    <footer class="footer">
        <p>&copy; 2023 Movie Ticket Booking System</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
