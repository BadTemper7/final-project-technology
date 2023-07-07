<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../links/head.php' ?>

</head>
<body>
    <?php include 'Navbar.php' ?>   
    <div class="contact-container">
        <div class="company">
            <span class="contact-title">Get in touch</span>
            <div class="company-container">
                <img src="user.jpg" alt="">
                <div class="company-details">
                    <div>
                        <span>Company name</span>
                        <a href="#">hello@thecompany.com</a>
                        <span>+1 800 000000</span>
                    </div>
                    <div>
                        <span>Adress line 1</span>
                        <span>12345 City, Country</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-form">
            <span class="contact-title">Send an email</span>
            <form action="">
                <div class="input-box">
                    <input type="text" required="required">
                    <span>Your name</span>
                </div>
                <div class="input-box">
                    <input type="email" required="required">
                    <span>E-mail</span>
                </div>
                <div class="input-box">
                    <textarea name="" id="" cols="30" rows="10" required></textarea>
                    <span>Your message</span>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </div>
    <?php include '../links/footer.php' ?>
</body>
</html>