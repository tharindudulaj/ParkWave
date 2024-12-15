<?php
session_start();

include "dbh.inc.php";

$userID = $_SESSION['useID'];

$select = "SELECT * FROM `booking1` WHERE `userID`=$userID";

$result = mysqli_query($conn, $select);

if(isset($_GET['delete'])){
    $bookID =$_GET['delete'];
    $delete = "DELETE FROM `booking` WHERE `bookiID`=$bookID";

    $ref = mysqli_query($conn, $delete);

    if($ref){
        header("Location: userdashboard.php");
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER Dashboard</title>
    <link rel="stylesheet" href="./style/userdashboard.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>

<body>

    <?php
    include "./navbar.php";
    ?>

    <div class="section-1">
        <div class="sec-1-container">
            <div class="sec-1-lists">
                <div class="sec-1-list">
                    <p class="pagetag">USER DASHBOARD</p>
                </div>
            </div>
            <div class="section-2">
                <div class="container">
                    <p class="topic">MY BOOKINGS<span>.</span></p>
                    <div class="lists-box">

                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                            <div class="list-box">
                            <div class="list-details">
                                <div class="item-text">
                                    <p class="city">PARKING SPOT : APS-L<?php echo $row['spotID'] ?></p>
                                    <p class="city">BOOKING NO : APS-B<?php echo $row['bookiID'] ?></p>
                                </div>
                                <div class="item-text-2">
                                <p class="book-date"><?php echo "Vehicle No : ".$row['vNo'] ?></p>
                                <p class="book-date"><?php echo $row['date'] ?></p>
                                <p class="book-date"><?php echo $row['time'] ?></p>
                                </div>
                                <div class="list-btn">
                                    <a href="BookingUpdate.php?update=<?php echo $row['bookiID'] ?>" class="updt-btn">UPDATE</a>
                                    <a href="userdashboard.php?delete=<?php echo $row['bookiID'] ?>" class="dlt-btn">DELETE</a>
                                </div>
                            </div>
                        </div>
                       <?php } ?>


                    </div>
                </div>
            </div>
            <div class="section-3">
                <div class="parking-spot-btn-sec">
                    <a href="./listedParkingSpaces.php" class="parking-spt-btn">YOUR LISTED PARKING AREAS</a>
                </div>
            </div>
            <div class="section-4">
                <div class="sec-4-content">
                    <div class="complaint-box">
                        <p class="topic">Make a Complain?</p>
                        <textarea name="" id="" cols="70" rows="10"></textarea>
                        <a href="./complaintform.php" class="creat-btn">CREATE</a>
                    </div>
                    <a href="./complaintpage.php" class="complain-page-btn">YOUR COMPLAINTS</a>
                </div>
            </div>

            <!-- footer section -->
            <?php
            include "./footer.php";
            ?>

            <script src="./script/navbar.js"></script>

</body>

</html>