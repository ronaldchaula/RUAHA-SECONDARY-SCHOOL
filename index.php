<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUAHA SECONDARY SCHOOL | Home</title>

    

    <!--google fonts-->
     <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header class="header" id="header">
<nav>
    <!--this is branding-->
    <div class="branding">
<h1>
    <a href="#header">RSS</a>
</h1>
    </div>
    <!--this is navigation-->
    <div class="nav-links" id="navLinks">
        <!--this is closing icon-->
        <i class="fa fa-times" id="hidemenu" onclick="hideMenu()"></i>
        <ul>
            <li>
                <a href="index.html">HOME</a>
            </li>
            <li>
                <a href="about.php">ABOUT</a>
            </li>
            <li>
                <a href="register.php">REGISTER</a>
            </li>
            <li>
                <a href="alumni.php">ALUMNI</a>
            </li>
            <li>
                <a href="staff.html">STAFF</a>
            </li>
        
            <li>
                <a href="contact.php">CONTACT</a>
            </li>
        </ul>
    </div>
    <!--this humberger menu-->
    <i class="fa fa-bars" id="showmenu"onclick="showMenu()"></i>

</nav>

<!--content-->

<section class="tagline">
<h1>
    UNITY IN DIVERSITY
</h1>
<p>
EDUCATION IS THE INDISPENSIBLE FOUNDATION FOR ALL  <br>
 HUMAN EXCELLENCE
</p>
<a href="contact.php#location" class="visit-button">
    VISIT OUR SCHOOL
</a>
</section>
</header>

<!--end of header element-->

<!--site services summary start-->
<section class="service">
<h1 class="service-title">Our Values</h1>
<!-- <p class="service-message">We wash all kinds of garments starting from official cloths, casual wear, home and office fabrics</p> -->

<div class="row">
    <div class="service-col">
                <h3>Self Reliance</h3>
                <p>
                    Our values here at ruaha secondary school, includes create self awareness and self reliant society, students are taught to do work with there own hands to respect the enviroment they live, parcipating in community work and volunteering for social good                </p>
</div>
        <div class="service-col">
                <h3>Academic Excellence</h3>
                <p>
                    Academic excellence is one of our core values but we believe without self awareness and self reliance students wont put as much effort as possible to succeed academically and in life. Hence we encourage student to do their best through incetives
                </p>
        </div>
        <div class="service-col">
                <h3>Faith</h3>
                <p>
                    Ruaha secondary school is a religeous school that believes there is one God and religions are just path to reach him, we encourage students here to practice their faith without segragation as they are all worshiping the same God. 
                </p>
        </div>
</div>
</section>
    

<!--more infor-->


<section class="order">
<h1>Our Enviroment</h1>
<p>You can pay a visit to our school by reservating a date</p>
<div class="row">
    <div class="order-col">
        <img style="height:100%" src="assets/enviroment.jpg" alt="Personal Clothers Cleaning">
        <div class="layer">
            <h3>
                Clean Enviroment
                <br>
                <a class="invitation" href="contact.php#email">Email Us</a>
            </h3></div>
    </div>
    <div class="order-col">
        <img style="height:350px;width: 100%;" src="assets/computerlab.JPG" alt="office cleaning">

        <div class="layer">
            <h3>
                Computer Labs 
            <br>
<a class="invitation" href="contact.php#email">Email Us</a>
        </h3></div>
    </div>
    <div class="order-col last">
        <img style="height: 100%;" src="assets/reception.jpg" alt="">
        <div class="layer"><h3>Quiet Enviroment
<br>
<a class="invitation" href="contact.php#call">Email Us</a>
        </h3></div>
    </div>
</div>
</section>

<footer>
    <!-- <h4>
        Let's Connect
    </h4>
    <p class="icons">
<i class="fa fa-facebook"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-linkedin"></i>
    </p> -->
    <p>&copy RUAHA SECONDARY SCHOOL 2022</p>
</footer>















































    <!--js for toggle menu-->
    <script>
        
        function showMenu(){
            var navLinks = document.getElementById("navLinks");
         navLinks.style.right ="0";
        }
        function hideMenu(){
            navLinks.style.right = "-300px"
        }

    </script>

    
</body>
</html>