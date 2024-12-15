<?php 
    session_start();
    include "dbh.inc.php";

    $bookID = $_GET['update'];

    if(isset($_POST['submit'])){

        $vNumber = $_POST['vNumber'];
        $tele = $_POST['tele'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        $update = "UPDATE `booking` SET `vNo`='$vNumber',`tele`='$tele',`date`='$date',`time`='$time' WHERE `bookiID`=$bookID";

        $result = mysqli_query($conn, $update);
        if($result){
            header("Location: userdashboard.php");
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
                    <p>BOOKING UPDATE FORM</p>
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