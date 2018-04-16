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

$user = $_POST["user"];
$password = $_POST["password"];

$_SESSION['user'] = $_POST["user"];
$_SESSION['password'] = $_POST["password"];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows==1){

	header("location: login2.php");	

}
else{
	echo "<script>
		alert('Pasword or Username is Incorrect.');
		window.location.href='http://127.0.0.1/php/loginpage.html';
	  </script>";
}

$conn->close();

?>