<?php

if ( isset( $_POST[ 'submit' ] ) ) {

  require 'dbh.php';
  include 'functions.php';

  $uid = mysqli_real_escape_string( $conn, $_POST[ 'uid' ] );
  $pwd = mysqli_real_escape_string( $conn, $_POST[ 'pwd' ] );

  $var = array($uid, $pwd);

  foreach ($var as $empty);

    if (emptyFields($empty) == false ) {

      // Prepare SQL
      $sql = "SELECT * FROM users WHERE user_name =? OR user_email =? LIMIT 1;";
      $stmt = mysqli_stmt_init($conn);
      // Check if SQL connection fails
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo '<p>Connection error!</p>';
      }
      else {
        mysqli_stmt_bind_param($stmt, 'ss', $uid, $uid);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_bind_result($stmt, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8);
        //$result = mysqli_stmt_get_result($stmt);

        // Check if hashed password is correct
//        if ($row = mysqli_fetch_assoc($result)) {
        while (mysqli_stmt_fetch($stmt)) {
          printf ('%s%s\n', $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8);
        }
        mysqli_stmt_close($stmt);
        exit();
//          $pwdCheck = password_verify($pwd, $row['user_pwd']);
//          if ($pwdCheck == false) {
//            echo '<p>Wrong Password!</p>';
//          }
//          else if ($pwdCheck == true) {
//
//          // Insert when user loged in
//          $userId = $row['user_id'];
//          $loginDetails = ("UPDATE users SET user_login = now() WHERE user_id = '$userId'");
//          mysqli_query( $conn, $loginDetails );
//
//            // Sign user in
//            $sqlDate = strtotime($row[ 'user_login' ]);
//            $newDate = date('h:ia', $sqlDate);
//            session_start();
//            $_SESSION[ 'u_id' ] = $row[ 'user_id' ];
//            $_SESSION[ 'u_name' ] = $row[ 'user_name' ];
//            $_SESSION[ 'u_date' ] = $row[ 'user_date' ];
//            $_SESSION[ 'u_email' ] = $row[ 'user_email' ];
//            $_SESSION[ 'u_goal' ] = $row[ 'goal_id' ];
//            $_SESSION[ 'u_login' ] = $newDate;
//            $_SESSION[ 'u_level' ] = $row[ 'user_level' ];
//
//            if ($row['user_level'] == 1) {
//              header( "Location: ../sponsor.php" );
//              exit();
//            }
//            else {
//              header( "Location: ../profile.php" );
//              exit();
//            }
//          }
//          else {
//            echo '<p>Wrong Password!</p>';
//          }
////        }
//        else {
//            echo '<p>Wrong Username!</p>';
//        }
      }
    }
//
//}
//else {
//  header( "Location: ../" );
//  exit();
}
