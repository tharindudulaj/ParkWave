<?php
session_start();




include "dbh.inc.php";

if (isset($_POST['submit'])) {



    $userID = $_SESSION['useID'];
    $reason = $_POST['reason'];
    $details = $_POST['details'];

    if (empty($userID) || empty($reason) || empty($details)) {
        echo "<script>alert('Please Fill the blancks')</script>";
    } else {
        $insert = "INSERT INTO `complaints`(`userID`, `reason`, `details`) VALUES ('$userID','$reason','$details')";

        $result = mysqli_query($conn, $insert);

        if ($result) {
            header("Location: userdashboard.php");
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint form</title>
    <link rel="stylesheet" href="./style/complaintform.css">
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
                    <p>COMPLAINT FORM</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST">

                        <div class="input-section">
                            <p>Reason</p>
                            <input type="text" name="reason" required>
                        </div>
                        <div class="input-section">
                            <p>Addition details</p>
                            <textarea name="details" id="details" cols="50" rows="10"></textarea>
                        </div>
                        <div class="s-btn">
                            <input type="submit" name="submit" value="SUBMIT">
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