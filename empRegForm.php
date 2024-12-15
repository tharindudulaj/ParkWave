<?php 
    include 'dbh.inc.php';

    if(isset($_POST['submit'])){
        $fName=$_POST['fName'];
        $lName=$_POST['lName'];
        $NIC=$_POST['NIC'];
        $email=$_POST['email'];
        $tele=$_POST['tele'];
        $address=$_POST['address'];
        $role=$_POST['role'];
        
        $insert="INSERT INTO staff(fName,lName,NIC,email,tele,address,role) VALUES('$fName','$lName','$NIC','$email','$tele','$address','$role')";
        $sql= mysqli_query($conn, $insert);
        if(isset($insert)){
            header("location: ./admin.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration form</title>
    <link rel="stylesheet" href="./style/empRegForm.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="form-head">
                <div class="form-topic">
                    <p>EMPLOYEE REGISTRATION FORM</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="" method = "POST">
                        <div class="input-section">
                            <p>Name</p>
                            <div class="two-input">
                                <input type="text" name="fName" placeholder="First Name" required>
                                <input type="text" name="lName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="input-section">
                            <p>NIC Number</p>
                            <input type="text" name="NIC" placeholder="NIC" required>
                        </div>
                        <div class="input-section">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="input-section">
                            <p>Telephone</p>
                            <input type="text" name="tele" placeholder="Telephone">
                        </div>
                        <div class="input-section">
                            <p>Address</p>
                            <input type="text" name="address" placeholder="Address" required>
                        </div>
                        <div class="input-section">
                            <p>Role / Section</p>
                            <input type="text" name="role" placeholder="Role / Section" required>
                        </div>
                        <div class="s-btn">
                            <input type="submit" name="submit" value="SUBMIT">
                         </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>