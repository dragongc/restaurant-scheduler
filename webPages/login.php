<?php
session_start();

if(!isset($_SESSION['userId']))
{
    // not logged in
    header('Location: LoginPage.php');
    // remove all session variables
    session_unset();

// destroy the session
    session_destroy();
    //exit();
}
?>
