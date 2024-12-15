<?php 
    session_start();
    include "dbh.inc.php";

    if(isset($_POST['submit'])){
        $vNumber = $_POST['vNumber'];
        $tele = $_POST['tele'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $userID = $_SESSION['useID'];
        $spotID = $_GET['book'];

        $insert = "INSERT INTO `booking`(`userID`, `spotID`, `vNo`, `tele`, `date`, `time`) VALUES ('$userID','$spotID','$vNumber','$tele','$date','$time')";

        $result = mysqli_query($conn, $insert);

        if($result){
            header("Location: payment.php");
        }
       

    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking form</title>
    <link rel="stylesheet" href="./style/booking.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <!-- navbarHtml -->
    <?php  
         include "./navbar.php";
    ?>

    <div class="container">
        <div class="form-box">
            <div class="form-head">
                <div class="form-topic">
                    <p>BOOKING FORM</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST">
                        
                        <div class="input-section">
                            <p>Vehicle Number</p>
                            <input type="text" name="vNumber" placeholder="Vehicle Number" required>
                        </div>
                        <div class="input-section">
                            <p>Telephone</p>
                            <input type="text" name="tele" placeholder="Telephone">
                        </div>
                        <div class="input-section">
                            <p>Booking Date</p>
                            <input type="date" name="date" required>
                        </div>
                        <div class="input-section">
                            <p>Start Time</p>
                            <input type="time" name="time" required>
                        </div>
                        <div class="s-btn">
                            <input type="submit" name="submit" value="BOOK">
                         </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <?php  
        include "./footer.php";
    ?>

<script src="./script/navbar.js"></script>
    
</body>
</html>