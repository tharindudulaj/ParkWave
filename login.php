<?php 

    session_start();
    
    include "dbh.inc.php";

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $psw = $_POST['psw'];

        $select = "SELECT * FROM users WHERE email='$email' AND psw='$psw'";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result)){
            while ($row = mysqli_fetch_assoc($result)){
                $_SESSION['useID'] = $row['userID'];
            }
            header("Location: ./Home.php");
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIN form</title>
    <link rel="stylesheet" href="./style/login.css">
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
                    <p>LOG IN</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST">
                        <div class="input-section">
                            <p>Email Address</p>
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="input-section">
                            <p>Password</p>
                            <input type="password" name="psw" placeholder="example@gmail.com" required>
                        </div>
                        <div class="input-selection btn">
                            <div class="forget-section">
                                <p>Forget Password
                                </p>
                            </div>
                            <div class="s-btn">
                                <input type="submit" name="submit" value="LOG IN">
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