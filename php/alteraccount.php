<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

session_start();

$userid = $_SESSION["userid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assign Passwords
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];

// Check Passwords
if ($pass == $cpass) {

	// Assinging Variables
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$username = $_POST["uname"];
	$gender = $_POST["gender"];
	$permaddress = $_POST["address"]; 
	$state = $_POST["state"];
	$city = $_POST["city"];
	$zip = $_POST["zip"];
	$phonenum = $_POST["telnum"]; 
	$email = $_POST["email"];
	$age = $_POST["age"];
	$bio = $_POST["bio"];

	// Query For Active Listing
	$sql = "UPDATE users 
		SET username = '$username', password = '$pass' , fname = '$fname' , lname = '$lname' , address = '$permaddress' , city = '$city' , state = '$state' , zip = '$zip' , phone = '$phonenum' , email = '$email', gender = '$gender', age = '$age', bio = '$bio'  
		WHERE userid = '$userid'";

	// Check for Success
	if ($conn->query($sql) === TRUE) {
	    echo "New record updated successfully";
	} else {
	    echo "Error: " . $sql  . "<br>" . $conn->error;
	}
}

//Close connection
$conn->close();

echo "<script>
		alert('Account Updated.');
		window.location.href='http://127.0.0.1/php/myaccount.php';
	  </script>";

?>