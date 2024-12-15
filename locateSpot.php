<?php 
    include "dbh.inc.php";

    $select = "SELECT * FROM `parkingspaces`";

    $result = mysqli_query($conn, $select);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locate Spot</title>
    <link rel="stylesheet" href="./style/locateSpot.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <div class="header-bg">
    <?php  
        include "./navbar.php";
    ?>

        <div class="hero">
            <div class="hero-content">
                <div class="search">
                    <img src="./assets/search.svg" alt="">
                    <input type="text" placeholder="Search Location">
                </div>
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.8151251542!2d79.85620549999999!3d6.921838650000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1714595536815!5m2!1sen!2slk" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    <?php  while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="lists-box">
            <div class="list-box">
                <img src="./upload/<?php echo $row['spotImg'] ?>" alt="">
                <div class="list-details">
                    <div class="item-text">
                        <p class="location"><?php echo $row['location'] ?>,</p>
                        <p class="city"><?php echo $row['city'] ?></p>
                    </div>
                    <p class="price"><?php echo $row['UnitPrice'] ?>/perHour</p>
                    <div class="list-btn">
                        <div class="list-btn">
                            <a href="./BookingForm.php?book=<?php  echo $row['spotID'] ?>" class="book-btn">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
    <?php } ?>
            
    </div>
    
    <!-- footer section -->
    <?php  
        include "./footer.php";
    ?>

<script src="./script/navbar.js"></script>
</body>
</html>