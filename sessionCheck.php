<?php

    session_start(); 

    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        $userDisplayName = "Not logged in yet!";
        exit; 
    } else {
        $userDisplayName = $_SESSION["userDisplatName"];
        $userName = $_SESSION["userName"]; 
    }
?>