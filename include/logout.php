<?php

include_once 'dbh.php';

if(!isset($_SESSION)) {
  session_start();
}

if ( isset( $_POST[ 'submitLogout' ] ) ) {

// Update when user logged out
$userId = $_SESSION['u_id'];
$loginDetails = ("UPDATE users SET user_login = 0 WHERE user_id = '$userId'");
mysqli_query( $conn, $loginDetails );

header("Location: ../");

session_unset();
session_destroy();
}
