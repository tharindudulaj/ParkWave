<?php  
    session_start();

    $id = $_GET['update'];


    include "dbh.inc.php";

    if(isset($_POST['submit'])){
        $details = $_POST['details'];

        $update = "UPDATE `complaints` SET `details`='$details' WHERE compID='$id'";

        $result = mysqli_query($conn, $update);

        if($result){
            header("Location: complaintpage.php");
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update form</title>
    <link rel="stylesheet" href="./style/complaintformupdate.css">
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
                    <p>UPDATE FORM</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST">
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