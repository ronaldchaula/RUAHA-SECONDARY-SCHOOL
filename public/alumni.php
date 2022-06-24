<?php
session_start();
//include the database connection file
require "../includes/database.php";

//start a session
$_SESSION['message']=null;
$_GET['success']=null;
if (isset($_SESSION['uid'])){
    header("Location: alumniMemberArea.php");
}
//assign request method here

$requestMethod = $_SERVER['REQUEST_METHOD'];

//test if the request method is a POST one and proceed to next steps

if($requestMethod=='POST'){

if(isset($_POST['username']) && isset($_POST['password'])) {
    //get these values from login form

    $username = $_POST['username'];

    $password = $_POST['password'];

    //check if the user sent the post request
    $sql = "SELECT * FROM user";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
//        while($row = mysqli_fetch_all($result)) {
           $Users = mysqli_fetch_all($result,MYSQLI_ASSOC);

               foreach($Users as $user){

              if( $user['Username'] == $username &&  $user['Passwords'] == $password){
                    $_SESSION['uid'] = $user['userid'];
                    $_SESSION['username'] = $user['Username'];
                     header("Location: alumniMemberArea.php?userid=".$_SESSION['uid']."&username=".$_SESSION['username']);
                 }
                   else{
                       $_SESSION['message'] = "Please enter correct login details";
                   }
            }
//
//
//

        }
    } else {
        $message = "user not found";
        $_SESSION['loggedin'] = false;
        header("Location: alumni.php");
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>
        RUAHA SECONDARY SCHOOL| Alumni</title>

    

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
        ALUMNI AREA
    </h1>
</main>
</header>
    <?php if(false):    ?>

        <p><a href="logout.php">
                <input type="submit" value="LOGOUT">
            </a></p>

    <?php else: ?>

        <?php include 'login.php'; ?>


    <?php endif;?>

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
<?php ?>