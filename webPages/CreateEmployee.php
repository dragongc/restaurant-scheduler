<?php
session_start();
include 'login.php';
/**
 * Created by PhpStorm.
 * User: gcorujo
 * Date: 11/14/17
 * Time: 5:11 PM
 */
include 'DBConnect.php';

$fname = $lname = $uname = $pass = $title = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["firstName"])) {
        $_SESSION["firstNameErr"] = "First Name is Required";
    } else {
        $fname = test_input($_POST["firstName"]);
    }
    if(empty($_POST["lastName"])) {
        $_SESSION["lastNameErr"] = "Last Name is Required";
    }
    else {
        $lname = test_input($_POST["lastName"]);
    }
    if(empty($_POST["userName"])) {
        $_SESSION["userNameErr"] = "Username is Required";
    }
    else {
        $uname = test_input($_POST["userName"]);
    }
    if(empty($_POST["pwd"])) {
        $_SESSION["pwdErr"] = "Password is Required";
    }
    else {
        $pass = md5(test_input($_POST["pwd"]));
    }
    if(empty($_POST["title"])) {
        $_SESSION["titleErr"] = "Job Title is Required";
    }
    else {
        $title = test_input($_POST["title"]);
    }
    if(empty($_POST["email"])) {
        $_SESSION["emailErr"] = "Email is Required";
    }
    else {
        $email = test_input($_POST["email"]);
    }
}
if($fname != null and $lname != null and $uname != null and $pass != null and $title != null and $email != null) {
    $sql = "insert into employee (emp_firstname, emp_lastname, hire_date, title, email, username, password)
  values ('". $fname. "', '". $lname. "', curdate(), '". $title. "', '". $email. "', '". $uname. "', '". $pass. "');";

    if ($conn->multi_query($sql) === TRUE) {
        $_SESSION["createErr"] = "New records created successfully";
    } else {
        $_SESSION["createErr"] = "Error: Could Not Create Employee<br>" . $conn->error;

    }
}
header("Location: CreateNewEmployeePage.php");


function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

