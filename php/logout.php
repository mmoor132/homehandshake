<?php
	session_start();
	
	if(session_destroy()) // Destroying All Sessions
	{
	header("Location: C:\xampp\htdocs\html\homepage.html"); // Redirecting To Home Page
	}
?>