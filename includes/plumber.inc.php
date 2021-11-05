<?php

if(isset($_POST["submit"])) {

    // Grab Data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //Instantiate LoginContr Class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    //Running Error Handlers
    $login->loginUser();

    //Redirect
    
    header("location: ../portal.php?error=none");
}