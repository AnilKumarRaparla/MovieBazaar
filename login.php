

<?php
session_start();
    $msg = "";
    if(isset($_POST['btnlogin']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $link = mysqli_connect("localhost","root","","moviedb");
        $qry = "select * from users where username='$username' and password='$password'";
        $resultset = mysqli_query($link, $qry);
        if(mysqli_num_rows($resultset)>0)
        {
            $r = mysqli_fetch_array($resultset);
            $_SESSION['uid']=$r[0];
           // echo $_SESSION['uid'];
            header("location:profile.php");
        }
        else
            $msg = "<font color='red'>Invalid Username and Password !!!!</font>";
        mysqli_close($link);
        
    }
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
   <style>
    .form-group{
        width: 50%;
        margin-left: 30%;
    }
    .btn{
        width: 50%;
        margin-left: 30%;
    }

   </style>
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
    <br>
<div class="container">
<h1 class="text-center" style="font-family: 'Times New Roman', Times, serif;">Login</h1>
<form action="" method="post" class="needs-validation" novalidate>
<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
<div class="invalid-feedback">
Username is required.
</div>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
<div class="invalid-feedback">
Password is required.
</div>
</div>
<br>
<button type="submit" class="btn btn-primary" name="btnlogin">Login</button>
</form>
<?php echo $msg; ?>
</div>
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

</body>
</html>
