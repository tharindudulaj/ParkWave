<?php 
    include 'dbh.inc.php';
    $id = $_GET['edit'];

    if(isset($_POST['update'])){
        $fName=$_POST['fName'];
        $lName=$_POST['lName'];
        $NIC=$_POST['NIC'];
        $email=$_POST['email'];
        $tele=$_POST['tele'];
        $address=$_POST['address'];
        $role=$_POST['role'];
        
        $insert="UPDATE staff  SET fName='$fName',lName='$lName',NIC='$NIC',email='$email',tele='$tele',address='$address',role='$role' WHERE staffID=$id";
        $sql= mysqli_query($conn,$insert);
        if(isset($insert)){
            header("location: ./admin.php");
        }
    }

    $select = mysqli_query($conn, "SELECT * FROM staff WHERE staffID = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee details update form</title>
    <link rel="stylesheet" href="./style/staffMemberUpdate.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="form-head">
                <div class="form-topic">
                    <p>EMPLOYEE UPDATE FORM</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">

                <?php while($row = mysqli_fetch_assoc($select)){?>
                    <form action="" method = "POST">
                        <div class="input-section">
                            <p>Name</p>
                            <div class="two-input">
                                <input type="text" name="fName" placeholder="First Name" value=<?php echo $row['fName']?> required>
                                <input type="text" name="lName" placeholder="Last Name"value=<?php echo $row['lName']?> required>
                            </div>
                        </div>
                        <div class="input-section">
                            <p>NIC Number</p>
                            <input type="text" name="NIC" placeholder="NIC" value=<?php echo $row['NIC']?> required>
                        </div>
                        <div class="input-section">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="example@gmail.com" value=<?php echo $row['email']?> required>
                        </div>
                        <div class="input-section">
                            <p>Telephone</p>
                            <input type="text" name="tele" placeholder="Telephone" value=<?php echo $row['tele']?>>
                        </div>
                        <div class="input-section">
                            <p>Address</p>
                            <input type="text" name="address" placeholder="Address" value=<?php echo $row['address']?> required>
                        </div>
                        <div class="input-section">
                            <p>Role / Section</p>
                            <input type="text" name="role" placeholder="Role / Section" value=<?php echo $row['role']?> required>
                        </div>
                        <div class="s-btn">
                            <input type="submit" name="update" value="UPDATE">
                         </div>

                    </form>
                    <?php };?>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>