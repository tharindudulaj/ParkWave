<?php
session_start();
include "dbh.inc.php";

$userID = $_SESSION['useID'];

$select = "SELECT * FROM `complaints` WHERE `userID`=$userID";

$result = mysqli_query($conn, $select);

if(isset($_GET['delete'])){

    $compID = $_GET['delete'];

    $delete = "DELETE FROM `complaints` WHERE `compID`=$compID";

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
    <title>Your Complaints</title>
    <link rel="stylesheet" href="./style/complaintpage.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>

<body>
    <?php
    include "./navbar.php";
    ?>
    <div class="container">
        <div class="lists-box">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="list-box">
                    <div class="comp-details">
                        <p><span>"</span><?php echo $row['details'] ?><span>"</span></p>
                    </div>
                    <div class="list-details">
                        <div class="item-text">
                            <p class="reason"><?php echo $row['reason'] ?></p>
                        </div>
                        <div class="list-btn">
                            <a href="./complaintformupdate.php?update=<?php echo $row['compID'] ?>" class="
                                updt-btn">UPDATE</a>
                            <a href="./complaintpage.php?delete=<?php echo $row['compID'] ?>" class = "dlt-bt">DELETE</a>
                        </div>
                    </div>
                </div>

            <?php }
            ; ?>
        </div>
    </div>
    <!-- footer section -->
    <?php
    include "./footer.php";
    ?>

    <script src="./script/navbar.js"></script>
</body>

</html>