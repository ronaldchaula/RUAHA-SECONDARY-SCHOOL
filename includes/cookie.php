<?php
//cookies are used to identify users since HTTP is a stateless protocal hence doesnt keep record of who is accessing its resources
//to set a cookie you need least 3 parameters
//$cookie name
//$cookie value
//cookie duration you want to take place
//cookies can be set and unset
//cookies are always set during the sending of a http request and are sent back to the website whenever the person views the website
//cookies must be set at the top of the page
$name = "userid";
$value = 02;
$duration = time()+(60*60*24*7);
//setcookie($name,$value,$duration);
//reading cookie values
//cookie values are assigned to the super global cookie[], to access value we use the key to get it
//php sessions
//how to set a session
//session relied on cookies
//cookies are sent to user as reference from the session
//$_SESSION[]
$_SESSION[];
?>
<html>
<head>
    <title>
        this is a test page for cookies
    </title>

</head>
<body>
<pre>
<!--    this is how we access the cookie value based on the key/name-->
    <?php $getValue = $_COOKIE['userid'];
    echo $getValue;
    //cookies can be used to check userid, location, language preference based on the location they are from
    //inorder to use a cookie you must first check if it exist and we do this through
    //isset()
        $test = isset($_COOKIE['userid']) ? $_COOKIE['userid'] : " ";   echo $test;
        //unsetting cookie can be done in three ways
    setcookie($name); // without value or
    setcookie($name,null);
    $time = time()-3600;
    setcookie($name,$value,$time);
    //combined
    setcookie($name,null,(time()-3600));


    ?>
</pre>
</body>
</html>