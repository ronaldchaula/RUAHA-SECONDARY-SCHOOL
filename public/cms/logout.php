<?php
require '../../includes/database.php';


    $sql = 'SELECT * FROM users WHERE user_id;

    $result = mysqli_query($connection,$sql);
    if($result === false){
        echo mysqli_error($connection);
    }
    else{
        $user = mysqli_fetch_assoc($result);
    }
}
else{
    $user = null;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        RUAHA SECONDARY SCHOOL| Members Area
    </title>



    <!--google fonts-->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .send{
            width: 100%;
            margin-bottom: 2%;
        }
        .browse{
            width: 100%;
            padding: 15px;
            margin-bottom: 17px;
            outline: none;
            border: 1px solid rgba(68, 148, 68, 0.62);
            box-sizing: border-box;
        }
    </style>
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
                    <a href="../index.php">HOME</a>
                </li>
                <li>
                    <a href="../about.php">ABOUT</a>
                </li>
                <li>
                    <a href="../register.html">REGISTER</a>
                </li>
                <li>
                    <a href="../alumni.php">ALUMNI</a>
                </li>
                <li>
                    <a href="../staff.html">STAFF</a>
                </li>

                <li>
                    <a href="../contact.php">CONTACT</a>
                </li>

            </ul>
        </div>
        <!--this humberger menu-->
        <i class="fa fa-bars" id="showmenu" onclick="showMenu()"></i>

    </nav>

    <!--ABOUT US TITLE-->
    <main>
        <h1>
            MEMBERS AREA
        </h1>
    </main>
</header>
<!-- end of header all content can be written below here -->
<section class="contact-us" >
    <div class="row" style="display: flex;justify-content: center">
        <div class="contact-col">
            <div>
<!--                put the table here-->

                <?php //check if the returned record is empty or not if it is empty output no records as below id not populate the table?>
                <?php if($user ===null): ?>
                    <p>user not found</p>
                <?php else: ?>
                    <h2>Hello <?= $user['username']?></h2>
                    <p> Welcome to your profile </p> <br>
                    <table border='1'>
                        <tr>
                            <th>
                                user id
                            </th>
                            <th>
                                username
                            </th>
                            <th>
                                password
                            </th>
                            <th>
                                email
                            </th>
                        </tr>
                        <tr>
                            <td><?= $user["user_id"]; ?></td>
                            <td><?=  $user["username"]; ?></td>
                            <td><?=  $user["password"]; ?></td>
                            <td><?=  $user["email"]; ?></td>
                        </tr>
                    </table>
                <?php endif ?>
            </div>
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

            <form action="../../includes/register.txt" method="post" id="form">
                <h2 style="margin: 5% auto;text-align:center;color:rgba(68, 148, 68, 0.62)">FILL THE FORM TO REGISTER</h2>
                <input type="text" name="firstname" id="firstname" required placeholder="Enter first name">
                <input type="text" name="middlename" id="middlename" required placeholder="Middle name">

                <input type="text" name="lastname" id="lastname" required placeholder=" Last name">
                <input type="text" name="username" id="username" required placeholder="Username">

                <div><label for="dob">Date of Birth:</label></div>
                <input type="date" name="dob" id="dob"  required>

                <div><label for="cv">CV:</label></div>
                <input class="browse" type="file" name="cv" id="cv">

                <input type="email" name="email" id="email" onkeydown="ValidateEmail()"  placeholder="E-mail" required>

                <textarea type="address" name="address" id="address" cols="30" placeholder="Address" rows="5"></textarea>

                <input type="phone" name="phone" id="phone"  required placeholder="Mobile number">

                <input type="text" name="social" id="social"  placeholder="Social media" required>

                <input type="password" name="password" id="password" placeholder="Password">

                <button type="submit" class="visit-button about-button send" name="submit" id="submit" onclick="ValidateEmail(document.form.text)">Click To Register</button>
                <div>
                    <p style="text-align:right; margin-right: 5%"><a href="alumni.html">Already having an account?</a></p>
                </div>




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
<script>


    function ValidateEmail()
    {
        var emailError = document.getElementById("email").value;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var textError = document.getElementById("text");
        if(emailError.match(mailformat))
        {
            textError.innerHTML = "Valid Email Address";
            textError.style.color = "#0000ff";
            return true;
        }
        else
        {
            textError.innerHTML = "Invalid Email Address";
            textError.style.color = "#ff0000";
            return false;
        }
    }

    var myInput = document.getElementById("pwords");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
</script>