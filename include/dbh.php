<?php

define('SERVER', 'localhost');
define('USER', 'Nick');
define('PWD', 'ghostski');
define('DB', 'yourprogressvsmine');

$conn = mysqli_connect(SERVER, USER, PWD, DB);

// test the connection to database
if (!$conn) {
  die('Connection Failed:'.mysqli_connect_error());
}
