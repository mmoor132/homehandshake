<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assign Passwords
$pass = $_POST["password"];
$cpass = $_POST["cpass"];

// Check Passwords
if ($pass == $cpass) {

	// Assinging Variables
	$fname = $_POST["fname"] ;
	$lname = $_POST["lname"];
	$username = $_POST["uname"];
	$dob = $_POST["dob"];
	$campus = $_POST["campus"];
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
	$sql = "INSERT INTO users (fname, lname, username, dob, campus, gender, address, state, city, zip, phone, email, age, bio)
	VALUES ('$fname', '$lname', '$username', '$dob', '$campus', '$gender', '$permaddress', '$state', '$city', '$zip', '$phonenum', '$email', '$age', '$bio')";

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

// Clost DB Connection
$conn->close();

?>
