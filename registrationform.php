<?php  

    session_start();

    include "dbh.inc.php";

    if(isset($_POST['signup'])){
        

        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $state = $_POST['state'];
        $email = $_POST['email'];
        $tele = $_POST['tele'];
        $psw = $_POST['psw'];
        $rePsw = $_POST['rePsw'];
        $ProfileIMG = $_FILES["ProfileIMG"]["name"];
        $tmpName = $_FILES["ProfileIMG"]["tmp_name"];
        $ProfileIMGfolder = "upload/".$ProfileIMG;
    
       $insert = "INSERT INTO `users`(`fName`, `lName`, `state`, `email`, `tele`, `psw`, `rePsw`, `ProfileIMG`) VALUES ('$fName','$lName','$state','$email','$tele','$psw','$rePsw','$ProfileIMG')";


    $result = mysqli_query($conn, $insert);

    if($result){
        move_uploaded_file($tmpName,  $ProfileIMGfolder);
        header("Location: login.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP form</title>
    <link rel="stylesheet" href="./style/registrationform.css">
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
                    <p>SIGN UP</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="input-section">
                            <p>Name</p>
                            <div class="two-input">
                                <input type="text" name="fName" placeholder="First Name" required>
                                <input type="text" name="lName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="input-section">
                            <p>City/State</p>
                            <input type="text" name="state" placeholder="City / State" required>
                        </div>
                        <div class="input-section">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="input-section">
                            <p>Telephone</p>
                            <input type="text" name="tele" placeholder="Telephone" required>
                        </div>
                        <div class="input-section">
                            <p>Password</p>
                            <input type="password" name="psw" id="psw" placeholder="Password" required>
                        </div>
                        <div class="input-section">
                            <p>Re-Password</p>
                            <input type="password" name="rePsw" id="re-psw"  placeholder="Re-enter Password" required>
                        </div>
                        <div class="input-photo">
                            <p>Profile Photo</p>
                            <input type="file" name="ProfileIMG" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="input-selection btn">
                            <div class="s-btn">
                                <input type="submit" name="signup">
                            <div class="login-section">
                                <p>Already have an account? <span><a href="./login.php">LOG IN</a></span>
                                </p>
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

    <!-- JS for validate password -->
    <script src="./script/pasword.js"></script>
    <script src="./script/navbar.js"></script>
    
</body>
</html>