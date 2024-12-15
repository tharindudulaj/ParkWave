<?php 
    session_start();

    include "dbh.inc.php";

    $spotID = $_GET['update'];

    if(isset($_POST['submit'])){
        $tele = $_POST['tele'];
        $price = $_POST['price'];

        $update = "UPDATE `parkingspaces` SET `UnitPrice`='$price',`tele`='$tele' WHERE `spotID`=$spotID";

        $result = mysqli_query($conn, $update);

        if($result){
            echo "<script>alert('Updated Successfuly')</script>";
            header("Location: listedParkingSpaces.php");
        }
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Registration form</title>
    <link rel="stylesheet" href="./style/psRegUpdate.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <?php  
        include "./navbar.php";
    ?>
    <div class="container">
        <div class="form-box">
            <div class="form-head">
                <div class="form-topic">
                    <p>PARKING SPACE UPDATE FORM</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST" enctype="multipart/form-data">
                         
                        <div class="input-section">
                            <p>Telephone</p>
                            <input type="text" name="tele" placeholder="Telephone" required>
                        </div>       
                        <div class="input-section">
                            <p>Price Per Hour</p>
                            <input type="text" name="price" placeholder="Price Per Hour" required>
                        </div>
                        <div class="input-selection btn">
                            <div class="s-btn">
                                <input type="submit" name="submit" value="UPDATE">
                             </div>
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