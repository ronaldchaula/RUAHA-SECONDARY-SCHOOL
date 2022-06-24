<?php
function loggedIn(){
    return isset($_SESSION['uid']);
}
function confirmLoggedIn(){
    if (!loggedIn()){
        header("location../public/alumni");
    }

}

