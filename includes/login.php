<?php
require 'database.php';
//session_start();

if(isset($_POST['submit'])){


    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username={$username} AND Passwords={$password}";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                 echo "successfully loggedin";
                 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
                    $protocal = "https";
                 }
                 else{
                     $protocal = 'http';
                 }
                 echo "$protocal://".$_SERVER['HTTP_HOST'];
//                header("Location: $protocal://".$_SERVER['HTTP_HOST'] . "../public/alumniMemberArea.php");
                exit;
            }
        } else {
            $message = "user not found";
        }

    }

    else{
        echo "enter either username or password";
    }


}?>
