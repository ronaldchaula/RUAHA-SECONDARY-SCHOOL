<?php
session_start();
require 'database.php';

$message = null;
if (isset($_POST['submit']))
{
    if(!isset($_POST['firstname'])){
        global $message;
        $message= "provide firstname";
        echo $message;
    }
    else if(!isset($_POST['middlename'])){
        global $message;
        $message= "provide middlename";
        echo $message;
        header("Location: register.php?error=".$message);
    }
    else if(!isset($_POST['lastname'])){
        global $message;
        $message= "provide lasttname";
        echo $message;
        header("Location: register.php?error=".$message);
    }
    else if(!isset($_POST['username'])){
        global $message;
        $message= "provide username";
        echo $message;
        header("Location: register.php?error=".$message);
    }
    else if(!isset($_POST['dob'])){
        global $message;
        $message= "choose date of birth";
        echo $message;
        header("Location: register.php?error=".$message);
    }
    else if(!isset($_POST['cv'])){
        global $message;
        $message= "select cv for uploading";
        echo $message;
        header("Location: register.php?error=".$message);
    }
    else if(!isset($_POST['email'])){
        global $message;
        $message= "Enter email";
        echo $message;
        header("Location: register.php?error=".$message);
    }
    else if(!isset($_POST['phone'])){
    global $message;
    $message= "Enter phone number";
    echo $message;
        header("Location: register.php?error=".$message);
}
    else if(!isset($_POST['social'])){
    global $message;
    $message= "enter your social media name";
    echo $message;
        header("Location: register.php?error=".$message);
}
    else if(!isset($_POST['password'])){
    global $message;
    $message= "Enter a passowrd";
    echo $message;
    header("Location: register.php?error=".$message);
}
else{
    $firsname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $dob=$_POST['dob'];
    $cv=$_POST['cv'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $social=$_POST['social'];
    $password=$_POST['password'];
    $sql = "INSERT INTO user(Firstname,Middlename,Lastname,Username,DateOfBirth,CV,Email,Phone,Social,Passwords)
VALUES('$firsname','$middlename','$lastname','$username','$dob','$cv','$email','$phone','$social','$password')";

    if(mysqli_query($connection, $sql)){
        $message = "registered successfully";
        $_SESSION['success'] = $message;
       header("Location: ../alumni.php?success=".$message);
        }
    else{echo"ERROR:COULDN'T EXECUTE $sql. " . mysqli_error($connection);
        echo "server down checkin later";
    }
}
}

