<?php

include "autoload.inc.php";

if(isset($_POST["submit"])){
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
}

#error handlers
$errors = false;
if(empty($uid) or empty($pwd)){
    $errors = true;
}

if($errors){
    die("THERE HAS BEEN AN ERROR WITHIN VALUE ATTRIBUTION");
}

#object instance
$user = new Login($uid, $pwd);

if($user->checkUser()){
    echo "User exists <br>";
}else{
    echo "User Does not exist. <br>";
};

if($user->checkPassword()){
    echo "Password match! <br>";
}else{
    echo "Password doesn't match. <br>";
};