<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "experimento";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Error connecting to website. Please try again.');
}
?>