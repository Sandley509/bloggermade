<style>
    body{
        background-color:#141e45;
    }
</style>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

    // include_once('header.php');
   
    include_once('body.php');
  
   
?>