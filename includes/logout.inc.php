<?php

session_start();
session_unset();
session_destroy();

//Redirect
header("location: ../index.php?error=none");