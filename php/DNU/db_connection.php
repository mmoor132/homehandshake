<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "administrator";
 $dbpass = "";
 $db = "homehandshake";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>