<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./style/aboutus.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <div class="banner">
    <?php 
        include "./navbar.php"
    
    ?>

        <div class="heading">
            <h1>About Us</h1>
            <p>Park Wave: Premium solutions for parking systems</p>
        </div>
        </div>
                <div class="about-content">
                    <h1>We Listen. We Respond</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, illo et dolor vitae facilis non obcaecati aspernatur repellendus voluptate consequuntur aut error mollitia tempora, veniam vel temporibus dolores, nulla perspiciatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dolor, architecto distinctio quisquam provident dicta, rem vitae laudantium harum adipisci sapiente ab voluptate. Asperiores nostrum at debitis. Laudantium, accusantium unde! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati neque qui exercitationem saepe quae eum cupiditate ratione asperiores quibusdam porro delectus architecto, libero aliquam repellendus doloribus facere, dicta amet fugit!</p><br><br><br>
                    <hr>
                </div>
                <section class="contact">
                    <div class="content">
                        <h1>Contact Us</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam assumenda, deleniti ex saepe ducimus quidem qui quos temporibus totam, ullam eum explicabo, eaque quod nobis autem veniam itaque. Unde, neque?</p>
                    </div>
                    <div class="container">
                        <div class="contactInfo">
                            <div class="box">
                                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="text">
                                    <h3>Address</h3>
                                    <p>75 Plandome Road, 2FL Manhasset, NY 11030</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <h3>Phone</h3>
                                    <p> 800.422.5438</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p> info@parkwave.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="contactForm">
                            <form>
                                <h2>Send Message</h2>
                                <div class="inputBox">
                                    <input type="text" name="" required="required">
                                    <span>Full Name</span>
                                </div>
                                <div class="inputBox">
                                    <input type="text" name="" required="required">
                                    <span>Email</span>
                                </div>
                                <div class="inputBox">
                                    <textarea required="required"></textarea>
                                    <span>Type your Message....</span>
                                </div>
                                <div class="inputBox">
                                    <input type="submit" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

    <!-- footer section -->
    <?php
    include "footer.php";
    
    ?>

<script src="./script/navbar.js"></script>

               
                
    
</body>
</html>