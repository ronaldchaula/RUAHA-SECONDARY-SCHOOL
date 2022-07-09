<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> RUAHA SECONDARY SCHOOL| Contact</title>

    

    <!--google fonts-->
     <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header class="sub-header" id="header">
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
                        <a href="index.php">HOME</a>
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

<!--ABOUT US TITLE-->
<main>
    <h1>
        Contact Us
    </h1>
</main>
</header>
<!--contact us form-->

<section id="#location" class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8685929548274!2d35.67821855!3d-7.803733450000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18543db9b18009bb%3A0xacd732fad18020d2!2sRuaha%20Secondary%20School%2C%20Iringa!5e0!3m2!1sen!2stz!4v1655648262717!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
            <i class="fa fa-home"></i>
            <span>
                <h5>
                    Kibwabwa, Iringa Town

                </h5>
                <p>
                  Iringa, Tanzania
                </p>
            </span>
        </div>
        <div id="call">
            <i class="fa fa-phone"></i>
            <span>
                <h5>
                    +255 623434332
                </h5>
                <p>
                    Monday to Sunday,7:30AM to 4:30PM
                </p>
            </span>
        </div>
        <div>
            <i class="fa fa-envelope-o"></i>
            <span>
                <h5 id="#explorer">
                    info@rss.co.tz
                </h5>
                <p>
                    Email us your queries we will be happy to respond
                </p>
            </span>
        </div>
</div>
        <div class="contact-col">
            <!--this another column-->
            <form id="email" action="">
                <input type="text" placeholder="Enter your name" required>
                <input type="email" placeholder="Enter your email" required>
                <input type="text" placeholder="Enter your subject" required>
                <textarea name="" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                <button type="submit" class="visit-button about-button send">Send Message</button>
            </form>
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