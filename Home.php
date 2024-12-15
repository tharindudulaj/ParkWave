
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style/Home.css">
    <link rel="stylesheet" href="./style/footernav.css">
    
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <div id="hero-bg">
            <?php  
                include "./navbar.php";
            ?>
            <div class="hero-content">
                <div class="hero-searchbar">
                    <div class="search">
                        <img src="./assets/search.svg" alt="">
                        <input type="text" placeholder="Search Location">
                    </div>
                </div>
            <div class="hero-text">
                <p class="hero-title">Welcome to the <span>PARKWAVE</span></p>
                <p class="hero-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet officiis voluptatum nostrum, <br>sequi ab sint ipsum animi sit laudantium fugiat!</p>
                <a href="./locateSpot.php" class="book-btn1">FIND PARKING!</a>
            </div>
            </div>
        </div>
        <div class="section-2">
            <div class="location-card-section">
                <div class="location-cards">
                    <div class="location-card">
                        <img src="./assets/colombo.jpg" alt="">
                        <p>COLOMBO</p>
                    </div>
                    <div class="location-card">
                        <img src="./assets/Kandy.jpg" alt="">
                        <p>KANDY</p>
                    </div>
                    <div class="location-card">
                        <img src="./assets/Galle.jpg" alt="">
                        <p>GALLE</p>
                    </div>
                    <div class="location-card">
                        <img src="./assets/Gampaha.jpg" alt="">
                        <p>GAMPAHA</p>
                    </div>
                </div> 
            </div>
            <div class="book-btn-sec-2">
                <a href="./BookingForm.php" class="book-btn book-btn2">BOOK NOW</a>
            </div>
            <div class="sec-2-text">
                <div class="sec-2-logo">
                    <img src="./assets/logo-black.png" alt="">
                </div>
                <p class="sec-2-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, <br>impedit assumenda! Veniam quo repudiandae odit quasi, nesciunt laborum possimus quos! Tenetur, magnam <br>odit dicta quia inventore hic sed magni ex.
                </p>
            </div>
        </div>
        <div class="section-3">
            <div class="sec-3-bg">
                <div class="sec-3-text">
                    <p class="sec-2-title">Now you can Rent your own <br><span>Parking Spots</span></p>
                    <p class="sec-2-description parking-spot-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet tenetur nesciunt illo, suscipit deserunt iste nulla quaerat aliquam ipsum non!</p>
                    <a href="./psregistrationform.php" class="parkingspot-btn">ADD A PARKING SPOT </a>
                </div>
            </div>
        </div>

    </div>
    <!-- footer section -->
    <?php  
        include "./footer.php";
    ?>

    <!-- JS link -->
    <script src="./script/Home.js"></script>
    <script src="./script/navbar.js"></script>
</body>
</html>