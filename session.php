<?php
    session_start();
    if(!isset($_SESSION["username"])) {//checks if current session has a user or not
        header("Location: login.php");
        exit();
    }
?>
