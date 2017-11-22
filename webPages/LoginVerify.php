<?php
session_start();

/**
 * Created by PhpStorm.
 * User: gcorujo
 * Date: 11/14/17
 * Time: 1:08 AM
 */

$_SESSION["nameErr"] = $_SESSION["passErr"] = "";
$name = $pass = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["usr"])) {
        $_SESSION["nameErr"] = "Username Invalid";
    } else {
        $name = test_input($_POST["usr"]);
    }
    if(empty($_POST["pwd"])) {
        $_SESSION["passErr"] = "Password Invalid";
    }
    else {
        $pass = md5(test_input($_POST["pwd"]));
    }
}

include 'DBConnect.php';

$sql = "select username, password, emp_num from Employee where username ='". $name. "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row["username"];
    $password = $row["password"];
    $emp_num = $row["emp_num"];
} else {
    header("Location: LoginPage.php");
}

if($pass === $password) {
    $_SESSION['userId'] = $username;

    $sql = "select emp_firstname, emp_lastname, phone, hire_date, title, email, description 
            from Employee 
            where emp_num ='". $emp_num. "'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["firstname"] = $row["emp_firstname"];
        $_SESSION["lastname"] = $row["emp_lastname"];
        $_SESSION["phone"] = $row["phone"];
        $_SESSION["hiredate"] = $row["hire_date"];
        $_SESSION["title"] = $row["title"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["description"] = $row["description"];
    } else {
        $_SESSION["notfound"] = "User Not Found";
        header("Location: LoginPage.php");
    }
    header("Location: HomePage.php");


} else  {
    header("Location: LoginPage.php");
}


function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


