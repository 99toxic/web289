<?php

// Check if user clicked a submit button.
if (isset($_POST['submit'])) {

  // Call connection to database and functions
  include_once 'dbh.php'; //ask about include_once vs include vs require
  include 'functions.php';

  // Fetch information from form.
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $date = mysqli_real_escape_string($conn, $_POST['dob']);
  $goal = mysqli_real_escape_string($conn, $_POST['goal']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $pwd_two = mysqli_real_escape_string($conn, $_POST['pwd_two']);

  // convert date to mysql
  $dob = date('Y-m-d', strtotime($date));

  $var = array($uid, $email, $dob, $pwd, $pwd_two);

  foreach ($var as $empty);

  // Use error handler functions
  if (emptyFields($empty) != true & nameEmailValid($uid, $email) != true & emailValid($email) != true & nameValid($uid) != true & pwdMatch($pwd, $pwd_two) != true) {
    // Prepare SQL
    $sql = 'SELECT user_name FROM users WHERE user_name=? OR user_email=?';
    $stmt = mysqli_stmt_init( $conn );
    // Check if SQL connection fails
    if ( !mysqli_stmt_prepare( $stmt, $sql ) ) {
      echo '<p>Connection failed One!</p>';
    }
    else {
      // Pass parameters and run inside the database
      mysqli_stmt_bind_param( $stmt, 'ss', $uid, $email );
      mysqli_stmt_execute( $stmt );
      mysqli_stmt_store_result( $stmt );
      $resultCheck = mysqli_stmt_num_rows( $stmt );
      // Check if user is being used
      if ( $resultCheck > 0 ) {
        echo '<p>The username or email already exist</p>';
      }
      else {
        // Insert the user into the database
        $sql = 'INSERT INTO users (user_name, user_email, user_date, goal_id, user_pwd) VALUES(?, ?, ?, ?, ?)';
        $stmt = mysqli_stmt_init( $conn );
        // Check for another sql error
        if ( !mysqli_stmt_prepare( $stmt, $sql ) ) {
          echo '<p>Connection failed Two!</p>';
        }
        else {
          // Hashing the password
          $hashedPwd = password_hash( $pwd, PASSWORD_DEFAULT );
          // Sign up the user
          mysqli_stmt_bind_param( $stmt, 'sssss', $uid, $email, $dob, $goal, $hashedPwd );
          mysqli_stmt_execute( $stmt );
          header( 'Location: ../profile.php' );
          exit();
         }
      }
    }
      // mysqli_stmt_close( $stmt );
      mysqli_close( $conn );
  }


}
// if submit not clicked send back to front page
else {
  header( 'Location: ../' );
  exit();
}
