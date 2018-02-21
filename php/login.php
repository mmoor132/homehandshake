<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION['username'] = $_POST["username"];
$_SESSION['password'] = $_POST["password"];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows==1){

	header("location: login2.php");

}
else{

	echo "WRONG-O";
}

$conn->close();

?>