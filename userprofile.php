<?php 
    session_start();

    include "./dbh.inc.php";

    $id = $_SESSION['useID'];

    $select = "SELECT * FROM users WHERE userID = $id";

    $result = mysqli_query($conn, $select);

    if(isset($_POST['delete'])){

        $delete  = "DELETE FROM users WHERE userID=$id";

        $result = mysqli_query($conn, $delete);

        if($result){
            header("Location: landing.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserProfile-ParkWave</title>
    <link rel="stylesheet" href="./style/userprofile.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <!-- Navigation bar -->
    <?php  
        include "./navbar.php";
    ?>
    <div class="hero-section">
        <div class="myaccount-section">
            <ul>
                <li class="tab-1 tab active"><p>Personal Details</p></li>
                <li class="tab-2 tab"><p>Preferences</p></li>
                <li class="tab-3 tab"><p>Security</p></li>
                <li class="tab-4 tab"><p>Privacy</p></li>
                <li class="tab-5 tab"><p>Notifications</p></li>
            </ul>
        </div>
        <div class="personaldetails-section">

        <?php  
        while($row = mysqli_fetch_assoc($result)){?>
            <section class="sec-1 sec active">
                <div class="identity">
                    <p>Hello,  <?php echo $row['fName'] ?></p>
                    <div><img src="./upload/<?php echo $row['ProfileIMG'] ?>"></div>
                </div>
                <h2>Personal Details</h2>
                <div class="name detail-set">
                    <p class="detail">Name</p>
                    <div><p><?php echo $row['fName']." ".$row['lName'] ?></p></div>
                </div>
                <div class="email detail-set">
                    <p class="detail">Email</p>
                    <div><p><?php echo $row['email'] ?></p></div>
                </div>
                <div class="tele detail-set">
                    <p class="detail">City / State</p>
                    <div><p><?php echo $row['state'] ?></p></div>
                </div>
                <div class="tele detail-set">
                    <p class="detail">Telephone Number</p>
                    <div><p><?php echo $row['tele'] ?></p></div>
                </div>
                <div class="update-delete">
                    <a href="./regupdateform.php" id="update">UPDATE</a>
                    <form method="POST">
                    <input type="submit" id="delete" name="delete" value="DELETE">
                    </form>
                </div>
           </section>
        <?php };?>

        
           
           <section class="sec-2 sec sec-coming">
            <!-- sec-2 details -->
            <p>Preferences</p>
        </section>
        <section class="sec-3 sec sec-coming">
                <p>Security</p>
                <!-- sec-3 details -->
            </section>
            <section class="sec-4 sec sec-coming">
                <!-- sec-4 details -->
                <p>Privacy</p>
            </section>
            <section class="sec-5 sec sec-coming">
                <!-- sec-5 details -->
                <p>Notifications</p>

            </section>
        </div>
    </div>

    <!-- footer section -->
    <?php  
        include "./footer.php";
    ?>
    
    <!-- javascript -->
    <script src="./script/userprofile.js"></script>
    <script src="./script/navbar.js"></script>
</body>
</html>