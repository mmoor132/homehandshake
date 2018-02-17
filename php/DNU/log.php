<?php 
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

$error=''; // Variable To Store Error Message

$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn,$sql);

$rows = mysqli_num_rows($result);

if ($rows == 1) 
{
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid - $result";
}
}
}

mysqli_close($conn);
 ?>