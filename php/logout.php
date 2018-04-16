<?php
   session_start();
   
   if(session_destroy()) {
      echo "<script>
		alert('You have been logged out.');
		window.location.href='http://127.0.0.1/php/loginpage.html';
	  </script>";
   }
?>