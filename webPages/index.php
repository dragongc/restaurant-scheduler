<?php
header("Location: LoginPage.php");
$_SESSION["nameErr"] = $_SESSION["passErr"] = "";
$_SESSION["firstNameErr"] = $_SESSION["lastNameErr"] = $_SESSION["userNameErr"] = $_SESSION["pwdErr"] = $_SESSION["createErr"] = "";
$_SESSION["titleErr"] = $_SESSION["emailErr"] = $_SESSION["notFound"];
?>
