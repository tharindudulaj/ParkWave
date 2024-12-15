<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link rel="stylesheet" href="./style/payment.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="form-head">
                <div class="form-topic">
                    <p>PAYMENT DETAILS</p>
                </div>
            </div>
            <div class="form-content">
                <div class="form-input">
                    <form action="">
                        <div class="input-section">
                            <p>Card Number</p>
                            <input type="text" name="vNumber" placeholder="1234 5678 45678">
                        </div>
                        <div class="input-section">
                            <p>Person Name</p>
                            <input type="text" name="vNumber" placeholder="John Keels">
                        </div>
                        <div class="input-section">
                            <p>Expiry</p>
                            <div class="two-input">
                                <input type="date" name="fName">
                                <input type="text" name="lName" placeholder="CVV/CVC">
                            </div>
                        </div>
                        <div class="input-selection btn">
                            <a href="./userdashboard.php" type="submit">PAY</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section -->
<footer class="footer">
    <div class="footer-section1">
        <div class="footer-logo">
            <img src="assets/Logo.png" alt="">
        </div>
        <div class="footer-text">
            <div class="parking-locations">
                <p>BOOK PARKING</p>
                <ul>
                    <li><a href="#">COLOMBO PARKING</a></li>
                    <li><a href="#">GAMPAHA PARKING</a></li>
                    <li><a href="#">KANDY PARKING</a></li>
                    <li><a href="#">GALLE PARKING</a></li>
                    <li><a href="#">KURUNEGALA PARKING</a></li>
                </ul>
            </div>
            <div class="services">
                <p>OUR SERVICES</p>
                <ul>
                    <li><a href="#">FIND PARKING</a></li>
                    <li><a href="#">RENT A PARKING SPOT</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">PARKING MAP</a></li>
                    <li><a href="#">SEARCH LOCATION</a></li>
                </ul>
            </div>
            <div class="resources">
                <p>RESOURCES</p>
                <ul>
                    <li><a href="#">PRIVACY POLICY</a></li>
                    <li><a href="#">TERMS OF SERVICE</a></li>
                    <li><a href="#">PRIVACY REQUESTS</a></li>
                    <li><a href="#">SERVICE UPDATE</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-icons">
            <p>FOLLOW US ON</p>
            <div class="footer-icon">
                <img src="assets/fb.png" alt="">
                <img src="assets/insta.png" alt="">
                <img src="assets/whatsapp.png" alt="">
                <img src="assets/gplus.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer-section2">
        <p>© 2024 PARK WAVE</p>
    </div>
</footer>
</body>
</html>