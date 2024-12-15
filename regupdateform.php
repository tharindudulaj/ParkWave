<?php  

    session_start();

    include "dbh.inc.php";

    $id = $_SESSION['useID'];

    if(isset($_POST['submit'])){
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $state = $_POST['state'];
        $tele = $_POST['tele'];
        $psw = $_POST['psw'];

        if(empty($fName) && empty($lName) && empty($state) && empty($email) && empty($tele) && empty($psw)){
            echo "<script> alert('Please Fill the lines')</script>";
        }
        else{
            $update = "UPDATE `users` SET `fName`='$fName',`lName`='$lName',`state`='$state',`tele`='$tele',`psw`='$psw' WHERE userID='$id'";

            // if(!empty($fName)){
            //     $update .= "fName = '$fName', ";
            // }
            // if(!empty($lName)){
            //     $update .= "lName = '$lName', ";
            // }
            // if(!empty($state)){
            //     $update .= "state = '$state', ";
            // }
            // if(!empty($email)){
            //     $update .= "email = '$email', ";
            // }
            // if(!empty($tele)){
            //     $update .= "tele = '$tele', ";
            // }
            // if(!empty($psw)){
            //     $update .= "psw = '$psw' ";
            // }

            // $update .= "WHERE userID = $id";

            
            $result = mysqli_query($conn, $update);
            if($result){
                header("Location: userprofile.php");
            }
        }
        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg-update form</title>
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
                    <p>UPDATE PROFILE</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method="POST">
                        <div class="input-section">
                            <p>Name</p>
                            <div class="two-input">
                                <input type="text" name="fName" placeholder="First Name">
                                <input type="text" name="lName" placeholder="Last Name" >
                            </div>
                        </div>
                        <div class="input-section">
                            <p>City/State</p>
                            <input type="text" name="state" placeholder="City / State">
                        </div>
                        <div class="input-section">
                            <p>Telephone</p>
                            <input type="text" name="tele" placeholder="Telephone">
                        </div>
                        <div class="input-section">
                            <p>Password</p>
                            <input type="password" name="psw" id="psw" placeholder="Password">
                        </div>
                        <div class="input-selection btn">
                            <div class="s-btn">
                                <input type="submit" name="submit">
                            <div class="login-section">
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