<?php 
    session_start();

    include "dbh.inc.php";

    if(isset($_POST['submit'])){

        $location = $_POST['location'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $tele = $_POST['tele'];
        $size = $_POST['size'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $userID = $_SESSION['useID'];
        $spotImg = $_FILES["spotImg"]["name"];
        $tmpName = $_FILES["spotImg"]["tmp_name"];
        $spotImgfolder = "upload/".$spotImg;
 

        $insert = "INSERT INTO `parkingspaces`(`userID`, `location`, `city`, `address`, `size`, `UnitPrice`, `type`, `tele`, `spotImg`) VALUES ('$userID','$location','$city','$address','$size','$price','$type','$tele','$spotImg')";

        $result = mysqli_query($conn, $insert);

        if($result){
            move_uploaded_file($tmpName, $spotImgfolder);
            header("Location: listedParkingSpaces.php");
        }
        else{
            echo "<script>alert('Image Not uploaded)</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Registration form</title>
    <link rel="stylesheet" href="./style/psRegistrationForm.css">
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
                    <p>PARKING SPACE REGISTRATION FORM</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="input-section">
                            <p>Location</p>
                            <div class="two-input">
                                <input type="text" name="location" placeholder="Location" required>
                                <input type="text" name="city" placeholder="City" required>
                            </div>
                        </div>
                        <div class="input-section">
                            <p>Address</p>
                            <input type="text" name="address" placeholder="Address" required>
                        </div>
                        <div class="input-section">
                            <p>Telephone</p>
                            <input type="text" name="tele" placeholder="Telephone" required>
                        </div>
                        <div class="input-section">
                            <p>Area-Size</p>
                            <input type="text" name="size" placeholder="Area-Size (in perches)" required>
                        </div>
                        <div class="input-section">
                            <p>Price Per Hour</p>
                            <input type="text" name="price" placeholder="Price Per Hour" required>
                        </div>
                        <div class="input-section">
                            <p>Type off Parking Space</p>
                            <input type="text" name="type" placeholder="Garage / Outdoor / Indoor / Street" required>
                        </div>
                        <div class="input-selection img-upload">
                            <p>Upload an Image</p>
                            <input type="file" name="spotImg" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="input-selection btn">
                            <div class="s-btn">
                                <input type="submit" name="submit" value="REGISTER">
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