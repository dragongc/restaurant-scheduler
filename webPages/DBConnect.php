<?php
/**
 * Created by PhpStorm.
 * User: gcorujo
 * Date: 11/14/17
 * Time: 1:51 AM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RESTaurantAssured";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
