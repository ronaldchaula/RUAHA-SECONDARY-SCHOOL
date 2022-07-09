<?php
session_start();
require_once 'includes/database.php';
if (!isset($_SESSION['uid'])){
    header('Location: alumni.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $firsname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $enrolledyear = $_POST['enrolledyear'];
    $graduationyear = $_POST['graduationyear'];
    $headatenrollment = $_POST['headatenrollment'];
    $headatgraduation = $_POST['headatgraduation'];
    $famousteacher = $_POST['famousteacher'];
    $result = $_POST['result'];
    $currentoccupation = $_POST['currentoccupation'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO alumn(firstname,middlename,lastname,enrolledyear,graduationyear,headatenrollment,headatgraduation,famousteacher,result,currentoccupation,address,email,mobile)
VALUES('$firsname','$middlename','$lastname','$enrolledyear','$graduationyear','$headatenrollment','$headatgraduation','$famousteacher','$result','$currentoccupation','$address','$email','$mobile')";


    if (mysqli_query($connection, $sql)) {
        header("Location: alumniMemberArea.php");
    } else {

        echo "ERROR:COULDN'T EXECUTE $sql. " . mysqli_error($connection);
    }

}

//this fetch data from the database for the table
$sql = " SELECT * FROM alumn";
$result = mysqli_query($connection,$sql);
  if($result === false){
    echo mysqli_error($connection);
}
  else{
      $users = mysqli_fetch_all($result,MYSQLI_ASSOC);

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

    <style>

        .container{
            margin: 9px;
            width: 98%;
        }
        .table{
            margin: 0 auto;
            width: 90%;
            border-collapse: collapse;

        }
        tr td, tr th {
            text-align: center;
            border: 1px solid #000;
        }
        tr:nth-child(even){
            color: white;
            background-color: rgba(68, 148, 68, 0.62);
        }
        .minNav{
            width: 100%;

        }
        .minNavLinkList {
            width: 100%;
            display: flex;

            justify-content: space-between;
            flex-wrap: wrap;
        }
        .minNavLinkListItem{
        list-style: none;
        }
        .send{
        width: 100%;
        }
        #usergreeting{
        background: none;
            border: none;
            color: inherit;
        }
        .resultsContainer{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            border: 1px solid  rgba(68, 148, 68, 0.62);
            text-align: center

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
        <i class="fa fa-bars" id="showmenu" onclick="showMenu()"></i>

    </nav>

    <!--ABOUT US TITLE-->
    <main>
        <h1>
            ALUMNI MEMBERS AREA
        </h1>
    </main>
</header>

<div class="container" style="">
    <nav class="minNav">
        <ul class="minNavLinkList">
            <li id="usergreeting" style="list-style: none; border: none"><p class="visit-button send about-button">Hello <?= $_SESSION['username'] ?></p></li>

            <li style="list-style: none"><a href="logout.php" > <button class="about-button send visit-button">LOGOUT</button></a></li>
        </ul>
    </nav>
    <section class="contact-us" id="DefaultShown">
        <div class="row" style="display: flex;justify-content: center">
            <div style="width: 100%; margin: 0 auto">
                <table class="table table-striped"  style="width: 90%;">
                    <thead>
                    <tr style="background-color: #999999;color: white">
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Lastname</th>
                        <th>EnrolL Year</th>
                        <th>Grad Year</th>
                        <th>Head At Enroll</th>
                        <th>Head At Grad</th>
                        <th>Famous Teacher</th>
                        <th>Result</th>
                        <th>Occupation</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(empty($users)): ?>
                        <p>no records to display</p>
                    <?php else: ?>

                        <?php foreach($users as $alumni):?>
                            <tr class="table-hover">
                                <td>
                                    <?= $alumni['firstname'] ?>
                                </td>
                                <td>
                                    <?= $alumni['middlename'] ?>
                                </td>
                                <td>
                                    <?= $alumni['lastname'] ?>
                                </td>
                                <td>
                                    <?= $alumni['enrolledyear'] ?>
                                </td>
                                <td>
                                    <?= $alumni['graduationyear'] ?>
                                </td>
                                <td>
                                    <?= $alumni['headatenrollment'] ?>
                                </td>
                                <td>
                                    <?= $alumni['headatgraduation'] ?>
                                </td>
                                <td>
                                    <?= $alumni['famousteacher'] ?>
                                </td>
                                <td>
                                    <?= $alumni['result'] ?>
                                </td>
                                <td>
                                    <?= $alumni['currentoccupation'] ?>
                                </td>
                                <td>
                                    <?= $alumni['address'] ?>
                                </td>
                                <td>
                                    <?= $alumni['email'] ?>
                                </td>
                                <td>
                                    <?= $alumni['mobile'] ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    </tbody>
                </table>
            </div>
    </section>

    <section class="contact-us" id="showWhenNeeded" >
        <div class="row" style="display: flex;justify-content: center">
            <div class="contact-col">

                <form action="alumniMemberArea.php" method="post" id="form">
                    <h2 style="margin: 5% auto;text-align:center;color:rgba(68, 148, 68, 0.62)">FILL THE FORM TO REGISTER</h2>
                    <input type="text" name="firstname" id="firstname" required placeholder="First name">
                    <input type="text" name="middlename" id="middlename" required placeholder="Middle name">

                    <input type="text" name="lastname" id="lastname" required placeholder=" Last name">


                    <div><label for="enrolledyear">Enrolement Year:</label></div>
                    <input type="date" name="enrolledyear" id="enrolledyear"  required>

                    <div><label for="graduationyear">Graduation Year:</label></div>
                    <input type="date" name="graduationyear" id="graduationyear"  required>

                    <input type="text" name="headatenrollment" id="headatenrollment" required placeholder="Head teach at enrollment">
                    <input type="text" name="headatgraduation" id="headatgraduation" required placeholder="Head teacher at graduation">
                    <input type="text" name="famousteacher" id="famousteacher" required placeholder="Famous teacher">
                    <div class="resultsContainer" >
                        <div >
                            <label for="division1">Division 1</label>
                            <input type="radio" name="result" value ="DIV 1" id="division1" required >
                        </div>
                        <div>
                            <label for="division2">Division 2</label>
                            <input type="radio" name="result" value ="DIV 2" id="division2" required >
                        </div>
                        <div>
                            <label for="division3">Division 3</label>
                            <input type="radio" name="result" value ="DIV 3" id="division3" required >
                        </div>
                        <div>
                            <label for="division4">Division 4</label>
                            <input type="radio" name="result" value ="DIV 4" id="division4" required >
                        </div>
                        <div>
                            <label for="division0">Division 0</label>
                            <input type="radio" name="result" value ="DIV 0" id="division0" required >
                        </div>
                    </div>

                    <input type="tel" name="currentoccupation" id="currentoccupation"  required placeholder="Current occupation">

                    <textarea type="address" name="address" id="address" cols="30" placeholder="Address" rows="5"></textarea>
                    <input type="email" name="email" pattern="[a-zA-Z\@\.a-z" id="email" onkeydown="ValidateEmail()"  placeholder="E-mail" required>
                    <input type="tel" name="mobile" id="mobile"  placeholder="+254" required>

                    <!--<div id="message">-->
                    <!--    <h3>Password must contain the following:</h3>-->
                    <!--    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>-->
                    <!--    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>-->
                    <!--    <p id="number" class="invalid">A <b>number</b></p>-->
                    <!--    <p id="length" class="invalid">Minimum <b>8 characters</b></p>-->
                    <!--  </div>-->

                    <button type="submit" class="visit-button about-button send" name="submit" id="submit" style="width: 100%">Add Alumni</button>


<?php


?>


                </form>

            </div>

        </div>
    </section>

</div>
<div class="logout">

</div>



<footer>

    <p>&copy RUAHA SECONDARY SCHOOL 2022</p>
</footer>
<!--js for toggle menu-->
<script>
     function  showTable(){
         let state =document.getElementById("DefaultShown");
         if(state.style.display = "none"){
             state.style.display = "block";
         }
     }
     function  showForm(){
         let state =document.getElementById("showWhenNeeded");
         if(state.style.display = "none"){
             state.style.display = "block";
         }
     }
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