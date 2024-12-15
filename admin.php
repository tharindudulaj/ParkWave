<?php
    include "dbh.inc.php";

    $select = "SELECT * FROM staff";

    $res = mysqli_query($conn, $select);

?>

<?php 

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delet = mysqli_query($conn, "DELETE FROM staff WHERE staffID = $id");
        header("Location:./admin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
   <header>
    <div class="logo">
        <img src="./assets/logo-black.png" alt="">
    </div>
    <div class="searchbr">
        <div class="icon">
            <img src="./assets/search.svg" alt="">
        </div>
        <input type="text">
    </div>
    <div class="admin">
        <p>Administrator</p>
        <img src="./assets/person-fill-gear.svg" alt="">
    </div>
   </header>
   <div class="hero-section">
    <div class="adminpanal">
        <div class="admin-navigation">
            <div class="admin-setting">
                <ul>
                    <li><p class="now tab-1 tab">Dashboard</p></li>
                    <li><p class="tab-2 tab">Management</p></li>
                    <li><p class="tab-3 tab">Security</p></li>
                </ul>
            </div>
            <div class="page-setting">
                <div class="page-set-line">
                    <p>Page Layout</p>
                    <img src="./assets/search.svg" alt="">
                </div>
                <div class="page-set-line">
                    <p>Widgets</p>
                    <img src="./assets/search.svg" alt="">
                </div>
                <div class="page-set-line">
                    <p>Notification</p>
                    <img src="./assets/search.svg" alt="">
                </div>
                <div class="page-set-line">
                    <p>Code editor</p>
                    <img src="./assets/search.svg" alt="">
                </div>
            </div>
            <button>Log Out</button>
        </div>
    </div>
    <div class="hero-content">
        <div class="hero-margine">
            <section class="sec sec-1 active">
                <div class="sec-top">
                    <img src="./assets/insight-1 (1).png" alt="">
                    <img src="./assets/insight-1 (2).png" alt="">
                </div>
            </section>
            <section class="sec sec-2">
                <div class="management-section">
                    <p class="topic">Staff Management</p>
                    <div class="management-table">
                    <table>
                            <tr>
                                <th>
                                    <p>NAME</p>
                                </th>
                                <th>
                                    <p>NIC</p>
                                </th>
                                <th>
                                    <p>STAFF ID</p>
                                </th>
                                <th>
                                    <p>ROLE</p>
                                </th>
                                <th>
                                    <p>ACTION</p>
                                </th>
                            </tr>
                            <?php while ($row = mysqli_fetch_assoc($res)) {?>
                                <tr>
                                <td>
                                    <p><?php echo $row['fName']?></p>
                                </td>
                                <td>
                                    <p><?php echo $row['NIC']?></p>
                                </td>
                                <td>
                                    <p><?php echo $row['staffID']?></p>
                                </td>
                                <td>
                                    <p><?php echo $row['role']?></p>
                                </td>
                                <td class="action-btns">
                                    <a href="./staffmemberupdate.php?edit=<?php echo $row['staffID'];?>" type="submit" class="updt-btn" name = "updt">EDIT</a>
                                    <a href="./admin.php?delete=<?php echo $row['staffID'];?>" class="dlt-btn" name = "dlt">DELETE</a>
                                </td>
                            </tr>
                           <?php }; ?>
                            

                        </table>

                    </div>
                    <div class="add-btn-section">
                        <a href="./empRegForm.php">ADD NEW</a>
                    </div> 
                </div>
            </section>
            <section class="sec sec-3"></section>
        </div>
    </div>
   </div>
       
   <!-- JS -->
   <script src="./script/admin.js"></script>
    
</body>
</html>