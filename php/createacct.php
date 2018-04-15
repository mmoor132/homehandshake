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

	// SQL Insert Query
	$sql = "INSERT INTO users (username, password, fname, lname, address, city, state, zip, phone, email, gender, age, bio)
	VALUES ('$username', '$pass', '$fname', '$lname', '$permaddress', '$city', '$state',  '$zip', '$phonenum', '$email', '$gender', '$age', '$bio')";

	// Check for Success
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

else{

	echo "Passwords don't match bruh";

}

//Return to Account
header("location: myaccount.php");

// Close DB Connection
$conn->close();

?>