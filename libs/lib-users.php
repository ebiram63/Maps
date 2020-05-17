<?php 

function isLoggedIn(){
    return isset($_SESSION['login']);
}


//  auth user by username and password 
function login($username,$password){
    global $admins;
    if(array_key_exists($username,$admins) and 
        $admins[$username] == $password){
            $_SESSION['login'] = 1;
            return true;
    }
    return false;
}
// logout user
function logOut(){
    unset($_SESSION['login']);
}