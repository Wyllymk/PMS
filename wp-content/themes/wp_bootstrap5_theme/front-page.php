<?php get_header();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="wp-content/themes/wp_bootstrap5_theme/assets/css/custom.css">
    <title>PMS</title>
    
</head>
<body>


<div class="homepage">
        <div class="homepage-heading">
            <div class="heading2">
                <div class="brand">
                    <li class="list">PROJECT MANAGEMENT SYSTEM</li>
                </div>
                <div class="links">
                    <li class="list"><a href="#">Home</a></li>
                    <li class="list"><a href="#">Product</a></li>
                    <li class="list"><a href="#">Pricing</a></li>
                    <li class="list"><a href="#">Contact</a></li>
                </div>
            </div>
            <div class="member">
                 <button><li class="list"><a href="#">Login</a></li></button>
            </div>
        </div>

        <div class="homepage-content">
            <h1>Effortlessly manage Your Projects with our Powerful Project Management System.</h1>
            <div class="buttons">
                <button class="login">Login</button>
                <button class="contact">Contact-Us</button>
            </div>
        </div>
    </div>

    <div class="second-page">
        <h1>Offered Service</h1>
        <p>Effortlessly Manage Your Projects With Our Powerful Project Management System</p>
        <p>Assign Tasks, Track Progress and Streamline Workflows With Ease</p>

    </div>


    <div class="contact-page">
        <h1>CONTACT DETAILS</h1>
        <P>FOr any type of inquiries please dont hesitate to ge intouch with us.<br> The easiest way is to send us an email to the following adress or use the form below.</P>
        <div class="row justify-content-center">
    

   

    
        <form action="" method="post">
        <div class="form-group">
            <input type="text" name="fullname" class="form-control input-sm mb-3" id="fullname" placeholder="input your full names here" required>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control input-sm mb-3" id="email" placeholder="input your email here" required>
        </div>
        <div class="form-group">
            <input type="number" name="telephone" class="form-control input-sm mb-3" id="telephone" placeholder="input your telephone number here" required>
        </div>
        <div class="form-group">
            <input type="text" name="message" class="form-control input-sm mb-3" id="message" placeholder="input your message here" required>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <input type="submit" value="Register" name="submitbtn" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>
 </div>
    </div>

    

<?php get_footer();?>