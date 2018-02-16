<?php
	include 'db_connection.php';

	session_start();// Starting Session

	// Storing Session
	$user_check=$_SESSION['login_user'];

	// SQL Query To Fetch Complete Information Of User
	$ses_sql= "SELECT username from users where username='$user_check'";

	$row = mysql_fetch_assoc($ses_sql);

	$login_session =$row['username'];

	if(!isset($login_session)){

		mysql_close($connection); // Closing Connection
		header('Location: C:\xampp\htdocs\html\homepage.html'); // Redirecting To Home Page

	}
?>