<?php 
session_start();

  $dbServername="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbName="bloggermade";
    $pdo=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Try and connect using the info above.

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Connection echouer: ' . mysqli_connect_error());
}