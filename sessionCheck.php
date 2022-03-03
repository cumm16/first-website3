<?php

    session_start(); 

    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit; 
    } else {
        $userDisplayName = $_SESSION["userDisplayName"];
        $userName = $_SESSION["userName"]; 
    }
?>