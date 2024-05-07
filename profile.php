<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
    <main class="main-content">
        <section class="user-info">
            <img src="C:\Users\Anil\Desktop\Res_pic.jpg" alt="Profile" class="profile-image">
            <div class="user-details">
                <h2 class="user-name">Anil Kumar Raparla</h2>
                <p class="user-email">Email: anilkumarraparla@outlook.com</p>
                <p class="user-membership">Membership: Premium</p>
            </div>
            <div class="user-options">
                <a href="editProfile.php" class="user-option">Edit Profile</a>
                <a href="settings.php" class="user-option">Settings</a>
                <a href="logout.php" class="user-option">Logout</a>
                <a href="help.php" class="user-option">Help</a>
            </div>
        </section>
        <br>
        <section id="bookingHistory" class="section">
            <h3 class="section__title" style="margin-left: 12.5%;">Booking History</h3>
            <div class="booking-history">
                <div class="booking">
                    <p>Movie: Avatar 2</p>
                    <p>Date: January 15, 2023</p>
                </div>
                <div class="booking">
                    <p>Movie: Masooda</p>
                    <p>Date: February 5, 2023</p>
                </div>
                <!-- Add more booking entries here -->
            </div>
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
</body>
</html>
