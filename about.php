


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laundry and cleaning service based in Dar Es Salaam, that deals with garment, office, car seats and carpet cleaning. Our service is accessed through online plartforms such as social media and the website where a customer may place an order and pick-up location so he/she can be served. We pick garments everyday from 08:00 to 11:00 and return them at 16:00-18:00">
    <meta name="keywords" content="cleaning, laundry,garment cleaning,pick-up service,12-hour service,car carpets, car seats,">
    <title>
        RUAHA SECONDARY SCHOOL| About</title>

    

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
        ABOUT OUR SCHOOL
    </h1>
</main>
</header>
<section class="about">
    <div class="row">
        <div class="about-col">
<h1>
    BRIEF HISTORY OF RUAHA SECONDARY SCHOOL
</h1>
<p>
    Ruaha Secondary school was founded in 1986, the school is owned and operated by the National Spiritual Assembly of the Bahá'ís of Tanzania, the freely elected governing body of the Bahá'í community. Overall, the school's primary mission is to serve the wider Tanzanian community by providing quality education at an affordable cost. 
    Ruaha begun its mission as a technical school back in 1980s on which it was enrolling girls only, it later switched to enroll boys as day scholars, through ups and downs Ruaha secondary school has managed to graduate as many students as possible in its history. At Ruaha canning student isn't allowed but work and self reliance are the core values it lives by.
</p>
<a href="contact.php" class="visit-button about-button">Learn More</a>
        </div>
        <div class="about-col">
<img src="assets/gate.jpg" alt="">
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