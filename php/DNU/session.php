<?php
$servername = "localhost";
$username = "administrator";
$password = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	 $dbname = mysqli_select_db	("homehandshake", $conn);

	session_start();// Starting Session

	// Storing Session
	$user_check=$_SESSION['login_user'];

	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysqli_query("SELECT username FROM users WHERE username='$user_check'", $conn);

	$row = mysqli_fetch_assoc($ses_sql);

	$login_session = $row['username'];

	if(!isset($login_session)){
		mysqli_close($conn); // Closing Connection
		header('Location: C:\xampp\htdocs\html\homepage.html'); // Redirecting To Home Page
	}
?>