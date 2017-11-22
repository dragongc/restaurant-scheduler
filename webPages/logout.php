<?php
session_start();
/**
 * Created by PhpStorm.
 * User: gcorujo
 * Date: 11/15/17
 * Time: 1:49 AM
 */
// not logged in
header('Location: LoginPage.php');
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>