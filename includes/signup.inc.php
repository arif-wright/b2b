<?php

if(isset($_POST["submit"])) {

    //Grabbing Data
    $name = $_POST["name"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //Instantiate SignupContr Class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($name, $uid, $pwd, $pwdRepeat, $email);

    //Running Error Handlers and User Signup
    $signup->signupUser();

    //Redirect
    header("location: ../portal.php?error=none");

}