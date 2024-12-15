<?php

session_start();

include "dbh.inc.php";

$id = $_SESSION['useID'];

$select = "SELECT * FROM `parkingspaces` WHERE `userID`=$id";

$result = mysqli_query($conn, $select);

if (isset($_GET['delete'])) {

    $spotID = $_GET['delete'];

    $delete = "DELETE FROM `parkingspaces` WHERE `spotID`=$spotID";

    $ref = mysqli_query($conn, $delete);

    if ($ref) {
        echo "<script>alert(Successfully Deleted!')</script>";
        header("Location: userdashboard.php");
        echo "<script>alert(Successfully Deleted!')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listed Parking Spaces</title>
    <link rel="stylesheet" href="./style/listedParkingSpaces.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>

<body>
    <?php
    include "./navbar.php";
    ?>

    <div class="container">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="list-box">
                <img src="./upload/<?php echo $row['spotImg'] ?>" alt="">
                <div class="list-details">
                    <div class="item-text">
                        <p class="location"><?php echo $row['location'] ?>,</p>
                        <p class="city"><?php echo $row['city'] ?></p>
                    </div>
                    <p class="price"><?php echo $row['UnitPrice'] ?>/perHour</p>
                    <div class="list-btn">
                        <a href="./psupdateform.php?update=<?php echo $row['spotID'] ?>" class="updt-btn">UPDATE</a>
                        <a href="./listedParkingSpaces.php?delete=<?php echo $row['spotID'] ?>" class="dlt-btn">DELETE</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    </div>

    <!-- footer section -->
    <?php
    include "./footer.php";
    ?>

    <script src="./script/navbar.js"></script>
</body>

</html>