<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Your Progress VS Mine</title>
    <meta charset="utf-8">

    <!--Stylesheets-->
    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--End Stylesheets-->

    <!--Favicon-->
    <link href="php/img/favicon.ico" rel="icon" type="image/x-icon">
    <!--End Favicon-->

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--End Font Awesome-->

    <!--JavaScript-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/main.js"></script>
    <!--JavaScript-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Nick's Creative Design">
    <meta name="Description" content="A short description goes here">
  </head>

  <body id="signup">
    <div id="wrapper">
      <!-- Navigation -->
      <nav>

        <div id="mobile_menu">
            <input type="checkbox" id="nav" class="hidden" />
            <label for="nav" class="nav-open"><i class="fa fa-bars"></i></label>
            <div class="nav-container">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Signup</a></li>
              </ul>
            </div>
        </div>
        <div class="logo">
          <img src="images/Group%203.png" alt="">
          <h1>Your Progress vs Mine</h1>
        </div>

        <div class="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="signup.php">Signup</a></li>
          </ul>
        </div>
      </nav>
      <!-- End Navigation -->
      <main>
        <h1>Sign up</h1>
        <div class="form-message">
          <p>JAVASCRIPT HERE</p>
        </div>
        <form action="include/signup.php" method="post">
          <div class="uid_email">
            <div class="uid">
              <label for="uid">Username:</label>
              <input id="uid" type="text" name="uid" autofocus>
            </div>
            <div class="email">
              <label for="email">Email:</label>
              <input id="email" type="text" name="email" value="JonJoe@email.com">
            </div>
          </div>
          <div class="date_goal">
            <div class="date">
              <label for="dob">Date of Birth:</label>
              <input type="text" name="dob" id="dob" value="10/20/1950">
            </div>
            <div class="goal">
              <label for="goal">Goal:</label>
              <select id="goal" name="goal">
                <option value="1">Build Muscle</option>
                <option value="2">Lose Fat</option>
                <option value="3">Transform</option>
                <option value="4">Improve</option>
                <option value="5">Endurance</option>
                <option value="6">Flexibility</option>
                <option value="7">Other</option>
              </select>
            </div>
          </div>
          <div class="pwd_pwd_two">
            <div class="pwd">
              <label for="pwd">Password:</label>
              <input id="pwd" type="password" name="pwd">
            </div>
            <div class="pwd_two">
              <label for="pwd_two">Re enter Password:</label>
              <input id="pwd_two" type="password" name="pwd_two">
            </div>
          </div>
          <div class="submit"><input type="submit" name="submit" value="Enter"></div>
        </form>
      </main>
    </div>
  </body>

</html>