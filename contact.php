<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewp ort" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php
    include "./links.php";
    ?>
</head>

<body>
<?php
include "./header.php";
?>
    <div class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <h5>Let's start a conversation</h5>
            <p>Ask how we can help you:</p>
        </div>
        <div class="container">
            <div class="contact-info">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>sports@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>9812345678</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Boudha</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form>
                   
                    <div class="input-box">
                    <label>Your Name:</label>
                        <input type="text" name="" required="required" placeholder="Your Name">
                       
                    </div>
                    <div class="input-box">
                    <label>Email:</label>
                        <input type="text" name="" required="required" placeholder="Your Email">
                        
                    </div>
                    <div class="input-box">
                    <label>Message:</label>
                        <textarea required="required" placeholder="Type your message here...."></textarea>
                       
                    </div>
                    <div class="input-box">
                        <input type="submit" name="" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include "./footer.php";
    ?>

    
</body>

</html>